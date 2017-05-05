

<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Lei Shi">
  <meta http-equiv="Cache-Control" content="o-transform">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="csrf-token" content="1494049163##5e8d74f8fbb80882efe76ab94da0659e33b1f007">


        <title>实验楼 - 做实验，学编程</title>




    <meta content="实验楼是国内领先的IT技术实训平台，创新的实验驱动教学模式，以就业为导向，为IT相关专业的在校学生及从业者提供编程、运维、测试、云计算、大数据、数据库等全面的IT技术动手实践环境，提供Linux、Python、Java、C语言、Ruby、Android、IOS开发等热门课程。" name="description">
    <meta content="实验楼,IT培训,IT教育,编程,在线编程,Linux,Linux教程,Linux操作系统,Python,Python教程,Python基础教程,Java,Java编程,C语言,大数据,Node.js,Hadoop,PHP,Docker" name="keywords">

    <meta content="实验楼,琛石科技" name="author">

	<link rel="shortcut icon" href="https://static.shiyanlou.com/favicon.ico">
	<link rel="stylesheet" href="https://static.shiyanlou.com/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-switch/3.3.2/css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-tour/0.11.0/css/bootstrap-tour.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/katex/0.7.1/katex.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/videojs/5.15.1/css/video-js.min.css">
    <link rel="stylesheet" href="https://static.shiyanlou.com/static/highlight.js/9.9.0/css/monokai-sublime.min.css">

	<link rel="stylesheet" href="app/dist/css/styles.css?=20170504144848">

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

