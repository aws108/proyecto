<?php

use Illuminate\Http\Request;
use App\pensio;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/barri/{barri}', function(Request $request, $barri){
	$pension = pensio::select("dte","barris","quantitat")->where('barris','like',"%".$barri."%")->get();
	//$pension = pensio::select("dte","barris","quantitat")->where('barris',$barri)->get();

	return response()->json($pension);
});