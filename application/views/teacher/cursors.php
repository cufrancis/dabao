<h2>我发布的课程</h2>
<?php foreach ($query as $row):?>
    <li><a href="/"><?php echo $row->name;?></a></li>
<?php endforeach;?>
