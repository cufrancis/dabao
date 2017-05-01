<?php

class User_model extends CI_Model{

    public $id; // 用户id
    public $username;
    public $password;
    public $realname;
    public $type; //是否是教师

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

        $query = $this->db->select($type)->from('user')->where('id', (int)$id)->get();

        if ($query) {
            return $query->result()[0];
        }else{
            return False;
        }
    }

    public function is_teacher($id){
        // $query = $this->db->select()
    }

    /**
     * 将已经看过得视频id 加入 表中
     * 参数定义
     * 0： 未看
     * 1： 已看完
     * (unix时间戳)： 上次暂停事件
     * @param [type] $id [description]
     */
    public function add_watch_video($info){
        $data = array(
            'user_id' => $info['user_id'],
            'video_id' => $info['video_id'],
        );
        $result = $this->db->insert('user_watch_video',$data);

        return $result;
    }

    /**
     * 根据 课程id 获取用户观看的视频id
     * @param  [type] $course_id [description]
     * @return [type]            [description]
     */
    public function get_watch_video($user_id){
        $query = $this->db->select('*')->from('user_watch_video')->where('user_id', (int)$user_id)->get();
        // print_r($query);
        // $query = $this->db->query("SELECT * FROM dabao.user_watch_video WHERE `user_id`=4 and (`video_id` = 2 or `video_id`=4);")
        // print_r($query->result());
        return $query->result();
    }

    public function is_watch_video($user_id, $video_id){
        $query = $this->db->select("*")->from('user_watch_video')->
                            where('user_id', (int)$user_id)->
                            where('video_id', $video_id)->get();

        if ($query->result()){
            // 如果查到结果，说明已经看完，返回True
            return True;
        } else {
            return False;
        }
    }

}
