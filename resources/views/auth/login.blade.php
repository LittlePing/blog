@extends('fedora.blog.admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Login
				</div>
				<div class="panel-body">
					@include('fedora.blog.admin.partials.errors')
				</div>
				<form action="{{url('/auth/login')}}" role="form" class="form-horizontal" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
					<!-- <div class="form-group">
						<label class="col-md-4 control-label" > Email Address</label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email" value="{{old('email')}}" autofocus>
						</div>
					</div>
 -->
					<div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" name="name">
                            </div>
                        </div>

					<div class="form-group">
						<label class="col-md-4 control-label" > Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<div class="col-md-6">
									<label>
									<input type="checkbox"  name="remember">Remember Me
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>