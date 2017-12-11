
@extends('layout.master')

@section('content')

<div class="beta-map">

		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTUI0pYSO12ZkvMPHd0Or_kfAG-Lgc4f0&q=Trần+Duy+Hưng,+Hà+Nội,+Việt+Nam" ></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">

			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Nhận mọi thông tin liên hệ, phản hồi về chất lượng dịch vụ, sản phẩm, góp ý khác hàng!</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Họ tên">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email ">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Lời nhắn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>THÔNG TIN LIÊN HỆ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						Số 1 Đại Cồ Việt,<br>
						Quận Hai Bà Trưng <br>
						Hà Nội.
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Thông tin:</h6>
					<p>
						Tel: 04-xxxx-xxxx <br>
						Fax: 04.xxxx.xxxx <br>
						<a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
					</p>
					<div class="space20">&nbsp;</div>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->


  @endsection
