@if(count($errors)>0)
  <ul>
    @foreach($errors->all() as $error)
      {{--<li>{!! $error !!}</li>--}}
      @endforeach
  </ul>
  @endif
{{-- upload dữ liệu dùng <form enctype="multipart/form-data"....>--}}
{{-- action="{!! route('postDangkKy') !!}"  đến path http://mylaravel.dev/public/form/dang-ky-thanh-vien --}}
<form enctype="multipart/form-data" action="{!! route('postDangkKy') !!}" method="post" name="frmThem">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <table>
    <tr>
      <td>Môn Học</td>
      <td>
        <input type="text" name="txtMonHoc" /><br/><br/>
        {!! $errors->first('txtMonHoc') !!}
      </td>
    </tr>
    <tr>
      <td>Giá Tiền</td>
      <td>
        <input type="text" name="txtGiaTien" /><br/><br/>
        {!! $errors->first('txtGiaTien') !!}
      </td>
    </tr>
    <tr>
      <td>Giảng Viên</td>
      <td>
        <input type="text" name="txtGiangVien" /><br/><br/>
        {!! $errors->first('txtGiangVien') !!}
      </td>
    </tr>
    <tr>
      <td>Avatar</td>
      <td>
        <input type="file" name="fImages" /><br/><br/>
        {!! $errors->first('fImages') !!}
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="btnGui" value="Thêm vào" />
      </td>
    </tr>
  </table>

</form>