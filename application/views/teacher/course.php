<h2>我发布的课程</h2>
<?php print_r($courses);?>
<br /><a href="<?=site_url('course/create')?>">创建课程</a>

<?php if (!empty($courses)):?>
    <?php foreach ($courses as $course):?>
        <li><a href="<?=site_url('course/'.$course->id)?>"><?php echo $course->name;?></a> |
            <a href="<?=site_url('course/'.$course->id.'/edit')?>">编辑</a> |
            <a href="<?=site_url('course/'.$course->id.'/exam')?>">添加试题</a> |
            <a href="<?=site_url('course/'.$course->id.'/homework')?>">添加课后作业</a> |
            <a href="<?=site_url('course/'.$course->id.'/answer')?>">学生答案</a> |
            <a href="<?=site_url('course/'.$course->id.'/user_homework')?>">学生课后作业</a>
        </li>
    <?php endforeach;?>

<?php endif;?>
