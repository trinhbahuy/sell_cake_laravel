<!DOCTYPE html>
<html>
<head>
  <title>Trang quản trị</title>
  <base href="{{asset('')}}">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('list_admin')}}">ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
      <li><a href="admin/admin/{{Auth::User()->id}}"><span class="glyphicon glyphicon-user"></span>{{Auth::User()->name}}</a></li>
      <li><a href="{{route('admin-logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
      @endif
    </ul>
  </div>
</nav>
  <div class="row">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li ><a href="{{route('khachhang')}}"><span class="glyphicon glyphicon-user"></span> Khách hàng</a></li> 
          <li><a href="{{route('sanpham')}}"><span class="glyphicon glyphicon-th-list"></span> Danh sách sản phẩm</a></li>
          <li><a href="{{route('add')}}"><span class="glyphicon glyphicon-tag"></span> Thêm sản phẩm</a></li>
          <li><a href="{{route('donhang')}}"><span class="glyphicon glyphicon-shopping-cart
glyphicon glyphicon-"></span> Đơn hàng</a></li>
        </ul>
    </div>
    @yield('content')
  </div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>