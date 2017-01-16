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
Route::post('/{locale}/contact/send-message', 'ContactController@send_message');

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
Route::get('/{locale}/measurement-and-evaluation', 'ScalesController@index');
Route::get('/{locale}/measurement-and-evaluation/{slug}', 'ScalesController@get_scale');

//Membership Login Logout

Route::get('/{locale}/login', 'MemberController@login');
Route::get('/{locale}/create-account', 'MemberController@create_account');
Route::post('/{locale}/create-new-user', 'MemberController@create_new_user');
Route::get('/{locale}/account-information', 'MemberController@account_information');
Route::post('/{locale}/update-account', 'MemberController@update_account');
Route::get('/{locale}/forgot-password', 'MemberController@forgot_password');
Route::post('/{locale}/reset-password', 'MemberController@reset_password');
Route::get('/{locale}/logout', 'MemberController@logout');