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

///////////////////////////start :: Member route///////////////////////////////////
Route::get('/mainsss', 'Member\HomeController@main')->name('main');

Route::get('/', 'Member\HomeController@homeMember')->name('homeMember');

Route::get('/contact-member', 'Member\ContactMemberController@ContactMember')->name('contactMember');

Route::post('/contact-member', 'Member\ContactMemberController@createContactMember')->name('contactMember.post');

Route::get('/about-member', 'Member\AboutMemberController@aboutMember')->name('aboutMember');

Route::get('/allProduct-member', 'Member\allProductMemberController@allProductMember')->name('allProductMember');

Route::get('/singleProduct-member/{allProductMember_id}', 'Member\allProductMemberController@singleProductMember')->name('singleProduct');

Route::get('/blog/{blog_id}', 'Member\HomeController@blogMember')->name('BlogMember');
///////////////////////////End :: Member route///////////////////////////////////


//////////////////////////////////start :: Management////////////////////////////
Route::get('/ManagementDashboard', 'Management\DashboardController@dashboard');

Route::get('/details/product','Management\ProductsController@details')->name('details.product');
Route::post('/delete/product{allProductMember_id}', 'Management\ProductsController@deleteMassages')->name('delete.product.management');

Route::post('/delete/massage{massages_id}', 'Management\MassagesController@deleteMassages')->name('delete.massage');
Route::get('/ManagementMassages', 'Management\MassagesController@AllMassages')->name('massagesManagement');
Route::get('/details/massage','Management\MassagesController@details_massage')->name('details.massage');


Route::get('/ManagementProducts', 'Management\ProductsController@AllProducts')->name('ProductManagement');
Route::get('/ManagementEditProduct/{allProductMember_id}','Management\ProductsController@editProduct')->name('ManagementEditProduct');
Route::post('/ManagementEditProduct/{allProductMember_id}','Management\ProductsController@updateProduct')->name('ManagementUpdateProduct');

Route::get('/ManagementAddProduct','Management\AddProductController@AddProduct')->name('ManagementAddProduct');
Route::post('/ManagementAddProduct','Management\AddProductController@createProduct')->name('ManagementAddProduct.post');

Route::get('/ManagementEditProduct/{allProductMember_id}', 'Management\ProductsController@editProduct')->name('ManagementEditProduct');
Route::post('/ManagementEditProduct/{allProductMember_id}', 'Management\ProductsController@updateProduct')->name('ManagementUpdateProduct');

Route::get('/ManagementTahlilSystem','Management\TahlilSystemController@TahlilSystem')->name('ManagementTahlilSystem');

Route::get('/ManagementTahlilSlider','Management\TahlilSystemController@TahlilSlider')->name('ManagementTahlilSlider');

Route::get('/ManagementAddSlider','Management\TahlilSystemController@AddSingleSlider')->name('ManagementAddSlider');
Route::post('/ManagementAddSlider','Management\TahlilSystemController@createSingeSlider')->name('ManagementAddSlider.post');

Route::post('/delete/slider{Slider_id}','Management\TahlilSystemController@deleteSlider')->name('delete.slider.management');

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
Route::get('/details/productNew','Management\TahlilSystemController@detailsNewProduct')->name('details.productNew');

Route::get('/ManagementTahlilBlog','Management\TahlilSystemController@TahlilBlog')->name('ManagementTahlilBlog');
Route::get('/ManagementEditBlog/{Blog_id}', 'Management\TahlilSystemController@BlogEdit')->name('ManagementBlogEdit');
Route::post('/ManagementEditBlog/{Blog_id}', 'Management\TahlilSystemController@BlogUpdate')->name('ManagementBlogUpdate');
Route::get('/details/blog','Management\TahlilSystemController@detailsblog')->name('details.blog');