<style>
.sub-menu {
    padding: 20px 0 10px 4px;
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
                <li class="dropdown ">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        课程 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="/courses/">全部课程</a></li>
                        <li class=""><a href="/paths/">学习路径</a></li>
                        <li class=" bootcamp"><a href="/bootcamp/">训练营</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="/contests/">比赛</a>
                </li>
                <li class="">
                    <a href="/questions/">讨论</a>
                </li>
                <li class=" new-nav logo-1111">
                    <a href="/vip">会员</a>
                </li>
                <li class="">
                    <a href="/saas">企业版</a>
                </li>
<!--                 <li class="active">
                    <a href="/try/">软件实验室</a>
                </li> -->



            </ul>


            <ul class="nav navbar-nav navbar-right header-sign">
                <li><a class="sign-in" data-sign="signin" href="#sign-modal" data-toggle="modal">登录</a></li>
                <li><a class="sign-up" data-sign="signup" href="#sign-modal" data-toggle="modal">注册</a></li>
            </ul>

            <div id="search-box"
                data-url="/search"
                ></div>

        </div>
    </div>
</nav>






<div class="layout layout-margin-top layout-fullscreen">
    <div class="container">


    </div>

<div class="carousel slide" id="carousel-generic" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://static.shiyanlou.com/img/home_banner.png">
            <div class="carousel-caption carousel-intro">
                <div>专业的IT在线实训平台</div>
                <p>随时随地，动手实验</p>
                <a class="home-courses-btn" href="/courses/">开始学习</a>
            </div>
        </div>
        <div class="item">
            <a href="https://www.shiyanlou.com/contests/lou6" target="_blank">
                <img src="https://static.shiyanlou.com/img/home_banner_2.jpg">
            </a>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">上一个</span>
    </a>
    <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">下一个</span>
    </a>
</div>

<div class="home-section learn-path">
	<div class="container">
        <div class="home-section-header">
            <div class="home-section-title">学习路径</div>
            <div class="home-section-desc">12条完整的职业学习路线图，带你从入门到进阶</div>
        </div>
		<div class="row learn-path-body">


                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/newhand">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741005890.png">
                        <div class="learn-path-name">新手入门</div>
                        <div class="learn-path-courses">
                            6门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/python">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741028787.png">
                        <div class="learn-path-name">Python研发工程师</div>
                        <div class="learn-path-courses">
                            77门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/cpp">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741048998.png">
                        <div class="learn-path-name">C++ 研发工程师</div>
                        <div class="learn-path-courses">
                            27门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/bigdata">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741070013.png">
                        <div class="learn-path-name">大数据工程师</div>
                        <div class="learn-path-courses">
                            33门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/security">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487738666016.png">
                        <div class="learn-path-name">信息安全工程师</div>
                        <div class="learn-path-courses">
                            35门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/linuxsys">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741143862.png">
                        <div class="learn-path-name">Linux运维工程师</div>
                        <div class="learn-path-courses">
                            33门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/java">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741175055.png">
                        <div class="learn-path-name">Java研发工程师</div>
                        <div class="learn-path-courses">
                            24门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/php">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741188918.png">
                        <div class="learn-path-name">PHP研发工程师</div>
                        <div class="learn-path-courses">
                            32门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/web">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741210305.png">
                        <div class="learn-path-name">Web前端工程师</div>
                        <div class="learn-path-courses">
                            30门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/linuxdev">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741227106.png">
                        <div class="learn-path-name">Linux研发工程师</div>
                        <div class="learn-path-courses">
                            26门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/nodejs">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487738611078.png">
                        <div class="learn-path-name">NodeJS研发工程师</div>
                        <div class="learn-path-courses">
                            16门课程
                        </div>
                    </a>
                </div>



                <div class="col-sm-3">
                    <a class="learn-path-item" href="/paths/mongodb">
                        <img src="https://dn-simplecloud.shiyanlou.com/1487741270557.png">
                        <div class="learn-path-name">MongoDB工程师</div>
                        <div class="learn-path-courses">
                            6门课程
                        </div>
                    </a>
                </div>


		</div>
        <div class="home-section-footer">
            <a href="/paths/">查看全部</a>
        </div>
	</div>
</div>

<div class="home-section recommend-courses">
	<div class="container">
        <div class="home-section-header">
            <div class="home-section-title">实验课程</div>
            <div class="home-section-desc">300+ 门动手实践的实验课程，让你在实验中快速成长</div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <a class="recommend-courses-item" href="/courses/1">
                    <img src="https://dn-simplecloud.shiyanlou.com/ncn1.jpg" alt="Linux 基础入门（新版）">
                    <div class="recommend-courses-content">
                        <div class="recommend-courses-name">Linux 基础入门（新版）</div>
                        <div class="recommend-courses-desc">要在实验楼愉快地学习，先要熟练地使用 Linux，本实验介绍 Linux 基本操作，shell 环境下的常用命令。</div>
                        <div class="recommend-courses-users">
                            <i class="fa fa-users"></i>108116
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="recommend-courses-item" href="/courses/789">
                    <img src="https://dn-simplecloud.shiyanlou.com/1491035890856.png" alt="使用 Python3 编写 Github 自动周报生成器">
                    <div class="recommend-courses-content">
                        <div class="recommend-courses-name">使用 Python3 编写 Github 自动周报生成器</div>
                        <div class="recommend-courses-desc">PyGithub.py 是利用 Python 封装 Github API 的第三方库。通过学习该课程，你将会使用 Python 从 Github 中获取对应代码仓库的贡献度（Commit 信息）及活跃度（Issue 评论内容）等。并且讲解如何使用 iPython 交互式调试代码。</div>
                        <div class="recommend-courses-users">
                            <i class="fa fa-users"></i>160
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="recommend-courses-item" href="/courses/801">
                    <img src="https://dn-simplecloud.shiyanlou.com/1492675941976.png" alt="使用 Flume 收集数据">
                    <div class="recommend-courses-content">
                        <div class="recommend-courses-name">使用 Flume 收集数据</div>
                        <div class="recommend-courses-desc">Flume 可以从多个数据源获取数据，把这些数据传给远程主机（可能是一对多或流水线模型
中的多个目标），再把它们传给多个目的端。尽管 Flume 提供了开发自定义数据源和数据目的端的编程 API，但它原本就支持许多常见的场景。本课程源自图灵教育的《Hadoop基础教程》第10章，感谢图灵教育授权实验楼发布。</div>
                        <div class="recommend-courses-users">
                            <i class="fa fa-users"></i>27
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="recommend-courses-item" href="/courses/803">
                    <img src="https://dn-simplecloud.shiyanlou.com/1493187189170.png" alt="Django 进阶教程">
                    <div class="recommend-courses-content">
                        <div class="recommend-courses-name">Django 进阶教程</div>
                        <div class="recommend-courses-desc">在 Django 入门教程的基础上，继续对 Django Web 框架进行学习。其中包括强大的后台、邮件功能、缓存系统、页面静态技术等等。</div>
                        <div class="recommend-courses-users">
                            <i class="fa fa-users"></i>232
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">



                    <div class="col-md-3">
                        <a class="recommend-courses-item" href="/courses/498">
                            <img src="https://dn-simplecloud.shiyanlou.com/1478912280773.png" alt="动手实战学Docker (15个实验+54个视频)">
                            <div class="recommend-courses-content">
                                <div class="recommend-courses-name">动手实战学Docker (15个实验+54个视频)</div>
                                <div class="recommend-courses-desc">15个实验带你体验Docker魅力，最快的上手教程，最新的技术领域，最多的动手实践。在线实验学习Docker，DockerFile，Compose，Swarm，Kubernetes等技术。</div>
                                <div class="recommend-courses-users">
                                    <i class="fa fa-users"></i>472
                                </div>
                            </div>
                        </a>
                    </div>




                    <div class="col-md-3">
                        <a class="recommend-courses-item" href="/courses/698">
                            <img src="https://dn-simplecloud.shiyanlou.com/1480386391850.png" alt="Kali 渗透测试 - 服务器攻击实战（20个实验）">
                            <div class="recommend-courses-content">
                                <div class="recommend-courses-name">Kali 渗透测试 - 服务器攻击实战（20个实验）</div>
                                <div class="recommend-courses-desc">实验楼携手信息安全工程师制作20个服务器攻击实验，针对 FTP，Tomcat，NFS，Samba等服务漏洞， 使用 Nmap 及 Metasploit 安全工具进行渗透测试。完全在线实验，讨论区工程师答疑，详细步骤截图，漏洞原理和攻击代码讲解。</div>
                                <div class="recommend-courses-users">
                                    <i class="fa fa-users"></i>192
                                </div>
                            </div>
                        </a>
                    </div>




                    <div class="col-md-3">
                        <a class="recommend-courses-item" href="/courses/744">
                            <img src="https://dn-simplecloud.shiyanlou.com/1484966112805.png" alt="深度学习初探——入门DL主流框架">
                            <div class="recommend-courses-content">
                                <div class="recommend-courses-name">深度学习初探——入门DL主流框架</div>
                                <div class="recommend-courses-desc">本课程将通过8个实验，带领同学们入门TensorFlow、Theano、Keras 及 Caffe 几个主流的深度学习框架，通过项目实践使同学了解如何利用这些框架搭建自己的深度学习神经网络。课程将基于每个框架的官方文档，先带大家熟悉框架中基本的定义语法及常用函数（可看成深度模型的小零件），并在每个实验内容的最后都会综合这些零件搭建一个简易的神经深度网络模型。十分适合具有一定python编程基础，对人工智能、深度学习感兴趣的同学。</div>
                                <div class="recommend-courses-users">
                                    <i class="fa fa-users"></i>247
                                </div>
                            </div>
                        </a>
                    </div>




                    <div class="col-md-3">
                        <a class="recommend-courses-item" href="/courses/763">
                            <img src="https://dn-simplecloud.shiyanlou.com/1490341573313.png" alt="Python网络爬虫实战--Scrapy框架学习">
                            <div class="recommend-courses-content">
                                <div class="recommend-courses-name">Python网络爬虫实战--Scrapy框架学习</div>
                                <div class="recommend-courses-desc">本训练营从一个简单的Scrapy项目入手，剖析爬虫的结构和Scrapy的运行规则，最后通过两个两个实战项目——「爬取实验楼课程信息」和「爬取电影网站信息」，带领大家从零基础入门，完全掌握使用Scrapy框架编写网络爬虫的技能。</div>
                                <div class="recommend-courses-users">
                                    <i class="fa fa-users"></i>133
                                </div>
                            </div>
                        </a>
                    </div>


        </div>
        <div class="home-section-footer recommend-courses-footer">
            <a href="/courses/">查看全部</a>
        </div>
	</div>
</div>



<div class="home-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a><img src="https://static.shiyanlou.com/img/introduceContainer1.gif"></a>
                <div class="home-features-text">丰富全面的计算机实验课程</div>
            </div>
            <div class="col-sm-3">
                <a><img src="https://static.shiyanlou.com/img/introduceContainer2.gif"></a>
                <div class="home-features-text">在线编程环境，1秒启动</div>
            </div>
            <div class="col-sm-3">
                <a><img src="https://static.shiyanlou.com/img/introduceContainer3.gif" /></a>
                <div class="home-features-text">每天一个项目课，丰富你的项目经验</div>
            </div>
            <div class="col-sm-3">
                <a><img src="https://static.shiyanlou.com/img/introduceContainer4.gif" /></a>
                <div class="home-features-text">有效学习时间，真实记录你的代码生涯</div>
            </div>
        </div>
        <div class="home-section-footer home-features-footer">
            <a class="home-courses-btn" href="/courses/">开始学习</a>
        </div>
    </div>
</div>


</div>








	<div class="modal fade" id="invite-user" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">邀请好友，双方都可获赠实验豆！</h4>
				</div>
				<div class="modal-body">

                        <p><h4><a href="#sign-modal" data-toggle="modal" data-sign="signin">登录</a>后邀请好友注册，您和好友将分别获赠3个实验豆！</h4></p>

					<div id="msg-modal"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="flash-message" tabindex="-1" role="dialog">
		<div class="modal-dialog" rolw="document">
		</div>
	</div>
	<div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">注意</h4>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary confirm" data-dismiss="modal">确定</button>
				</div>
			</div>
		</div>
	</div>











    <div class="modal fade" id="sign-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#signin-form" aria-controls="signin-form" role="tab" data-toggle="tab">登录</a>
                    </li>
                    <li role="presentation">
                        <a href="#signup-form" aria-controls="signup-form" role="tab" data-toggle="tab">注册</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="signin-form">
                        <form action="/login" method="post">
                            <input name="_csrf_token" type=hidden value="1494049165##fc71ffa13225b0d4f48ba25a14cad7538decf882">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope" style="margin:0;"></i>
                                    </div>
                                    <input type="email" name="login" class="form-control" placeholder="请输入邮箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock" style="margin:0;"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-inline verify-code-item" style="display:none;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="captcha_v" class="form-control" placeholder="请输入验证码">
                                    </div>
                                </div>
                                <img class="verify-code" src="" source="/captcha.gif">
                            </div>
                            <div class="form-group remember-login">
                                <input name="remember" type="checkbox" value="y"> 下次自动登录
                                <a class="pull-right" href="/reset_password">忘记密码？</a>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="进入实验楼">
                            </div>
                            <div class="form-group widget-signin">
                                <span>快速登录</span>
                                <a href="/auth/qq?next="><i class="fa fa-qq"></i></a>
                                <a href="/auth/weibo?next="><i class="fa fa-weibo"></i></a>
                                <a href="/auth/weixin?next="><i class="fa fa-weixin"></i></a>
                                <a href="/auth/github?next="><i class="fa fa-github"></i></a>
                                <a href="/auth/renren?next="><i class="fa fa-renren"></i></a>
                            </div>
                            <div class="form-group error-msg">
                                <div class="alert alert-danger" role="alert"></div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="signup-form">
                        <form action="/register" method="post">
                            <input name="_csrf_token" type=hidden value="1494049165##fc71ffa13225b0d4f48ba25a14cad7538decf882">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope" style="margin:0;"></i>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="请输入邮箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock" style="margin:0;"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="captcha_v" class="form-control" placeholder="请输入验证码">
                                    </div>
                                </div>
                                <img class="verify-code" src="" source="/captcha.gif">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="注册">
                            </div>
                            <div class="form-group agree-privacy">
                                注册表示您已经同意我们的<a href="/privacy" target="_blank">隐私条款</a>
                            </div>
                            <div class="form-group widget-signup">
                                <span>快速注册</span>
                                <a href="/auth/qq?next="><i class="fa fa-qq"></i></a>
                                <a href="/auth/weibo?next="><i class="fa fa-weibo"></i></a>
                                <a href="/auth/weixin?next="><i class="fa fa-weixin"></i></a>
                                <a href="/auth/github?next="><i class="fa fa-github"></i></a>
                                <a href="/auth/renren?next="><i class="fa fa-renren"></i></a>
                            </div>
                            <div class="form-group error-msg">
                                <div class="alert alert-danger" role="alert"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="base-data"


            data-flash="false"



        data-is-login=false

        data-is-jwt=true
        data-socket-url="wss://comet.shiyanlou.com"
        data-msg-user=""
        data-msg-system=""
    ></div>

    <!-- 不带 CSS 的库 -->
    <script src="https://static.shiyanlou.com/static/babel-polyfill/6.20.0/polyfill.min.js"></script>
    <script src="/app/dist/js/manifest.js?=20170504144848"></script>
    <script src="/app/dist/js/vendor.js?=20170504144848"></script>

    <script src="https://static.shiyanlou.com/static/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://static.shiyanlou.com/static/jquery.form/3.51/jquery.form.min.js"></script>
    <script src="https://static.shiyanlou.com/static/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <script src="https://static.shiyanlou.com/static/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://static.shiyanlou.com/static/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://static.shiyanlou.com/static/zeroclipboard/2.3.0/ZeroClipboard.min.js"></script>
    <script src="https://static.shiyanlou.com/static/aliyun/aliyun-oss-sdk-4.3.0.min.js"></script>
    <script src="https://static.shiyanlou.com/static/qiniu/qiniu.js"></script>
    <script src="https://static.shiyanlou.com/static/plupload/2.1.9/js/plupload.full.min.js"></script>
    <script src="https://static.shiyanlou.com/static/echarts/v3.3.2/echarts.min.js"></script>
    <!-- 不带 CSS 的库 end -->

    <!-- 带有 CSS 的库 -->
    <script src="https://static.shiyanlou.com/static/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://static.shiyanlou.com/static/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
    <script src="https://static.shiyanlou.com/static/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js"></script>
    <script src="https://static.shiyanlou.com/static/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    <script src="https://static.shiyanlou.com/static/bootstrap-table/1.11.0/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="https://static.shiyanlou.com/static/bootstrap-table/1.11.0/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

    <script src="https://static.shiyanlou.com/static/ace/1.2.5/ace.js"></script>
    <script src="https://static.shiyanlou.com/static/videojs/5.15.1/js/video.min.js"></script>
    <script src="https://static.shiyanlou.com/static/katex/0.7.1/katex.min.js"></script>
    <script src="https://static.shiyanlou.com/static/highlight.js/9.9.0/js/highlight.min.js"></script>
    <!-- 带有 CSS 的库 end -->

    <script src="https://static.shiyanlou.com/static/ravenjs/3.7.0/raven.min.js"></script>
    <script>
        Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
            release: '3.12.13'
        }).install();
    </script>






