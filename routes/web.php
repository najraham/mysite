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

// FRONTEND

Route::get('/', 'PagesController@index')->name('show_index_page');

Route::get('/about', 'PagesController@about')->name('show_about_page');

Route::get('/blog', 'PagesController@blog')->name('show_blog_page');

Route::get('/contact', 'PagesController@contact')->name('show_contact_page');

Route::get('/portfolio', 'PagesController@portfolio')->name('show_portfolio_page');

Route::get('/portfolio_detail', 'PagesController@portfolio_detail')->name('show_portfolio_detail_page');

Route::get('/works', 'PagesController@works')->name('show_works_page');

Route::get('/single_blog/id={id}', 'PagesController@single_blog')->name('show_single_blog_page');

Route::post('/send' , 'MessageController@send')->name('send_message');

// BACKEND

Route::get('/dashboard' , 'DashboardController@dashboard')->name('show_dashboard_main_page');

Route::get('/editIndex' , 'DashboardController@index')->name('show_dashboard_home_page');

Route::get('/editAbout' , 'DashboardController@about')->name('show_dashboard_about_page');

Route::get('/editWork' , 'DashboardController@work')->name('show_dashboard_work_page');

// AUTH

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
