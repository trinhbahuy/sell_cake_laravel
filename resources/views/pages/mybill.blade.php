@extends('layout.master')

@section('content')
  <div class="container">
  <div id="content">
    <div class="table-responsive">
      <!-- Shop Products Table -->
      <h2 style="text-align: center;padding-bottom: 30px;">Danh sách các đơn hàng đã mua</h2>
      <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
          <tr>
            <th>Đơn hàng</th>
            <th class="product-name">Họ tên Khách Hàng</th>
            <th class="product-price">Thời gian đặt hàng</th>
            <th class="product-quantity">Tổng tiền</th>
            <th class="product-subtotal">Hình thức thanh toán</th>
            <th>Xem chi tiết</th>
          </tr>
        </thead>
        <tbody>
       
         @foreach($donhang as $dh)
            <tr class="cart_item">
            <td>{{$i++}}</td>
            <td class="product-subtotal">
              <span>{{$dh->user->name}}</span>
            </td>
            <td class="product-quantity">
              <span>{{$dh->date_order}}</span>
            </td>

            <td class="product-subtotal">
               <span>{{number_format($dh->total)}} VNĐ</span>
            </td>
            <td class="product-subtotal">
               <span>{{$dh->payment}}</span>
            </td>
            <td>
              <a href="chi-tiet-don/{{$dh->id}}">Chi tiết</a>
            </td>
          </tr>
        @endforeach
        </tbody>

       
      </table>
      <!-- End of Shop Table Products -->
    </div>
    <!-- End of Cart Collaterals -->
    <div class="clearfix"></div>

  </div> <!-- #content -->
</div> <!-- .container -->


@endsection
