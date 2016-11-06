@extends('layouts.user.app')

@section('content')

<h1 class="page-header">            
</h1>
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Moi nhat</a></li>
</ol>

<!-- row -->
<div class="row">
	<div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
		@include('user.tintuc.hotnewslist')
	</div>
	<div class="col-lg-7 col-sm-9 col-md-7 col-xs-9">

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="icon-slide-container">
				<a href="http://roxannekoranda.com/LT2.html">
					<img src="{{ url('image/image-main/er3-2012.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
				</a>
			</div>
			<h4>LT<sup>2</sup></h4>
			<p class="marg">Logo design, Branding, Interface design, Illustration, Icon design, Animation</p>
			<div class="space10"></div>
		</div>
		<div class="break"></div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			@for ($i = 0; $i < 5; $i++)
			<h3>Ban tin {!! $i !!}</h3>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
					<a href="detail.html">
						<img class="img-responsive" src="{{ url('image/hinh1.jpg') }}" alt="">
					</a>
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
			</div>
			<div class="break"></div>
			@endfor
		</div>
	</div>

	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
		@include('user.tintuc.many_read_news')
	</div>
</div>
<!-- end row -->
@stop
