<!DOCTYPE html>
<html>
<head>
	<title>personal manager</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link href="/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
	<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
	<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

</head>
<body>
<div id="wrapper">
	  <div class="row">
	  	<div class="col-md-2">
			<nav class="navbar-default navbar-static-side navbar-invers" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li class="navbar-header" >
							<div class="dropdown profile-element">
							<span>
								<img src="/image/me/IMG_20151205_081903.jpg" alt="image" class="img-circle" width="60" height="60">
							</span>
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<span class="clear">
										<span class="block m-t-xs">
                                            @if(Auth::guest())
											<strong class="font-bold">Little Ping</strong>
										</span>
                                            @else 
										<span class="text-tumed text-xs block">{{Auth::user()->name}}<b class="caret"></b></span>
                                            @endif
									</span>
								</a>
								<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

							<ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li><a href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a href="profile.html">个人资料</a>
                                </li>
                                <li><a href="contacts.html">联系我们</a>
                                </li>
                                <li><a href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout">安全退出</a>
                                </li>
							</ul>
						</div>
						<!--  <div class="logo-element">
                           HelloTree
                        </div> -->
					</li>
				</ul>

				<div class="navbar-collapse">
				 <ul class="nav ">
				 	<div class="nav navbar-dropdown">
				  			<li>
                        	<a href="/"><i class="fa fa-columns"></i> <span class="nav-label">布局</span><span class="label label-danger pull-right">2.0</span></a>
                   			 </li>
                    		<li>
                            <li><a href="/fedora/table">用户管理</a>
                            </li>
                            <li><a href="/admin/">博客管理</a>
                            </li>
                            <li><a href="/fedora/timeline">时间轴</a>
                            </li>
                            <li><a href="forum_main.html">论坛</a>
                            </li>
                            <li><a href="code_editor.html"><i class="fa fa-columns"></i> <span class="nav-label">留言板</span><span class="label label-info pull-right">16</span></a>
                            </li>
                            <li><a href="modal_window.html">照片墙</a>
                            </li>
                            <li><a href="validation.html"><i class="fa fa-columns"></i> <span class="nav-label">邮箱</span><span class="label label-success pull-right">16</span></a>
                            </li>
                            <li><a href="tree_view_v2.html">树形视图</a>
                            </li>
                            <li><a href="chat_view.html">聊天窗口</a>
                            </li>
                            </li>
                 	 </div>
              	  </ul>
				</div>
			</div>
		</nav>
	</div>	

		<div class="col-md-3">
				<div class="wrapper-right">
					<nav class="navbar-default" role="navigation">
						<form class="navbar-form navbar-left" role="search">
 						<div class="form-group">
   							<input type="text" class="form-control" placeholder="Search">
  						</div>
 							 <button type="submit" class="btn btn-default">Search</button>
						</form>


						
					</nav>
				</div>
			</div>

		<div class="col-md-4 ">
						<ul class="nav navbar-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Article</a></li>
								<li><a href="#">Photos</a></li>
								<li><a href="#">Chat</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
					</div>



			<div class="col-md-3">
				<ul class="nav navbar-top-links navbar-left">
                        <li class="dropdown">
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 项目已处理完结
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 这是一条测试信息
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/auth/logout">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>
			</div>

			<div class="col-md-10">
			<div class="container" id="cnt1">
			    <div class="row feature">
			        <div class="col-md-4">
			            <div>
			                <img src="/image/mmexport1446795088521.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
			                <h2>Admin Portal</h2>
			                <p>
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
			                       tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
			                       Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
			                       Duis condimentum feugiat sollicitudin. Sed non lacinia turpis. 
			                       Proin gravida turpis consequat porta condimentum. 
			                       Nam consequat ultricies elit nec consectetur.                        
			                </p>
			                <a href="#" class="btn btn-success lower">See Feature details</a>
			            </div>
			        </div>

			        <div class="col-md-4">
			            <div>
			                <img src="/image/mmexport1448458317618.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
			                <h2>Project Portfolio</h2>
			                <p>
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
			                      tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
			                      Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
			                      Duis condimentum feugiat sollicitudin. Sed non lacinia turpis. 
			                      Proin gravida turpis consequat porta condimentum. 
			                      Nam consequat ultricies elit nec consectetur.       
			                </p>
			                <a href="#" class="btn btn-success lower">See Feature details</a>
			            </div>
			        </div>

			        <div class="col-md-4">
			            <div>
			                <img src="/image/ours/IMG.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
			                <h2>Personal Website</h2>
			                <p>
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
			                       tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
			                       Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
			                       Duis condimentum feugiat sollicitudin. Sed non lacinia turpis. 
			                       Proin gravida turpis consequat porta condimentum. 
			                       Nam consequat ultricies elit nec consectetur.       
			                </p>
			                <a href="#" class="btn btn-success lower">See Feature details</a>
			            </div>
			        </div>
			    </div>
			</div>
		</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="row">
					<div class="col-md-4">
						<div class="text-center">
							<span class="glyphicon glyphicon-phone"></span>
						</div>
						<h3>Friendly</h3>
						<p>Welcome to our family</p>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<span class="glyphicon glyphicon-phone"></span>
						</div>
						<h3>Friendly</h3>
						<p>Welcome to our family</p>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<span class="glyphicon glyphicon-phone"></span>
						</div>
						<h3>Friendly</h3>
						<p>Welcome to our family</p>
					</div>
				</div>
			</div>
		</div>


	<div class="section-colored text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Landing page - Architect portfolio</h2>
                <p>A sample landing page, which showcases a small portfolio of work done.</p>
                <hr/>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Our Family</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/288754.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289411.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289687.jpg" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289726.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289736.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289726.jpg" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289849.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/289962.jpg" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <img class="thumbnail img-responsive" alt="Bootstrap template" src="/image/360/290194.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
	<div class="row">
	 <div class="col-md-12">
		<div class="bgcontainer" style="margin-top: 10px;">
		   <!--  <div class="col-md-12 text-center">
		        <h1>Under Construction</h1>
		        <br />
		    </div>
		    <div class="col-md-12 text-center">
		        <h2>The site will be live in:</h2>
		        <br />
		    </div> -->
			<!--     <div class="col-md-2 hidden-xs"></div>
			    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
			        <div id="progress_days" style="background-color: transparent;" class="prg"></div>
			    </div>
			    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
			        <div id="progress_hours" style="background-color: transparent;" class="prg"></div>
			    </div>
			    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
			        <div id="progress_mins" style="background-color: transparent;" class="prg"></div>
			    </div>
			    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
			        <div id="progress_secs" style="background-color: transparent;" class="prg"></div>
			    </div> -->
		    <div class="row">

		        <div class="col-md-12 col-sm-12 col-xs-12 text-center text-center v-center">
		            <h1>Sign Up</h1>
		            <p class="lead">Enter your email to sign-up for our newsletter</p>
		            <br />
		            <form class="col-lg-12">
		                <div class="input-group" style="width: 340px; text-align: center; margin: 0 auto;">
		                    <input class="form-control input-lg" placeholder="Enter your email address" type="text" />
		                    <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
		                </div>
		            </form>
		        </div>
		    </div>
		    <br />
		    <br />
		    <div class="text-center">
		        <h1>Follow us</h1>
		    </div>
		    <div class="row">
		        <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
		            <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
		            <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
		            <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
		            <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
		        </div>       
		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
		<p>Copyright for@<a href="#"> Litte Ping</a> 2015</p>
	</div>
