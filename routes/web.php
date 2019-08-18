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
// schema các mã lệnh tạo cấu trúc bảng
Route::group(['prefix' => 'schema'], function () {
    //tạo bảng
    Route::get('create-table', function () {

       Schema::create('bang1', function ($table) {
         $table->increments('id');
         $table->string('name',100)->default('nguyễn thế phúc');
         $table->string('address')->nullable();

       });
    
    });

    //sửa tên bảng
    Route::get('rename-table', function () {
        Schema::rename('bang1', 'thongtin');
        echo 'đã đổi tên thành công';
    });

    //xoá bảng
    Route::get('drop-table', function () {
        Schema::dropIfExists('thongtin');
        echo 'Đã xoá bảng thành công';
    });
    
});

//query buider : các phương thức thực thi truy vấn CSDL
Route::group(['prefix' => 'query'], function () {

    //Thêm bản ghi vào bảng
    Route::get('insert', function () {
        //thêm 1 bản ghi
        // DB::table('users')->insert(
        //     ['email'=>'phuc@gmail.com',
        //     'password'=>'123456',
        //     'full'=>'nguyễn thế phúc',
        //     'address'=>'Thường tín',
        //     'phone'=>'035665311',
        //     'level'=>1]);


        //Thêm nhiều bản ghi
        DB::table('users')->insert([
                ['email'=>'A@gmail.com','password'=>'123456','full'=>'nguyễn thế A','address'=>'Thường tín','phone'=>'035665311','level'=>1],
                ['email'=>'B@gmail.com','password'=>'123456','full'=>'nguyễn thế B','address'=>'Thường tín','phone'=>'035665311','level'=>2],
                ['email'=>'C@gmail.com','password'=>'123456','full'=>'nguyễn thế C','address'=>'Thường tín','phone'=>'035665311','level'=>2],
                ['email'=>'D@gmail.com','password'=>'123456','full'=>'nguyễn thế D','address'=>'Thường tín','phone'=>'035665311','level'=>1]
        ]);



        
    });

    //Cập nhập bản ghi trong Bảng
    Route::get('update', function () {
        DB::table('users')->where('id','>',3)->update(['password'=>'123456']);
        
    });

    //Xoá bản ghi trong bảng
    Route::get('delete', function () {
        // DB::table('users')->where('id','>',3)->delete();

        //xoá tất cả bản ghi trong bảng
        // DB::table('users')->delete();

    });

    //lệnh truy vẫn nâng cao
    //chú ý: tất cả câu lệnh lấy dữ liệu đều dùng get() hoặc first() khi kết thúc

    //get (lấy toàn bộ dữ liệu trong bảng)
    Route::get('get', function () {
        $users=DB::table('users')->get()->toarray();
        dd($users);
    });

    //first (lấy bản ghi đầu tiên của mảng)
    Route::get('first', function () {
        $users=DB::table('users')->first();
        dd($users->phone);
    });


    //where
    Route::get('where', function () {
        $users=DB::table('users')->where('full','like','thế%')->get();
        dd($users);
  
    });


    //where and
    Route::get('where-and', function () {
        $users=DB::table('users')->where('full','like','%thế%')->where('level',2)->get();
        dd($users);
        
    });


    //where or

    Route::get('where-or', function () {
        $users=DB::table('users')->where('full','like','%thế%')->orwhere('level',2)->get();
        dd($users);
        
    });


    //whereIn (tìm những bản ghi với cột có dữ liệu ở trong mảng )

    Route::get('where-in', function () {
        $users=DB::table('users')->wherein('id',[1,3,4])->get();
        dd($users);
        
    });

    
    //take
    Route::get('take', function () {
        $users=DB::table('users')->take(2)->get();
        dd($users);
        
    });


    //skip

    Route::get('skip', function () {
        $users=DB::table('users')->skip(2)->take(2)->get();
        dd($users);
        
    });


    // câu lệnh thực thị
    //increment
    Route::get('increment', function () {
        // DB::table('users')->where('id','>',3)->increment('level',4);

    });

    //decrement
    Route::get('decrement', function () {
        DB::table('users')->where('id','>',3)->decrement('level',4);

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
    Route::post('', 'frontend\checkOutController@postCheckOut');
    Route::get('complete', 'frontend\checkOutController@getComplete');
});


//product
Route::group(['prefix' => 'product'], function () {
    Route::get('', 'frontend\productController@getShop');
    Route::get('detail', 'frontend\productController@getDetail');
});

Route::get('login', 'frontend\loginController@getLogin');

//ADMIN
Route::group(['prefix' => 'admin'], function () {
    Route::get('',  'backend\indexController@getIndex');

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('',  'backend\productController@getListProduct');
        Route::get('add',  'backend\productController@getAddProduct');
        Route::post('add',  'backend\productController@postAddProduct');
        Route::get('edit',  'backend\productController@getEditProduct');
        Route::post('edit',  'backend\productController@postEditProduct');
    });
 

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\categoryController@getCategory' );
        Route::post('','backend\categoryController@postCategory' );
        Route::get('edit', 'backend\categoryController@getEditCategory');
        Route::post('edit','backend\categoryController@postEditCategory' );
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
        Route::get('add','backend\userController@getAddUser');
        Route::post('add','backend\userController@postAddUser');
        Route::get('edit/{idUser}','backend\userController@geteditUser');
        Route::post('edit/{idUser}','backend\userController@postEditUser');
        Route::get('del/{idUser}','backend\userController@delUser' );
    });
    
    
});