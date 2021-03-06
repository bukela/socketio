<?php

use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send', 'ChatController@send_message');

Route::get('test-broadcast', function(){
    broadcast(new \App\Events\ExampleEvent('broadcasting zvizzz', Auth::user()));
});

Route::get('private-broadcast', function(){
    broadcast(new \App\Events\PrivateEvent(auth()->user()));
});