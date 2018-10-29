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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teapage', function () {
    return view('pages.teapage');

});

Route::get('/homepage', function () {
   return view('pages.homepage');
});


Route::get('/tea_choice', function () {
   return view('pages.tea_choice');
});


Route::get('/teaware', function () {
   return view('pages.teaware');
});
