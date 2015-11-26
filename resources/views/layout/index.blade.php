<!--存放在resource/views/layout/index.blade.php-->

@extends('layout.master')
@section('title','My Website')


@section('nav')
<li>在页面显示的数据</li>
@stop

@section('sidebar')
	@parent 
	<p>This is my new sidebar</p>
@endsection

@section('content')
<p>this is a content div</p>

@endsection


<!-- 
@section('footer')
<p>The hello world</p>
@endsection -->


