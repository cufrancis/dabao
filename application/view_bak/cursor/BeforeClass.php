<div class="jumbotron">
  <h2><p class="text-center">课前预习</p></h2>
</div>

<div class="row">
    <div class="col-md-2" style="border:1px solid #e7e7e7; margin-right:10px">
        <nav class="navbar" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <?php foreach ($teachers as $teacher):?>
                    <li><a href="<?=site_url('course/before_class/'.$teacher->teacher->id)?>"><?=$teacher->teacher->username;?></a></li>
                <?php endforeach;?>

            </ul>
        </nav>
    </div>
    <div class="col-md-9" style="border:1px solid #e7e7e7;">
        <div class="col-md-12">
            <ol class="breadcrumb text-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div class="col-md-12">
            <?php if(isset($courses) && is_array($courses)):?>
                <?php foreach ($courses as $course): ?>
                    <a href="#"><?=$course->name;?></a><br>
                <?php endforeach; ?>
            <?php else:?>
                暂无数据
            <?php endif;?>
            <!-- <div class="col-md-12">
                <div class="col-md-4">
                    <a href="<?=site_url('course/1'); ?>"><img src="<?=base_url('resources/image/05.png');?>" class="img-responsive center-block"></a>
                </div>
                <div class="col-md-4">
                    <a href=""><img src="<?=base_url('resources/image/04.png');?>" class="img-responsive center-block" ></a>
                </div>
                <div class="col-md-4">
                    其他学科
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4">
                    其他学科
                </div>
                <div class="col-md-4">
                    其他学科
                </div>
                <div class="col-md-4">
                    其他学科
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4">
                    其他学科
                </div>
                <div class="col-md-4">
                    其他学科
                </div>
                <div class="col-md-4">
                    其他学科
                </div>
            </div>
        </div> -->
    </div>
</div>
