@extends('fedora.blog.admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row page-title-row">
		<div class="col-md-12">
			<h3>Tags<small>>>Create Tag</small></h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="pannel-title">New Tag </h3>
				</div>
				<div class="panel-body">
					@include('fedora.blog.admin.partials.errors')
					<form class="form-horizontal" action="/admin/tag/"  role="form" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-group">
								<label for="tag" class="col-md-3 control-label">Tag</label>
								<div class="col-md-3">
									<input type="text" name="tag" class="form-control" id="tag" value="{{$tag}}" autofocus>
								</div>
							</div>

							@include('fedora.blog.admin.tag._form')
						
							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<button type="submit" class="btn btn-primary btn-md">
										<i class="fa fa-plus-circle"></i>
										Add Tag
									</button>
								</div>
							</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>

@stop