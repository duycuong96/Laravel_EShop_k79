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
//--------------------------->LÝ THUYẾT
Route::group(['prefix' => 'thanhvien'], function () {
    Route::get('add', function () {
        echo "Đây là trang add";
    });
    Route::get('edit', function () {
        echo "Đây là trang edit";
    });
    Route::get('del', function () {
        echo "Đây là trang del";
    });
});

// ------------------------->PROJECT
// frontend
Route::get('', 'frontend\indexController@getIndex');
Route::get('about', 'frontend\indexController@getAbout');
Route::get('contact', 'frontend\indexController@getContact');


// CArt
Route::group(['prefix' => 'cart'], function () {
    Route::get('', 'frontend\cartController@getCart');
});

//checkout
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', 'frontend\checkOutController@getCheckOut');
    Route::get('complete', 'frontend\checkOutController@getComplete');
});


//product
Route::group(['prefix' => 'product'], function () {
    Route::get('', 'frontend\productController@getShop');
    Route::get('detail', 'frontend\productController@getDetail');
});

Route::get('login', 'frontend\loginController@getLogin');



// admin
Route::group(['prefix' => 'admin'], function () {
        Route::get('', 'backend\indexController@getIndex');


    // product
   Route::group(['prefix' => 'product'], function () {
        Route::get('',  'backend\productController@getListProduct');
        Route::get('add',  'backend\productController@getAddProduct');
        Route::get('edit',  'backend\productController@getEditProduct');
   });


    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\categoryController@getCategory' );
        Route::get('edit', 'backend\categoryController@getEditCategory');
    });
    
    //order
   Route::group(['prefix' => 'order'], function () {
        Route::get('','backend\orderController@getOrder' );
        Route::get('detail','backend\orderController@getdetail' );
        Route::get('processed', 'backend\orderController@getProcessed');
   });

    // user
    Route::group(['prefix' => 'user'], function () {
        Route::get('',  'backend\userController@getUser');
        Route::get('add', 'backend\userController@getAddUser' );
        Route::get('edit', 'backend\userController@geteditUser' );
    });

});