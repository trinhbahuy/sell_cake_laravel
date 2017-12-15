@extends('layout.master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
		@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{ $error }}
				</div>
			@endforeach
			<form action="register" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name ="email" id="email" >
						</div>
						<div class="form-block">
							<label for="your_last_name">Họ tên*</label>
							<input type="text" name="name" id="name" >
						</div>
						<div class="form-block">
							<label for="your_last_name">Địa chỉ*</label>
							<input type="text" name="address"  >
						</div>
						<div class="form-block">
							<label for="your_last_name">Số điện thoại*</label>
							<input type="text" name="phone_number" >
						</div>
						<div class="form-block">
							<label >Mật khẩu*</label>
							<input type="password" name="password" >
						</div>
						<div class="form-block">
							<label >Nhập lại mật khẩu*</label>
							<input type="password" name="re_password" >
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng kí</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection