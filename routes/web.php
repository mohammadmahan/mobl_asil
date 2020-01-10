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

Route::get('/', 'Member\HomeController@main');

Route::get('/home-member', 'Member\HomeController@homeMember')->name('homeMember');

Route::get('/contact-member', 'Member\ContactMemberController@ContactMember')->name('contactMember');
Route::post('/contact-member','Member\ContactMemberController@createContactMember')->name('contactMember.post');

Route::get('/about-member', 'Member\AboutMemberController@aboutMember')->name('aboutMember');

Route::get('/allProduct-member', 'Member\allProductMemberController@allProductMember')->name('allProductMember');

// Route::get('/singleProduct-member/{allProductMember_id}', 'Member\allProductMemberController@singleProductMember')->name('singleProduct');


//////////////////start :: Management//////////////////
 
Route::get('/ManagementDashboard','Management\DashboardController@dashboard');

Route::get('/ManagementProducts','Management\ProductsController@AllProducts')->name('ProductManagement');

Route::get('/ManagementMassages','Management\MassagesController@AllMassages')->name('massagesManagement');

Route::get('/ManagementEditProduct','Management\EditProductController@EditProduct')->name('ManagementEditProduct');

Route::get('/ManagementAddProduct','Management\AddProductController@AddProduct')->name('ManagementAddProduct');

Route::get('/ManagementTahlilSystem','Management\TahlilSystemController@TahlilSystem')->name('ManagementTahlilSystem');

/////////////////end :: Management//////////////////
