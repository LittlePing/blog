<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	 <!-- critical -->
	<meta charset="utf-8">
	<meta content="IE-edge,chrome=1" http-equiv="X-UA-Compatible">
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1">
 -->	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/signinorup.css">

</head>
<body>
	<!-- header -->
	<div class="header">
		<nav class="navbar navbar-default nav-fixed-top navbar-invers" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><img src="/image/288428.jpg" width="20" height="20" class="img-circle"></a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Article</a></li>
						<li><a href="#">Photos</a></li>
						<li><a href="#">Chat</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<div class="btn-toolbar pull-right">
						<button class="btn navbar-btn" type="button">Login</a>
						<button  class="btn navbar-btn btn-danger-outline pull-right track-action" type="button">Sign up free</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<!-- content -->
	<div class="content">
		@yield('content')
	</div>
	<!-- footer -->
	@include('fedora.footer')



	 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  
</body>
</html>