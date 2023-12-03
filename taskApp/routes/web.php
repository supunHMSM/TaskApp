<?php
//use app\Http\Controllers\pagesController;

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/about','App\Http\Controllers\pagesController@indexAboutUs');

Route::get('/contact','App\Http\Controllers\pagesController@indexContactUs');