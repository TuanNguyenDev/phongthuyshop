<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>404 error</title>
    <link href="{{asset('page_fail/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('page_fail/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('page_fail/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('page_fail/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('page_fail/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('page_fail/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('page_fail/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<div class="container text-center">
		<div class="logo-404">
			<a href="index.html"><img src="{{ asset('images/logo_main.png') }}" alt="" /></a>
		</div>
		<div class="content-404">
			{{-- <img src="{{asset('page_fail/images/404/404.png')}}" height="200px" class="" alt="" /> --}}
			<h1><b>Oh!</b> Không có bản ghi nào cả</h1>
			<h2><a href="{{route('back.url')}}">Trở lại</a></h2>
		</div>
	</div>

  
    <script src="{{asset('page_fail/js/jquery.js')}}"></script>
	<script src="{{asset('page_fail/js/price-range.js')}}"></script>
    <script src="{{asset('page_fail/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('page_fail/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('page_fail/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('page_fail/js/main.js')}}"></script>
</body>
</html>