<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\GetUsersFromServer;
use App\TeamspeakIPS;

class TeamspeakController extends Controller
{
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

}
