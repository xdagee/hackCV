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

Route::get('/', ['as' => 'home', function() {
    return view('index');
}]);

Route::get('get-involved', ['as' => 'get-involved', function () {
	return view ('get-involved');
}]);

Route::get('our-team', ['as' => 'our-team', function () {
	return view ('our-team');
}]);

Route::get('faq', ['as' => 'faq', function () {
	return view ('faq');
}]);

Route::get('blog', ['as' => 'blog', function () {
	return view ('blog');
}]);

Route::get('start', ['as' => 'start', function () {
	return view ('start');
}]);