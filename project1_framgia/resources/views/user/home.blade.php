@extends('layouts.user.app')

@section('content')
<!-- slider -->
<h1 class="page-header"></h1>
<div class="row">
	<div class="col-md-8">
		<div class="col-md-8">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img class="slide-image img-responsive" src="{{ url('image/image-main/ronaldo-2012.jpg') }}" alt="">
						<div class="carousel-caption">
							<h2>Caption 1</h2>
						</div>
					</div>
					<div class="item">
						<img class="slide-image img-responsive" src="{{ url('image/image-main/er1-2012.jpg') }}" alt="">
						<div class="carousel-caption">
							<h2>Caption 1</h2>
						</div>
					</div>
					<div class="item">
						<img class="slide-image img-responsive" src="{{ url('image/image-main/er3-2012.jpg') }}" alt="">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="col-md-4">

			<!-- item -->
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-5 col-sm-2 col-xs-2">
					<a href="detail.html">
						<img class="img-responsive" src="image/320x150.png" alt="">
					</a>
				</div>
				<div class="col-md-7 col-sm-10 col-xs-10">
					<a href="#"><b>Project Five</b></a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="break"></div>
			</div>
			<!-- end item -->

			<!-- item -->
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-5 col-sm-2 col-xs-2">
					<a href="detail.html">
						<img class="img-responsive" src="image/320x150.png" alt="">
					</a>
				</div>
				<div class="col-md-7 col-sm-10 col-xs-10">
					<a href="#"><b>Project Five</b></a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="break"></div>
			</div>

			<div class="row" style="margin-top: 10px;">
				<div class="col-md-5 col-sm-2 col-xs-2">
					<a href="detail.html">
						<img class="img-responsive" src="image/320x150.png" alt="">
					</a>
				</div>
				<div class="col-md-7 col-sm-10 col-xs-10">
					<a href="#"><b>Project Five</b></a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="break"></div>
			</div>
			<!-- end item -->
		</div>

		<div class="col-md-12">
			<div class="space20"></div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
					<div class="thumbnail">
						<img src="{{ url('image/hinh2.jpg') }}" class="img-responsive slide-icon">
						<div class="caption">

							<h4><a href="#">First Product</a>
							</h4>
							<p>See more snippets like.</p>
						</div>
						<div class="ratings">
							<p>15 reviews</p>

						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
					<div class="thumbnail">
						<img src="{{ url('image/hinh1.jpg') }}" class="img-responsive slide-icon">
						<div class="caption">
							<h4><a href="#">First Product</a>
							</h4>
							<p>See more snippets ...</p>
						</div>
						<div class="ratings">
							<p>15 reviews</p>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
					<div class="thumbnail">
						<img src="{{ url('image/hinh2.jpg') }}" class="img-responsive slide-icon">
						<div class="caption"> 
							<h4><a href="#">First Product</a>
							</h4>
							<p>See more snippets ...</p>
						</div>
						<div class="ratings">
							<p>15 reviews</p>

						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
					<div class="thumbnail">
						<img src="{{ url('image/hinh1.jpg') }}" class="img-responsive slide-icon">
						<div class="caption">

							<h4><a href="#">First Product</a>
							</h4>
							<p>See more snippets ...</p>
						</div>
						<div class="ratings">
							<p>15 reviews</p>

						</div>
					</div>
				</div>
			</div>

			<div class="space20"></div>
		</div>


		<h1 class="page-header">      
			Tin Moi  
		</h1>
		<div class="row-item row">

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/image-main/er3-2012.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT<sup>2</sup></h4>
				<p class="marg">Logo design, Branding, Interface design, Illustration, Icon design, Animation</p>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>



		</div>


		<h1 class="page-header">      
			Ngoai hang
		</h1>
		<div class="row-item row">

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/image-main/er3-2012.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT<sup>2</sup></h4>
				<p class="marg">Logo design, Branding, Interface design, Illustration, Icon design, Animation</p>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<a href="detail.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<a href="#"><b>Project Five</b></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="break"></div>
				</div>
			</div>
			<div class="break"></div>
		</div>
	</div>

	{{-- right --}}
	<div class="col-md-4">

		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
			<div class="thumbnail">
				<img src="{{ url('image/hinh4.jpg') }}" class="img-responsive slide-icon">
				<div class="caption">
					<h4><a href="#">First Product</a>
					</h4>
					<p>See more snippets like.</p>
				</div>
				
			</div>
		</div>


		<h1 class="page-header" style="font-size: 30px; font-family: -webkit-body;">      
			Tin doc nhieu nhat
		</h1>
		<div class="row-item row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/image-main/er3-2012.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT<sup>2</sup></h4>
				<p class="marg">Logo design, Branding, Interface design, Illustration, Icon design, Animation</p>
			</div>
		</div>

		<div class="space20"></div>
		<div class="row row-item">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/hinh2.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT sfsf</h4>
				<p class="marg">Logo design, Branding, Interfacedad</p>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/hinh1.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT<sup>2</sup></h4>
				<p class="marg">Logo design, Branding, Interface design, I</p>
			</div>

		</div>

		<div class="row row-item">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/hinh2.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT sfsf</h4>
				<p class="marg">Logo design, Branding, Interfacedad</p>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<div class="icon-slide-container">
					<a href="http://roxannekoranda.com/LT2.html">
						<img src="{{ url('image/hinh1.jpg') }}" class="img-responsive slide-icon" title="LT2" alt="LT2">
					</a>
				</div>
				<h4>LT<sup>2</sup></h4>
				<p class="marg">Logo design, Branding, Interface design, I</p>
			</div>

		</div>

		<div class="space20"></div>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><b>Tin khac</b></div>
				<div class="panel-body">
					<!-- item -->
					<div class="row">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<div class="break"></div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="row">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<div class="break"></div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="row">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<div class="break"></div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="row">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
					</div>
					<!-- end item -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
</div>

@stop
