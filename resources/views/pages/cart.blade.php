@extends('layout.master')

@section('content')
  <div class="container">
  <div id="content">

    <div class="table-responsive">
      <!-- Shop Products Table -->
      <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
          <tr>
            <th class="product-name">Sản phẩm</th>
            <th class="product-price">Giá</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-quantity">Giảm giá</th>
            <th class="product-subtotal">Tổng tiền</th>
            <th class="product-remove">Xóa sản phẩm</th>
          </tr>
        </thead>
        <tbody>
        @foreach($content as $item)
          @foreach($item as $items)
          <tr class="cart_item">
            <td class="product-name">
              <div class="media">
                <img style="width:100px; height:50px;" class="pull-left" src="image/product/{{ $items->options->image }}" alt="ảnh">
                <div class="media-body">
                  <p class="font-large table-title">{{ $items->name }}</p>
                  <a class="table-edit" href="#">Edit</a>
                </div>
              </div>
            </td>

            <td class="product-price">
              <span class="amount">{{ $items->price }} VNĐ</span>
            </td>


            <td class="product-quantity">
              <a href="updatePlus/{{ $items->rowId }}/{{ $items->qty }}"> <button style="width: 40px; height: 25px;">+</button> </a>
              <a href="updateMinus/{{ $items->rowId }}/{{ $items->qty }}"> <button style="width: 40px; height: 25px;">-</button></a>
              <select name="product-qty" id="product-qty">
                <option value="{{ $items->qty }}">{{ $items->qty }}</option>
              </select>
            </td>

            <td class="product-subtotal">
              <span class="amount">@if(Auth::check()) -10% @else 0% @endif</span>
            </td>

            <td class="product-subtotal">
              <span class="amount">@if(Auth::check()) {{ $items->qty * $items->price * 9 /10 }}@else {{ $items->qty * $items->price }} @endif VNĐ</span>
            </td>

            <td class="product-remove">
              <a href="remove/{{ $items->rowId }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        @endforeach
        </tbody>

       
      </table>
      <!-- End of Shop Table Products -->
    </div>


    <!-- Cart Collaterals -->
    <div class="cart-collaterals">

      <div class="cart-totals pull-right">
        <div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>

        <div class="cart-totals-row"><span>Order Total:</span> <span>@if(Auth::check()) {{ $total*9/10 }} @else {{ $total }} @endif VNĐ</span></div>
      </div>

      <div class="clearfix"></div>
    </div>
    <!-- End of Cart Collaterals -->
    <div class="clearfix"></div>

  </div> <!-- #content -->
</div> <!-- .container -->


@endsection
