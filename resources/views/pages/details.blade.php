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
          <h4>Sản phẩm cùng loại</h4>

          <div class="row">
          @foreach($same_type as $same)
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="details/{{ $same->id }}"><img src="image/product/{{ $same->image }}" alt=""></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title"> {{ $same->name }}</p>
                  <p class="single-item-price">
                    <span>{{ $same->unit_price }} VND</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="product/{{ $same->id }}"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="details/{{ $same->id }}">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Sản phẩm bán chạy</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
            @foreach($noibat as $best_seller)
              <div class="media beta-sales-item">
                <a class="pull-left" href="details/{{ $best_seller->id }}"><img src="image/product/{{ $best_seller->image }}" alt=""></a>
                <div class="media-body">
                  {{ $best_seller->name }}
                  <span class="beta-sales-price">{{ $best_seller->unit_price }} VND</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

@endsection
