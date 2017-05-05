<link href="//cdn.bootcss.com/plyr/2.0.12/plyr.css" rel="stylesheet">
<!-- Docs styles -->
<!-- <link rel="stylesheet" href="https://cdn.plyr.io/2.0.12/demo.css"> -->
<!-- <link rel="stylesheet" href="https://www.shiyanlou.com/app/dist/css/styles.css?=201704061456153"> -->
<!-- <link rel="stylesheet" href="https://static.shiyanlou.com/static/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<style>
.plyr{
	max-width:78.5%;
}
.plyr video {
	height: 100%;
}
.comment-form {
	overflow: hidden;
}
.comment-form-unlogin {
	width: 100%;
	height: 150px;
	margin: 12px 0 30px;
	padding: 6px 12px;
	background: #fafbfa;
	font-size: 14px;
	text-align: center;
	line-height: 136px;
	border: 1px solid #ececec;
}
.comment-form-content {
	width: 100%;
	height: 120px;
	margin-top: 12px;
	padding: 6px 12px;
	background: #fafbfa;
	font-size: 14px;
	border: 1px solid #ececec;
	overflow-y: auto;
	resize: none;
}
.comment-form .btn {
	margin: 10px 0 10px 10px;
}
.btn {
	border-radius: 0;
}
.pull-right {
	float: right !important;
}
.comment-box .comment-title {
	margin: 8px 0;
	color: #565656;
	font-size: 14px;
}
.comment-list-item {
	padding: 24px 0 4px;
	border-top: 1px solid #efefef;
}
.row {
	margin-right: -15px;
	margin-left: -15px;
}
.comment-item-body {
	padding: 0 0 0 26px;
	font-size: 14px;
}
</style>

<div class="row">
	<!-- 留空，占位 -->
	<div class="col-md-3">
	</div>

	<!-- 导航 -->
	<div class="col-md-6">
		<ul class="nav nav-tabs nav-justified">
			<li role="presentation" class="active"><a href="#">课程视频</a></li>

			<li role="presentation"><a href="#">预习测试</a></li>
			<li role="presentation"><a href="#">作业任务</a></li>
			<li role="presentation" class="disabled"><a href="#" class="work" title="看完所有视频才可点击哦！">课后作业</a></li>
		</ul>
	</div>

	<!-- 视频列表 -->
	<div class="col-md-3" style="border:1px solid #e7e7e7; margin-right:10px">
        <nav class="navbar" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
				<!-- 视频列表区域 -->
				<?php if(!empty($videos)):?>
					<?php foreach($videos as $video):?>
						<li><a class="video_click" id=<?=$video->id;?> vid="<?php echo $video->id;?>" src="<?=$video->url;?>"><?php echo $video->name;?><?php if ($video->isWatch):?><span class="label label-success">已看完</span><?php endif;?></a></li>
					<?php endforeach;?>
				<?php else:?>
					<p>视频列表为空</p>
				<?php endif;?>
            </ul>
        </nav>
    </div>

	<!-- 播放器 -->
	<div class="col-md-7">
		<div class="play" courseid="<?=$cursor->id;?>">
		 <!-- 这是播放器区域 -->
		 <video id="video" poster="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.jpg" controls>
			 <!-- src=https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.mp4 -->
		   <source src="" id="id" type="video/mp4">
		 </video>
		</div>
	</div>

	<!-- 评论 -->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>课程讨论</h3>
			</div>
			<div class="panel-body">
				<div class="comment-box">
				<?php if (isset($this->session->user)):?>
					<!-- 登陆，显示评论框 -->
					<div class="comment-form">
						<textarea id="comment-form-content" class="comment-form-content" placeholder="输入您想说的话..."></textarea>
						<button id="comment-form-add" class="pull-right btn btn-primary comment-form-add">发表评论</button>
						<!-- <button class="pull-right btn btn-primary comment-form-reset">清除评论</button> -->
					</div>
				<?php else:?>
					<div class="comment-form-unlogin">请<a href="<?=site_url('login')?>" data-toggle="modal" data-sign="signin" data-next="/login"> 登录 </a>后发表评论</div>
					<!-- 未登陆，提示 -->
				<?php endif;?>
				</div>
			</div>
			<div class="panel-heading"><p>最新评论</p></div>
			<div class="panel-body">
				<?php foreach ($cursor->comments as $comment): ?>
				<div class="row comment-list-item">
					<div class="col-md-2 comment-item-body">
						<div class="user-username">
							<a class="username" href="<?=site_url('user/57123')?>" target="_blank"><?=$comment->author->username;?></a>
						</div>
						<div class="comment-item-content markdown-box"><p><?=$comment->text?></p></div>
						<!-- <div class="date" date="<?=$comment->created_at;?>">时间</div> -->
						<div class="comment-item-date"><?=$comment->created_at;?></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


	</div>
