<div class="container layout-margin-top layout-noside">


    <div class="row">
        <div class="col-md-12 layout-body">

<div class="userinfo-banner container">
    <div class="banner-container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left userinf
                o-banner-avatar">




    <div class="user-avatar ">
        <a class="avatar" href="/user/410849/" target="_blank">
            <img src="https://dn-simplecloud.shiyanlou.com/gravatar7BJ5SVLA29M8.jpg?imageView2/1/w/200/h/200">
        </a>

    </div>


                    <div class="userinfo-banner-money">
                    </div>

                </div>
                <div class="pull-left userinfo-banner-details">
                    <div class="userinfo-banner-meta">
                        <span><?=$this->session->user['username']?></span>
						<div class="vip-info">
                            <i class="i-user-vip-buy"></i>
						</div>
                    </div>
                    <div class="userinfo-banner-status">

                    </div>
					<div class="show-level">
					<!--	<span class="level-num"><I>1 楼</I><img src="https://static.shiyanlou.com/img/user-floor-icon.png"></span>

						<span class="level-up-info">距  2 楼还需 30 分钟有效学习时间</span>-->
                        上次登陆时间:<?=date('Y-m-d H:i:s', $this->session->user['now_login_at'])?>
                        已登陆:<?php echo floor((time() - $this->session->user['now_login_at'])/60)?> 分钟
					</div>
                </div>
                看过的视频:<br />
            </div>
        </div>
    </div>
</div>
<div class="container layout">
    <div class="row">
        <div class="col-md-9 layout-body">



        </div>
    </div>
</div>
