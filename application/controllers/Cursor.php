<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cursor extends CI_Controller {

    public function index($id){
        $id = (int)$id;
        $this->load->database();
        $this->output->enable_profiler(TRUE);

        $this->load->model('cursor_model');
        $this->load->model('user_model');

        $cursor = $this->cursor_model->getCursorInfo($id);

        $data['cursor'] = $cursor;
        // $data['cursor']->created_at = date("Y-m-d H:i:s", $cursor->created_at);
        // $data['cursor']->updated_at = date("Y-m-d H:i:s", $cursor->updated_at);
        // $data['cursor']->finished_at = date("Y-m-d H:i:s", $cursor->finished_at);
        $data['cursor']->teacher = $this->user_model->getUserInfo($cursor->teacher_id);
        $data['videos'] = $this->cursor_model->get_video_of_cursor($id);

        // print_r($data['videos']);

        $this->load->view('header');
        $this->load->view('cursor/index', $data);
        $this->load->view('footer');
    }

    // 编辑
    public function edit($id){
        $id = (int)$id;

        // 权限认证,不满足抛出异常
        $this->load->library('Auth');
        $this->auth->is_teacher();
        $this->auth->check_owner($id);
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
}
