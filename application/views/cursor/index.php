<link href="//cdn.bootcss.com/plyr/2.0.12/plyr.css" rel="stylesheet">

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
            <a class="video_click" id=<?=$video->id;?> vid="<?php echo $video->id;?>" src="<?=$video->url;?>"><?php echo $video->name;?></a><br />
        <?php endforeach;?>

        <div id="video_index">
            <video id="video" poster="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.jpg?v1" controls>
              <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
              <!-- <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm"> -->
              <!-- Captions are optional -->
              <track kind="captions" label="English captions" src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.en.vtt" srclang="en" default>
            </video>
        </div> <!-- 播放区域 -->
    </div>

    <h2>试题</h2>
    <div class="st"></div>
    <h2>评论区</h2>

</div>

<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="//cdn.bootcss.com/plyr/2.0.12/plyr.js"></script>
<script src="//cdn.bootcss.com/plyr/2.0.12/plyr.svg"></script>
<script>

$(document).ready(function(){
    plyr.setup();

    $('.video_click').click(function(){
        // 单击事件
        var url = "<?=base_url();?>"+$(this).attr('src')
        var video = $('#video');
        video.attr('src', url);
        alert(video.attr('src'));
    });
    // 更新 video地址
    // var video = $('#video');
    // alert(video)
    // video.attr('src', 'test')
    // // source = 'src';
    // alert($('#video').attr('src'));

})
</script>