Route::get('/ManagementFilteringPrice','Management\TahlilSystemController@filteringPrice')->name('filtering.price');
Route::get('/ManagementEditFilteringPrice/{Filtering_id}', 'Management\TahlilSystemController@FilteringPriceEdit')->name('ManagementFilteringEdit');
Route::post('/ManagementEditFilteringPrice/{Filtering_id}', 'Management\TahlilSystemController@FilteringPriceUpdate')->name('ManagementFilteringUpdate');
Route::get('/ManagementAddFilteringPrice','Management\TahlilSystemController@filteringPriceAdd')->name('ManagementAddFilter');
Route::post('/ManagementAddFilteringPrice','Management\TahlilSystemController@createFilter')->name('ManagementAddFilter.post');
Route::post('/delete/Filter/{Filter_id}', 'Management\TahlilSystemController@deleteFilter')->name('delete.Filter');


Route::get('/ManagementFilteringCategories','Management\TahlilSystemController@filteringCategories')->name('filtering.categories');
Route::get('/ManagementEditFilteringCategories{dastebandi_id}','Management\TahlilSystemController@filteringCategoriesEdit')->name('filtering.categories.edit');
Route::post('/ManagementEditFilteringCategories{dastebandi_id}','Management\TahlilSystemController@filteringCategoriesUpdate')->name('filtering.categories.update');
Route::get('/ManagementAddCategoriesPrice','Management\TahlilSystemController@CategoriesAdd')->name('ManagementAddCategories');
Route::post('/ManagementAddCategoriesPrice','Management\TahlilSystemController@createCategories')->name('ManagementAddCategories.post');
Route::post('/delete/categories/{categories_id}', 'Management\TahlilSystemController@deletecategories')->name('delete.categories');
/////////////////////////////end :: Management//////////////////////////////////


////////////////////////////start ::filter and categories///////////////////////
Route::get('/allProduct-member/category/{category_id}', 'Member\allProductMemberController@withcategory')->name('category-products');
Route::get('/allProduct-member/price/{price_id}', 'Member\allProductMemberController@withprice')->name('price-products');
Route::get('/allProduct-member/{category_id}/{price_id}', 'Member\allProductMemberController@categoryprice')->name('categoryprice');

Route::get('/delete/price{price_id}', 'Management\TahlilSystemController@deletePrice')->name('delete.price');

////////////////////////////End ::filter and categories///////////////////////


///////////////////////////start ::search route//////////////////////////////
Route::get('/search/allProducts','Member\allProductMemberController@searchAllProducts');
Route::get('/search/allProducts/management','Management\ProductsController@searchAllProductsManagement');
///////////////////////////End ::search route//////////////////////////////


//////////////////////////start :: login and logout//////////////////////////////////
Route::get('/management/login','Management\UsersController@login')->name('login');
Route::post('/management/login','Management\UsersController@doLogin')->name('post.login');

Route::get('/management/logout','Management\UsersController@logout')->name('logout');
//////////////////////////End :: login and logout//////////////////////////////////


//////////////////////////start :: Newsletters//////////////////////////////////
Route::post('/','Member\NewslettersController@Newsletters')->name('Newsletters');
Route::post('/allProduct-member','Member\NewslettersController@Newsletters')->name('Newsletters');
Route::post('/about-member','Member\NewslettersController@Newsletters')->name('Newsletters');
Route::post('/contact-member','Member\NewslettersController@Newsletters')->name('Newsletters');
Route::post('/blog/{blog_id}','Member\NewslettersController@Newsletters')->name('Newsletters');

Route::get('/management/newSletters','Management\tahlilSystemController@NewslettersShow')->name('NewslettersShow');
Route::get('/management/newSlettersDelete/{newsletters_id}','Management\tahlilSystemController@Newsletters_delete')->name('delete.NewslettersShow');
Route::get('/management/download/newSletters','Management\tahlilSystemController@ExportNewsletters')->name('Export.Newsletters');
//////////////////////////End :: Newsletters//////////////////////////////////
