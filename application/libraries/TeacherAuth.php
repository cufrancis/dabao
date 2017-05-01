<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 用户权限类库
 * 主要用来验证网站使用者的权限及是否登录等操作
 */
class TeacherAuth {
    protected $CI;

    public function __construct(){
        $this->CI = & get_instance();
    }

    public function teacher(){
        
    }
}
