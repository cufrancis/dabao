<?php

class Video_model extends CI_Model{

    public $id; // 主键id

    public function __construct(){
        parent::__construct();
    }

    public function get_course($id, $type="*"){

        $query = $this->db->select($type)->from('video')->where('id', (int)$id)->get();
        $video = $query->result()[0];

        // 转换unixa时间戳为人类可读形式
        // $this->load->helper('date');
        // $format = 'DATE_ATOM';
        // $cursor->created_at = standard_date($format,$cursor->created_at);
        // $cursor->updated_at = standard_date($format,$cursor->updated_at);
        // $cursor->finished_at = standard_date($format,$cursor->finished_at);

        return $video;
    }

}
