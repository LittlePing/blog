<!DOCTYPE html>
<html>
<head>
	<title>tabs.blade.php</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<h1 id="tabs" class="page-header"><a href="#">Toggle Tabs</a><small>tab.js</small></h1>
	<h2 id="tabs-example"><a href="#">Example tabs</a></h2>
	<p>Add quick,dynamic tab functionality to transition through panes of local content,even via dropdown menus.<strong>netase tabs are no supported.</strong></p>
	<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
		<ul id="myTabs" class="nav nav-tabs" role="tablist">
			<li class="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
			<li class="presentation" class=""><a href="#profile" role="tab" id="profile-id" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
			<li class="presentation" class="dropdown">
				<a href="#dropdown" role="tab" id="myDropdown1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">
					Dropdown<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
					<li class="">
						<a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
					</li>
					<li class="active">
						<a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a>
					</li>
					<li class="">
						<a href="#dropdown3" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown3">@littleping</a>
					</li>
				</ul>
			</li>
		</ul>
		<div>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab">
					<p>Raw denim you probably haven't heard of the
					m jean shorts Austin. Nesciunt tofu stu
					mptown aliqua, retro synth master cleanse.
					 Mustache cliche tempor, williamsburg car
					 les vegan helvetica. Reprehenderit butcher retro keffiyeh dreamc
					 atcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
					 Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel,
					  butcher voluptate nisi qui.
					  </p>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
					 Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four lo
					 ko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk ali
					 quip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magn
					 a delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. 
					 Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical c
					 ulpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapi
					 ente accusamus tattooed echo park.
					 </p>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
					<p>Etsy mixtape wayfarers, et
					hical wes anderson tofu before they sold out mcsweeney's 
					organic lomo retro fanny pack lo-fi farm-to-table readymade.
					 Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
					 locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. 
					 Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free,
					  carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably
					   haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
					 </p>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
					<p>Etsy mixtape wayfarers, et
					hical wes anderson tofu before they sold out mcsweeney's 
					organic lomo retro fanny pack lo-fi farm-to-table readymade.
					 Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
					 locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. 
					 Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free,
					  carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably
					   haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
					 </p>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dropdown3" aria-labelledby="dropdown3-tab">
					<p>Etsy mixtape wayfarers, et
					hical wes anderson tofu before they sold out mcsweeney's 
					organic lomo retro fanny pack lo-fi farm-to-table readymade.
					 Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
					 locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. 
					 Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free,
					  carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably
					   haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
					 </p>
				</div>

			</div>		
		</div>
	</div>
	 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>