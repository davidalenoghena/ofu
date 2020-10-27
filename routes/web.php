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
Route::post('/contact', 'HomeController@mail')->name('sendmail');

Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{id}', 'HomeController@singleblog')->name('blog.single');

Route::get('/opportunities', 'HomeController@opportunities')->name('opportunities');
Route::get('/opportunities/{name}', 'HomeController@singleopportunity')->name('opportunities.single');

Route::get('/internships', 'HomeController@internships')->name('internships');
Route::get('/internships/{name}', 'HomeController@singleinternship')->name('internships.single');

Route::get('/osearch', 'SearchController@opportunitiessearch')->name('opportunity.search');
Route::get('/isearch', 'SearchController@internshipssearch')->name('internship.search');
Route::get('/op_filter', 'SearchController@op_filtersearch')->name('opportunity.filter');
Route::get('/in_filter', 'SearchController@in_filtersearch')->name('internship.filter');

Route::post('/subcribe', 'HomeController@storeSubscribe')->name('subscribe');

//Admin section
Route::get('/admin', 'AdminController@index')->name('admin.home')->middleware('is_admin');

//Subscribers
Route::get('/admin/subscribers', 'NewsletterController@index')->name('admin.letter'); 
Route::get('/admin/subscriber/delete/{newsletter}', 'NewsletterController@destroy');

//Admin.Blog
Route::get('/admin/blog', 'BlogController@index')->name('admin.blog');
Route::get('/admin/blog/create', 'BlogController@create')->name('admin.blog.create');
Route::post('admin/blog/store', 'BlogController@store')->name('store.blog');
Route::get('/admin/blog/{id}', 'BlogController@show')->name('show.blog');
Route::get('admin/blog/edit/{id}', 'BlogController@edit')->name('edit.blog');
Route::post('admin/blog/update/{id}', 'BlogController@update')->name('update.blog');
Route::get('admin/blog/enable/{id}', 'BlogController@enableBlog')->name('enable.blog');
Route::get('/admin/blog/delete/{blog}', 'BlogController@destroy');


//Admin.Opportunities 
Route::get('/admin/opportunities', 'OpportunityController@index')->name('admin.opportunity'); 
Route::get('/admin/opportunities/create', 'OpportunityController@create')->name('admin.opportunity.create'); 
Route::post('admin/opportunity/store', 'OpportunityController@store')->name('store.Opportunitiy');
Route::get('/admin/opportunity/{id}', 'OpportunityController@show')->name('show.opportunity');
Route::get('admin/opportunity/edit/{id}', 'OpportunityController@edit')->name('edit.opportunity');
Route::post('admin/opportunity/update/{id}', 'OpportunityController@update')->name('update.opportunity');
Route::get('/admin/opportunity/delete/{opportunity}', 'OpportunityController@destroy');
// Admin.Internship
Route::get('/admin/internship', 'InternshipController@index')->name('admin.intern'); 
Route::get('/admin/internship/create', 'InternshipController@create')->name('admin.intern.create');
Route::post('admin/internship/store', 'InternshipController@store')->name('store.intern');
Route::get('/admin/internship/{id}', 'InternshipController@show')->name('show.intern');
Route::get('admin/internship/edit/{id}', 'InternshipController@edit')->name('edit.intern');
Route::post('admin/internship/update/{id}', 'InternshipController@update')->name('update.intern');
Route::get('/admin/internship/delete/{internship}', 'InternshipController@destroy');

//User section