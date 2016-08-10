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

Route::get('/lang/{lang}',function($lang){
    if (array_key_exists($lang, \Illuminate\Support\Facades\Config::get('languages'))) {
        \Illuminate\Support\Facades\Session::set('applocale', $lang);
    }
    return \Illuminate\Support\Facades\Redirect::back();
});
Route::controller('/program/{slug}','ProgramC');
Route::controller('/','OsnovniC');
