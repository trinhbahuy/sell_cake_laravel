@extends('layout.master')

@section('content')

<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>New Products</h4>
            <div class="beta-products-details">
              <p class="pull-left">438 styles found</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach ($sanpham as $product)
              <div class="col-sm-3" style="padding-top:20px">
                <div class="single-item" >
                  <div class="single-item-header" style="height: 200px">
                    <a href="product.html " ><img src="image/product/{{ $product->image }}" alt=""></a>
                  </div>
                  <div class="single-item-body" >
                    <p class="single-item-title">{{ $product->name }}</p>
                    <p class="single-item-price">
                      <span>{{ $product->unit_price }} VNĐ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div style="width:100%; margin:0 auto">
            {{ $sanpham->links() }}
          </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Top Products</h4>
            <div class="beta-products-details">
              <p class="pull-left">438 styles found</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/2.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span class="flash-del">$34.55</span>
                      <span class="flash-sale">$33.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="space40">&nbsp;</div>
            <div class="row">
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/2.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span class="flash-del">$34.55</span>
                      <span class="flash-sale">$33.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">Sample Woman Top</p>
                    <p class="single-item-price">
                      <span>$34.55</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->   <!-- content -->

@endsection
