@extends('views.master')
@section('title','trang sub')
@section('noidung')
  trang sub noi dung <br/>
  <?php $hoten = "HPS"?>
  {!! $hoten !!}

  <?php $die = 6 ?>
  @if($die<=5)
    yeu

  @elseif($die > 5 && $die<=7)
    kha

  @else($die >7)
    gioi

  @endif

  {{isset($die)? $die : "khog ton tai"}}
  <hr/>
  {{$die or 'khongtontai'}}
@stop