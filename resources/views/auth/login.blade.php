
@extends('fedora.motherpage')

<!-- filling the title -->
@section('title','fedora')

<!-- filling the content -->
@section('content')
  <!-- show the error message -->
    @if (count($errors)>0)
    	<div class="alert alert-danger">
    		<ul style="color:red;">
    			@foreach($errors->all() as $error)
    			<li>
    				{{$error}}
    			</li>
    			@endforeach
    		</ul>
    	</div>
	@endif 

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="sign-up">
				<form action="/auth/login" method="POST" >
				<!-- crsf protection -->
					<div style="display:none">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<!-- 						{{!!csrf_field()!!}}
 -->				</div>
 					<div class="form-group text-center">
 						<div class="github">
 							<a href="#" role="button" class="btn btn-block track-action  "  >
 								<h3 class="github-icon icon ">Login With Github</h3>
 							</a>
 						</div>
 					</div>
 					<div class="sperator">
 						<span></span>
 					</div>
					
					<div class="form-group group-control">
						<div class="control">
							<label for="InputUsername">Username</label>
							<input class="form-control" id="username" 
							placeholder="Username" type="text" value="" name="name">
						</div>
					</div>
					<div class="form-group group-control">
						<div class="control">
							<label for="InputPassword">Password</label>
							<input class="form-control" id="password" 
							placeholder="Password" value="" type="password" name="password">
						</div>
					</div>

					<div class="form-group ">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember">Remember password
							</label> 
						</div>
					</div>
					<div class="form-group text-center">
						<div>
							<button class="btn-lg btn-success track-action btn-block" type="submit" value="Sign Up"/>Login</a>
						</div>
					</div>
				
					 <div class="form-group">
                        <div class="">
                            <p>
                                By clicking "Login" I agree to the
                                <a href="https://keen.io/tos" target="_blank">Terms of Service</a>
                                and
                                <a href="https://keen.io/privacy-policy" target="_blank">Privacy Policy</a>.
                            </p>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
@endsection
<!-- filling the footer -->
@section('footer')
@endsection


