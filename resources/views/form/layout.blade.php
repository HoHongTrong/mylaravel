{!! Form::open(array('route'=>'sendEmail','files'=>true)) !!}
{!! Form::label('hoten','Họ Tên :') !!}
{!! Form::text('txtHoten','',array('class'=>'input','placeholder'=>'vui lòng nhập')) !!}<br/><br/>

{!! Form::label('matkhau','password :') !!}
{!! Form::password('txtMatkhau','',array('class'=>'input')) !!}<br/><br/>

{!! Form::label('email','Email :') !!}
{!! Form::email('txtEmail','',array('class'=>'input','placeholder'=>'vui lòng nhập')) !!}<br/><br/>

{!! Form::label('ghichu','Ghi chú :') !!}
{!! Form::textarea('txtGhiChu','',array('class'=>'input','rows'=>'5','placeholder'=>'vui lòng nhập')) !!}<br/><br/>

{!! Form::label('gioitinh','Giới Tính :') !!}
{!! Form::radio('rdoGioiTinh','nam')!!}Nam
{!! Form::radio('rdoGioiTinh','nu')!!}Nữ<br/><br/>

{!! Form::label('sltThanhPho','Thành Phố :') !!}
{!! Form::select('txtGhiChu',array(
                                        'hn'=>'Hà Nội',
                                        'h'=>'Huế',
                                        'dn'=>'Đà Nẵng',
                                        'hcm'=>'Hồ Chí Minh'
                                        ),'dn') !!} <br/><br/>

{!! Form::label('truonghoc','Trường Học :') !!}
{!! Form::checkbox('chkTruongHoc','bk')!!}  BK,
{!! Form::checkbox('chkTruongHoc','khtn')!!}  KHTN,
{!! Form::checkbox('chkTruongHoc','khxh$nv')!!}  KHXH $ NV,
{!! Form::checkbox('chkTruongHoc','uit')!!}  UIT<br/><br/>

{!! Form::hidden('website','hpds')!!}

{!! Form::label('hinh','Avarta :') !!}
{!! Form::file('addImage')!!}<br/><br/>

{!! Form::submit('submit') !!}
{!! Form::button('ok') !!}
{!! Form::reset('reset') !!}

{!! Form::close() !!}