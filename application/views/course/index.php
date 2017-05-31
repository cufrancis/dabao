<div class="container layout-hasside layout-margin-top">



<ol class="breadcrumb">
    <li><a href="<?=site_url('courses')?>">全部课程</a></li>

    <li>

    <a href="/courses/?tag=C%2FC%2B%2B">C/C++</a>

    </li>

    <li class="active">
        <a href="<?=site_url('course/'.$course->id)?>">
        <?=$course->name?>
        </a>
    </li>
</ol>

        <div class="row">
            <div class="col-md-9 layout-body">


    <div class="side-image side-image-mobile">
        <img src="https://dn-simplecloud.shiyanlou.com/ncn63.jpg?imageView2/0/h/300">
    </div>
    <div class="content course-infobox">
        <div class="clearfix course-infobox-header">
            <h4 class="pull-left course-infobox-title">

                <span><?=$course->name?></span>

            </h4>
            <div class="pull-right course-infobox-follow"
                data-follow-url="/courses/63/follow"
                data-unfollow-url="/courses/63/unfollow">
                <span class="course-infobox-followers"><?=$course->star?></span>
                <span>人关注</span>

                <i class="fa fa-star-o"></i>

            </div>
        </div>
        <div class="clearfix course-infobox-body">
            <div class="course-infobox-content">
            <p><?=$course->desc?></p>

            </div>

            <div class="course-infobox-progress">

                    <div class="course-progress-finished"></div>



                    <div class="course-progress-next"></div>



                <span>（1/2）</span>
            </div>





                <div class="pull-right course-infobox-price">

                </div>
                <?php if($videos):?>
                    <video id="video" preload class="video-js" controls preload="auto" width="640" height="264"  data-setup="{}" video-id="<?=$videos[0]->id;?>">
                        <source src="<?=base_url('uploads/'.$videos[0]->url)?>" type='video/mp4'>

                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                  </video>
              <?php endif;?>



        </div>

        <div class="clearfix course-infobox-footer">

            <div class="pull-right course-infobox-learned"><?=$course->study?> 人学过</div>
        </div>

    </div>
	<div class="content">
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#labs" aria-controls="labs" role="tab" data-toggle="tab">视频列表</a>
            </li>
            <li role="presentation">
                <a href="#exam" class="stat-event" data-stat="course_report" aria-controls="reports" role="tab" data-toggle="tab">课前预习</a>
            </li>
            <li role="presentation">
                <a href="#after_school" class="stat-event" data-stat="course_report" aria-controls="reports" role="tab" data-toggle="tab">课后</a>
            </li>

		</ul>
		<div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="labs">

<?php if($videos):?>
    <?php $i=1; foreach ($videos as $video): ?>
        <div class="lab-item ">
            <div class="lab-item-status">
                <?php if($video->isWatch):?>
                    <img src="https://static.shiyanlou.com/img/lab-ok.png">
                <?php else:?>
                    <img src="https://static.shiyanlou.com/img/lab-not-ok.png">
                <?php endif;?>
            </div>
            <div class="lab-item-index">第<?=$i++?>节</div>
            <div class="lab-item-title" title="<?=$video->name?>"><?=$video->name?></div>
            <div class="pull-right lab-item-ctrl">
                                 <!--<a class="btn btn-default" href="/courses/63/labs/291/document" target="_blank">查看文档</a>-->
                <a class="video_click btn btn-primary   lab-item-start" data-id="<?=$video->id?>">开始观看</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php else:?>
    视频列表为空
