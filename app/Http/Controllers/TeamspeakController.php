<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\GetUsersFromServer;
use App\TeamspeakIPS;

class TeamspeakController extends Controller
{
    public function createOrUpdateIP(Request $request) {
      $server = TeamspeakIPS::firstOrCreate(['ips' => $request->input('ips')]);
      $server->save();

      return 'localhost:8000/' . $request->input('ips');
    }

    public function updateUsers(){
      $servers = DB::table('teamspeakips')->select('ips')->get();
      //print_r($servers->ips);
      foreach ($servers as $server) {
        GetUsersFromServer::dispatch($server->ips);
      }
    }
}
