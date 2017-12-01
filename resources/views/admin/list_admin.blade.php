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
	    	@foreach($admin as $ad)
	    	@if($ad->role == 1)
	      <tr>
	        <td>{{$ad->id}}</td>
	        <td>{{$ad->full_name}}</td>
	        <td>{{$ad->email}}</td>
	        <td>{{$ad->address}}</td>
	        <td>{{$ad->phone_number}}</td>
	      </tr>
	      @endif
	     @endforeach
	    </tbody>
	  </table>
	  
	  </div>
@endsection