<div id="jinja-data"
    data-post-url="/registercheck"
></div>

<script src="/app/dist/js/frontend/index.js?=20170504144848"></script>




<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix footer-col">
                <img src="https://static.shiyanlou.com/img/logo_03.png">
                <div class="footer-slogan">动手做实验，轻松学IT</div>
                <div class="col-xs-2">
                    <div class="social-item footer-weixin-item">
                        <i class="fa fa-weixin"></i>
                        <div class="footer-weixin">
                            <img src="https://static.shiyanlou.com/img/footer-weixin.png">
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="social-item footer-weibo-item">
                        <a href="http://weibo.com/shiyanlou2013" target="_blank">
                            <i class="fa fa-weibo"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">公司</div>
                <a href="/aboutus" target="_blank">关于我们</a><br>
                <a href="/contact" target="_blank">联系我们</a><br>
                <a href="http://www.simplecloud.cn/jobs.html" target="_blank">加入我们</a><br>
                <a href="https://blog.shiyanlou.com" target="_blank">技术博客</a><br>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">合作</div>
                <a href="/contribute" target="_blank">我要投稿</a><br>
                <a href="/labs" target="_blank">教师合作</a><br>
                <a href="/edu/" target="_blank">高校合作</a><br>
                <a href="/friends" target="_blank">友情链接</a><br>
                <a href="/developer" target="_blank">开发者</a><br>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">服务</div>
                <a href="/saas" target="_blank">企业版</a><br>
                <a href="/bootcamp/" target="_blank">实战训练营</a><br>
                <a href="/vip" target="_blank">会员服务</a><br>
                <a href="/courses/reports" target="_blank">实验报告</a><br>
                <a href="/questions/?tag=%E5%B8%B8%E8%A7%81%E9%97%AE%E9%A2%98" target="_blank">常见问题</a><br>
                <a href="/privacy" target="_blank">隐私条款</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">学习路径</div>
                <a href="/paths/python" target="_blank">Python学习路径</a><br>
                <a href="/paths/linuxdev" target="_blank">Linux学习路径</a><br>
                <a href="/paths/bigdata" target="_blank">大数据学习路径</a><br>
                <a href="/paths/java" target="_blank">Java学习路径</a><br>
                <a href="/paths/php" target="_blank">PHP学习路径</a><br>
                <a href="/paths/", target="_blank">全部</a>
            </div>
        </div>
    </div>
    <div class="text-center copyright">
      <span>Copyright @2013-2017 实验楼在线教育</span>
        <span class="ver-line"> | </span>
        <a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备13019762号</a>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-89338452-1', 'auto');
        ga('send', 'pageview');
        </script>
    </div>
</div>

</body>
</html>
