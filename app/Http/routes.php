<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('khoahoc',function (){
    return "xin chao cac ban nametr";
});
Route::get('khoahoc/tronglaravel',function (){
    echo "<h1>tu hoc lvr</h1>";
});

//truyền tham số
Route::get('hovaten/{ten1}',function ($ten1){
    echo "ten 1 cua ban la day : ".$ten1;
});

Route::get('truyenthamso/{ngay}/{ten}',function ($ngay,$ten){
   echo "truyen tham so mới ngày ".$ngay ."có tên là ". $ten;
})->where(['ngay'=>'[0-9]+','ten'=>'[a-zA-Z]+']);

// truyen gia tri cho view
Route::get('trtest-view',function (){
  $cay="cay gi do";
  $an = "ntn";
  return view('trtest123',compact('cay','an'));
});
//gọi controller
Route::get('1212a','Controller@testroute');

// định danh route
Route::get('Route1',['as'=>'miroute',function(){
  echo "myname it tr";
}]);

Route::get('goiView',function (){
  return view('layout.sub.view');
});
Route::get('goiLayout',function (){
  return view('layout.sub.layout');
});

View::share('title','lập trình laravel');//share dc tất cả

//share những view được chỉ định ra
View::composer(['layout.sub.layout','layout.sub.view'],function($view){
  return $view->with('thongtin','trang ca nhan');
});

Route::get('goiMaster',function (){
  return view('views.master');
});

// lấy url hiện tai
Route::get('url/full2',function (){
  return URL::full();
});

//
Route::get('url/asset',function (){
  return asset('css/mystype.css',true);
});
Route::get('url/to',function (){
  return URL::to('truyenthamso',['ngay10','thagn05'],true);
});

// tạo bảng mới
Route::get('schema/create',function (){
  Schema::create('DBmylaravel',function($table){
    $table->increments('id');
    $table->string('tenmonhoc');
    $table->integer('gia');
    $table->text('ghichu')->nullable();
    $table->timestamps();
  });
});
//thay đổi tên bảng
Route::get('schema/rename',function (){
  Schema::rename('mylaravel','bang_text');
});
//xoa bảng
Route::get('xoa-bang',function(){
//  Schema::drop('bang_text');
    Schema::dropIfExists('bang_text');
});
//thay doi thuoc tinh của cột tên môn học varcha(255) thành varchar(100)
Route::get('doi-thuoc-tinh',function (){
  Schema::table('DBmylaravel',function ($table){
    $table->string('tenmonhoc',100)->change();
  });
});
//xóa cột
Route::get('xoa-cot',function (){
  Schema::table('DBmylaravel',function($table){
    $table->dropColumn('ghichu');
  });
});

Route::get('schema/create/cate',function (){
  Schema::create('category',function ($table){
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
  });
});
Route::get('schema/create/product',function (){
  Schema::create('product',function ($table){
    $table->increments('id');
    $table->string('name');
    $table->integer('price');
    $table->integer('cate_id')->unsigned();
    $table->foreign('cate_id')->reference('id')->on('category');
    $table->timestamps();
  });
});
