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


Auth::routes();

//Front section
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/user', 'UserController@index')->name('user.home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about_us')->name('about');
Route::get('/contact', 'HomeController@contact_us')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');

//Admin section
Route::get('/admin', 'AdminController@index')->name('admin.home')->middleware('is_admin');
Route::get('/admin/users', 'AdminController@users')->name('admin.users');
//Admin.Blog
Route::get('/admin/blog', 'BlogController@index')->name('admin.blog');
Route::get('/admin/blog/create', 'BlogController@create')->name('admin.blog.create');
//Admin.opportunities 
Route::get('/admin/opportunities', 'OpportunityController@index')->name('admin.opportunity'); 
Route::get('/admin/opportunities/create', 'OpportunityController@create')->name('admin.opportunity.create'); 



//User section