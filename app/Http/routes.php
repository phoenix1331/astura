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
    return view('home')->with('title' , 'Human Communication, Online...');
});

Route::get('about', function(){
	return view('about')->with('title' , 'About Astura');
});

Route::get('reach', function(){
	return view('products.reach')->with('title' , 'Astura Reach');
});

Route::get('engage', function(){
	return view('products.engage')->with('title' , 'Astura Engage');
});

Route::get('blog', function(){
	return view('blog')->with('title' , 'Astura Blog');
});

Route::get('careers', function(){
	return view('careers')->with('title' , 'Work at Astura');
});


Route::get('contact', function(){
	return view('contact')->with('title' , 'Contact Astura');
});

Route::post('contact', function(){
	return view('contact')->with(array('title' => 'Contact Astura', 'message' => 'Thank you !'));
});
