<?php foreach ($homeworks as $homework): ?>
    <ul>学生:<a href="<?=site_url('user/'.$homework->user->id)?>"><?=$homework->user->username?></a>
        题目id:<a href="<?=site_url('course/'.$homework->course->id)?>"><?=$homework->course->name?></a> 课后作业: <a href="<?=base_url($homework->path)?>"><?=$homework->name?></a>
        <li></li>
    </ul>

<?php endforeach; ?>
