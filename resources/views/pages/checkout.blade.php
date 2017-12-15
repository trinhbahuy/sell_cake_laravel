@extends('layout.master')

@section('content')

<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Thanh Toán</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb">
        <a href="#">Home</a> / <span>Checkout</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
  @foreach($errors->all() as $error)
    <div class="alert alert-danger"> {{ $error }} </div>
  @endforeach
    <form action="checkout" method="post" class="beta-form-checkout">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-sm-6">
          <div class="space20">&nbsp;</div>

          <div class="form-block">
            <label for="your_last_name">Tên*</label>
            <input type="text" name="name" >
          </div>

          <div class="form-block">
            <label for="adress">Địa chỉ*</label>
            <input type="text" name="address" value="" >
          </div>

          <div class="form-block">
            <label for="email">Email*</label>
            <input type="email" name="email" >
          </div>

          <div class="form-block">
            <label for="phone">Số điện thoại*</label>
            <input type="text" name="phone" >
          </div>

          <div class="form-block">
            <label for="notes">Lưu ý: </label>
            <textarea id="notes" name="note"></textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="your-order">
            <div class="your-order-head"><h5>Hóa đơn của bạn</h5></div>
            <div class="your-order-body">
              <div class="your-order-item">
                <div>
                <!--  one item	 -->
                @foreach(Cart::content() as $item)
                  <div class="media">
                    <img width="35%" src="image/product/{{ $item->options->image }}" alt="" class="pull-left">
                    <div class="media-body">
                      <p class="font-large">{{ $item->name }}</p>
                      <span class="color-gray your-order-info">Số lượng: {{ $item->qty }}</span>
                    </div>
                  </div>
                @endforeach
                <!-- end one item -->
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="your-order-item">
                <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                <div class="pull-right"><h5 class="color-black">{{ Cart::subtotal(false) }}</h5></div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

            <div class="your-order-body">
              <ul class="payment_methods methods">

                <li class="payment_method_cheque">
                  <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
                  <label for="payment_method_cheque">Thẻ tín dụng </label>
                </li>

                <li class="payment_method_paypal">
                  <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="home" data-order_button_text="Proceed to PayPal">
                  <label for="payment_method_paypal">Trực tiếp tại nhà</label>
                </li>
              </ul>
            </div>

            <div class="text-center"><input type="submit" class="beta-btn primary" value="Thanh toán"> <i class="fa fa-chevron-right"></i></div>
          </div> <!-- .your-order -->
        </div>
      </div>
    </form>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
