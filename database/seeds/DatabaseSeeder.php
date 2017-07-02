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
        $this->call('NewsTableSeeder');
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
            array('name' => 'Đồ Cầu Lông', 'price' => '5300', 'cate_id' => '1')
        ]);
    }
}


class CateNewTableSeeder extends Seeder{
    public function run(){
        DB::table('cate_news')->insert([
            ['name'=>'Thế Giới'],
            ['name'=>'Thể Thao'],
            ['name'=>'Âm nhạc'],
        ]);
    }
}

class NewsTableSeeder extends Seeder{
    public function run(){
        DB::table('news')->insert([
            ['title'=>'title 1','intro'=>'intro 1','cate_id'=>'1'],
            ['title'=>'title 2','intro'=>'intro 2','cate_id'=>'1'],
            ['title'=>'title 3','intro'=>'intro 3','cate_id'=>'1'],
            ['title'=>'title 4','intro'=>'intro 4','cate_id'=>'1'],
        ]);
    }
}