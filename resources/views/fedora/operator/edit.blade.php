
<html>
<head>
	<title>edit.blade.php</title>
</head>
<body>
	<div>
	<form action="/fedora/save/{{$fedoras['id']}}" >
       ID:<input name="id" value="{{$fedoras['id']}}"/><br>
       Username:<input name="name" value="{{$fedoras['name']}}"/><br>
       Password:<input name="password" type="password" value="{{$fedoras['password']}}"/><br>
       Email:<input name="email" value="{{$fedoras['email']}}"/><br>
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