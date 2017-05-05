

<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Lei Shi">
  <meta http-equiv="Cache-Control" content="o-transform">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="csrf-token" content="1494055056##1970034031ec91533ccfe7d77d53ba456719526a">


        <title>全部 - 课程 - 实验楼</title>




<meta content="实验楼课程分为基础课和项目课，内容涵盖了Linux、Python、Java、C语言、Ruby、Android、IOS开发、大数据、信息安全等IT技术领域。" name="description">
<meta content="实验楼课程,IT培训课程,IT实训课程,IT在线课程,all" name="keywords">

    <meta content="suyuting" name="author">

	<link rel="shortcut icon" href="https://static.shiyanlou.com/favicon.ico">
	<link rel="stylesheet" href="https://static.shiyanlou.com/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-switch/3.3.2/css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-tour/0.11.0/css/bootstrap-tour.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/katex/0.7.1/katex.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/videojs/5.15.1/css/video-js.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/highlight.js/9.9.0/css/monokai-sublime.min.css">

    <link rel="stylesheet" href="<?=base_url('resources/app/dist/css/styles.css')?>">

	<style>
		@font-face {
			font-family: "lantingxihei";
			src: url("https://static.shiyanlou.com/fonts/FZLTCXHJW.TTF");
		}

        /* modal 模态框*/
        #invite-user .modal-body {
            overflow: hidden;
        }
		#invite-user .modal-body .form-label {
			margin-bottom: 16px;
			font-size:14px;
		}
		#invite-user .modal-body .form-invite {
			width: 80%;
			padding: 6px 12px;
			background-color: #eeeeee;
			border: 1px solid #cccccc;
			border-radius: 5px;
			float: left;
			margin-right: 10px;
		}
		#invite-user .modal-body .msg-modal-style {
			background-color: #7dd383;
			margin-top: 10px;
			padding: 6px 0;
			text-align: center;
			width: 100%;
		}
		#invite-user .modal-body .modal-flash {
			position: absolute;
			top: 53px;
			right: 74px;
			z-index: 999;
		}
		/* end modal */

        .en-footer {
            padding: 30px;
            text-align: center;
            font-size: 14px;
        }
    </style>





</head>

<body>







<nav class="navbar navbar-default navbar-fixed-top home-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                <span class="sr-only">实验楼</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="https://static.shiyanlou.com/img/logo_02.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        课程 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="/courses/">全部课程</a></li>
                        <li class=""><a href="/paths/">学习路径</a></li>
                        <li class=" bootcamp"><a href="/bootcamp/">训练营</a></li>
                    </ul>
                </li>




                      <li class=""><a href="/user/410849/">我的课程</a></li>



            </ul>

            <?php if (isset($session->user)): ?>
                <ul class="nav navbar-nav navbar-right header-user">

                    <li id="header-message"
                        data-href="/user/message"
                        data-has-msg="false"
                        data-msg-page="/user/410849/messages"
                    ></li>


                    <li id="header-userbox"
                        data-username="LOU1377008009"
                        data-level="1"
                        data-home="/user/410849/"
                        data-avatar="https://dn-simplecloud.shiyanlou.com/gravatar7BJ5SVLA29M8.jpg?imageView2/1/w/200/h/200"
                        data-is-member="false"
                        data-is-senior-member="false"
                        data-vip-index="/vip"
                        data-setting="/user/profile"
                        data-logout="<?=site_url('logout')?>"
                        data-member-icon="https://static.shiyanlou.com/img/icon-vip.png"
                    >
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right header-sign">
                                <li><a class="sign-in" data-sign="signin" href="#sign-modal" data-toggle="modal">登录</a></li>
                                <li><a class="sign-up" data-sign="signup" href="#sign-modal" data-toggle="modal">注册</a></li>
                            </ul>
            <?php endif; ?>





            <div id="search-box"
                data-url="/search"
                ></div>


<!--                 <div id="header-learn-info"
                    data-current-lab=""
                    data-current-lab-name=""
                    data-lab-continue-url=""
                    data-view-all-url="/user/410849/"
                    data-home-page="/user/410849/"
                ></div> -->

        </div>
    </div>
</nav>
