<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('userTableSeeder');
        $this->call('ThanhVienTableSeeder');
    }
}

class productSeeder extends Seeder
{
    public function run()
    {

//        DB::table('category')->insert([
//            array('name'=>'Thể Thao'),
//            array('name'=>'Thời Trang Nam'),
//            array('name'=>'Thời Trang Nữ') ]);
        DB::table('product')->insert([
            array('name' => 'Đồ Đá Bóng', 'price' => '5000', 'cate_id' => '1'),
            array('name' => 'Đồ Tennis', 'price' => '5100', 'cate_id' => '1'),
            array('name' => 'Đồ Võ', 'price' => '5200', 'cate_id' => '1'),
            array('name' => 'Đồ Cầu Lông', 'price' => '5300', 'cate_id' => '1'),
            array('name' => 'Vest mát mẻ', 'price' => '8300', 'cate_id' => '2'),
            array('name' => 'Áo khoác thể thao', 'price' => '6300', 'cate_id' => '2'),
            array('name' => 'Áo thun trất', 'price' => '7300', 'cate_id' => '2')
        ]);
    }
}


class CateNewTableSeeder extends Seeder{
    public function run(){
        DB::table('cate_news_join')->insert([
            ['name'=>'Thế Giới'],
            ['name'=>'Thể Thao'],
            ['name'=>'Âm nhạc'],
        ]);
    }
}

class NewsTableSeeder extends Seeder{
    public function run(){
        DB::table('news_join')->insert([
            ['title'=>'title 1','intro'=>'intro 1','cate_id'=>'1'],
            ['title'=>'title 2','intro'=>'intro 2','cate_id'=>'1'],
            ['title'=>'title 3','intro'=>'intro 3','cate_id'=>'1'],
            ['title'=>'title 4','intro'=>'intro 4','cate_id'=>'1'],
        ]);
    }
}

class ImagesTableSeeder extends Seeder{
  public function run() {
    // TODO: Implement run() method.
    DB::table('images')->insert([
      ['name'=>'hinh_quanteennis_1.png','product_id'=>7],
      ['name'=>'hinh_quanteennis_2.png','product_id'=>7],
      ['name'=>'hinh_quanteennis_3.png','product_id'=>7],
      ['name'=>'hinh_quanteennis_4.png','product_id'=>7],
      ['name'=>'hinh_quandibien_1.png','product_id'=>20],
      ['name'=>'hinh_quandibien_2.png','product_id'=>20],
      ['name'=>'hinh_quandibien_3.png','product_id'=>20],
      ['name'=>'hinh_quandibien_4.png','product_id'=>20],
    ]);
  }
}
class ColorsTableSeeder extends Seeder{
  public function run() {
    // TODO: Implement run() method.
    DB::table('colors')->insert([
      ['name'=>'red'],
      ['name'=>'blue'],
      ['name'=>'black'],
      ['name'=>'while'],

    ]);
  }
}

class CarColorsTableSeeder extends Seeder{
  public function run() {
    // TODO: Implement run() method.
    DB::table('car_colors')->insert([
      ['car_id'=>'1','color_id'=>'1'],
      ['car_id'=>'2','color_id'=>'1'],
      ['car_id'=>'3','color_id'=>'1'],
      ['car_id'=>'4','color_id'=>'2'],
      ['car_id'=>'4','color_id'=>'3'],
      ['car_id'=>'4','color_id'=>'4'],
      ['car_id'=>'5','color_id'=>'1'],

    ]);
  }
}


class ThanhVienTableSeeder extends Seeder{
  public function run() {
    // TODO: Implement run() method.
    DB::table('thanh_viens')->insert([
      ['user'=>'ty','pass'=>Hash::make(12345),'level'=>1],
      ['user'=>'tuan','pass'=>Hash::make(12345),'level'=>2],
      ['user'=>'ku','pass'=>bcrypt(12345),'level'=>2],

    ]);
  }
}