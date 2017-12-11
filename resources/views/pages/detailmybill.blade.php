@extends('layout.master')

@section('content')
  <div class="container">
  <div id="content">
    <h2 style="text-align: center;padding-bottom: 30px;">
        Chi tiết đơn hàng
      </h2>
    <div class="table-responsive">
      <!-- Shop Products Table -->
      <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
          <tr>
            <th class="product-name">Sản phẩm</th>
            <th class="product-price">Giá</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-subtotal">Tổng tiền</th>
          </tr>
        </thead>
        <tbody>
          @foreach($chitietdon as $items)
          <tr class="cart_item">
            <td class="product-name">
              <div class="media">
                <img style="width:100px; height:50px;" class="pull-left" src="image/product/{{ $items->product->image }}" alt="ảnh">
                <div class="media-body">
                  <p class="font-large table-title">{{ $items->product->name }}</p>
                </div>
              </div>
            </td>

            <td class="product-price">
              <span class="amount">{{number_format($items->product->unit_price) }} VNĐ</span>
            </td>
            <td class="product-quantity">
              {{$items->quantity}}
            </td>
            <td class="product-subtotal">
              {{number_format($items->unit_price*$items->quantity)}} VNĐ
            </td>
          </tr>
        @endforeach
        </tbody>

       
      </table>
      <!-- End of Shop Table Products -->
    </div>


    <!-- Cart Collaterals -->
    <div class="cart-collaterals">

      <div class="cart-totals pull-right" >
        <div class="cart-totals-row"><h5 class="cart-total-title">Thanh toán</h5></div>
        <div class="cart-totals-row">
          <span>Khuyến mại:<b style="color: red;">10% </b>       </span>
           
        </div>
        <div class="cart-totals-row">
          <span >Tổng tiền: 
              <b style="color: red;">{{number_format($items->bill->total)}} 
                 VNĐ  </b>    
         </span>
           
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
    <!-- End of Cart Collaterals -->
    <div class="clearfix"></div>

  </div> <!-- #content -->
</div> <!-- .container -->


@endsection
