@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Admin</h2>
  			<h3>Danh sách quản trị viên</h3>
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Tên admin</th>
	        <th>Email</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	@foreach($admin as $ad)
	    	@if($ad->role == 1)
	      <tr>
	        <td>{{$ad->id}}</td>
	        <td>{{$ad->name}}</td>
	        <td>{{$ad->email}}</td>
	      </tr>
	      @endif
	     @endforeach
	    </tbody>
	  </table>
	  
	  </div>
@endsection