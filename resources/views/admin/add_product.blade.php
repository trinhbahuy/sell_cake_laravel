@extends('admin/master')
@section('content')
<div class="col-md-9">
			<div class="col-md-9">
			<h2>Thêm sản phẩm</h2>
  			<h3>Bánh</h3>
  			
		<form>
		<div class="form-group">
    <label for="inputdefault">Tên bánh</label>
    <input class="form-control" id="inputdefault" type="text" name="name">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Trạng thái đóng gói</label>
    <input class="form-control" id="inputdefault" type="text" name="unit">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Hình ảnh</label>
    <input type="file" name="fileToUpload" id="fileToUpload" name="image">
  </div>
		  
		  		<div class="form-group">
    <label for="inputdefault">Mô tả</label>
    <input class="form-control" id="inputdefault" type="text" name="description">
  </div>
		  		<div class="form-group">
    <label for="inputdefault">Giá</label>
    <input class="form-control" id="inputdefault" type="text" name="unit_price">
  </div>
		  <button type="button" class="btn btn-primary">Thêm sản phẩm</button>
			<button type="reset" class="btn btn-success">Xóa</button>
		</form>
		</div>
    @endsection