<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model tên-model
class HCTorm extends Model
{
  //khai báo tên bảng
  protected $table = 'HCTorm';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = [
    'id', 'monhocgi', 'giatien','tennguoiday',
  ];
}
