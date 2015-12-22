@extends('admin.layout')

@section('content')
<div class="container-fluid">
	{{--Top Tool Bar--}}
	<div class="row page-title-row">
		<div class="col-md-6">
			<h3 class="pull-left">Uploads</h3>
			<div class="pull-left">
				<ul class="breadcrumb">
					@foreach ($breadcrumbs as $path => $disp)
					<li><a href="/admin/upload?folder={{$path}}">{{$disp}}</a></li>
					@endforeach
					<li class="active">{{$folderName}}</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-6 text-right">
		<button type="button" class="btn btn-success btn-md">
			
		</button>
	</div>	

</div>