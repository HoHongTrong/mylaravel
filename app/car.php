<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
  //khai báo tên bảng
  protected $table = 'cars';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['name', 'price'];
  public $timestamps = FALSE;

  public function color(){
    return $this->belongsToMany('App\Color','car_colors');
  }
}
