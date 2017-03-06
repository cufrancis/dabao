<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Teacher extends CI_Controller {

	public function index(){

	}

	public function is_login(){

	}

	public function cursor(){
		$this->load->library('Auth');

		$this->auth->check_login();
		$this->auth->is_teacher();

		# 教师所创建的课程列表
		$this->load->database();
		$this->load->library('session');

		$this->output->enable_profiler(TRUE);

		// 获取该教师发布的所有课程
		$query = $this->db->select('*')
							->from('cursor')
							->where('teacher_id', $this->session->user['id'])
							->get();

		$data['query'] = $query->result();
		// foreach ($query->result() as $row){
		// 	echo $row->name;
		// }
		$this->load->view('header');
		$this->load->view('teacher/cursors', $data);
		$this->load->view('footer');
	}

}
