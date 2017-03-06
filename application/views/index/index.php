<div class="container">
    <?php if (isset($this->session->user)):?>
        <!-- 检测是否登录，如果登录了之后$this->session->user 存储的是用户信息-->
        Welcome, <?php echo $this->session->user['username'];?><?php if ($this->session->user['type'] == 1){echo "(教师)";}else{echo "(学生)";}?>| <a href="/logout">Logout</a>

        <ul>
            <?php if($this->session->user['type'] == 1):?>
                <li><a href="teacher/cursor">查看我所发布的课程</a></li>
            <?php else:?>
                <li>我参与的课程</li>
                <li>我的评论</li>
            <?php endif;?>
        </ul>
    <?php else:?>
        <p><a href="/login">Login</a> | <a href="/register">Register</a></p>
    <?php endif;?>
</div>
