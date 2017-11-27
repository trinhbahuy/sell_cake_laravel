<!DOCTYPE html>
<html>
<head>
	<title>Login-Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.top-buffer { margin-top:50px; }
	</style>
</head>
<body>
	<div class="row top-buffer">
    <div class="col-md-2 col-md-offset-5">
    	<h1>Đăng nhập</h1>
    	@if(Session::get('flag'))
    	<div class="alert alert-{{Session::get('flag')}}">
    		{{Session::get('thongbao')}}
    	</div>
    	@endif
    	<form action="{{route('admin-login')}}" method="post">
    		<input type="hidden" name="_token"  value="{{csrf_token()}}">
	    <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
	    </div>
	    <br>
	    <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
	    </div>
	    <br>
	    <div>
	    	<a href="#">Quên mật khẩu? </a><button type="submit" class="btn btn-primary">Đăng nhập</button>	
	    </div>    
	  </form>
    </div>
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

