<!DOCTYPE html>
<html>
<head>
	<title>add.blade.php</title>
</head>
<body>
	<div>
	
    @foreach($fedoras as $f)
	<form action="/fedoras/save/{{{$f->id}}}" method="post">

       ID:{{$f->id}};<br>
       Username:<input name="name" value="{{{$f->name}}}"/><br>
       Password:<input name="password" value="{{{$f->password}}}"/><br>
       Email:<input name="email" value="{{{$f->email}}}"/><br>
       <input type="submit" value="保存"/>
	</form>
    @endforeach
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