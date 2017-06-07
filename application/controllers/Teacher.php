<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Teacher extends CI_Controller {

	public function courses(){
		$this->load->library('Auth');

		$this->auth->check_login();
		// $this->auth->is_teacher();

		# 教师所创建的课程列表
		$this->load->database();
		$this->load->library('session');

		$this->output->enable_profiler(TRUE);

		// 获取该教师发布的所有课程
		$query = $this->db->select('*')
							->from('cursor')
							->where('teacher_id', $this->session->teacher['id'])
							->get();

		$courses = $query->result();
		$this->load->model('teacher_model');
		foreach ($courses as $course) {
			$course->teacher = $this->teacher_model->get_info($course->teacher_id);
		}

		$data['courses'] = $courses;

		$this->load->view('teacher/header');
        $this->load->view('teacher/courses', $data);
		$this->load->view('teacher/footer');
	}

	public function login(){
		// 加载表单验证类，并设置验证条件
        $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		// 通过自定义验证规则验证帐号和密码是否匹配，具体验证规则看ci手册
		$this->form_validation->set_rules('password', 'Password', "required");

		// $this->output->enable_profiler(TRUE);


		if ($this->form_validation->run() == FALSE){
			// $this->load->view('teacher/header');
	        $this->load->view('teacher/login');
			$this->load->view('teacher/footer');
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
								->from('teacher')
								->where('username', $username)
								->where('password', $password)
								->get();

			$info = $query->row_array();

			// 将用户信息存入session
			$this->session->teacher = $info;

			// 设置登录成功提示，并标记为flashdata数据（只显示一次的session数据，具体看ci的session类库）
			// $this->session->message = '登录成功！';
			// $this->session->mark_as_flash('msessage');
			redirect(site_url('/teacher/index'));
		}
    }

	public function index(){
		$this->load->library('Auth');

		$this->auth->authenticated('teacher');
		// $this->auth->is_teacher();

		# 教师所创建的课程列表
		$this->load->database();
		$this->load->library('session');

		$this->output->enable_profiler(TRUE);

		// 获取该教师发布的所有课程
		$query = $this->db->select('*')
							->from('cursor')
							->where('teacher_id', $this->session->teacher['id'])
							->get();

		$data['courses'] = $query->result();
		print_r($data);

		// foreach ($query->result() as $row){
		// 	echo $row->name;
		// }
		$this->load->view('teacher/header');
		$this->load->view('teacher/index', $data);
		$this->load->view('teacher/footer');
	}
	/**
	 * 退出登录
	 * @return [None] [无返回值]
	 */
	public function logout(){
		$this->load->library('session');
		unset($_SESSION['teacher']);
		$this->session->message = '注销成功！';
		$this->session->mark_as_flash('message');
		$this->load->helper('url');
		redirect(site_url('teacher'));
	}
}
