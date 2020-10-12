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
    return view('welcome');
});

Route:: resources([
    'movies' => 'MovieController',
    'consumabls' => 'ConsumablController',
    'entrances' => 'EntranceController',
    'filmes' => 'FilmeController',
    'rooms' => 'RoomController'

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('movies', 'MovieController');
Route::get('/movies.viewTable', 'MovieController@viewTable');
//Route::resource('consumabls','ConsumablController');