<?php endif;?>
            </div>

            <div role="tabpanel" class="tab-pane" id="exam">
                <?php $x = 1;?>
                <?php foreach ($videos as $video): ?>
                    <?php $x = $x*$video->isWatch;?>
                <?php endforeach; ?>
                <?php if ($x == 0): ?>
                    <div class="vip-banner course-vip-banner ">
                        <img src="https://static.shiyanlou.com/img/icon-vip.png">
                        看完视频才显示试题
                    </div>
                <?php else:?>
                    <?php $i = 1;?>
                    <form action="<?=site_url('user/'.$course->id.'/add_answer')?>" method="POST">
                    <?php foreach ($exams as $exam): ?>
                        <p><?=$i++?>. <?=$exam->title?></p>
                <fieldset class="form-group">
                    <label for="exampleSelect1"></label>
                    <select class="form-control" id="exampleSelect1" name="<?=$exam->id?>">
                      <option value="a"><?=$exam->a?></option>
                      <option value="b"><?=$exam->b?></option>
                      <option value="c"><?=$exam->c?></option>
                      <option value="d"><?=$exam->d?></option>
                    </select>
                  </fieldset>
                    <?php endforeach; ?>
                    <fieldset class="form-group">
                        <br /><input type="submit" value="提交">
                    </fieldset>
                </form>
                <?php endif; ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="after_school">
                <h3>作业题目:</h3>
                <h5><?=$course->homework?></h5>
                <hr />
                <h3>我上传的作业:</h3>
                <?php $i=0;?>
                <?php foreach ($homeworks as $homework): ?>
                    <h5><?=++$i;?>.<a href="<?=base_url($homework->path)?>"><?=$homework->name?></a></h5>
                <?php endforeach; ?>


                <div id="fine-uploader-gallery" name="userfile"></div>

            </div>
		</div>
	</div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#comments" class="stat-event" aria-controls="comments" role="tab" data-stat="course_comment" data-toggle="tab">课程评论(<?=count($course->comments)?>)</a>
            </li>
            <!--<li role="presentation">
                <a href="#reports" class="stat-event" data-stat="course_report" aria-controls="reports" role="tab" data-toggle="tab">实验报告(4430)</a>
            </li>
            <li role="presentation">
                <a href="#questions" class="stat-event" data-stat="course_question" aria-controls="questions" role="tab" data-toggle="tab">实验问答(295)</a>
            </li>-->
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane course-comment active" id="comments">
                <div class="comment-box">
                    <div class="comment-form">

                            <textarea class="comment-form-content" placeholder="输入您想说的话..."></textarea>
                            <button class="pull-right btn btn-primary comment-form-add">发表评论</button>
                            <button class="pull-right btn btn-primary comment-form-reset">清除评论</button>

                    </div>
                    <div class="comment-title">最新评论</div>
                    <div class="comment-list">
                        <?php foreach ($course->comments as $comment): ?>
                            <div class="row comment-list-item"><div class="col-md-1">
                                <div class="user-avatar ">
                                    <a class="avatar" href="/user/330341/" target="_blank">
                                        <img src="https://dn-simplecloud.shiyanlou.com/gravatarPGXNKMB8DSCW.jpg?imageView2/1/w/200/h/200">
                                    </a>
                                    <a class="member-icon" href="/vip" target="_blank"><img src="https://static.shiyanlou.com/img/vip-icon.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-11 comment-item-body">
                                <div class="user-username">
                                    <a class="username" href="/user/330341/" target="_blank"><?=$comment->author->username?></a>
                                    <span class="user-level">L11</span>
                                </div>
                                <div class="comment-item-content markdown-box">
                                    <p><?=$comment->text?></p>
                                </div>
                                <div class="comment-item-date">1周前</div><div class="comment-item-lab">来自：<?=$course->name?></div><div class="comment-item-reply" data-pid="17049"><img src="<?=base_url('resources/img/icon-reply.png')?>" alt="">回复</div></div></div>
                        <?php endforeach; ?>

                    </div>
                    <div class="pagination-container"></div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="reports">
				<span class="lab-id active" data-lab-id="None">全部</span>




                        <span class="lab-id" data-lab-id="291">第1节</span>



                        <span class="lab-id" data-lab-id="292">第2节</span>


                <div class="report-owner">
                    <span class="owner-list" data-user-id="410849">我的报告</span> / <span class="owner-list active" data-user-id="None">所有报告</span>
                </div>
                <div class="row report-items"></div>
                <div class="pagination-container"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="questions">
                <a class="btn btn-success" data-toggle="modal" href="#askquestion">我要提问</a>
                <hr>
                <ul class="row question-items"></ul>
                <div class="pagination-container"></div>
            </div>
        </div>
    </div>

            </div>
            <div class="col-md-3 layout-side">

    <div class="side-image side-image-pc">
        <img src="<?=base_url('resources/'.$course->img."?imageView2/0/h/300")?>">
    </div>

<div class="sidebox mooc-teacher">
    <div class="sidebox-header mooc-header">
        <h4 class="sidebox-title">课程教师</h4>
    </div>
    <div class="sidebox-body mooc-content">
        <a href="/user/20440/" target="_blank">
            <img src="https://dn-anything-about-doc.qbox.me/teacher/PHP.png">
        </a>
        <div class="mooc-info">
            <div class="name"><strong><?=$course->teacher->username;?></strong> </div>

            <div class="courses">共发布过<strong><?=count($course->teacher->courses)?></strong>门课程</div>
        </div>
        <div class="mooc-extra-info">
            <div class="word long-paragraph">
                资深PHP工程师, 拥有多年PHP网站开发实际经验, 热衷于主流PHP框架和开源产品的研究。
            </div>
        </div>
    </div>
    <div class="sidebox-footer mooc-footer">
        <a href="<?=site_url('teacher/'.$course->teacher->id)?>" target="_blank">查看老师的所有课程 ></a>
    </div>