</div>

</div>
	<script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script type="text/javascript">
    jQuery(function ($) {
        // the date of the release - for example the below will set the release date to 
        // 1st of March (month is 0-based), 2100 at noon 12:00 o'clock
        // var release_date = new Date(2100, 2, 1, 12, 0, 0);
        // format is: new Date(year, month [, day, hour, minute, second, millisecond]);
        // (note that the month is 0-based).

        // for showcase purpose, we set the release date to be 10 days from the current time
        var release_date = new Date();
        release_date.setDate(release_date.getDate() + 10);

        var release_unixtime_ms = release_date.getTime(),
            total_days = Math.floor((release_unixtime_ms - (new Date()).getTime()) / (24 * 60 * 60 * 1000)),
            update_timer = null,
            progress_days,
            progress_hours,
            progress_mins,
            progress_secs;

        // define a function to initialize the progressbars
        function init_progressbars() {
            // set the width and height of each progressbar to the width of their container
            $(".prg").each(function () {
                $(this)
                    .width($(this).parent().width())
                    .height($(this).parent().width());
            });

            // initialize the progressbar widgets
            progress_days = $("#progress_days").shieldProgressBar({
                min: 0,
                max: total_days,
                value: total_days,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 30,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} days</span> '
                },
                reversed: true
            }).swidget();

            progress_hours = $("#progress_hours").shieldProgressBar({
                min: 0,
                max: 24,
                value: 24,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 23,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} hours</span> '
                },
                reversed: true
            }).swidget();

            progress_mins = $("#progress_mins").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 15,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} min</span> '
                },
                reversed: true
            }).swidget();

            progress_secs = $("#progress_secs").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 10,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} sec</span> '
                },
                reversed: true
            }).swidget();

            // restart the update timer
            clearInterval(update_timer);
            update_timer = setInterval(update_progressbars, 300);
        }

        function update_progressbars() {
            var total_remaining_seconds = Math.floor((release_unixtime_ms - (new Date()).getTime()) / 1000),
                remaining_days = Math.floor(total_remaining_seconds / (24 * 60 * 60));

            total_remaining_seconds = total_remaining_seconds % (24 * 60 * 60);
            var remaining_hours = Math.floor(total_remaining_seconds / (60 * 60));

            total_remaining_seconds = total_remaining_seconds % (60 * 60);
            var remaining_mins = Math.floor(total_remaining_seconds / 60);
            var remaining_secs = total_remaining_seconds % 60;

            // update the progressbars if new values are different
            if (remaining_days != progress_days.value()) {
                progress_days.value(remaining_days);
            }
            if (remaining_hours != progress_hours.value()) {
                progress_hours.value(remaining_hours);
            }
            if (remaining_mins != progress_mins.value()) {
                progress_mins.value(remaining_mins);
            }
            if (remaining_secs != progress_secs.value()) {
                progress_secs.value(remaining_secs);
            }
        }

        // call this function whenever the window size changes
        $(window).on("resize", init_progressbars);

        // init the progressbars now
        init_progressbars();
    });
</script>


</body>
</html>