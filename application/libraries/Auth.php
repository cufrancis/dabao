<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 用户权限类库
 * 主要用来验证网站使用者的权限及是否登录等操作
 */
class Auth {
    protected $CI;

    public function __construct(){
        $this->CI = & get_instance();
    }

    /**
     * 通过检测session['user'] 是否存在来判断用户是否登录
     *
     * @return boolean [已登录返回 true, 未登录返回 false]
     */
    public function is_login(){
        $this->CI->load->library("session");

        if (isset($this->CI->session->user)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * 检验是否登录
     * 如果登录,跳过处理,未登录则跳转到登录页面
     * @return [type] [description]
     */
    public function check_login(){
        if ($this->is_login() == false){
            $this->CI->load->helper("url");
            $this->CI->load->library("session");

			$this->CI->session->message = '还未登录！';
			$this->CI->session->mark_as_flash('message');
			redirect('/login');
        }
    }
}
