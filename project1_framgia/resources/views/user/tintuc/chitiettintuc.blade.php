@extends('layouts.user.app')

@section('content')

<!-- Page Content -->
<h1 class="page-header"></h1>
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Chi tiet</a></li>
</ol>
<hr>
<div class="row">
	{{-- list hot news --}}
	<div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
		@include('user.tintuc.hotnewslist')
	</div>

	<div class="col-lg-7 col-sm-9 col-md-7 col-xs-9">
		<h2 style="font-weight: bold; font-family: fantasy; margin-top: 0px !important ">Tieu de bai viet</h2>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<ol class="breadcrumb" style="text-align: right;">
				<span>{!! date('H:t:s d/m/y') !!}</span>
			</ol>
			<div class="icon-slide-container">
				<a href="http://roxannekoranda.com/LT2.html">
					<img src="{{ url('image/image-main/er3-2012.jpg') }}" class="img-responsive slide-icon">
				</a>
			</div>
			<h4>LT<sup>2</sup></h4>
			<p class="marg">Logo design, Branding, Interface design, Illustration, Icon design, Animation</p>
			<div class="space10"></div>
		</div>
		<div class="break"></div>		
		<div>
			Thua Leverkusen 0-1 ngay trên sân nhà Wembley rạng sáng 3-11 và rơi lại phía sau đội bóng Đức trong cuộc đua vào vòng 1/8 Champions League, khủng hoảng nhẹ có vẻ như đã bắt đầu ập đến với Tottenham khi mọi đường đua đang thực sự nóng lên.
		</div>
		<div>
			Cho đến nay, Tottenham vẫn tự hào là đội bóng duy nhất chưa để thua trận nào ở Giải Ngoại hạng Anh sau 10 vòng đấu. Chỉ có điều, phân nửa số trận đã đấu chỉ giành được kết quả hòa, kéo lùi thành tích chung của Tottenham. Vị trí thứ 5 trên bảng tổng sắp tạm thời - kém nhóm dẫn đầu 3 điểm - phản ánh đúng thực lực và cả tham vọng của đội bóng thành London.
		</div>
		<div>
			HLV tài năng, dàn cầu thủ nhiều “sao số” và không thiếu nhân tố nổi bật như chân sút H.Kane hay trung vệ T.Alderweireld, cái thiếu lớn nhất của Tottenham chính là đẳng cấp của một tập thể luôn khao khát thành công, thậm chí chiến thắng ở cấp độ cao nhất. “Gót chân Achilles” của Tottenham mùa này bộc lộ sớm hơn, đặc biệt sau khi họ đánh bại ứng viên nặng ký Man City trên sân nhà.
		</div>

		<div class="right-text">
			<h6>Nguon: Nguyen Van A</h6>

			<h6>Ha Noi</h6>
		</div>

		{{-- form comment --}}
		<div class="well">
			<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
			<form role="form">
				<div class="form-group">
					<textarea class="form-control" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Gửi</button>
			</form>
		</div>
		<hr>
		<!-- Posted Comments -->

		<!--  Comment -->
		<div style="height: 300px; overflow: auto;">
			@for ($i = 0; $i < 3; $i++)
			<div  class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/64x64" alt="">
				</a>
				<div class="media-body">
					<h4 class="media-heading">nguyen van a
						<small>August 25, 2014 at 9:30 PM</small>
					</h4>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
				</div>
			</div>
			@endfor
		</div>
		<!-- end comment -->
	</div>

	{{-- tin doc nhieu nhat --}}
	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
		@include('user.tintuc.many_read_news')
	</div>
</div>

<!-- end Page Content -->
<style type="text/css">
	.breadcrumb{
		border-radius: 0px !important;
	}
	.breadcrumb span{		
		font-size: smaller;
	}
</style>
@stop
