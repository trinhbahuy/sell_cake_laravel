@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Sản phẩm</h2>
  			<h3>Thông tin sản phẩm</h3>
  			<p>Điền thông tin sản phẩm để tìm kiếm:</p>  
  	<input class="form-control" id="myInput" type="text" placeholder="Search..">
  		@if(session('message'))
  			<div class="alert alert-success">{{session('message')}}</div>
  			<script type="text/javascript">
  				$(document).ready(function(){
  					window.alert("Xóa sản phẩm thành công !");
  				});
  				
  			</script>
  		@endif
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Tên sản phẩm</th>
	        <th>Loại sản phẩm</th>
	        <th>Hình ảnh</th>
	        <th>Mô tả</th>
	        <th>Giá sản phẩm</th>
	        <th>Hình thức</th>
	        <th>Sửa</th>
	        <th>Xóa</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	@foreach($sanpham as $sp)
	      <tr>
	        <td>{{$sp->id}}</td>
	        <td>{{$sp->name}}</td>
	        <td>{{$sp->id_type}}</td>
	        <td><img src="image/product/{{$sp->image}}" width="50px" height="50px"></td>
	        <td>{{$sp->description}}</td>
	        <td>{{$sp->unit_price}}</td>
	        <td>{{$sp->unit}}</td>
	        <td><a href="edit/{{$sp->id}}"><span class="glyphicon glyphicon-edit"></span></a></td>
	        <td><a href="admin/delete/{{$sp->id}}"><span class="glyphicon glyphicon-trash"></span></a></td>
	      </tr>
	      @endforeach
	    </tbody>
	    
	  </table>
	  {{$sanpham->links()}}
	  </div>
@endsection