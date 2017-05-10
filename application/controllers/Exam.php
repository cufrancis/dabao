<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Exam extends CI_Controller {
    public function index($id){
        $course_id = (int)$id;

        $this->load->model('exam_model');
        $exams = $this->exam_model->get_exam($course_id);
        // print_r(json_decode($exams[0]->select));

        foreach ($exams as $exam) {
            $exam->select = json_decode($exam->select);
        }
        print_r($exams);
        // foreach ($exams as $exam) {
        //     // print($exam->);
        // }

        $data['exam'] = $exam;


        $this->load->view('header');
        $this->load->view('exam/index', $data);
        $this->load->view('footer');

    }

}
