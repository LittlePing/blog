<!DOCTYPE html>
<html>
<head>
	<title>add.blade.php</title>
</head>
<body>
	<div>
	{{--<ul style="float:left">--}}
		{{--@foreach($posts as $p)--}}
	     {{--<li>ID:{{$p->id}}</li>--}}
		 {{--<li>Title:{{$p->title}}</li>--}}
		 {{--<li>Content:{{$p->content}}</li>--}}
		 {{--@endforeach--}}
	   {{--</ul>--}}
	{{--<ul style="float:left;list-style:none">--}}
		{{--@foreach($prices as $pr)--}}
		{{--<li>--}}
		{{--Prices:{{$pr}}--}}
		{{--</li>--}}
		{{--@endforeach--}}
	{{--</ul> --}}
    @foreach($posts as $p)
	<form action="/posts/save/{{{$p->id}}}" method="post">

       ID:{{$p->id}};<br>
       Title:<input name="title" value="{{{$p->title}}}"/><br>
       Content:<input name="content" value="{{{$p->content}}}"/><br>
       <input type="submit" value="保存"/>

	</form>
    @endforeach
	</div>
</body>
</html>