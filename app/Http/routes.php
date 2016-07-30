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

// Route::get('/', 'PagesController@home');

Route::get('/', function () {
//     return view('welcome');
  return 'Hi there';
});

// Route::get('/about', function () { // slash implied
Route::get('about', function () {
  return 'The About Page';
});

Route::get('about', function () {
//   return view('pages/about');
  return view('pages.about');
  // resources/views/pages/about.blade.php
});
