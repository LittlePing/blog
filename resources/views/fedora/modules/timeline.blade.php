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
    <!-- <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
 -->
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
                                <img src="/image/288428.jpg" alt="image" class="img-circle" width="60" height="60">
                            </span>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs">
                                            <strong class="font-bold">LittlePing</strong>
                                        </span>
                                        <span class="text-tumed text-xs block">admin<b class="caret"></b></span>
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
                                <li><a href="/auth/login">安全退出</a>
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
                            <a href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span><span class="label label-danger pull-right">2.0</span></a>
                             </li>
                            <li>
                            <li><a href="toastr_notifications.html">用户管理</a>
                            </li>
                            <li><a href="nestable_list.html">博客管理</a>
                            </li>
                            <li><a href="timeline_v2.html">时间轴</a>
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

         <!-- top-link -->
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
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                </ul>
            </div>

            <!-- content start -->
            <div class="col-md-10">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Timeline</li>
                </ol>
            </div>
        
             <div class="col-md-10">
                <div class="container">
                    <ul class="timeline">
                        <li>
                          <div class="timeline-badge up"><i class="fa fa-thumbs-up"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Time Line Entry #1</h4>
                            </div>
                            <div class="timeline-body">
                              <p>Time line content is placed here...</p>
                            </div>
                          </div>
                        </li>
                        <li>
                        <!---Time Line Element-->
                          <div class="timeline-badge down"><i class="fa fa-thumbs-down"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Time Line Entry #2</h4>
                            </div>
                            <div class="timeline-body"><!---Time Line Body&Content-->
                              <p>Time line content is placed here...</p>
                              <p>And some more Time line content </p>
                            </div>
                          </div>
                        </li>
                        <li><!---Time Line Element-->
                          <div class="timeline-badge neutral"><i class="fa fa-navicon"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Time Line Entry #3</h4>
                            </div>
                            <div class="timeline-body"><!---Time Line Body&Content-->
                              <p>Time line content is placed here...</p>
                              <p>This appears to be a neutral time line enty...</p>
                            </div>
                          </div>
                        </li>
                        <li><!---Time Line Element-->
                          <div class="timeline-badge down"><i class="fa fa-thumbs-down"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Time Line Entry #4</h4>
                            </div>
                            <div class="timeline-body"><!---Time Line Body&Content-->
                              <p>Time line content is placed here...</p>
                              <p>And some more Time line content </p>
                            </div>
                          </div>
                        </li>
                        
                        <li><!---Time Line Element-->
                          <div class="timeline-badge up"><i class="fa fa-thumbs-up"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title">Time Line Entry #5</h4>
                            </div>
                            <div class="timeline-body"><!---Time Line Body&Content-->
                              <p>Time line content is placed here...</p>
                            </div>
                          </div>
                        </li>
                    </ul>
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