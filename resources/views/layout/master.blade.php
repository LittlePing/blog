<!--存放在resource/views/layout/master.blade.php -->

<!DOCTYPE html>
<html lang="zh-CN">
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App-time -@yield('title')</title>
	<link href ="css/boostrap.min.css" rel ="stylesheet" >
</head>
<body>
@include('layout.header')
	@section('nav')
		<li>Home</li>
		<li>about</li>
	@show
	@section('sidebar')
    This is a siderbar.
	@show
    <div class="container">
    	@yield('content')

    </div>
    <div class="footer">
    	<p>hello everyone</p>
    </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

   		<script src="js/bootstrap.min.js"></script>

</body>
</html>
