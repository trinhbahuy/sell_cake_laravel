@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Admin</h2>
  			<h3>Thông tin cá nhân</h3>
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Tên admin</th>
	        <th>Email</th>
	        <th>Địa chỉ</th>
	        <th>Số điện thoại</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	
	      <tr>
	        <td>{{$admin->id}}</td>
	        <td>{{$admin->full_name}}</td>
	        <td>{{$admin->email}}</td>
	        <td>{{$admin->address}}</td>
	        <td>{{$admin->phone}}</td>
	      </tr>
	    </tbody>
	  </table>
	  <!-- <button type="submit" class="btn btn-primary"><a href=""></a>Sửa thông tin</button> -->
	  </div>
@endsection