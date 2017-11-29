<div id="header">
  <div class="header-top">
    <div class="container">
      <div class="pull-left auto-width-left">
        <ul class="top-menu menu-beta l-inline">
          <li><a href=""><i class="fa fa-home"></i> đại học BK Hà Nội</a></li>
          <li><a href=""><i class="fa fa-phone"></i> 0969 69 69 69 </a></li>
        </ul>
      </div>
      <div class="pull-right auto-width-right">
        <ul class="top-details menu-beta l-inline">
          <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
          <li><a href="register">Đăng kí</a></li>
          <li><a href="{{route('login')}}">Đăng nhập</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
    <div class="container beta-relative">
      <div class="pull-left">
        <a href="index.html" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
      </div>
      <div class="pull-right beta-components space-left ov">
        <div class="space10">&nbsp;</div>
        <div class="beta-comp">
          <form role="search" method="get" id="searchform" action="/">
                <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
          </form>
        </div>

        <div class="beta-comp">
          <div class="cart">
            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng ({{ Cart::count() }})<i class="fa fa-chevron-down"></i></div>
            <div class="beta-dropdown cart-body" style="width:40%">
              @foreach(Cart::content() as $item)
              <div class="cart-item">
                <div class="media">
                  <a class="pull-left" href="#"><img src="image/product/{{ $item->options->image }}" alt=""></a>
                  <div class="media-body">
                    <span class="cart-item-title">{{ $item->name }}</span>
                    <span class="cart-item-amount">{{ $item->qty }} chiếc: <span>{{ $item->qty * $item->price}}</span></span>
                  </div>
                </div>
              </div>
            @endforeach


              <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{ Cart::subtotal(false) }}</span></div>
                <div class="clearfix"></div>

                <div class="center">
                  <div class="space10">&nbsp;</div>
                  <a href="checkout" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div> <!-- .cart -->
        </div>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-body -->
  <div class="header-bottom" style="background-color: #0277b8;">
    <div class="container">
      <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
      <div class="visible-xs clearfix"></div>
      <nav class="main-menu">
        <ul class="l-inline ov">
          <li><a href="trangchu">Trang chủ</a></li>
          <li><a href="#">Sản phẩm</a>
            <ul class="sub-menu">
              @foreach($loaisanpham as $type)
              <li><a href="sanpham/{{ $type->id }}">{{ $type->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="about">Giới thiệu</a></li>
          <li><a href="contact">Liên hệ</a></li>
        </ul>
        <div class="clearfix"></div>
      </nav>
    </div> <!-- .container -->
  </div> <!-- .header-bottom -->
</div> <!-- #header -->
