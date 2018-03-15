<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/{server}', function (Request $request, $server) {
  if(DB::table('stats')->where('ip', $server)->count() != 0){
    $stats = DB::table('stats')->where('ip', $server)->select('ip', 'date', 'time', 'clients')->get();
    return response()->json([$stats]);
  }
  return response()->json(['error' => 'No data on of the server yet, wait atleast 1 hour.']);
});

Route::middleware('api')->get('/{server}/avg/today', function (Request $request, $server) {
  if(DB::table('stats')->where('ip', $server)->count() != 0){
    $today = getdate(); //Todays Dates
    $today['mday'] = $today['mday'] - 1;
    $yest = $today['year'] . "-" . $today['mon'] . "-" . $today['mday'];

    $avg = DB::table('stats')
    ->where('date', $yest)
    ->where('ip', $server)
    ->avg('clients');

    return response()->json(['clients' => $avg]);
  }
  return response()->json(['error' => 'Server Does Not Exist In Our Recordings']);
});

/**
* Insert server through api
*/
Route::post('/addserver', function(Request $request){
  $server = $request->input('server');

  if(DB::table('teamspeakips')->where('ips', $server)->count() > 0){
    DB::table('teamspeakips')->where('ips', $server)->update(['updated_at' => Carbon::now()]);
    return response()->json(['success' => 'Server already in database']);
  }

  if(DB::table('teamspeakips')->insert(['ips' => $server, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()])){
    return response()->json(['success' => 'Server submitted']);
  }
  return response()->json(['error' => 'Server not submitted']);
});
