<?php

class Teacher_model extends CI_Model{

    public $id; // 用户id
    public $username;
    public $password;
    public $realname;


    public function __construct(){
        parent::__construct();
    }

    /**
     * 返回所有教师
     * @return [type] [description]
     */
    public function get_all_teachers($type='id, username'){
        $query = $this->db->select($type)->from('teacher')->get();

        if (!empty($query->result())){
            return $query->result();
        } else {
            return False;
        }
    }

    /**
     * 根据teacher_id 返回教师所创建的所有课程信息
     * @param  [type] $teacher_id [description]
     * @return [type]             [description]
     */
    public function get_courses($teacher_id, $type='*'){
        $query = $this->db->select($type)->from('cursor')->where('teacher_id', (int)$teacher_id)->get();
        // print_r($query->result());

        if (!empty($query->result())){
            return $query->result();
        } else {
            return '';
        }
    }

    /**
     * 查询指定 id 的用户的信息
     * @param  [type] $id   [description]
     * @param  string $type [description]
     * @return [type]       [description]
     */
    public function get_info($id, $type='*'){
        // $sql = "SELECT * from `cursor` WHERE `id` = ? limit 0,1";
        // $query = $this->db->query($sql, array((int)$id));

        $query = $this->db->select($type)->from('teacher')->where('id', (int)$id)->get();
        print_r($query->result());
        if (!empty($query)) {
            return $query->result()[0];
        }else{
            return False;
        }
    }


}
