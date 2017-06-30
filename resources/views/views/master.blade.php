<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','trang chu ')</title>
  <link rel="stylesheet" href="{{ asset('template/css/mystype.css')}}">

</head>
<body>
  <div id="wrapper">
    @include('views.marquee',['mar_quee'=>'truyen bien vòa11'])
    <div id="header">
      @section('sidebar')
        đây là master menu
      @show
    </div>
    <div id="content">
      @yield('noidung')
    </div>
    <div id="footer">

    </div>
  </div>
</body>
</html>