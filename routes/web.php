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

Route::get('/contact-member', 'ContactMemberController@ContactMember')->name('contactMember');
Route::post('/contact-member','ContactMemberController@createContactMember')->name('contactMember.post');

Route::get('/about-member', 'AboutMemberController@aboutMember')->name('aboutMember');

Route::get('/allProduct-member', 'allProductMemberController@allProductMember')->name('allProductMember');

Route::get('/singleProduct-member', 'HomeController@singleProductMember')->name('singleProduct');


//////////////////start :: Management//////////////////
 
Route::get('/ManagementDashboard','Management\DashboardController@dashboard');

/////////////////end :: Management//////////////////
