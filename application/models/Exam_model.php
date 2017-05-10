<?php

class Exam_model extends CI_Model{

    public $id;

    public function __construct(){
        parent::__construct();
    }

    public function get_exam($course_id, $type="*"){
        // print_r($course_id);
        $query = $this->db->select($type)->from('exam')->where('course_id', (int)$course_id)->get();
        // print_r($query->result());
        return $query->result();
    }
}
