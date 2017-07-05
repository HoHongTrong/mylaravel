<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
  //khai báo tên bảng
  protected $table = 'colors';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['name'];
  public $timestamps = FALSE;
  public function car(){
    return $this->belongsToMany('App\car','car_colors');
  }
}
