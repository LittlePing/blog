<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>{{config('blog.title')}}</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	@yield('styles')
	<!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
</head>
<body>
		{{--Navigation Bar--}}
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">{{config('blog.title')}}</a>

				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					@include('fedora.blog.admin.partials.navbar')
				</div>
			</div>
		</nav>

		@yield('content')
		 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
   		 <script src="/js/bootstrap.min.js"></script>
  
		  <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        @yield('script')
</body>
</html>