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
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/land', function () {
    return view('land');
});

Route::get('/pakete', function () {
    return view('pakete');
});

Route::get('/mipar', function () {
    return view('mipar');
});

Route::get('/contravel', function () {
    return view('contravel');
});

Route::get('contact-us', 'ContactUSController@contactUS');

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('/contacto', function () {
    return view('contacto');
});

