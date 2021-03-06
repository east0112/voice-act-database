<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/","homeController@home");
Route::get("/about","aboutController@about");
Route::get("/library","libraryController@initDisplay");
Route::post("/library","libraryController@seacrchDisplay");
Route::get("/library/event/{id}","libraryController@seacrchEvent");
Route::get("/calendar","calendarController@searchDisplay");
