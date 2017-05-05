<div class="container layout-hasside layout-margin-top">

    <div class="sub-menu">
        <a class="active" href="/courses/">
            <i class="fa fa-th"></i> 全部课程
        </a>
        <!--<a class="" href="/paths/">
            <i class="fa fa-th-large"></i> 学习路径
        </a>
        <a class="" href="/bootcamp/">
            <i class="fa fa-th-list"></i> 训练营
        </a>-->
    </div>




        <div class="row">
            <div class="col-md-9 layout-body">

    <div class="content">
        <!--<div class="row course-cates">
            <div class="col-md-1 course-cates-title">类别：</div>
            <div class="col-md-11 course-cates-content">
                <a class="active" href="/courses/?course_type=all&amp;tag=all">全部</a>
                <a class="" href="/courses/?course_type=all&amp;tag=all&amp;fee=free">免费</a>
                <a class="" href="/courses/?course_type=all&amp;tag=all&amp;fee=limited">限免</a>
                <div class="course-cates-vip ">
                    <a class="" href="/courses/?course_type=all&amp;tag=all&amp;fee=member">
			    <img src="https://static.shiyanlou.com/img/icon-vip.png">会员</a>
            </div>
            </div>
        </div>-->
        <div class="row course-cates">
            <div class="col-md-1 course-cates-title">标签：</div>
            <div class="col-md-11 course-cates-content">
                <a class="active" href="/courses/?course_type=all&amp;fee=all">全部</a>

                    <a class="" href="/courses/?course_type=all&amp;tag=Python&amp;fee=all">语文</a>
                    <a class="" href="/courses/?course_type=all&amp;tag=Python&amp;fee=all">数学</a>
                    <a class="" href="/courses/?course_type=all&amp;tag=Python&amp;fee=all">化学</a>

            </div>
        </div>
    </div>
    <div class="content position-relative">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="/courses/?course_type=all&amp;tag=all&amp;fee=all">已上线</a></li>
            <!--<li class=""><a href="/courses/?status=preview" class="stat-event" data-stat="preview_course">即将上线</a></li>-->
        </ul>
        <div class="clearfix"></div>
        <div class="courses-sort">
            <a  href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;order=latest">最新</a>
            /
            <a  href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;order=hotest">最热</a>
        </div>
        <div class="search-result"></div>
        <div class="row">




<?php foreach ($courses as $course): ?>
    <div class="col-md-4 col-sm-6  course">
        <a class="course-box" href="<?=site_url('course/'.$course->id)?>">
            <div class="sign-box">
                <i class="fa fa-star-o course-follow pull-right"
                    data-follow-url="/courses/63/follow"
                    data-unfollow-url="/courses/63/unfollow" style="display:none"></i>
            </div>
            <div class="course-img">
                <img alt="<?=$course->name;?>" src="<?=base_url('resources/'.$course->img);?>">
            </div>

            <div class="course-body">
    			<div class="course-name"><?=$course->name;?></div>
    			<div class="course-desc"><?=$course->desc;?></div>
            	<div class="course-footer">
    				<span class="course-per-num pull-left">
                    	<i class="fa fa-users"></i><?=$course->study;?>
    				</span>
        	    </div>
           	</div>
        </a>
    </div>
<?php endforeach; ?>

        </div>


<!--<nav class="pagination-container">
    <ul class="pagination">
        <li class="disabled">
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">上一页</span>
            </a>
        </li>
        <li class="active">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=1">1</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=2">2</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=3">3</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=4">4</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=5">5</a>
        </li>
        <li>
            <a href='#'>...</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=23">23</a>
        </li>
        <li class="">
            <a href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=24">24</a>
        </li>
        <li class="">
            <a aria-label="Next" href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;page=2">
                <span aria-hidden="true">下一页</span>
            </a>
        </li>
    </ul>
</nav>-->


    </div>

</div>
    <div class="col-md-3 layout-side">

