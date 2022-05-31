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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'Web'], function () {

    Route::get('/','HomeController@index');
    Route::get('/','HomeController@index')->name('home');
    Route::get('/blog','HomeController@blog')->name('blog');
    Route::get('/blog-details/{id}','HomeController@blog_details')->name('blog_details');

    Route::post('/contact-form','ContactController@index')->name('contact_form');
    

    Route::post('/enquiry-form','ContactController@enquiry_insert')->name('enquiryData');

    Route::get('/php','DeveloperController@php')->name('php');
    Route::get('/laravel','DeveloperController@laravel')->name('laravel');
    Route::get('/node','DeveloperController@node')->name('node');
    Route::get('/python','DeveloperController@python')->name('python');
    Route::get('/c','DeveloperController@clang')->name('clang');
    Route::get('/ruby','DeveloperController@ruby')->name('ruby');
    Route::get('/firebase','DeveloperController@firebase')->name('firebase');
    Route::get('/django','DeveloperController@django')->name('django');
    Route::get('/golang','DeveloperController@golang')->name('golang');
    Route::get('/symfony','DeveloperController@symfony')->name('symfony');
    Route::get('/dot-net','DeveloperController@dot_net')->name('dot_net');
    Route::get('/java','DeveloperController@java')->name('java');

    Route::get('/angular','DeveloperController@angular')->name('angular');
    Route::get('/html-css','DeveloperController@html_css')->name('html_css');
    Route::get('/powerbi','DeveloperController@powerbi')->name('powerbi');
    Route::get('/react','DeveloperController@react')->name('react');
    Route::get('/vue','DeveloperController@vue')->name('vue');

    Route::get('/android','DeveloperController@android')->name('android');
    Route::get('/flutter','DeveloperController@flutter')->name('flutter');
    Route::get('/ionic','DeveloperController@ionic')->name('ionic');
    Route::get('/ios','DeveloperController@ios')->name('IOS');
    Route::get('/kotlin','DeveloperController@kotlin')->name('kotlin');
    Route::get('/react-native','DeveloperController@react_native')->name('react_native');
    Route::get('/swift','DeveloperController@swift')->name('swift');
    Route::get('/xamarin','DeveloperController@xamarin')->name('xamarin');

    Route::get('/mean','DeveloperController@mean')->name('mean');
    Route::get('/mern','DeveloperController@mern')->name('mern');

    Route::get('/cryptocurrency','DeveloperController@cryptocurrency')->name('cryptocurrency');
    Route::get('/ethereum','DeveloperController@ethereum')->name('ethereum');
    Route::get('/ico','DeveloperController@ico')->name('ICO');
    Route::get('/smart-contract','DeveloperController@smart_contract')->name('smart_contract');
    Route::get('/solidity','DeveloperController@solidity')->name('solidity');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'LoginController@index');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login-data', 'LoginController@login')->name('loginData');


    Route::group(['middleware'=>'auth:admin', 'is_admin'], function () {

     Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

     Route::get('/users', 'UserController@index')->name('users');
     Route::get('/enquiries', 'EnquiryController@index')->name('enquiries');

     Route::get('/adminProfile', 'DashboardController@adminProfile')->name('adminProfile');
     Route::post('/profileUpdate', 'DashboardController@profileUpdate')->name('profileUpdate');
     Route::post('/changePassword', 'DashboardController@changePassword')->name('changePassword');
        
     Route::get('/blogManagement', 'BlogController@index')->name('blog_management');
     Route::get('/add-blog', 'BlogController@addBlogPageShow')->name('addBlogPageShow');
     Route::post('/insert-blog', 'BlogController@addBlog')->name('addBlog');
     Route::get('/edit-blog/{id}', 'BlogController@editBlog')->name('editBlog');
     Route::post('/update-blog', 'BlogController@updateBlog')->name('updateBlog');
     Route::post('/delete-blog/{id}', 'BlogController@deleteBlog')->name('deleteBlog');
      Route::get('/blog-status/{id}', 'BlogController@statusChange')->name('statusChange');
     
        });    

    Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
   return '<h1>Cache facade value cleared</h1>';
});


