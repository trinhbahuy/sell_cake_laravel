@extends('layout.master')

@section('content')
  <div class="container">
  <div id="content">

    <div class="table-responsive">
      <!-- Shop Products Table -->
      <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
          <tr>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Qty.</th>
            <th class="product-subtotal">Total</th>
            <th class="product-remove">Remove</th>
          </tr>
        </thead>
        <tbody>
        @foreach($content as $item)
          <tr> <td colspan="4"> hello <td> </tr>
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
              <span class="amount">{{ $items->price }}</span>
            </td>


            <td class="product-quantity">
              <a href="updatePlus/{{ $items->rowId }}/{{ $items->qty }}"> <button style="width: 40px; height: 25px;">+</button> </a>
              <a href="updateMinus/{{ $items->rowId }}/{{ $items->qty }}"> <button style="width: 40px; height: 25px;">-</button></a>
              <select name="product-qty" id="product-qty">
                <option value="{{ $items->qty }}">{{ $items->qty }}</option>
              </select>
            </td>

            <td class="product-subtotal">
              <span class="amount">{{ $items->qty * $items->price }}</span>
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

        <div class="cart-totals-row"><span>Order Total:</span> <span>{{ $total }}</span></div>
      </div>

      <div class="clearfix"></div>
    </div>
    <!-- End of Cart Collaterals -->
    <div class="clearfix"></div>

  </div> <!-- #content -->
</div> <!-- .container -->


@endsection
