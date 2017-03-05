<div class="container">
    <?php if (isset($this->session->user)):?>
        <!-- 检测是否登录，如果登录了之后$this->session->user 存储的是用户信息-->
        Welcome, <?php echo $this->session->user['username'];?><?php if ($this->session->user['type'] == 1){echo "(教师)";}else{echo "(学生)";}?>| <a href="/logout">Logout</a>

        <ul>
            <li><a href="teacher/cursor">查看我所发布的课程</a></li>
        </ul>
    <?php else:?>
        <p><a href="/login">Login</a> | <a href="/register">Register</a></p>
    <?php endif;?>
</div>
