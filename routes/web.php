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

Route::get('/', 'HomeController@main');

Route::get('/home-member', 'HomeController@homeMember')->name('homeMember');

Route::get('/contact-member', 'HomeController@contactMember')->name('contactMember');

Route::get('/about-member', 'HomeController@aboutMember')->name('aboutMember');

Route::get('/allProduct-member', 'HomeController@allProductMember')->name('allProductMember');

Route::get('/singleProduct-member', 'HomeController@singleProductMember')->name('singleProduct');



 
