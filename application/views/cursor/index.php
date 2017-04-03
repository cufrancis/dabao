<div class="container">
    <h2><?php echo $cursor->name;?></h2>
    <p>
        created_at:<span id="created_at"><?php echo $cursor->created_at;?></span> |
        updated_at:<?php echo $cursor->updated_at;?> |
        finished_at:<?php echo $cursor->finished_at;?> |
        Teacher:<a href="/user/<?php echo $cursor->teacher->id;?>"><?php echo $cursor->teacher->username;?></a>
    </p>
    <hr />

    <h2>视频列表</h2>
    <div id="video_list">
        <?php foreach($videos as $video):?>
            <a class="video_click" id=<?=$video->id;?> url="<?=$video->url;?>"><?php echo $video->name;?></a><br />
        <?php endforeach;?>
        <div id="video_index"></div> <!-- 播放区域 -->
    </div>

    <h2>试题</h2>
    <h2>评论区</h2>

</div>

<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.video_click').click(function(){
        // 先删除子元素
        // 再添加video

        var video_div  = $('#video_index');
        var video_cick = $('.video_cick');
        var base_url = "<?php echo base_url();?>"
        var url = base_url+$(this).attr('url');

        video_div.empty();
        video_div.append('<video src="'+url+'" controls="controls">您的浏览器不支持 video 标签。</video>')
        video_div.fadeToggle();

        // alert(this.id)
    });
});

// 把视频播放时间调整到上次退出时间
// myVid=document.getElementById("video");
// myVid.currentTime=5;
</script>
