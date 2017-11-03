@extends('layout.master')

@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="trangchu">Home</a> / <span style="color: blue"> <b>{{ $type_sp->name }} </b></span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
						@foreach($tenbanh as $allname)
							<li><a href="#">{{ $allname->name }}</a></li>
						@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{ $sanpham->count() }} sản phẩm </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sanpham as $sp)
								<div class="col-sm-4" style="padding:20px">
									<div class="single-item">
										<div class="single-item-header" style="height:200px">
											<a href="product/{{ $sp->id }}"><img src="image/product/{{ $sp->image }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $sp->name }}</p>
											<p class="single-item-price">
												<span>{{ $sp->unit_price }}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="product/{{ $sp->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html"> Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div> <!-- .beta-products-list -->


							<div class="space40">&nbsp;</div>

						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
  @endsection
