<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {
  //khai báo tên bảng
  protected $table = 'images';
  //khai báo thuộc tính cần hiển thị
  protected $fillable = ['name', 'product_id', 'cate_id'];
  public $timestamps = FALSE;
  //
  public function producttt(){
    return $this->belongsTo('App\product','product_id','id');
  }
}