</div>


<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<!-- <script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script> -->
<script src="//cdn.bootcss.com/plyr/2.0.12/plyr.js"></script>
<!-- <script src="https://cdn.bootcss.com/moment.js/2.18 .1/moment.js"></script> -->
<!-- <script src="//cdn.bootcss.com/plyr/2.0.12/plyr.svg"></script> -->
<script>

$(document).ready(function(){
    plyr.setup();
	// 格式化评论时间
	var comment_date = $('.comment-item-date')
	var date = new Date(Number(comment_date.html()))
	console.log(date.getFullYear())
	Y = date.getFullYear() + '-';
	M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
	D = date.getDate() + ' ';
	h = date.getHours() + ':';
	m = date.getMinutes() + ':';
	s = date.getSeconds();
	comment_date.html(Y+M+D+h+m+s)

	check_watch_end();
	function check_watch_end(){
		// 检测有没有看完
		// 页面载入时检测一次，每一个视频播放完时检测一次
		// 传送给后台服务器检测
		var courseid = $(".play").attr("courseid");
		$.ajax({
			type:"POST",
			url:"<?=site_url('course/ajax_check_watch_video')?>",
			dataType:"json",
			data:{cursor_id:courseid},
			success:function(result){
				// alert(result);
				if (result== 0)$(".work").removeClass("disabled");
			},
			error:function(jqXHR, textStatus, errorThrown){
				/*弹出jqXHR对象的信息*/
	            alert(jqXHR.responseText);
	            alert(jqXHR.status);
	            alert(jqXHR.readyState);
	            alert(jqXHR.statusText);
	            /*弹出其他两个参数的信息*/
	            alert(textStatus);
	            alert(errorThrown);
			}
		});
	}

	// 播放视频结束事件
	document.getElementById("video").onended = function(){
		alert($("video source").attr("id"));
		var vid = $("video source").attr("id");
		$.ajax({
			type: "POST",
			url: "<?=site_url('user/ajax_view_video')?>",
			dataType:"json",
			data:{vid:vid},
			success:function(result){
				// alert(result);
				check_watch_end();
			},
			error:function(jqXHR, textStatus, errorThrown){
				/*弹出jqXHR对象的信息*/
	            alert(jqXHR.responseText);
	            alert(jqXHR.status);
	            alert(jqXHR.readyState);
	            alert(jqXHR.statusText);
	            /*弹出其他两个参数的信息*/
	            alert(textStatus);
	            alert(errorThrown);
			}
		});
	}

	/**
	 * 单击播放列表事件
	 * @var string
	 */
    $('.video_click').click(function(){
        // 单击播放列表事件
        var url = "<?=base_url();?>"+$(this).attr('src')
        var video = $('#video');
        video.attr('src', url);
		$("video source").attr("id", $(this).attr("id"));
        alert(video.attr('src'));
    });

	/**
	 * 点击提交评论按钮事件
	 * @var [type]
	 */
	$(".comment-form-add").click(function(){
		var vid = $('.video_click').attr('vid');
		var text = $("#comment-form-content").val()
		alert(text)
		console.log(text)

		$.ajax({
			type:"POST",
			url: "<?=site_url('course/comment/add')?>",
			dataType:"json",
			data:{ id:vid,text:text},
			success:function(result){
				alert(result);
			},
			error:function(jqXHR, textStatus, errorThrown){
				/*弹出jqXHR对象的信息*/
	            alert(jqXHR.responseText);
	            alert(jqXHR.status);
	            alert(jqXHR.readyState);
	            alert(jqXHR.statusText);
	            /*弹出其他两个参数的信息*/
	            alert(textStatus);
	            alert(errorThrown);
			}
		});
	});

});
</script>
