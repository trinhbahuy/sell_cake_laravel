@extends('admin/master')
@section('content')
<div class="col-md-9">
			<h2>Admin</h2>
  			<h3>Thông tin cá nhân</h3>
		<table class="table table-striped" >
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên sản phẩm</th>
	        <th>Số lượng</th>
	        <th>Giá sản phẩm</th>
	        <th>Ngày đặt hàng</th>
	      </tr>
	    </thead>
	    <tbody id="myTable">
	    	@foreach($bill_detail  as $bd)
	      	<tr>
	        <td>{{$i++}}</td>
	        <td>{{$bd->product->name}}</td>
	        <td>{{$bd->quantity}}</td>
	        <td>{{$bd->unit_price}}</td>
	        <td>{{$bd->created_at}}</td>
	      	</tr>
	     	@endforeach
	    </tbody>
	  </table>
	  
	  </div>
@endsection