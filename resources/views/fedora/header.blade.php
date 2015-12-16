<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	 <!-- <link href ="/css/boostrap.min.css" rel ="stylesheet" > -->

</head>
<body>
  <!-- Modal fo sign in -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content login">
          <img src="/image/logo_white.png" class="logo" alt="fedora">
          <h2>Log in to Myweb</h2>
          <form class="form-signin col-md-6 col-md-offset-3" role="form" method="post" action="/auth/login">
          <input type="hidden" name="_token" value="{{csrf_token()}}"> 
            <div class="form-signin">
              <label  for="email">Account email</label>
              <input type="text" class="form-control" id="email" name="name" maxlength="50" placeholder="Account email" value="">
              <label class="sr-only" for="pass">Password</label>
              <input type="password" class="form-control" id="pass" name="password" maxlength="20" placeholder="Password" value="" data-toggle="fixed-tooltip"> 
            </div>
             <br>
            <button class="btn btn-success btn-inline btn-lg" type="submit" name="commandSignin" value="1">Sign in</button>
            <button class="btn btn-success btn-inline btn-lg" type="submit" name="commandSignup" value="1">
                Sign up
            </button>
            <div class="loginLinks">
              <a href="https://manager.wasify.com/forgotten_password" rel="nofollow">Forgotten password?</a>
              <a href="#" rel="nofollow" data-toggle="modal" data-target="#signUp">Not a client yet? Try Fedora!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- Modal to contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLable">
  <div class="modal-dialog">
    <div class="modal-content contact">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
          <span aria-hidden="trun">&times;</span>
        </button>
        <h4 class="modal-title">Hello,Welcome To My Web,Please Enjoy It.</h4>
      </div>
      <div class="modal-body">
        <p>We are cordially invatiting for your arriving</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn- btn-lg" >
          <a href="#" rel="nofollow" data-toggle="modal" data-target="#login">Join Us</a>
        </button>
        <button type="button" class="btn btn-default btn-lg " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- page for header -->
	<div class="header">
		<div class="container container-responsed " id="splash">
			<div class="row" id="top">
				<div class="col-sm-2 col-xs-3" id="logo-col">
					<div class="text-center">
						<h1><a href="/fedora/index"><img src="/image/logo_white.png" style="width:152px; height:46px">
							<!-- <span>Fedora Developer Portal</span> -->
							</a>
						</h1>
					</div>
				</div>
				<div class="col-sm-5 col-xs-3">
					<ul class="nav nav-pills nav-fixed-top " role="navigation" id="nav"> 
						<li role="presentation">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" 
    						aria-haspopup="true" aria-expanded="false">Get Tools</a>
    					</li>
 					 	<li role="presentation" class="dropdown" id="mydropdown">
    						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" 
    						aria-haspopup="true" aria-expanded="false" >
 	     					Languages&Databases  <span class="caret"></span>
 	     					</a>
    						<ul class=" dropdown-menu" aria-labelledby="dropdownMenu2">
      							<li><a href="#">Home</a></li>
      							<li><a href="#">MySQL</a></li>
      							<li><a href="#">Oracle</a></li>
      							<li><a href="#">DB2</a></li>
   							</ul>
  						</li>
  						
  						<li class="try hidden-xs" role="presentation">
  							<a href="#" data-toggle="modal" data-target="#signUp">Try now for free</a>
  						</li>
              <li class="try visible-xs" role="presentation">
              	<a href="/en/signup">Try now for free</a>
              </li>	
					</ul>
				</div>

        <div class="col-sm-3 col-xs-3">
        <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right helpNav">
                    <li><a href="#" rel="nofollow" data-toggle="modal" data-target="#login">Log in</a></li>
                    <li><a href="#" rel="nofollow" data-toggle="modal" data-target="#contact">Contact</a></li>
                    <li class="hidden-xs">
                    <div class="langSelector btn-group" role="group">
                      <a data-toggle="dropdown" class="btn btn-info">
                          <img src="/image/flag-uk.png" alt="english">
                         </a>
                        <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <li><a href="/es/index">Español</a></li>
                        <li><a href="/">English</a></li>
                        </ul>
                    </div>
                  </li>
              </ul>
          </div>  
      </div>

				<div class="col-sm-2 col-xs-3 ">
					<form class="input-group text-right" id="search" method="get" action="#">
      					<input type="text" class="form-control" placeholder="Search for...">
     				 	<span class="input-group-btn">
       						<button class="btn btn-default" type="button" >
       							<span class=" glyphicon glyphicon-search" aria-hidden="true"></span>
     				 		</button>
     				 	</span>
     				 <form>	
				</div>
			
	</div>

			<div class="row" id="headliness">
				<div class="col-sm-12 col-xs-12 text-center">
					<h2>The happy workstation you've been waiting for.</h2>
				</div>
				<div class="col-sm-12 col-xs-12 text-center mobile ">
					<h3>From mobile apps to web; from desktop GUIs to CLI tools. Create it all easily with Fedora.</h3>	
				</div>
			</div>
			<div class="row" id="attribution">
				<div class="col-sm-12 col-xs-12 text-left">
					<a href="https://www.flickr.com/photos/duald/7423940266/">Happy Union</a> by 
					<a href="https://www.flickr.com/photos/duald/">Little Ping</a> on GZPYP, 2015-11-21.
				</div>		
			</div>

<!-- wrapper -->
  <div class="wrapper">
    <h1 id="top-title">STOP WAITING.GET START.JOIN US</h1>
    <div id="small-line"></div>
    <div class="container container-responsed " id="four-apps">
      <div class="col-sm-3 col-xm-6 circle-icon circle-2">
        <a href="#">
          <button class="button button-glow button-circle button-action button-jumbo">
            <i class="fa fa-thumbs-up"></i>
          </button>
        </a>
        <h4><a href="#">Perfet View</a></h4>
      </div>
      <div class="col-sm-3 col-xm-6 circle-icon circle-2">
        <a href="#">
          <button class="button button-primary button-circle button-giant button-longshadow">
              <i class="fa fa-gear"></i>
          </button>
        </a>
       <h4><a href="#">Seting Options</a></h4>
      </div>
      <div class="col-sm-3 col-xm-6 circle-icon circle-2">
        <a href="#">
            <button class="button button-royal button-circle button-giant">
             <i class="fa fa-plus"></i>
            </button>
        </a>
       <h4> <a href="#">Join Us</a></h4>
      </div>
      <div class="col-sm-3 col-xm-6 circle-icon circle-2">
        <a href="#">
            <span class="button-wrap">
               <button class="button button-circle">
               <i class="fa fa-cloud"></i>
               </button>
             </span>
         </a>
       <h4> <a href="#">Cloud Share</a></h4>
      </div>
    </div>
   </div>
  </div>
</div>

</body>
</html>