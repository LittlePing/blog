
<!-- 存放在 resources/views/photo/child.blade.php -->
@extends('photo.new')

@section('title','This is a photo page!');

@section('sidebar')
@param
<p>Hello</p>
@endsection

@section('content')

<table>
<tr>
<th>Nu</th>
<th>Name</th>
<th>Prices</th>
</tr>
<tr>
@for($i=0;$i<count('products');$i++)
<td>{{$i}}</td>
<td>{{$products[$i]}}</td>
<td>{{$prices[$i]}}</td>
@endfor
</tr>
</table>
@endsection