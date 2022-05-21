<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    return view('login');

});


Route::post('loginsubmit','App\Http\Controllers\UserController@loginsubmit');


Route::get('logout','App\Http\Controllers\UserController@logout');



Route::group(['middleware'=>['customAuth']], function(){
  



Route::get('/dashboard', function(){

return view('dashboard');

});

Route::get('/viewAllLogs','App\Http\Controllers\AuditLogsController@show');

Route::get('/viewLogs','App\Http\Controllers\AuditLogsController@showLog');

Route::get('/editLog/{id}','App\Http\Controllers\AuditLogsController@edit');

Route::post('/updateLog','App\Http\Controllers\AuditLogsController@updateLog');


Route::get('/deleteLog/{id}','App\Http\Controllers\AuditLogsController@delete');


Route::get('/myProfile', function(){

 return view('myProfile');   

});


});