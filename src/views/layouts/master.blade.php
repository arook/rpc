<!doctype html>
<html lang="{{ Config::get('application.language') }}">
<head>
	<meta charset="utf-8">
	<title>Dashboard :: RPC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">    
	<meta name="description" content="RPC">
	<meta name="author" content="">
	
	@section('css')
	
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/bootstrap.min.css') }}" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/bootstrap-responsive.min.css') }}" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/font-awesome.min.css') }}" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/ui-lightness/jquery-ui-1.10.0.custom.min.css') }}" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/base-admin-2.css') }}" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('packages/bluebanner/rpc/css/base-admin-2-responsive.css') }}" type="text/css" media="screen" charset="utf-8">
	
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	@show

	<!-- The fav icon -->
	<link rel="shortcut icon" href="">
		
</head>

<body>
	@include('rpc::lib.navbar')
	
	<div class="main">
	    <div class="container">
	      <div class="row">
					@yield('content')
				</div>
			</div>
	</div>
	
	@include('rpc::lib.extra')
	@include('rpc::lib.foot')
	@section('script')
	
	<script type="text/javascript" charset="utf-8" src="{{ asset('packages/bluebanner/rpc/js/libs/jquery-1.8.3.min.js')}}"></script>
	<script type="text/javascript" charset="utf-8" src="{{ asset('packages/bluebanner/rpc/js/libs/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script type="text/javascript" charset="utf-8" src="{{ asset('packages/bluebanner/rpc/js/libs/bootstrap.min.js')}}"></script>
	<script type="text/javascript" charset="utf-8" src="{{ asset('packages/bluebanner/rpc/js/Application.js')}}"></script>
	
	@show

</body>
</html>