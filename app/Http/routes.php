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
  $cay="cay gi do"."</br>";
  $an = "ntn";
  return view('trtest123',compact('cay','an'));
});
//-----------gọi controller
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

//-------------tạo bảng mới
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
    Schema::dropIfExists('product');
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
    $table->foreign('cate_id')->references('id')->on('category');
    $table->timestamps();
  });
});



Route::get('query/select-data',function (){
    $da = DB::table('product')->get();
    echo "<pre>";
    print_r($da);
    echo "</pre>";
});
Route::get('query/select-column-data',function (){
    $da = DB::table('product')->select('name')->get();
    echo "<pre>";
    print_r($da);
    echo "</pre>";
});
Route::get('query/orderBy',function(){
    $data = DB::table('product')->orderBy('id','DESC')->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('query/limit',function(){
    $data = DB::table('product')->select('id','name')->where('id','>','9')->skip(0)->take(3)->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});


//----------- kết bảng lưu ý không có khóa ngoại
Route::get('query/join',function(){
    $data = DB::table('news')->join('cate_news','news.cate_id','=','cate_news.id')->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    return "join thành công";
});

//-----------start insert,delete,update---------------
Route::get('query/insert',function (){
  DB::table('product')->insert([
    ['name'=>'Dầm dài 1','price'=>'4500','cate_id'=>'3'],
    ['name'=>'Dầm dài 2','price'=>'5500','cate_id'=>'3'],
    ['name'=>'Dầm dài 3','price'=>'6500','cate_id'=>'3'],
    ['name'=>'Dầm dài 4','price'=>'7500','cate_id'=>'3'],
  ]);
});
//lấy $id cuối cùng
Route::get('query/getid',function (){
  $id = DB::table('product')->insertGetId([
    'name'=>'Dầm dài G','price'=>'4500','cate_id'=>'3'
  ]);
  echo $id;
});
Route::get('query/update',function (){
  DB::table('product')->where('id',17)->update(['name'=>'Đầm dài G =>update','price'=>'15311']);
});
Route::get('query/delete',function(){
  DB::table('product')->where('id','>',15)->delete();
  return "De thành công";
});
//------------end insert,delete,update--------------

//-----------Eloquent ORM quản lý dữ liệu ----------------
Route::get('model/select-all',function (){
  $data = App\product::all()->toArray();
  echo "<pre>";
  print_r($data) ;
  echo "</pre>";
});
Route::get('model/select-id',function (){
  $data = App\product::find(18)->toArray();
  echo "<pre>";
  print_r($data) ;
  echo "</pre>";
});
//có hoặc không có hiện lỗi findOrFail
Route::get('model/select-id-fail',function (){
  $data = App\product::findOrFail(18)->toArray();
  echo "<pre>";
  print_r($data) ;
  echo "</pre>";
});

Route::get('model/where',function (){
  $data = App\product::select('name')->where('price','>',6000)->get()->toArray();
  echo "<pre>";
  print_r($data) ;
  echo "</pre>";
});
Route::get('model/count',function (){
  $data = App\product::all()->count();
  echo "<pre>";
  print_r($data) ;
  echo "</pre>";
});
Route::get('model/raw', function () {
  $data = App\product::whereRaw('cate_id = ? and id = ?', [1,7])->get()->toArray();
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
Route::get('model/insert1',function(){
  $product = new App\product();
  $product->name = 'Quần công sở1';
  $product->price = '500000';
  $product->cate_id = '2';
  $product->save();
  echo "thành công";
});
Route::get('model/insert2',function(){
  $data = array(
    'name' => 'Quần Jean hot 222',
    'price' => 2000,
    'cate_id' => 2
  );
  App\product::create($data);
});
Route::get('model/update',function(){
  $product = App\product::find(20);
  $product->price = 5753;
  $product->save();
});
Route::get('model/delete',function(){
  App\product::destroy(21);
});
//----------------relation one many---------
Route::get('relation/one-many-1',function (){
  $data = App\Product::find(20)->images()->get()->toArray();
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
Route::get('relation/one-many-2',function (){
  $data = App\Images::find(8)->producttt;
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
//--------------many to many
Route::get('relation/many-many-1',function(){
  $data =App\car::find(4)->color()->select('name')->get()->toArray();
    echo "<pre>";
  print_r($data);
  echo "</pre>";
});
Route::get('relation/many-many-2',function(){
  $data =App\color::find(1);
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});

//---------- Request form------------
Route::get('form/layout',function(){
  return view('form.layout');
});

Route::post('form/data',['as'=>'sendEmail',function(){
    return "thành công";
  }
]);
Route::get('form/dang-ky',function(){
  return view('form.dangky');
});
Route::post('form/dang-ky-thanh-vien',['as'=>'postDangkKy','uses'=>'TrongController@them']);

//xử lý đường link ảo quay về trang chủ
Route::any('any?','TrongController@them')->where('all','(.*)');
// --------------end request form--------------

//----------- RESPONSE-----------
Route::get('response/json',function (){
  $arr = array(
    'mon hoc' =>'laravel 5x',
    'giang vien'=>'abc',
    'thoi gian' => '2 tháng'
  );
  //chuyển mảng về dạng json
  return Response::json($arr);
});
Route::get('response/xml',function(){
  $content = '<?xml version="1.0" encoding="UTF-8"?>
    <root>
      <trungtam>trung tam dao tao</trungtam>
      <danhsach>
        <diachi>dia chi 1</diachi>
        <diachi>dia chi 2</diachi>
      </danhsach>
    </root>
  ';
  $status = 200;
  $value = 'text/xml';
  return response($content,$status)->header('Content-Type',$value);
});
Route::get('response/demo',['as'=>'demoredirect',function(){
  return view('response.demo');
}]);
Route::get('response/redirect',function (){
  return redirect()->route('demoredirect')->with([
    'level'=>'cap2',
    'messenger'=>'nhảy múa'
  ]);
});
Route::get('response/redirect/back',function (){
  return redirect()->back();
});
Route::get('response/download',function (){
  $url = 'download/text.rar';
  return Response::download($url);
});
Route::get('response/downloadAndDelete',function (){
  $url = 'download/text.rar';
  return Response::download($url)->deleteFileAfterSend(true);
});
//----------- end response----------

//------------ Macros --------------
Route::get('response/macro/cap',function(){
  return response()->cap('chuyển chữ thường thành hoa');
});
Route::post('response/macro/contact',function(){
  return Response()->contact('http://mylaravel.dev/public/response/macro/cap');
});
//------------end macros--------

//-------------- Authentication-------------
Route::get('authen/login',['as'=>'getLogin','uses'=>'ThanhVienController@getLogin']);
Route::post('authen/login',['as'=>'postLogin','uses'=>'ThanhVienController@postLogin']);


Route::get('authentication/getRegister',['as'=>'getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('authentication/postRegister',['as'=>'postRegister','uses'=>'Auth\AuthController@postRegister']);

Route::auth();

Route::get('/home', 'HomeController@index');

