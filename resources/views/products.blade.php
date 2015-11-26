<!DOCTYPE html>
<html>
<head>
	<title>getting.php</title>
</head>
<body>
	<div>
	<ul style="float:left">
		@foreach($products as $p)
		 <li>Product:{{$p}}</li>
		 @endforeach
	   </ul>
	<ul style="float:left;list-style:none">
		@foreach($prices as $pr)
		<li>
		Prices:{{$pr}}
		</li>
		@endforeach
	</ul> 
	</div>
</body>
</html>