<?php

class Course_model extends CI_Model {

    public $id; // 课程id
    public $name; // 课程名称
    public $created_at; // 创建时间
    public $updated_at; // 更新时间
    public $finished_at; // 结束时间
    public $teacher_id; // 教师id
    public $desc;
    public $homework;

    public function __construct(){
        parent::__construct();
    }

    // 添加学生上传的课后作业
    public function add_homework($data){
        $this->load->database();

        $path = './uploads/homework/';

        $data = array(
            "course_id" => $data['course_id'],
            'user_id' => $data['user_id'],
            'path' => $path.$data['homework']['file_name'],
            'name'  => $data['homework']['file_name'],
        );
        $this->db->set($data);

        $query = $this->db->select('*')->from('homework')->where('course_id', (int)$data['course_id'])->where('user_id', (int)$data['user_id'])->get();

        if (empty($query)){
            $this->db->insert('homework');
        } else {
            $this->db->where('course_id', $data['course_id']);
            $this->db->where('user_id', $data['user_id']);
            $this->db->update('homework');
        }

        $result = $this->db->insert('homework',$data);

        return $result;
    }

    public function get_homework($course_id){
        return $this->getCourseInfo($course_id, 'homework');
    }

    /**
     * 查询指定 id 的课程的信息
     * @param  [type] $id   [description]
     * @param  string $type [description]
     * @return [type]       [description]
     */
    public function getCourseInfo($id, $type='*'){

        $query = $this->db->select($type)->from('cursor')->where('id', (int)$id)->get();
        $cursor = $query->result()[0];

        // 转换unixa时间戳为人类可读形式
        $this->load->helper('date');
        $format = 'DATE_ATOM';
        // $cursor->created_at = standard_date($format,$cursor->created_at);
        // $cursor->updated_at = standard_date($format,$cursor->updated_at);
        // $cursor->finished_at = standard_date($format,$cursor->finished_at);

        return $cursor;
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
}