</div>









    <!--<div class="sidebox adv-course">
        <div class="sidebox-header">
            <h4 class="sidebox-title">进阶课程</h4>
        </div>
        <div class="sideobx-body course-content">

            <a href="/courses/1">Linux 基础入门（新版）</a>

            <a href="/courses/2">Vim编辑器</a>

            <a href="/courses/57">C语言入门教程</a>

        </div>
    </div>-->




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

					<div class="form-label">
                        分享专属链接给好友，或粘贴到QQ群/微博/论坛，好友注册后，您和好友将分别获赠3个实验豆！
                    </div>
					<input type="text" id="bstext" class="form-invite" value="https://www.shiyanlou.com/register?inviter=NTY0MzE5NDIzNTI0"/>

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




<div class="modal fade askquestion-modal" id="askquestion" tabindex="-1" role="dialog">
    <div class="modal-dialog" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">发帖</h4>
            </div>
            <div class="modal-body words-ctrl">
                <form class="form-horizontal" action="/questions/">
                    <input name="_csrf_token" type=hidden value="1494058378##75f923ba219ba9f2d164c4576e64bab7bb1653c4">
                    <div class="form-group">
                        <label class="col-md-2 control-label">标题</label>
                        <div class="col-md-10">
                            <input type="text" name="title" min="5" max="100" class="form-control" placeholder="至少输入5个字" value="">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">描述</label>
                        <div class="col-md-10">



<div class="tabpanel mkeditor">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#mkeditor-editor" role="tab" data-toggle="tab">编辑</a>
        </li>
        <li role="presentation">
            <a class="mkeditor-btn-view" href="#mkeditor-viewer" role="tab" data-toggle="tab">预览</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active mkeditor-editor" id="mkeditor-editor" role="tabpanel">

            <div class="btn-group" role="group">

                <button type="button" class="btn btn-default mkeditor-btn-bold">
                    <i class="fa fa-bold"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-italic">
                    <i class="fa fa-italic"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-link">
                    <i class="fa fa-link"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-quote">
                    <i class="fa fa-quote-left"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-code">
                    <i class="fa fa-code"></i>
                </button>
                <button id="mkeditor-pickfile" type="button" class="btn btn-default mkeditor-btn-img">
                    <i class="fa fa-image"></i>
                </button>

                <button type="button" class="btn btn-default mkeditor-btn-listol">
                    <i class="fa fa-list-ol"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-listul">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>
            <div class="btn-group pull-right" role="group">
                <a style="font-size:12px; color:#666; text-decoration:underline;" href="/questions/764" target="_blank">
                    <i class="fa fa-question-circle"></i>Markdown 语法
                </a>
            </div>
            <textarea name="content" class="content"
                min="0" max="20000"
                placeholder="推荐使用 Markdown 语法，至少输入 5 个字"></textarea>
            <div class="help-block"></div>
        </div>
        <div class="tab-pane mkeditor-viewer markdown-body" id="mkeditor-viewer" role="tabpanel">
            <div></div>
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-md-2 control-label">板块</label>
                        <div class="col-md-10">
                            <div class="q-types" data-type="">
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <a type="button" class="bottom-link btn btn-primary" href="/vip" target="_blank" style="background:#FFFFFF;color:#00CC99;border:none;float:left;padding-left:0;"><img src="https://static.shiyanlou.com/img/icon-vip-advance.png" alt=""> 加入高级会员获得助教答疑</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="submit-question btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="start-newlab">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始新实验</h3>
			</div>
			<div class="modal-body" style="text-align:center">
                <p> 一个实验正在进行，是否停止它，开始新实验？</p>

			</div>
			<div class="modal-footer" style="margin-top:0px">

                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                    <a class="btn btn-primary start-newlab-confirm">确定</a>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="start-evaluation-course">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始评估课实验</h3>
			</div>
			<div class="modal-body">
                <div>
                    <p>为了让评估结果更加准确，请注意以下操作：</p>
                    <ul>
                        <li>完成实验后点击「停止实验」按钮</li>
                        <li>将代码提交到代码库</li>
                        <li>尽可能详尽的撰写实验报告</li>
                        <li>尽可能在实验操作的关键步骤截图</li>
                        <li>尽可能减少无用操作</li>
                        <li>尽可能高效的利用内存/CPU资源</li>
                    </ul>
                    <p>评估课还在不断完善中，我们真挚希望你能通过我们提供的这个平台，找到更好的发展机会。</p>
                </div>
                <br>
                <div class="start-newlab"></div>
			</div>
			<div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                <a class="btn btn-primary start-confirm">确定</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="vip-startlab-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始实验</h3>
			</div>
			<div class="modal-body">
                <div class="start-newlab"></div>
                <br>
                <div class="text-center vip-vm">
                    <a class="btn btn-default btn-lg newvm">创建新环境</a>

                </div>
                <br>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="bean-course-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">激活项目课：新手指南之玩转实验楼</h4>
			</div>
			<div class="modal-body">
				<div style="font-size:14px; font-weight:thin;">
					本实验主要通过介绍计算机相关技术的基础概念，实验楼的使用方法，面向完全没有编程经验的用户。从中我们将了解到实验楼的实验精神：“从实践切入，依靠交互性、操作性更强的课程，理论学习+动手实践共同激发你的创造力。”
				</div>
				<div style="margin:36px 0 18px; font-size:16px; font-weight:bold;">
                    您有 <span style="color:#f66;"><strong>4</strong></span> 个实验豆，激活本课程需要消耗 <span style="color:#f66;"><strong>0</strong></span> 个实验豆！
				</div>
                <div style="color:#84B61A; font-size:14px; font-weight:bold;">激活后可不限次数学习本课。<a href="/faq#shiyandou" style="font-weight:normal;" target="_blank">如何获得实验豆？</a></div>
			</div>
			<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>

                <button type="button" class="btn btn-primary bean-course-confirm" data-dismiss="modal">永久激活</button>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="charge-course-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title">课程报名</h4>
            </div>
            <div class="modal-body">
                <form class="row form-horizontal">
                     <input name="_csrf_token" type=hidden value="1494058378##75f923ba219ba9f2d164c4576e64bab7bb1653c4">
                    <div class="form-group">
                        <label class="col-md-2 control-label">邮箱</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" value="xiaojieluoff@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">手机号码</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone_no">
                                <span class="input-group-btn">
                                    <button class="btn btn-default charge-course-phone-code" type="button" style="padding:7px 12px;">获取验证码</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">验证码</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="verify_code">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary charge-course-confirm">确定</button>
            </div>
        </div>
    </div>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?=base_url('resources/js/jquery.cxselect.js')?>"></script>
