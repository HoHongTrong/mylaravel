@extends('views.master')
@section('title','Layout Template')
@section('sidebar')

  @for ($i=0; $i<=5; $i++)
    sô tt: {{ $i }}<br/>
  @endfor
@stop

@section('noidung')
  @for ($i=0; $i<=7; $i++)
    sô tt: {{ $i }}<br/>
  @endfor
  <hr/>

  <?php $i = 0?>
  @while($i<10)
    stt : {!! $i !!}<br/>
    <?php $i++ ?>
  @endwhile
  <hr/>

  <?php $arr = ['so1', 'so2', 'so3'];?>
  @foreach($arr as $ima)
    {!! $ima !!},
  @endforeach

@stop
