<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

class GetUsersFromServer implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  protected $server;

  /**
  * Create a new job instance.
  *
  * @return void
  */
  public function __construct($server)
  {
    $this->server = $server;
  }

  /**
  * Execute the job.
  *
  * @return void
  */
  public function handle()
  {
    $url = "http://api.planetteamspeak.com/serverhistory/$this->server/?duration=1";  //API
    $content = file_get_contents($url);
    $result = json_decode($content, true);


    //PUTTING THE TIMESTAMP AND NO. OF CLIENTS IN DATABASE!
    foreach ($result['result']['data'] as $key => $mydata) {        //$key = TIMESTAMP, $mydata = clients
      $time = explode(" ", $key);                                 //SEPERATE TIME AND DATE [DATE=$TIME[0],TIME=$TIME[1]]
      
      //SQL QUERY TO CHECK IF DATA ALREADY EXISTS
      if(DB::table('stats')->where("date", $time[0])->where("time", $time[1])->where('ip', $this->server)->count() == 0){
        DB::table('stats')->insert([
          'ip'      => $this->server,
          'date'    => $time[0],
          'time'    => $time[1],
          'clients' => $mydata,
        ]);
      }

      /*$sql = "SELECT * FROM users WHERE dated='". $time[0] ."' AND timed='". $time[1] ."'";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      if (mysqli_num_rows($query) > 0) {      //DATA ALREADY EXISTS
      } else {       //DATA DOESNT EXIST
        $sql = "INSERT INTO users (dated, timed, clients) VALUES ('$time[0]', '$time[1]', '$mydata')";
        if (mysqli_query($conn, $sql)) {
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }*/
    }
  }
}
