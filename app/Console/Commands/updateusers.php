<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Jobs\GetUsersFromServer;
use App\TeamspeakIPS;

class updateusers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates The Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $servers = DB::table('teamspeakips')->select('ips')->get();
      //print_r($servers->ips);
      foreach ($servers as $server) {
        GetUsersFromServer::dispatch($server->ips);
        $this->info('Updating ' . $server->ips);
      }
      $this->info('Complete!');
    }
}