<script src="<?=base_url('resources/js/fine-uploader/jquery.fine-uploader.min.js')?>"></script>
<script src="https://cdn.bootcss.com/video.js/6.0.1/video.js"></script>

<!-- Fine Uploader Gallery template
    ====================================================================== -->
<script type="text/template" id="qq-template-gallery">
    <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
        <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
            <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
        </div>
        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
            <span class="qq-upload-drop-area-text-selector"></span>
        </div>


            <div class="qq-upload-button-selector qq-upload-button">
                <div>Select files</div>
            </div>
            <button type="button" id="trigger-upload" class="btn btn-primary">
                <i class="icon-upload icon-white"></i> Upload
            </button>

        <span class="qq-drop-processing-selector qq-drop-processing">
            <span>Processing dropped files...</span>
            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
        </span>
        <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
            <li>
                <div class="qq-progress-bar-container-selector">
                    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                </div>
                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                <span class="qq-upload-file-selector qq-upload-file"></span>
                <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                <span class="qq-upload-size-selector qq-upload-size"></span>
                <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
            </li>
        </ul>

        <dialog class="qq-alert-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Close</button>
            </div>
        </dialog>

        <dialog class="qq-confirm-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">No</button>
                <button type="button" class="qq-ok-button-selector">Yes</button>
            </div>
        </dialog>

        <dialog class="qq-prompt-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <input type="text">
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Cancel</button>
                <button type="button" class="qq-ok-button-selector">Ok</button>
            </div>
        </dialog>
    </div>
</script>
<script>


var manualUploader = new qq.FineUploader({
        element: document.getElementById('fine-uploader-gallery'),
        template: 'qq-template-gallery',
        request: {
            endpoint: '<?=site_url('course/'.$course->id.'/upload_homework')?>'
        },
        retry:{
            enableAuto: true,
        },
        deleteFile: {
            enabled: false, // defaults to false
            endpoint: '<?=site_url('course/delete_homework')?>',
        },
        thumbnails: {
            placeholders: {
                waitingPath: '<?=base_url('resources/image/fine-uploader/placeholders/waiting-generic.png')?>',
                notAvailablePath: '<?=base_url('resources/image/fine-uploader/placeholders/not_available-generic.png')?>'
            }
        },
        autoUpload: false,
        debug: true,
        validation: {
            allowedExtensions: ['doc', 'txt']
        }
    });

    qq(document.getElementById("trigger-upload")).attach("click", function() {
        manualUploader.uploadStoredFiles();
    });
</script>