<div class="panel panel-default panel-userinfo">
    <div class="panel-body body-userinfo">
        <div class="media userinfo-header">
            <div class="media-left">
                <div class="user-avatar">

                    <a class="avatar" href="/user/410849/" target="_blank">
                        <img src="https://dn-simplecloud.shiyanlou.com/gravatar7BJ5SVLA29M8.jpg">
                     </a>


                </div>
             </div>
            <div class="media-body">

                <span class="media-heading username"><a href="/user/410849/" title="LOU1377008009">LOU1377008009</a></span>
                <span class="user-level" >L1</span>

                 <p class="vip-join"><a href="/vip"><img src="https://static.shiyanlou.com/img/icon-vip.png">加入会员</a></p>


            </div>
        </div>

        <br>

        <div class="row userinfo-data">

            <!--<div class="col-md-4 col-xs-4 data-item" >
                <p class="counter-p" href="/user/410849/"><span>1</span><br>楼</p>
            </div>-->
            <div class="col-md-4 col-xs-4 data-item">
                <a class="counter-a" href="/user/410849/"><span class="with-href">3</span><br>课程</a><br>
            </div>
            <div class="col-md-4 col-xs-4 data-item">
                <a class="counter-a" href="/user/410849/questions"><span class="with-href">0</span><br>提问</a><br>
            </div>

        </div>

        <hr>
        <div class="userinfo-last-learn">
            <h4 style="text-align:left">最近在学</h4>

            <a class="last-course-name" href="/courses/4">Git 实战教程</a>

        </div>
        <div class="userinfo-continue-learn">

            <a class="btn btn-primary btn-lg" href="/courses/4">继续学习</a>

        </div>

        <div class="userinfo-footer row">
            <div class="col-md-6 col-xs-6 pos-left">

                <a href="#" data-toggle="modal" data-target="#join-private-course"><span class="glyphicon glyphicon-bookmark"></span> 加入私有课</a>

            </div>
            <div class="col-md-6 col-xs-6 pos-right">
                <a href="/contribute" target="_blank"><span class="glyphicon glyphicon-send"></span> 我要投稿</a>
            </div>

            <div id="join-private-course" class="modal fade words-ctrl" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">加入私有课</h4>
                        </div>
                        <div class="modal-body">
                            <div style="margin:15px 0; font:16px;">输入教师提供的私有课程码可以加入教师的私有课程。</div>
                            <form id="private-course-form" method="POST" action="/courses/join">
                                <div class="form-group">
                                    <label for="code">邀请码</label>
                                    <input class="form-control" id="code" name="code" type="text" value="">
                                    <input name="_csrf_token" type=hidden value="1494055057##14945558751b9a95324c0e698cf64b4d55571118">
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" onclick="document.getElementById('private-course-form').submit();">确定</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
</div>

<div id="side-new-contest"
    data-url="/contests/current"
    ></div>



<div class="sidebox">
	<div class="sidebox-header">
		<h4 class="sidebox-title">保存的实验环境</h4>
	</div>
	<div class="sidebox-body">

		<p>
            升级实验楼会员，保存实验环境
		</p>
        <a class="btn btn-primary" href="/vip"><img class="vip-logo" src="https://static.shiyanlou.com/img/icon-vip.png"> 获取会员特权</a>

	</div>
</div>



<div class="sidebox">

    <div class="sidebox-header">
		<h4 class="sidebox-title">我的路径</h4>
	</div>
	<div class="sidebox-body course-content side-list-body">

        <a href="/paths/python"><img style="width:25px;height:25px" src="https://dn-simplecloud.shiyanlou.com/1487741028787.png"> Python研发工程师</a>

	</div>

</div>

<div class="side-image side-qrcode">
    <img src="https://static.shiyanlou.com/img/ShiyanlouQRCode.png">
    <div class="side-image-text">关注公众号，手机看教程</div>
</div>

            </div>
        </div>
    </div>
