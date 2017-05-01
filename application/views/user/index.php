<link rel="stylesheet" href="<?=base_url('resources/js/chosen/chosen.css')?>">


<div class="row">
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <p>个人信息</p>
                我的年级: <?=$this->session->user['grade'];?><br />
                我的班级：<?=$this->session->user['class'];?><br>
                我关注的教师:
                <select data-placeholder="Choose a country..." style="width:350px;" multiple class="chosen-select">
                    <?php foreach ($all_teachers as $teacher): ?>
                        <option value="<?=$teacher->id;?>" <?php if($teacher->is_atten):?>selected<?php endif;?>><?=$teacher->username?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
<script src="<?=base_url('resources/js/jquery.cxselect.js')?>"></script>
<script src="<?=base_url('resources/js/chosen/chosen.jquery.js')?>"></script>
<script src="<?=base_url('resources/js/chosen/chosen.proto.js')?>"></script>
<script type="text/javascript">
$(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
$('#element_id').cxSelect({
  selects: ['grade', 'class'],
  required: true,
  jsonValue: 'v',
  data: [
    {'v': '01', 'n': '一年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
    {'v': '02', 'n': '二年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
    {'v': '03', 'n': '三年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
    {'v': '04', 'n': '四年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
    {'v': '05', 'n': '五年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
    {'v': '06', 'n': '六年级 >', 's': [
        {'v':'01', 'n':'(1)班'},
        {'v':'02', 'n':'(2)班'},
        {'v':'03', 'n':'(3)班'},
        {'v':'04', 'n':'(4)班'},
    ]},
]
});

</script>
