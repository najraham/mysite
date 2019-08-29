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

Route::get('/', 'PagesController@index')->name('show_index_page');

Route::get('/about', 'PagesController@about')->name('show_about_page');

Route::get('/blog', 'PagesController@blog')->name('show_blog_page');

Route::get('/contact', 'PagesController@contact')->name('show_contact_page');

Route::get('/portfolio', 'PagesController@portfolio')->name('show_portfolio_page');

Route::get('/services', 'PagesController@services')->name('show_services_page');

Route::get('/single_blog', 'PagesController@single_blog')->name('show_single_blog_page');
