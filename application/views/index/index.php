<style type="text/css">

    .head{
        width:1000px ;
        height:100px;
        margin-left: 140px;
        background-image: url("/web/images/hd.jpg");

         }
     #h_right{
        width: 80px;
        height: 30px;
        padding-right: 0px;
        padding-bottom:5px;
        float: right;

    }
    #gap{
        width: 1000px;
        height: 20px;
        margin-left: 140px;
        background-color: pink;
    }
    #bkgd{
        width: 1000px;
        height: 500px;
        margin-left: 140px;
        background-image: url("/web/images/bkgd.jpg");
    }
    #keqian{
        width: 200px;
        height: 200px;
        float: left;
        margin-left: 150px;
        margin-top: 50px;
        background-color: white;
          }
    #kehou{
        float: right;
       width: 200px;
        height: 200px;
        margin-right: 150px;
         margin-top: 50px;
        background-color: white;
    }
    .dabiaoti{
        text-align: center；
        font-size: 50px;
        font-family: 宋体；
    }
</style>

    <?php if (isset($this->session->user)):?>
        <div class="jumbotron">
          <h2>dabao's Education System!</h2>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#system" role="button">Enter system</a></p>
        </div>
        <div class="row" id=system>
            <!-- 栅格排版 -->
            <div class="col-md-6">
                <h2>课前预习</h2>
                <p>课前预习介绍。。。。</p>
                <p><a class="btn btn-default" href="<?=site_url('Course/before_class');?>">前往>></a></p>
            </div>
            <div class="col-md-6">
                <h2>课后复习</h2>
                <p>课后复习介绍。。。</p>
                <p><a class="btn btn-default" href="<?=site_url('login/kehou');?>">前往>></a></p>
            </div>
        </div>
    <?php elseif(isset($this->session->teacher)):?>
        <!-- Teacher -->
        <div class="row" id=system>
            <div class="col-md-6">
                <h2>课程管理</h2>
                <p><a href="<?=site_url('teacher/course')?>" calss="btn btn-default">前往》》</a></p>
            </div>
            <div class="col-md-6">
                <h2>学生管理</h2>
            </div>

        </div>
    <?php else:?>
        <div class="alert alert-warning" role="alert">同学，请<a href="<?=site_url('login');?>">登陆</a>后再进行操作</div>
    <?php endif;?>
