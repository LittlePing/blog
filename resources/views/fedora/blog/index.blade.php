<!DOCTYPE html>
<html>
<head>
	<title>{{config('blog.title')}}</title>
	 <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1><a href="/fedora/backgroud">{{config('blog.title')}}</a></h1>
		<h5>Page{{$articles->currentPage()}}of{{$articles->lastPage()}}</h5>
		<hr>
		<ul>
			@foreach($articles as $article)
			<li>
				<a href="/blog/{{$article->slug}}">{{$article->title}}</a>
				<em>{{$article->pushlished_at}}</em>
				<p>
					{{str_limit($article->content)}}
				</p>
				@endforeach
			</li>
		</ul>
		<hr>
		{!!$articles->render()!!}
	</div>
</body>
</html>