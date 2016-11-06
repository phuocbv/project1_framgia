<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('admin_asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_asset/dist/css/menu.css') }}" rel="stylesheet">
	<script src="admin_asset/js/jquery/dist/jquery.min.js"></script>
	 <script src="{{ asset('admin_asset/dist/js/menu.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin Area - Khoa Phạm</a>
    </div>
    <!-- /.navbar-header -->

    {{-- <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul> --}}
</nav>
<div class="col-lg-3 menu">

	<div class="list-group col-lg-10 menu-group">
	  <a href="javascript:void(0)" class="list-group-item active">
	    Cras justo odio
	  </a>
	
	  <div class="menu-item">
		  <a href="#" class="list-group-item">
		  	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>   
		  	Dapibus ac facilisis in 
		  	<span class="fa arrow"></span> 
		  </a>
		  <a href="#" class="list-group-item">
		  	Morbi leo risus 
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  	</a>
		  <a href="#" class="list-group-item">
		  	Porta ac consectetur ac
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  </a>
		  <a href="#" class="list-group-item">
		  	Vestibulum at eros 
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  </a>
	  </div>


	  <a href="#" class="list-group-item active">
	    Cras justo odio
	  </a>
	  <div>
		  <a href="#" class="list-group-item">
		  	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>   
		  	Dapibus ac facilisis in 
		  	<span class="fa arrow"></span> 
		  </a>
		  <a href="#" class="list-group-item">
		  	Morbi leo risus 
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  	</a>
		  <a href="#" class="list-group-item">
		  	Porta ac consectetur ac
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  </a>
		  <a href="#" class="list-group-item">
		  	Vestibulum at eros 
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  </a>
	  </div>
	</div>{{ date('d-m-y') }}

</div>
</body>
</html>