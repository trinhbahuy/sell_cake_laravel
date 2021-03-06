@extends('layout.master')

@section('content')
  <div class="rev-slider">
  <div class="fullwidthbanner-container">
          <div class="fullwidthbanner">
            <div class="bannercontainer" >
              <div class="banner" >
                <ul>
                  <!-- THE FIRST SLIDE -->
                  @foreach($slide as $img)
                  <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="5000" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                          <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src='image/slide/{{ $img->image }}' data-src="image/slide/{{ $img->image }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/{{ $img->image }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                          </div>
                        </div>

                    </li>
                  @endforeach
                </ul>
              </div>
            </div>

            <div class="tp-bannertimer"></div>
          </div>
        </div>
        <!--slider-->
  </div> <!-- slider -->

<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>Sản phẩm</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{ $sanpham->total() }} sản phẩm</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach ($sanpham as $product)
              <div class="col-sm-3" style="padding-top:20px">
                <div class="single-item" >
                  <div class="single-item-header" style="height: 200px">
                    <a href="details/{{ $product->id }}" ><img src="image/product/{{ $product->image }}" alt=""></a>
                  </div>
                  <div class="single-item-body" >
                    <p class="single-item-title">{{ $product->name }}</p>
                    <p class="single-item-price">
                      <span>{{ $product->unit_price }} VNĐ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="product/{{ $product->id }}"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="details/{{ $product->id }}"> Chi tiết <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div>
            {{ $sanpham->links() }}
          </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm nổi bật</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{ $noibat->total() }} sản phẩm</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              @foreach($noibat as $top)
              <div class="col-sm-3" style="padding-top:20px">
                <div class="single-item">
                  <div class="single-item-header" style="height: 200px">
                    <a href="product/{{ $top->id }}"><img src="image/product/{{ $top->image }}" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{ $top->name }}</p>
                    <p class="single-item-price">
                      <span>{{ $top->unit_price }} VNĐ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="product/{{ $top->id }}"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="details/{{ $top->id }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
            <div>
            {{ $noibat->links() }}
          </div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->   <!-- content -->

@endsection
