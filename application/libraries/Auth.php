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

        if (isset($this->CI->session->user) || isset($this->CI->session->teacher)){
            return true;
        } else {
            return false;
        }
    }

    public function authenticated($type='student'){
        $this->CI->load->library("session");

        if($type == 'student'){
            if (isset($this->CI->session->user)){
                return true;
            } else {
                // $this->CI->load->helper('url');
                // redirect(site_url('/'));
                return false;
                // redirect(site_url('/login'));
            }
        }else if ($type == 'teacher'){
            if (isset($this->CI->session->teacher)){
                return true;
            } else {
                // $this->CI->load->helper('url');
                redirect(site_url('/teacher/login'));
                return false;
                // redirect(site_url('/login'));
            }
        } else {
            redirect(site_url());
        }

    }

    /**
     * 已登录用户是否是教师
     * @return boolean [description]
     */
    public function is_teacher(){
        $this->CI->load->library("session");
        $this->CI->load->database();
        // $this->CI->load->model('user_model');

        if (isset($this->CI->session->teacher)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * 检查课程所有者
     * @return [type] [description]
     */
    public function check_owner($cursor_id){
        $this->CI->load->library("session");

        $this->CI->load->database();

        $query = $this->CI->db->select('*')->from('cursor')
                                ->where('teacher_id', $this->CI->session->user['id'])
                                ->get();
        // $data =
        if (isset($query->result()[0])){
            return true;
        } else {
            $this->CI->load->helper("url");
            $this->CI->load->library("session");

            $this->CI->session->message = '无权限！';
            $this->CI->session->mark_as_flash('message');
            redirect('/');
        }
        // print_r($this->CI->session->user['teacher_id']);
        // print_r($data);
    }

    public function check_teacher(){
        if ($this->is_teacher() == false){
            $this->CI->load->helper("url");
            $this->CI->load->library("session");

            $this->CI->session->message = '无权限！';
            $this->CI->session->mark_as_flash('message');
            redirect('/');
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
