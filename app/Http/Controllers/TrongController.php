<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\TrongRequest;
use App\Http\Requests;
use App\HCTorm;


// php artisan make:controller tên-controller
class TrongController extends Controller
{
    public function them(TrongRequest $request){
      $img = $request->file('fImages');
      $img_name = $img->getClientOriginalName();

      $HCTorm = new HCTorm;
      $HCTorm->monhocgi = $request->txtMonHoc;
      $HCTorm->giatien = $request->txtGiaTien;
      $HCTorm->tennguoiday = $request->txtGiangVien;
      $HCTorm->image = $img_name;
      $HCTorm->save();

      $des = 'upload/images';
      $img->move($des,$img_name);

//      return redirect('form/dang-ky');

      /**
       * UPLOAD HÌNH LÊN
       * B1: Tạo column trong table (create_insert-column_table)
       * B2: Tạo folder chứa hình (upload/images)
       */
//      echo "<pre>";
//      echo "Tên Hình :".$request->file('fImages')->getClientOriginalName()."<br/>";
//      echo "Kích Thước :".$request->file('fImages')->getClientOriginalName()."BK <br/>";
//      echo "Đường Dẫn :".$request->file('fImages')->getRealPath()."<br/>";
//      echo "Loại :".$request->file('fImages')->getMimeType()."<br/>";
//      echo "</pre>";

    }
}
