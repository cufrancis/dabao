<?php

class Cursor_model extends CI_Model{

    public $id; // 课程id
    public $name; // 课程名称
    public $created_at; // 创建时间
    public $updated_at; // 更新时间
    public $finished_at; // 结束时间
    public $teacher_id; // 教师id

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
        // $sql = "SELECT * from `cursor` WHERE `id` = ? limit 0,1";
        // $query = $this->db->query($sql, array((int)$id));

        $query = $this->db->select($type)->from('cursor')->where('id', (int)$id)->get();

        return $query->result()[0];
    }

}
