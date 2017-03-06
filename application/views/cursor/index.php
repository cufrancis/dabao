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
    <?php foreach($videos as $video):?>
        <a href="/video/<?php echo $video->id;?>"><?php echo $video->name;?></a><br />
    <?php endforeach;?>

    <h2>试题</h2>
    <h2>评论区</h2>

</div>
