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

/* General Routing */
Route::any('/{page}', function ($page) {
    return view('pages/' . $page);
});

/* Default Page */
Route::get('/', function () {
    return view('pages/home');
});
