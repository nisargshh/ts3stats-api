<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\GetUsersFromServer;
use App\TeamspeakIPS;
class TeamspeakController extends Controller
{
  /**
  * Creates Or Updates IPs Sent To Record Client Data
  * @return void
  */
  public function createOrUpdateIP(Request $request) {
    $url = "http://api.planetteamspeak.com/serverhistory/" . $request->input('ips') . "/?duration=1";  //API
    $content = file_get_contents($url);
    $result = json_decode($content, true);
    if($result['status'] == "error"){
      return $result['status'];
    }
    $server = TeamspeakIPS::firstOrCreate(['ips' => $request->input('ips')]);
    $server->save();
    return redirect('/' . $request->input('ips'));
  }
  /**
  * Queues a job to update all server in the database
  * @return void
  */
  public function updateUsers(){
    $servers = DB::table('teamspeakips')->select('ips')->get();
    //print_r($servers->ips);
    foreach ($servers as $server) {
      GetUsersFromServer::dispatch($server->ips);
    }
  }
  /**
  * Updates a single server
  * @return void
  */
  public function updateSingleServer($server){
    GetUsersFromServer::dispatch($server);
  }
  /**
  * Compiles and passes data to server view
  * @return view
  */
  public function serverData($server){
    if(DB::table('teamspeakips')->where('ips', $server)->count() == 0){
      return 'Sorry Server Not On Recording List';
    }
    $this->updateSingleServer($server);
    $ip = DB::table('stats')->where('ip', $server)->select('ip')->orderBy('id', 'asc')->first();  //Gets IP For Server
    $dates = DB::table('stats')->where('ip', $server)->select('date')->groupBy('date')->get();  //Gets All The Dates For That IP
    $start = DB::table('teamspeakips')->where('ips', $server)->select('created_at')->first();   //Get Date That Server Start Recording
    $today = getdate(); //Todays Dates
    $today = $today['year'] . "-" . $today['mon'] . "-" . $today['mday']; //Arranging Date For Proper Formatting
    $clients = DB::table('stats')->where('date', $today)->where('ip', $server)->select('clients', 'time')->orderBy('id', 'asc')->get();   //Number Of Clients For Particluar Day And IP
    //Declaring Arrays To Store The Data
    $datearray = array();
    $avg = array();
    $clientarray = array();
    $timearray = array();
    //Passing All The Data To The Array
    foreach ($dates as $date) {
      $datearray[] = $date->date;
      $avg[] = DB::table('stats')
      ->where('date', $date->date)
      ->where('ip', $server)
      ->avg('clients');
    }
    foreach ($clients as $client) {
      $clientarray[] = $client->clients;
      $timearray[] = $client->time;
    }
    //Converting Array To JSON Format
    $dates = json_encode($datearray);
    $avg = json_encode($avg);
    $clients = json_encode($clientarray);
    $time = json_encode($timearray);
    //Returning Server Graph View
    return view('server', compact('ip', 'dates', 'time', 'clients', 'avg', 'start'));
  }
}
