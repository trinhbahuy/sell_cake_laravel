@extends('layout.master')

@section('content')
  <div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-4">
            <img src="image/product/{{ $product->image }}" alt="">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title">{{ $product->name }}</p>
              <p class="single-item-price">
                <span>{{ $product->unit_price }} VNĐ</span>
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
              <p>{{ $product->description }}</p>
            </div>
            <div class="space20">&nbsp;</div>

            
            <div class="single-item-options">
              <a class="add-to-cart" href="product/{{ $product->id }}"><i class="fa fa-shopping-cart"></i></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Related Products</h4>

          <div class="row">
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="product.html"><img src="assets/dest/images/products/4.jpg" alt=""></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">Sample Woman Top</p>
                  <p class="single-item-price">
                    <span>$34.55</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="product.html"><img src="assets/dest/images/products/5.jpg" alt=""></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">Sample Woman Top</p>
                  <p class="single-item-price">
                    <span>$34.55</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-item">
                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                <div class="single-item-header">
                  <a href="#"><img src="assets/dest/images/products/6.jpg" alt=""></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">Sample Woman Top</p>
                  <p class="single-item-price">
                    <span class="flash-del">$34.55</span>
                    <span class="flash-sale">$33.55</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Best Sellers</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">New Products</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

@endsection
