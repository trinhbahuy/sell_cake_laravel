@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Đơn hàng</h2>
  			<h3>Thông tin</h3>
  			<p>Điền thông tin khách hàng để tìm kiếm:</p>  
  	<input class="form-control" id="myInput" type="text" placeholder="Search..">
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Khách Hàng</th>
	        <th>Ngày đặt hàng</th>
	        <th>Tổng tiền</th>
	        <th>Hình thức thanh toán</th>
	        <th>Chi tiết</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	@foreach($donhang as $dh)
	    	
	      	<tr>
	        <td>{{$dh->id}}</td>
	        
	        <td>{{$dh->customer->name}}</td>
	        
	        <td>{{$dh->date_order}}</td>
	        <td>{{$dh->total}}</td>
	        <td>{{$dh->payment}}</td>
	        <td><a href="admin/bill_detail/{{$dh->id}}">Chi tiết</a></td>
	      </tr>
	      
	      @endforeach
	    </tbody>
	  </table>
	  
	  </div>
@endsection