<?php

class Cursor_model extends CI_Model{

    public $id; // 课程id
    public $name; // 课程名称
    public $created_at; // 创建时间
    public $updated_at; // 更新时间
    public $finished_at; // 结束时间
    public $teacher_id; // 教师id
    public $desc;

    public function __construct(){
        parent::__construct();
    }

    /**
     * 查询指定 id 的课程的信息
     * @param  [type] $id   [description]
     * @param  string $type [description]
     * @return [type]       [description]
     */
    public function getCursorInfo($id, $type='*'){

        $query = $this->db->select($type)->from('cursor')->where('id', (int)$id)->get();
        $cursor = $query->result()[0];

        // 转换unixa时间戳为人类可读形式
        $this->load->helper('date');
        $format = 'DATE_ATOM';
        $cursor->created_at = standard_date($format,$cursor->created_at);
        $cursor->updated_at = standard_date($format,$cursor->updated_at);
        $cursor->finished_at = standard_date($format,$cursor->finished_at);

        return $cursor;
    }

    public function get_video_of_cursor($cursor_id){
        $this->load->database();
        $query = $this->db->select('*')
                            ->from('video')
                            ->where('cursor_id', (int)$cursor_id)
                            ->get();

        // print_r($query->result());
        $data = $query->result();
        return $data;
    }

    // 添加视频
    public function add_video($cursor_id, $data){
        $this->load->database();

        $path = './uploads/';

        $data = array(
            "cursor_id" => $cursor_id,
            'url'   =>  $path.$data['file_name'],
            'name'  => $data['file_name'],
        );
        $result = $this->db->insert('video',$data);

        return $result;
    }


    /**
     * 更新数据
     * @param  [type] $cursor_id [description]
     * @param  [type] $data      [description]
     * @return [type]            [description]
     */
    public function update($cursor_id, $data){
        $this->load->database();

        // $this->db->where('id', $cursor_id);
        return $this->db->update('cursor', $data, "id = $cursor_id");
    }

    public function insert_comments($cursor_id, $data){
        $this->load->database();
        $insert = array(
            "cursor_id" => $cursor_id,
            "text" => $data['text'],
            "created_at" => $data['created_at'],
            "author_id" => $data['author_id'],
        );
        return $this->db->insert('cursor_comments', $insert);
    }

    public function get_all_comments($id){
        $this->load->database();
        $query = $this->db->select('*')
                            ->from('cursor_comments')
                            ->where('cursor_id', (int)$id)
                            ->get();

        // print_r($query->result());
        $data = $query->result();
        return $data;
    }

    /**
     * 获取所有视频
     * @return [type] [description]
     */
    public function get_all_courses(){
        $this->load->database();

        $query = $this->db->select('*')
                            ->from('cursor')
                            // ->where('cursor_id', (int)$id)
                            ->get();

        return $query->result();
        // print_r($query->result());
    }
}
