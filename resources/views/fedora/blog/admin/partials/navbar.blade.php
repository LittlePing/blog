<ul class="nav navbar-nav">
	<li><a href="/fedora/backgroud">Home</a></li>
	@if (Auth::check())
	<li @if (Request::is('/admin/articles*')) class="active" @endif>
		<a href="/blog/index">Articles</a>
	</li>
	<li @if (Request::is('/admin/tag*')) class="active" @endif>
		<a href="/admin/tag">Tags</a>
	</li>
	<li @if (Request::is('/admin/upload*')) class="active" @endif>
		<a href="/admin/upload">Upload</a>		
	</li>
@endif
</ul>

<ul class="nav navbar-nav navbar-right">
	@if(Auth::guest())
	<li><a href="/auth/login">Login</a></li>
	@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >	{{Auth::user()->name}}
			<span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" id="drop">
			<li><a href="/auth/logout">Logout</a></li>
		</ul>
	</li>
	@endif
</ul>