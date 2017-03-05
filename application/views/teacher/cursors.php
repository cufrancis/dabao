<h2>我发布的课程</h2>
<?php print_r($query);?>

<?php foreach ($query as $row):?>
    <li><a href="/cursor/<?php echo $row->id;?>"><?php echo $row->name;?></a></li>
<?php endforeach;?>
