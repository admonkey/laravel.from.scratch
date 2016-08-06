<?php

class Mailer {

        /**
         * Class constructor
         *
         * @return void
         */
        public function __construct()
        {
                
        }
}

class RegistersUsers {

        protected $mailer;
        public function __construct(Mailer $mailer)
        {
                $this->mailer = $mailer;
        }
}

$registration = new RegistersUsers(new Mailer);
var_dump($registration);

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

// Route::get('/', function () {
// //   return 'Hi there';
// //   return view('welcome');
// 
//   $people = ['Taylor','Matt','Jeffrey'];
// //   $people = [];
// 
//   // 4 ways to include array in view
// //   return view('welcome', ['people'=>$people]);
// //   return view('welcome', compact('people'));
// //   return view('welcome')->with('people',$people);
//   return view('welcome')->withPeople($people);
// 
// });

// Route::get('/', 'PagesController@home');

Route::get('/', function () {

    $people = ['Taylor','Matt','Jeffrey'];

    return view('welcome')->withPeople($people);

});

Route::get('begin', function () {

    flash('You\'re barred.','danger');

//     return redirect('/');
    return Redirect::to('/');

});

Route::get('foo', function () {

    if (session()->has('bar'))
      session()->forget('bar');
    else session(['bar'=>'foo']);

//     return redirect('/');
    return Redirect::to('/');

});

// // Route::get('/about', function () { // slash implied
// Route::get('about', function () {
//   return 'The About Page';
// });

// Route::get('about', function () {
// //   return view('pages/about');
//   return view('pages.about');
//   // resources/views/pages/about.blade.php
// });

Route::get('about', 'PagesController@about');


Route::get('cards', 'CardsController@index');
// Route::get('cards/create', 'CardsController@create');
// Route::post('cards', 'CardsController@store');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');


Route::auth();

// Route::get('/dashboard', 'HomeController@index')->middleware('auth');

Route::get('/dashboard', 'HomeController@index');
