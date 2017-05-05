<h1>重置密码</h1>
<div class="container">
    <?php echo validation_errors(); ?>

    <?php echo form_open(''); ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Old Password</h5>
    <input type="text" name="old_password" value="请输入旧密码" size="50" />

    <h5>New Password</h5>
    <input type="text" name="new_password" value="新密码" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>
</div>
