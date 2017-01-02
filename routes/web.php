<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

// Route::get('/', function () {
// return view('welcome');
// });
Route::get('/', 'HomeController@index');

//contact routes
Route::get('/contact', 'ContactController@index');
Route::post('/contact/sendMessage', 'ContactController@sendMessage');

//about routes
Route::get('/about', 'AboutController@index');
Route::get('/about/{page}', 'AboutController@index');

//scientific studies
Route::get('/scientific-studies', 'ScientificStudiesController@index');
Route::get('/scientific-studies/publications', 'ScientificStudiesController@publications');
Route::get('/scientific-studies/projects', 'ScientificStudiesController@projects');
Route::get('/scientific-studies/public-studies', 'ScientificStudiesController@public_studies');

