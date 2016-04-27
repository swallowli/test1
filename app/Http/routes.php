<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/haha',function(){
    $url = $_SERVER['REMOTE_ADDR'];
    DD($url);
    $time = date('Y-m-d H:i:s',time());
    dd($time);
    dd('haha到这了');
});