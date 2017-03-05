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
        $data['cursor']->created_at = date("Y-m-d H:i:s", $cursor->created_at);
        $data['cursor']->updated_at = date("Y-m-d H:i:s", $cursor->updated_at);
        $data['cursor']->finished_at = date("Y-m-d H:i:s", $cursor->finished_at);
        $data['cursor']->teacher = $this->user_model->getUserInfo($cursor->teacher_id);
        
        print_r($data['cursor']->teacher->id);
        // echo $data->name;

        $this->load->view('header');
        $this->load->view('cursor/index', $data);
        $this->load->view('footer');

    }
}
