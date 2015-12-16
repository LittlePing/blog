<!DOCTYPE html>
<html>
<head>
	<title>{{$article->title}}</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h1>{{$article->title}}</h1>
		<h5>{{$article->published_at}}</h5>
		<hr>
			{!! nl2br(e($article->content))!!}
		<hr>
		<button class="btn btn-primary" onclick="history.go(-1)">
			<< Back
		</button>
	</div>
</body>
</html>