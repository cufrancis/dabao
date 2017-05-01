<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
    {
		$this->load->library('Auth');
		$this->auth->is_login();

		$this->load->model('user_model');
		// print_r($this->session->user);

		$query = $this->user_model->get_teachers($this->session->user['id']);
		$teachers = array();
		$this->load->model('teacher_model');
		// $all_teachers = $this->teacher_model->get_all_teachers();

		if (!empty($query)){
			// 如果关注教师不为空
			foreach ($query as $q) {
				$teachers[] = $this->teacher_model->get_info($q->teacher_id);
			}
		}

		$data['teachers'] = $teachers;
		$all_teachers = $this->teacher_model->get_all_teachers();

		foreach ($all_teachers as $teacher) {
			$teacher->is_atten = $this->user_model->check_atten($teacher);
		}

		// array_map($this->user_model->check_atten, $all_teachers);
		print_r($all_teachers[0]->is_atten);
		$data['all_teachers'] = $all_teachers;
		// $this->load->
		$data['user'] = $this->session->user;
		$this->load->view('header');
		$this->load->view('user/index', $data);
		$this->load->view('footer');
	}



    public function login(){
		// 加载表单验证类，并设置验证条件
        $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_isset_username_check');
		// 通过自定义验证规则验证帐号和密码是否匹配，具体验证规则看ci手册
		$this->form_validation->set_rules('password', 'Password', "required|callback_check_password[{$this->input->post('username')}]");

		// $this->output->enable_profiler(TRUE);


		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
	        $this->load->view('user/login');
			$this->load->view('footer');
		} else {
			//  从表单中获取用户名和密码
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// 检查数据库中是否存在指定的用户名
			// 载入数据库类和session类
			$this->load->database();
			$this->load->library('session');
			// $this->load->helper('url');

			// 单结果标准查询，只查询一条数据
			$query = $this->db->select('*')
								->from('user')
								->where('username', $username)
								->where('password', $password)
								->get();

			$info = $query->row_array();

			// 将用户信息存入session
			$this->session->user = $info;

			// 设置登录成功提示，并标记为flashdata数据（只显示一次的session数据，具体看ci的session类库）
			// $this->session->message = '登录成功！';
			// $this->session->mark_as_flash('msessage');
			redirect(site_url());
		}
    }

	/**
	 * 用户注册
	 * @return [type] [description]
	 */
	public function register(){
		// 加载表单验证类，并设置验证条件
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_exists_username');
		$this->form_validation->set_rules('password', 'Password', "required");
		$this->form_validation->set_rules('realname', 'Realname', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('user/register');
			$this->load->view('footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$realname = $this->input->post('realname');

			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');

			// 验证通过，写入数据到数据库

			$info = array(
				'username' => $username,
				'password' => $password,
				'realname' => $realname,
			);

			$result = $this->db->insert('user', $info);

			$this->load->library('session');

			if ($result){
				$this->session->message = '注册成功！';
				$this->session->mark_as_flash('message');
				redirect(site_url());
			}else {
				$this->session->message = '注册失败，请联系管理员';
				$this->session->mark_as_flash('message');
			}
		}
	}

	/**
	 * reset password
	 */
	public function reset_password(){
		// 加载表单验证类，并设置验证条件
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('old_password', 'Password', "required");
		$this->form_validation->set_rules('new_password', 'New_Password', 'required');

		if ($this->form_validation->run() == FALSE){
			// 验证不通过，显示重置密码页面
			$this->load->view('header');
			$this->load->view('user/reset_password');
			$this->load->view('footer');
		} else {
			// 验证通过，写入数据库
			$username = $this->input->post('username');
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');

			// 表单提交后，从数据库中匹配用户名与旧密码是否一致，一致就将
			// 新密码写入替换原来密码
			$this->load->database();
			$query = $this->db->select('*')
								->from('user')
								->where('username', $username)
								->where('password', $old_password)
								->get();
			$result = $query->row_array();
			if ($result){
				// 旧密码和用户名匹配
				$this->db->where('username', $username);
				$this->db->update('user', array('password'=>$new_password));
				echo "更新密码成功";
			} else{
				echo "密码或用户名错误";
			}

			// echo $old_password;
		}

	}

	/**
	 * 接受参数并存入session
	 * @param  [type] $vid [description]
	 * @return [type]      [description]
	 */
	public function video_time($vid){
		$this->load->library('session');


	}

	/**
	 * 退出登录
	 * @return [None] [无返回值]
	 */
	public function logout(){
		$this->load->library('session');
		unset($_SESSION['user']);
		$this->session->message = '注销成功！';
		$this->session->mark_as_flash('message');
		$this->load->helper('url');
		redirect(site_url());
	}

	/**
	 * 查询数据库，检查用户名和密码是否匹配
	 * @param  [string] $password [密码]
	 * @param  [string] $username [用户名]
	 * @return [boolean]           [匹配返回True, 不匹配返回False]
	 */
	public function check_password($password, $username) {

		$query = $this->db->select('*')
							->from('user')
							->where('username', $username)
							->where('password', $password)
							->get();
		$result = $query->row_array();

		if($result){
			return True;
		}else {
			$this->form_validation->set_message('check_password', '密码错误');
			return False;
		}
	}

	/**
	 * 登录时验证用户名是否存在
	 * @param  [string] $username [用户名]
	 * @return [boolean]          [存在返回True, 不存在返回False]
	 */
	public function isset_username_check($username){
		$this->load->database();
		$query = $this->db->select('*')
							->from('user')
							->where('username', $username)
							->get();
		$result = $query->row_array();

		if (isset($result)){
			return True;
		}else {
			$this->form_validation->set_message('isset_username_check', '用户名不存在');
			return False;
		}
	}

	/**
	 * 注册时验证用户名是否存在，与isset_username_check 返回值相反
	 * @param  [string] $username [用户名]
	 * @return [boolean]           [存在返回False, 不存在返回True]
	 */
	public function exists_username($username){
		$this->load->database();
		$query = $this->db->select('*')
							->from('user')
							->where('username', $username)
							->get();
		$result = $query->row_array();

		if (isset($result)){
			$this->form_validation->set_message('exists_username', '用户名已存在');
			return False;
		}else {
			return True;
		}
	}

	public function ajax_view_video(){
		$vid = $this->input->post('vid');
		// 用户登陆了才能进行下一步操作
		if (isset($this->session->user)) {
			// 将看完的 video id 写入 数据库
			$this->load->model('user_model');
			$result = $this->user_model->add_watch_video(array('user_id'=>$this->session->user['id'],
														'video_id' => $vid));
			if ($result){
				echo True;
			} else {
				echo FALSE;
			}
		}
	}


}
