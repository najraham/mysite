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

Route::get('/editBlog' , 'DashboardController@blog')->name('show_dashboard_blog_page');

Route::post('/editedIndex' , 'DashboardController@editIndex')->name('edit_index');

Route::post('/editedAbout' , 'DashboardController@editAbout')->name('edit_about');

Route::post('/editedProject' , 'DashboardController@editProject')->name('edit_project');

Route::post('/editedSkill' , 'DashboardController@editSkill')->name('edit_skill');

Route::post('/editedBlog' , 'DashboardController@editBlog')->name('edit_blog');

Route::post('/addProject' , 'DashboardController@addProject')->name('add_project');

Route::post('/addSkill' , 'DashboardController@addSkill')->name('add_skill');

Route::post('/addBlog' , 'DashboardController@addBlog')->name('add_blog');

Route::get('/deleteSkill/id={id}' , 'DashboardController@deleteSkill')->name('delete_skill');

Route::get('/deleteProject/id={id}' , 'DashboardController@deleteProject')->name('delete_project');

Route::get('/deleteBlog/id={id}' , 'DashboardController@deleteBlog')->name('delete_blog');

// AUTH

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
