<!DOCTYPE html>
<html>
<head>
	<title>index.blade.php</title>
</head>
<body>
	<div>
	   <table>
	    <th>ID</th>
	    <th>Title</th>
	    <th>Content</th>
      @foreach($posts as $p)
	    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{$p->content}}</td>
        </tr>
     @endforeach
	   </table>
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