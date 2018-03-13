<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::middleware('api')->get('/user', function (Request $request) {
  echo "test";
});

Route::middleware('api')->get('/{server}', function (Request $request, $server) {
  if(DB::table('stats')->where('ip', $server)->count() != 0){
    $stats = DB::table('stats')->where('ip', $server)->select('ip', 'date', 'time', 'clients')->get();
    return $stats;
  }
  return response()->json(['error' => 'Server Does Not Exist In Our Recordings']);
});

Route::middleware('api')->get('/{server}/avg/today', function (Request $request, $token, $server) {
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
  if(DB::table('teamspeakips')->insert(['ips' => $server])){
    return 'Server submitted';
  }
  return 'Error: Server not submitted';
});
