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
Route::get('/mainsss', 'Member\HomeController@main')->name('main');

Route::get('/', 'Member\HomeController@homeMember')->name('homeMember');

Route::get('/contact-member', 'Member\ContactMemberController@ContactMember')->name('contactMember');

Route::post('/contact-member', 'Member\ContactMemberController@createContactMember')->name('contactMember.post');

Route::get('/about-member', 'Member\AboutMemberController@aboutMember')->name('aboutMember');

Route::get('/allProduct-member', 'Member\allProductMemberController@allProductMember')->name('allProductMember');

Route::get('/singleProduct-member/{allProductMember_id}', 'Member\allProductMemberController@singleProductMember')->name('singleProduct');

Route::get('/blog', 'Member\HomeController@blogMember')->name('BlogMember');
//////////////////start :: Management//////////////////

Route::get('/ManagementDashboard', 'Management\DashboardController@dashboard');

Route::get('/details/product','Management\ProductsController@details')->name('details.product');

Route::get('/ManagementMassages', 'Management\MassagesController@AllMassages')->name('massagesManagement');

Route::get('/ManagementProducts', 'Management\ProductsController@AllProducts')->name('ProductManagement');
Route::get('/ManagementEditProduct/{allProductMember_id}', 'Management\ProductsController@editProduct')->name('ManagementEditProduct');
Route::post('/ManagementEditProduct/{allProductMember_id}', 'Management\ProductsController@updateProduct')->name('ManagementUpdateProduct');

Route::get('/ManagementAddProduct','Management\AddProductController@AddProduct')->name('ManagementAddProduct');
Route::post('/ManagementAddProduct','Management\AddProductController@createProduct')->name('ManagementAddProduct.post');

Route::get('/ManagementTahlilSystem','Management\TahlilSystemController@TahlilSystem')->name('ManagementTahlilSystem');

Route::get('/delete/place/{massages_id}', 'Management\MassagesController@deleteMassages')->name('delete.massage');


Route::get('/ManagementTahlilSlider','Management\TahlilSystemController@TahlilSlider')->name('ManagementTahlilSlider');

Route::get('/ManagementEditSingleSlider/{topslider_id}', 'Management\TahlilSystemController@editSingleSlider')->name('editSlider');
Route::post('/ManagementEditSingleSlider/{topslider_id}', 'Management\TahlilSystemController@updateSingleSlider')->name('updateSlider');


Route::get('/ManagementTahlilAbout', 'Management\TahlilSystemController@editAbout')->name('ManagementTahlilAbout');
Route::post('/ManagementTahlilAbout', 'Management\TahlilSystemController@updateAbout')->name('updateAbout');

Route::get('/ManagementTahlilProductIndex','Management\TahlilSystemController@ManagementTahlilProductIndex')->name('ManagementTahlilProductIndex');
Route::get('/ManagementEditProduct/{productindex_id}', 'Management\TahlilSystemController@productindexedit')->name('ManagementProductIndexEdit');
Route::post('/ManagementEditProduct/{productindex_id}', 'Management\TahlilSystemController@productindexupdate')->name('ManagementProductIndexUpdate');
Route::get('/details/productindex','Management\TahlilSystemController@details_productindex')->name('details.productindex');

Route::get('/ManagementTahlilProductNew','Management\TahlilSystemController@TahlilProductNew')->name('ManagementTahlilProductNew');
Route::get('/ManagementEditProductNew/{productNew_id}', 'Management\TahlilSystemController@productNewedit')->name('ManagementProductNewEdit');
Route::post('/ManagementEditProductNew/{productNew_id}', 'Management\TahlilSystemController@productNewupdate')->name('ManagementProductNewUpdate');

Route::get('/ManagementTahlilBlog','Management\TahlilSystemController@TahlilBlog')->name('ManagementTahlilBlog');
Route::get('/ManagementEditBlog/{Blog_id}', 'Management\TahlilSystemController@BlogEdit')->name('ManagementBlogEdit');
Route::post('/ManagementEditBlog/{Blog_id}', 'Management\TahlilSystemController@BlogUpdate')->name('ManagementBlogUpdate');

/////////////////end :: Management//////////////////
