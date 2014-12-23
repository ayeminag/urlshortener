<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get("/", [ "as" => "home","uses" =>"HomeController@index"]);
Route::post("/", ["as" => "shorten", "uses" => "LinkController@store"]);
Route::get("/{hash}", ["as" => "redirect", "uses" => "LinkController@redirect"])->where(['hash' => '[0-9A-z]{4,5}']);