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
Route::get('/blog/{id}', 'HomeController@singleblog')->name('blog.single');
Route::get('/opportunities', 'HomeController@opportunities')->name('opportunities');
Route::get('/opportunities/{name}', 'HomeController@singleopportunity')->name('opportunities.single');

//Admin section
Route::get('/admin', 'AdminController@index')->name('admin.home')->middleware('is_admin');
Route::get('/admin/users', 'AdminController@users')->name('admin.users');

//Admin.Blog
Route::get('/admin/blog', 'BlogController@index')->name('admin.blog');
Route::get('/admin/blog/create', 'BlogController@create')->name('admin.blog.create');
Route::post('admin/blog/store', 'BlogController@store')->name('store.blog');
Route::get('/admin/blog/{id}', 'BlogController@show')->name('show.blog');
Route::get('admin/blog/edit/{id}', 'BlogController@edit')->name('edit.blog');
Route::post('admin/blog/update/{id}', 'BlogController@update')->name('update.blog');
Route::get('admin/blog/disable/{id}', 'BlogController@disableBlog')->name('disable.blog');
Route::get('admin/blog/enable/{id}', 'BlogController@enableBlog')->name('enable.blog');
Route::get('/admin/blog_unpublished', 'BlogController@disabledBlogList')->name('admin.unpublish');

//Admin.Opportunities 
Route::get('/admin/opportunities', 'OpportunityController@index')->name('admin.opportunity'); 
Route::get('/admin/opportunities/create', 'OpportunityController@create')->name('admin.opportunity.create'); 
Route::post('admin/opportunity/store', 'OpportunityController@store')->name('store.Opportunitiy');
Route::get('/admin/opportunity/{id}', 'OpportunityController@show')->name('show.opportunity');
Route::get('admin/opportunity/edit/{id}', 'OpportunityController@edit')->name('edit.opportunity');
Route::post('admin/opportunity/update/{id}', 'OpportunityController@update')->name('update.opportunity');
Route::get('/admin/opportunity/delete/{opportunity}', 'OpportunityController@destroy');


//User section