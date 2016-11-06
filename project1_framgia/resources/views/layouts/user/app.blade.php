<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laravel</title>
    <link href="{{ asset('user_asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user_asset/my/css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('user_asset/my/css/shop-homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('user_asset/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('user_asset/bootstrap/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user_asset/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user_asset/my/js/my.js') }}"></script>
</head>

<style type="text/css">
	body{
		background: #f1f1f1;
	}
</style>
<body>

    <!-- header -->
    @include('layouts.user.header')
    <!-- end header -->

    <!-- Page Content -->
    <div class="container" style="background: #fff;">
        @yield('content')
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <div class="break" style="border-bottom: 10px solid #7d4f5e;"></div>
    @include('layouts.user.footer')
    <!-- end Footer -->
</body>
</html>
