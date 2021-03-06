<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Course extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('Auth');
    }

    public function index($id){
        $id = (int)$id;
        $this->load->database();
        // $this->output->enable_profiler(TRUE);

        $this->load->model('cursor_model');
        $this->load->model('teacher_model');

        $cursor = $this->cursor_model->getCursorInfo($id);

        $data['course'] = $cursor;
        // $data['cursor']->created_at = date("Y-m-d H:i:s", $cursor->created_at);
        // $data['cursor']->updated_at = date("Y-m-d H:i:s", $cursor->updated_at);
        // $data['cursor']->finished_at = date("Y-m-d H:i:s", $cursor->finished_at);
        $data['course']->teacher = $this->teacher_model->get_info($cursor->teacher_id);
        $data['course']->teacher->courses = $this->teacher_model->get_courses($cursor->teacher_id);
        $data['videos'] = $this->cursor_model->get_video_of_cursor($id);

        $this->load->model('user_model');
        foreach($data['videos'] as $video){
            if ($this->user_model->is_watch_video($this->session->user['id'], $video->id)){
                $video->isWatch = 1;
            } else {
                $video->isWatch = 0;
            }
        }
        $data['course']->comments = $this->cursor_model->get_all_comments($id);

        foreach ($data['course']->comments as $key => $value) {
            // 这么一大串是为了提取每条评论中的 author_id
            // 并将 author_id 传入 user_model 模块的 getUserInfo() 函数来获取用户的相信信息
            // 最后再在 $data 数组中新建 author 键，并存入查询的用户数据
            // 这样操作之后，在模板中就可以通过 $data['cursor']->comments[0]->author->username
            // 直接获取到评论作者的信息了
            $data['course']->comments[$key]->author = $this->user_model->getUserInfo($value->author_id);
        }
        // print_r($data['videos']);
        $this->load->model('exam_model');
        $data['exams'] = $this->exam_model->get_exam($id);
        // foreach ($data['exams'] as $exam) {
        //     $exam->select = json_decode($exam->select);
        // }
        $data['homeworks'] = $this->user_model->homework($this->session->user['id'], $id);
        // print_r($data);

        $this->load->view('header');
        $this->load->view('course/index', $data);
        $this->load->view('footer');
    }

    public function all(){
        // courses
        $this->load->model('cursor_model');
        $courses = $this->cursor_model->get_all_courses();

        $data['courses'] = $courses;
        $this->load->view('header');
        $this->load->view('course/all', $data);
        $this->load->view('footer');
    }

    /**
     * 考试答案
     * @param [type] $course_id [description]
     */
    public function answer($course_id){
        $this->load->model('user_model');
        // $course = $this->course

        $answer = $this->user_model->get_answers($course_id);
        $answers = $this->db->select('*')->from('user_answers')->where('course_id', (int)$course_id)->get();

        // print_r($answers->result());

        $data['answers'] = $answers->result();

        $this->load->view('course/answer', $data);

        // print_r($answer);
    }

    public function exam($id){
        $this->output->enable_profiler(TRUE);


        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->input->post('title') == NULL){
            $this->load->view('course/exam');
        } else {
            print("Hello");

    		$info = array(
                'course_id' => $id,
    			'title' => $this->input->post('title'),
    			'a' => $this->input->post('a'),
                'b' => $this->input->post('b'),
    			'c' => $this->input->post('c'),
                'd' => $this->input->post('d')
    		);
            $this->load->database();
            $result = $this->db->insert('exam', $info);

            print_r($result);

			$this->load->library('session');

			if ($result){
				$this->session->message = '注册成功！';
				$this->session->mark_as_flash('message');
				redirect(site_url('teacher/course'));
			}else {
				$this->session->message = '注册失败，请联系管理员';
				$this->session->mark_as_flash('message');
			}

        }
    }

    /**
     * 添加课后作业
     * @param [type] $course_id [description]
     */
    public function homework($course_id){
        $this->output->enable_profiler(TRUE);
        $this->load->model('course_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('homework', 'Homework', 'required');

        if ($this->input->post('homework') == NULL){
            $data['homework'] = $this->course_model->get_homework($course_id);
            // print_r($data);
            $this->load->view('course/homework', $data);
        } else {
            $data = array(
                'homework' => $this->input->post('homework')
            );
            $result = $this->course_model->update((int)$course_id, $data);

            print_r($result);

            $this->load->library('session');

            if ($result){
                $this->session->message = '失败';
                $this->session->mark_as_flash('message');
                redirect(site_url('teacher/course'));
            }else {
                $this->session->message = '失败，请联系管理员';
                $this->session->mark_as_flash('message');
            }

        }
    }

    /**
     * 该课程所有的 课后作业
     * @param [type] $course_id [description]
     */
    public function user_homework($course_id){
        $this->load->model('user_model');
        $this->load->model('course_model');
        // $course = $this->course

        $homeworks = $this->user_model->get_homeworks($course_id);
        // $answers = $this->db->select('*')->from('user_answers')->where('course_id', (int)$course_id)->get();

        foreach ($homeworks as $homework) {
            // print($homework->user_id);
            $homework->user = $this->user_model->getUserInfo($homework->user_id);
            $homework->course = $this->course_model->getCourseInfo($homework->course_id);
        }

        $data['homeworks'] = $homeworks;

        print_r($data);
        $this->load->view('course/homeworks', $data);

    }



    // 编辑
    public function edit($id){
        $id = (int)$id;

        // 权限认证,不满足抛出异常
        // $this->load->library('Auth');
        // $this->auth->is_teacher();
        // $this->auth->check_owner($id);
        $this->output->enable_profiler(TRUE);



        $this->load->model('cursor_model');
        $this->load->model('video_model');
        $this->load->model('question_model');

        // 课程所有的信息
        $cursor = $this->cursor_model->getCursorInfo($id);
        // 课程所有的视频
        $videos = $this->cursor_model->get_video_of_cursor($id);
        // 课程所有的试题
        $questions = $this->question_model->get_question_of_cursor($id);
        print_r($videos);
//
        // 向视图文件中传递动态数据
        $data['cursor'] = $cursor;
        $data['videos'] = $videos;
        $data['questions'] = $questions;

        $this->load->view('header');
        $this->load->view('cursor/edit', $data);
        $this->load->view('footer');
    }

    /**
     * 新建课程
     * @return [type] [description]
     */
    public function create(){
        // 加载表单验证类，并设置验证条件
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('grade', 'Grade', "required");
        // $this->form_validation->set_rules('realname', 'Realname', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('cursor/create');
            $this->load->view('footer');
        } else {
            // print_r($this->input->post('grade'));
            // print_r($this->input->post('class'));
            $name = $this->input->post('name');
            $grade = $this->input->post('grade');
            $class = $this->input->post('class');
            $desc = $this->input->post('desc');
			// $realname = $this->input->post('realname');

			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');

			// 验证通过，写入数据到数据库

			$info = array(
				'name' => $name,
				'grade' => $grade,
                'class' => $class,
				'desc' => $desc,
			);

			$result = $this->db->insert('cursor', $info);

            print_r($result);

			$this->load->library('session');

			if ($result){
				$this->session->message = '注册成功！';
				$this->session->mark_as_flash('message');
				redirect(site_url('teacher/course'));
			}else {
				$this->session->message = '注册失败，请联系管理员';
				$this->session->mark_as_flash('message');
			}
        }
    }

    // 更新
    public function update($cursor_id){
        $data = array(
            "name"  =>  $this->input->post('name'),
            "desc" => $this->input->post('desc'),
        );

        $this->load->model('cursor_model');
        $result = $this->cursor_model->update($cursor_id, $data);

        $this->load->helper('url');
        if ($result){
            echo "更新成功";
        } else {
            echo "更新失败";
        }
    }


    /**
     * 上传视频到课程
     * @return [type] [description]
     */
    public function upload($cursor_id){
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png|swf|mp4';
        // $config['max_size']     = 100;
        // $config['max_width']        = 1024;
        // $config['max_height']       = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->load->model('cursor_model');

        if (!$this->upload->do_upload('qqfile')){
            $error = array('error' => $this->upload->display_errors());
            echo json_encode(array('success'=>false));
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->cursor_model->add_video($cursor_id, $this->upload->data());
            // echo json_encode($this->upload->data());
            echo json_encode(array('success'=>true));
        }
    }

    /**
     * 学生上传课后作业
     */
    public function upload_homework($course_id){
        $config['upload_path']      = './uploads/homework/';
        $config['allowed_types']    = 'doc|txt';
        // $config['max_size']     = 100;
        // $config['max_width']        = 1024;
        // $config['max_height']       = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->load->model('course_model');
        $this->load->library('session');

        if (!$this->upload->do_upload('qqfile')){
            $error = array('error' => $this->upload->display_errors());
            echo json_encode(array('success'=>false));
        } else {
            // $data = array('upload_data' => $this->upload->data());
            $data = array(
                'homework' => $this->upload->data(),
                'user_id' => $this->session->user['id'],
                'course_id' => $course_id
            );
            // // $this->cursor_model->add_video($cursor_id, $this->upload->data());
            $this->course_model->add_homework($data);
            // echo json_encode($this->upload->data());
            echo json_encode(array('success'=>true, 'data'=>$this->upload));
        }
    }

    /**
     * 删除上传的课后作业
     */
    public function delete_homework(){
        $this->load->library('upload');

        print_r($this->upload);
    }

    /**
     * 添加评论
     * @param [type] $cursor_id [description]
     */
    public function comment_add(){
        $this->load->library('Auth');

        if($this->auth->authenticated() == true){
            // 从 ajax 传递的数据中取出 课程id
            $cursor_id = $this->input->post('course_id');
            // 加载课程模型类
            $this->load->model('cursor_model');
            // 构造数据数组，此 $data 数组将传给 models/Cursor_model.php/insert_comments() ，
            // 执行向数据库中插入数据的操作
            $data = array(
                // 评论的基本内容
                "text" => $this->input->post('text'),
                // 评论的添加时间
                "created_at" => time(),
                // 作者 id
                "author_id" => $this->session->user['id'],
            );

            // 这里判断插入操作是否成功
            // 具体的插入代码放在 cursor_model 模型类中，
            // 主控制器中只负责调用函数并获取执行结果来进行流程控制
            if ($this->cursor_model->insert_comments($cursor_id, $data)){
                // 插入成功
                // 由于 comment_add() 控制器是由 ajax 调用的，
                // 如果需要返回数据，则必须是 json 格式
                echo json_encode("add comment successful!");
            } else {
                echo json_encode("Error: add comment failed!");
            }
        } else {
            echo json_encode("請登錄後再評論");
        }

    }

    /**
     * 检查 用户有没有看完课程中所有的视频
     * @return [type] 返回0表示课程中的视频都已看完，返回1表示有课程没看完
     */
    function ajax_check_watch_video(){
        // 登陆控制
        if (isset($this->session->user)){
            // 先获取课程所有的视频id
            $cursor_id = $this->input->post("cursor_id");
            $user_id = $this->session->user['id'];
            $this->load->model('cursor_model');
            $this->load->model('user_model');

            $videos = $this->cursor_model->get_video_of_cursor($cursor_id);
            $check = 0;
            foreach ($videos as $video){
                $watch = $this->user_model->is_watch_video($user_id, $video->id);
                if (!$watch)$check += 1;
            }
            echo json_encode($check);
        }
    }

    public function before_class($teacher_id=False){
        $this->load->library('Auth');
        $this->auth->is_login();

        $this->load->model('user_model');
        $this->load->model('cursor_model');
        $this->load->model('teacher_model');
        $teachers = $this->user_model->get_teachers($this->session->user['id']);
        // print_r($teachers);
        // echo "<br />";

        foreach ($teachers as $teacher) {
            $teacher->teacher = $this->teacher_model->get_info($teacher->teacher_id);
            // $teacher->courses = $this->teacher_model->get_courses($teacher->teacher_id);
            // echo $teacher->teacher_id;
        }
        // print_r($teachers[1]);

        // $videos = $this->cursor_model->get_course()

        $data['teachers'] = $teachers;

        if(!empty($teacher_id)){
            $courses = $this->teacher_model->get_courses($teacher_id);
            $data['courses'] = $courses;
            // print_r($courses);
        }
        $this->load->view('header');
        $this->load->view('cursor/BeforeClass', $data);
        $this->load->view('footer');
    }

    /**
     * 获取video 信息
     * @return [type] [description]
     */
    public function get_video(){
        // $cursor_id = $this->input->post("cursor_id");
        $video_id = (int)$this->input->post('video_id');
        $this->load->model('video_model');
        $video = $this->video_model->get_course($video_id);
        echo json_encode($video);
    }
}
