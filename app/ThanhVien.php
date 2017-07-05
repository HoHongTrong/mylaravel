<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
  //khai báo tên bảng
  protected $table = 'thanh_viens';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['user ','pass','level'];
  public $timestamps = FALSE;

}
