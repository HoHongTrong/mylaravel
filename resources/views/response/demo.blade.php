111111</br>
<style>
.cap1{color: red;}
  .cap2{color: blue;}
</style>
@if(Session::has('messenger'))
  <span class="{{Session::get('level')}}">
    {{Session::get('messenger')}}
  </span>
@endif