<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Log In')</title>
  <link rel="stylesheet" href="{{ asset('template/css/login.css')}}">

</head>
<body>
@if(count($errors)>0)
  <ul>
    @foreach($errors->all() as $error)
      <ol>{!! $error !!}</ol>
    @endforeach
  </ul>
@endif
  <div id="login_form">
    <form method="post" action="" id="f1">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
      <table>
        <tr>
          <td class="f1_label">User Name :</td>
          <td>
            <input type="text" name="username" value=""/> <br/>
            {{--{!! $error->first('username') !!}--}}
          </td>
        </tr>
        <tr>
          <td class="f1_label">Password :</td>
          <td>
            <input type="password" name="password" value=""/>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="login" value="Log In" style="font-size:18px; "/>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>