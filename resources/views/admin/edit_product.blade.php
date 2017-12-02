@extends('admin/master')
@section('content')
<div class="col-md-9">
			<div class="col-md-9">
			<h2>Sửa thông tin sản phẩm</h2>
  			<h3>Bánh</h3>
  		@if(Session('message'))
        <div class="alert alert-success">{{Session('message')}}</div>
      @endif
		<form action="admin/edit/{{$sanpham->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
		<div class="form-group">
    <label for="inputdefault">Tên bánh</label>
    <input class="form-control" id="inputdefault" type="text" name="name" value="{{$sanpham->name}}">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Trạng thái đóng gói</label>
    <input class="form-control" id="inputdefault" type="text" name="unit" value="{{$sanpham->unit}}">
  </div>
  <div class="form-group">
    <img src="image/product/{{$sanpham->image}}" width="250px" height="250px">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Hình ảnh</label>
    <input type="file" name="fileToUpload" id="fileToUpload" name="image" >
  </div>
		  
		  		<div class="form-group">
    <label for="inputdefault">Mô tả</label>
    <input class="form-control" id="inputdefault" type="text" name="description" value="{{$sanpham->description}}">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Giá</label>
    <input class="form-control" id="inputdefault" type="text" name="unit_price" value="{{$sanpham->unit_price}}">
  </div>
		  <button type="submit" class="btn btn-primary">Cập nhập</button>
			<button type="reset" class="btn btn-success">Xóa</button>
		</form>
		</div>
    @endsection