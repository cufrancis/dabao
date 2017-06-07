<!-- 不带 CSS 的库 -->
<script src="https://static.shiyanlou.com/static/babel-polyfill/6.20.0/polyfill.min.js"></script>
<script src="<?=base_url('resources/app/dist/js/manifest.js')?>"></script>
<script src="<?=base_url('resources/app/dist/js/vendor.js')?>"></script>

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
<script src="<?=base_url('resources/bower_components/videojs-playlist/dist/videojs-playlist.js')?>" charset="utf-8"></script>
<script src="<?=base_url('resources/js/jquery.cxselect.js')?>"></script>
<script src="<?=base_url('resources/js/chosen/chosen.jquery.js')?>"></script>
<script src="<?=base_url('resources/js/chosen/chosen.proto.js')?>"></script>
<script type="text/javascript">
	$(".chosen-select").chosen({
		no_results_text: "Oops, nothing found!"
	});
	$('#element_id').cxSelect({
		selects: ['grade', 'class'],
		required: true,
		jsonValue: 'v',
		data: [{
				'v': '01',
				'n': '一年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
			{
				'v': '02',
				'n': '二年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
			{
				'v': '03',
				'n': '三年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
			{
				'v': '04',
				'n': '四年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
			{
				'v': '05',
				'n': '五年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
			{
				'v': '06',
				'n': '六年级 >',
				's': [{
						'v': '01',
						'n': '(1)班'
					},
					{
						'v': '02',
						'n': '(2)班'
					},
					{
						'v': '03',
						'n': '(3)班'
					},
					{
						'v': '04',
						'n': '(4)班'
					},
				]
			},
		]
	});
</script>

<script type="text/javascript">
	var player = videojs('video', {}, function() {
		console.log("good to go!");
	});
	player.on('ended', function() {
		console.log('结束播放');
		var video_id = $(this).attr('video-id');
		console.log("video_id=" + video_id);
		$.ajax({
			type: "POST",
			url: "<?=site_url('user/ajax_view_video')?>",
			dataType: "json",
			data: {
				video_id: video_id
			},
			success: function(result) {
				// alert(result);
				check_watch_end();
			},
			error: function(jqXHR, textStatus, errorThrown) {
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

	function check_watch_end() {
		var courseid = <?php if(isset($course)){echo $course->id;}else{echo 0;}?>;
		$.ajax({
			type: "POST",
			url: "<?=site_url('course/ajax_check_watch_video')?>",
			dataType: "json",
			data: {
				cursor_id: courseid
			},
			success: function(result) {
				// alert(result);
				if (result == 0) $(".exam").removeClass("banner-image");
			},
			error: function(jqXHR, textStatus, errorThrown) {
				/*弹出jqXHR对象的信息*/
				alert(jqXHR.responseText);
				// alert(jqXHR.status);
				// alert(jqXHR.readyState);
				// alert(jqXHR.statusText);
				// /*弹出其他两个参数的信息*/
				// alert(textStatus);
				// alert(errorThrown);
			}
		});
	}

	/**
	 * 单击播放列表事件
	 * @var string
	 */
	$('.video_click').click(function() {
		// 单击播放列表事件
		// console.log($('.video_click').attr('data-id'));
		var video_id = $(this).attr('data-id');
		console.log("video_id=" + video_id);
		$.ajax({
			type: "POST",
			url: "<?=site_url('course/get_video')?>",
			dataType: "json",
			data: {
				video_id: video_id
			},
			success: function(result) {
				// alert(result);
				console.log(result);
				var url = "<?php echo base_url('uploads');?>";
				url = url + '/' + result['url']
				console.log(url);
				player.src(url);
				player.setAttribute('video-id', result['id'])
			},
			error: function(jqXHR, textStatus, errorThrown) {
				/*弹出jqXHR对象的信息*/
				alert(jqXHR.responseText);
				alert(jqXHR.status);
				alert(jqXHR.readyState);
				alert(jqXHR.statusText);
				/*弹出其他两个参数的信息*/
				alert(textStatus);
				alert(errorThrown);
			}
		}); // var url = "<?=base_url();?>"+$(this).attr('src')
		// var video = $('#video');
		// video.attr('src', url);
		// $("video source").attr("id", $(this).attr("id"));
		// alert(video.attr('src'));
	});
</script>






<div id="jinja-data" data-post-url="/registercheck"></div>

<script src="<?=base_url('resources/app/dist/js/frontend/index.js')?>"></script>




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
				<a href="/paths/" , target="_blank">全部</a>
			</div>
		</div>
	</div>
	<div class="text-center copyright">
		<span>Copyright @2017-2017 Yuting Su</span>
	</div>
</div>
<script src="<?=base_url('resources/js/fine-uploader/jquery.fine-uploader.min.js')?>"></script>
<script src="<?=base_url('resources/js/jquery.cxselect.js')?>"></script>
<!-- If you'd like to support IE8 -->
<script src="https://cdn.bootcss.com/video.js/6.0.1/ie8/videojs-ie8.js"></script>
<script src="https://cdn.bootcss.com/moment.js/2.18.1/moment.js"></script>
<script src="https://cdn.bootcss.com/moment.js/2.18.1/locale/zh-cn.js"></script>

<script type="text/javascript">
	// 时间设置
	$(".time p").html(moment().format("LLLL"))

	$('#add-comment').click(function() {
		var text = $(".comment-form-content").val()
		course_id = "<?=$course->id;?>"
		alert(text)

		$.ajax({
			type: "POST",
			url: "<?=site_url('course/comment/add')?>",
			dataType: "json",
			data: {
				course_id: course_id,
				text: text
			},
			success: function(result) {
				console.log('add comment successful!')
				// alert(result);
				// var dialog = document.querySelector('.dialog')
				// dialog.content.querySelector('#comment-item-body #username').innerHtml = 'llllll'
				// document.body.appendChild(dialog.content.cloneNode(true));

			},
			error: function(jqXHR, textStatus, errorThrown) {
				/*弹出jqXHR对象的信息*/
				alert(jqXHR.responseText);
				// alert(jqXHR.status);
				// alert(jqXHR.readyState);
				// alert(jqXHR.statusText);
				// /*弹出其他两个参数的信息*/
				// alert(textStatus);
				// alert(errorThrown);
			}
		});
	});
</script>




</body>

</html>
