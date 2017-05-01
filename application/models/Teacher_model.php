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
     * 查询指定 id 的用户的信息
     * @param  [type] $id   [description]
     * @param  string $type [description]
     * @return [type]       [description]
     */
    public function getUserInfo($id, $type='*'){
        // $sql = "SELECT * from `cursor` WHERE `id` = ? limit 0,1";
        // $query = $this->db->query($sql, array((int)$id));

        $query = $this->db->select($type)->from('teacher')->where('id', (int)$id)->get();
        // print_r($query->result());
        if (!empty($query)) {
            return $query->result();
        }else{
            return False;
        }
    }


}
