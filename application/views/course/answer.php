<?php foreach ($answers as $answer): ?>
    <ul>学生:<?=$answer->user_id?>
        题目id:<?=$answer->exam_id?> 答案:<?=$answer->answer?>
        <li></li>
    </ul>

<?php endforeach; ?>
