@extends('admin/master')
@section('content')
<div class="col-md-9">
      <div class="col-md-9">
      <h2>Thêm sản phẩm</h2>
        <h3>Bánh</h3>
      <!-- @if($errors->count() > 0)
      @foreach($errors->all() as $err)
          <div class="alert alert-danger">{{$err}}</div>
      @endforeach
      @endif
      @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
      @endif -->
    <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
      <label for="inputdefault">Tên bánh</label>
      <input class="form-control" id="inputdefault" type="text" name="name">
      </div>
      <div class="form-group">
      <label for="inputdefault">Trạng thái đóng gói</label>
      <input class="form-control" id="inputdefault" type="text" name="unit">
      </div>
      <div class="form-group">
      <label for="sel1">Chọn loại bánh:</label>
      <select class="form-control" id="sel1" name="id">
        @foreach($type_product as $tp)
        <option value="{{$tp->id}}">{{$tp->name}}</option>
        @endforeach
      </select>
      </div>
      <div class="form-group">
      <label for="inputdefault">Hình ảnh</label>
      <input type="file"  id="fileToUpload" name="image">
      </div>
      <div class="form-group">
      <label for="inputdefault">Mô tả</label>
      <input class="form-control" id="inputdefault" type="text" name="description">
      </div>
      <div class="form-group">
      <label for="inputdefault">Giá</label>
      <input class="form-control" id="inputdefault" type="text" name="unit_price">
      </div>
      <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
      <button type="reset" class="btn btn-success">Xóa</button>
    </form>
    </div>
    @endsection