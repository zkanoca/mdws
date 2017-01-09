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

Route::get('/{locale}', 'HomeController@index');

//News
Route::get('/{locale}/news/', 'NewsController@index');
Route::get('/{locale}/news/{slug}', 'NewsController@get_news');

//contact routes
Route::get('/{locale}/contact', 'ContactController@index');
Route::post('/{locale}/contact/sendMessage', 'ContactController@sendMessage');

//about routes
Route::get('/{locale}/about', 'AboutController@index');
Route::get('/{locale}/about/{page}', 'AboutController@index');

//scientific studies
Route::get('/{locale}/scientific-studies', 'ScientificStudiesController@index');
Route::get('/{locale}/scientific-studies/publications', 'ScientificStudiesController@publications');
Route::get('/{locale}/scientific-studies/projects', 'ScientificStudiesController@projects');
Route::get('/{locale}/scientific-studies/public-studies', 'ScientificStudiesController@public_studies');


Route::get('/{locale}/scientific-studies/publications/{slug}', 'ScientificStudiesController@get_publication');
Route::get('/{locale}/scientific-studies/projects/{slug}', 'ScientificStudiesController@get_project');
Route::get('/{locale}/scientific-studies/public-studies/{slug}', 'ScientificStudiesController@get_public_study');

//Psychology
Route::get('/{locale}/psychology', 'PsychologyController@index');
Route::get('/{locale}/psychology/{category_slug}', 'PsychologyController@get_psychology_contents');
Route::get('/{locale}/psychology/{category_slug}/{content_slug}', 'PsychologyController@get_psychology_content');

//Services

Route::get('/{locale}/services', 'ServicesController@index');
Route::get('/{locale}/services/{category_slug}', 'ServicesController@get_service_contents');
Route::get('/{locale}/services/{category_slug}/{content_slug}', 'ServicesController@get_service_content');

//Measurement & Evaluation
Route::get('/{locale}/measurement_and_evaluation', 'ScalesController@index');
Route::get('/{locale}/measurement_and_evaluation/{slug}', 'ScalesController@get_scale');