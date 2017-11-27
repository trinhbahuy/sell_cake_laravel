@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Khách hàng</h2>
  			<h3>Thông tin</h3>
  			<p>Điền thông tin khách hàng để tìm kiếm:</p>  
  	<input class="form-control" id="myInput" type="text" placeholder="Search..">
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Tên khách hàng</th>
	        <th>Email</th>
	        <th>Địa chỉ</th>
	        <th>Số điện thoại</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	@foreach($khachhang as $kh)
	      <tr>
	        <td>{{$kh->id}}</td>
	        <td>{{$kh->name}}</td>
	        <td>{{$kh->email}}</td>
	        <td>{{$kh->address}}</td>
	        <td>{{$kh->phone_number}}</td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
	  
	  </div>
@endsection