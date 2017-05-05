<h2>我发布的课程</h2>
<?php print_r($courses);?>

<?php if (!empty($courses)):?>
    <?php foreach ($courses as $course):?>
        <li><a href="<?=site_url('course/'.$course->id)?>"><?php echo $course->name;?></a> |
            <a href="<?=site_url('course/'.$course->id.'/edit')?>">编辑</a></li>
    <?php endforeach;?>
<?php else:?>
        目前为空，去 <a href="<?=site_url('course/create')?>">创建课程</a>
<?php endif;?>
