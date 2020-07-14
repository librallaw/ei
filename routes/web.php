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
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['Admin']], function () {


        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/upload_banner', 'UploadBannerController@viewBanner')->name('banner');
        Route::post('/image-upload', 'UploadBannerController@imageUploadPost')->name('image.upload');
        Route::get('/list_banner', 'UploadBannerController@listBanner')->name('listBanner');
        Route::get('/edit_banner/{id}', 'UploadBannerController@edit_banner')->name('edit_banner');
        Route::post('/editBanner/{id}', 'UploadBannerController@editBanner')->name('editBanner');
        Route::get('/deleteBanner/{id}', 'UploadBannerController@deleteBanner')->name('deleteBanner');




        Route::get('/upload_index_banner', 'UploadBannerController@view')->name('index_banner');
        Route::post('/image-save', 'UploadBannerController@imageUpload')->name('image');
        Route::get('/list_index', 'UploadBannerController@list_index')->name('list_index');
        Route::get('/edit_index/{id}', 'UploadBannerController@edit_index')->name('edit_index');
        Route::post('/editIndex/{id}', 'UploadBannerController@editIndex')->name('editIndex');
        Route::get('/deleteIndex/{id}', 'UploadBannerController@deleteIndex')->name('deleteIndex');

        Route::get('/category', 'ProductController@category')->name('category');
        Route::post('/category_upload', 'ProductController@categoryUpload')->name('categoryUpload');
        Route::get('/list_category', 'ProductController@listCategory')->name('listCategory');
        Route::get('/edit_cat/{id}', 'ProductController@editCat')->name('editCat');
        Route::post('/editCategory/{id}', 'ProductController@editCategory')->name('editCategory');
        Route::get('/deleteCategory/{id}', 'ProductController@deleteCategory')->name('deleteCategory');

        Route::get('/section_image', 'UploadBannerController@viewSection')->name('section');
        Route::post('/upload_image', 'UploadBannerController@storeSectionImage')->name('sectionUpload');
        Route::get('/list_section', 'UploadBannerController@list_section')->name('list_section');
        Route::get('/edit_section/{id}', 'UploadBannerController@edit_section')->name('edit_section');
        Route::post('/editSection/{id}', 'UploadBannerController@editSection')->name('editSection');
        Route::get('/deleteSection/{id}', 'UploadBannerController@deleteSection')->name('deleteSection');

        Route::get('/product', 'ProductController@view')->name('product');
        Route::post('/upload_product', 'ProductController@store')->name('storeProduct');
        Route::get('/list_product', 'ProductController@list_product')->name('list_product');
        Route::get('/edit_product/{id}', 'ProductController@edit_product')->name('edit_product');
        Route::post('/editProduct/{id}', 'ProductController@editProduct')->name('editProduct');
        Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct')->name('deleteProduct');

        Route::get('/testimonial', 'ProductController@viewTest')->name('testimonial');
        Route::post('/upTest', 'ProductController@upTest')->name('upTest');
        Route::get('/list_testimonial', 'ProductController@listTest')->name('listTest');
        Route::get('/edit_test/{id}', 'ProductController@edit_test')->name('edit_test');
        Route::post('/editTest/{id}', 'ProductController@editTest')->name('editTest');
        Route::get('/deleteTest/{id}', 'ProductController@deleteTest')->name('deleteTest');
        Route::get('/list_order', 'UploadBannerController@list_order')->name('list_order');
        Route::get('/deleteOrder/{id}', 'UploadBannerController@deleteOrder')->name('deleteOrder');
        Route::get('/updateStatus/{id}', 'CartController@updateStatus')->name('updateStatus');
        Route::get('/cancelOrder/{id}', 'CartController@cancelOrder')->name('cancelOrder');


        ////////////////////////////////////////////////////////////////////////////////////////
        ///users

    });
});

    Route::get('/', 'UsersController@home')->name('index');
    Route::get('/product/{id}', 'ProductController@productDetails')->name('productDetails');
    Route::get('/categoryProduct/{category}', 'ProductController@viewProduct')->name('viewProduct');
    Route::get('/viewCart', 'CartController@viewCart')->name('viewCart');
    Route::get('/addToCart/{productId}', 'CartController@addToCart')->name('addToCart');
    Route::get('/deleteItem/{id}', 'CartController@delete')->name('deleteCart');
    Route::get('/deleteCartItem/{id}', 'CartController@deleteItem')->name('deleteItem');
    Route::get('/clearCart', 'CartController@clearCart')->name('clearCart');
    Route::get('/getCheckout', 'CartController@getCheckout')->name('getCheckout');
    Route::post('/checkout', 'CartController@checkout')->name('checkout');
    Route::get('/viewOrder', 'CartController@viewOrder')->name('viewOrder');
    Route::get('/search', 'ProductController@search')->name('search');








