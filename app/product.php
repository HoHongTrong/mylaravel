<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //khai báo tên bảng
  protected $table = 'product';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['id', 'name', 'price','cate_id'];
  public $timestamps = FALSE;

  // lấy ra nhiều hình trong bảng images
  public function images(){
    return $this->hasMany('App\images');
  }
}
