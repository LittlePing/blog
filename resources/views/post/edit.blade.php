
<html>
<head>
	<title>edit.blade.php</title>
</head>
<body>
	<div>
	<form action="/posts/save/{{$posts['id']}}" >
       ID:<input name="id" value="{{$posts['id']}}"/><br>
       Title:<input name="title" value="{{$posts['title']}}"/><br>
       Content:<input name="content" value="{{$posts['content']}}"/><br>
       <input type="submit" value="保存"/>
	</form>
	</div>
</body>
</html>
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