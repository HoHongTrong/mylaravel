<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carcolor extends Model
{
  //khai báo tên bảng
  protected $table = 'car_colors';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['car_id','color_id'];
  public $timestamps = FALSE;
}
