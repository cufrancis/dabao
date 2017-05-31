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

    /**
     * 返回当前登陆用户指定课程的课后作业
     * @param [type] $user_id   [description]
     * @param [type] $course_id [description]
     */
    public function homework($user_id, $course_id){
        $query = $this->db->select('*')->from('homework')->where('course_id', (int)$course_id)->where('user_id', (int)$user_id)->get();

        if ($query) {
            return $query->result();
        }else{
            return False;
        }
    }

    // public function get_user_homework($)

    public function get_homeworks($course_id){
        $query = $this->db->select('*')->from('homework')->where('course_id', (int)$course_id)->get();

        if ($query){
            return $query->result();
        } else {
            return False;
        }
    }

    public function get_answers($course_id){
        $query = $this->db->select('*')->from('user_answers')->where('course_id', (int)$course_id)->get();

        if ($query){
            return $query->result();
        } else {
            return False;
        }
    }

    /**
     * 更新本次登陆时间
     * @var [type]
     */
    public function update_now_login_time($id){
        $this->db->set('now_login_at', time());

        $this->db->where('id', (int)$id);
        $this->db->update('user');
        // print_r($result);
    }

    /**
     * 获取用户看过的所有视频
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get_videos($id){
        $result = $this->db->select("*")->from('user_watch_video')->where('user_id', (int)$id)->get();
        return $result->result();
    }

    /**
     * 按照关注教师和年级，返回匹配的课程
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public function get_class($user_id){
        // $query =
    }

    /**
     * 检测教师是不是当前用户所关注的，是返回True, 不是返回False
     * @param  [type] $ [description]
     * @return [type]   [description]
     */
    public function check_atten($teacher, $type='*'){
        $query = $this->db->select($type)->from('user_teacher')->where('user_id', (int)$this->session->user['id'])->where('teacher_id', (int)$teacher->id)->get();

        // print_r($query->result());
        if ($query) {
            return True;
        }else{
            return False;
        }
    }

    /**
     * 获取用户所关注的所有教师
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public function get_teachers($user_id, $type='*'){
        $query = $this->db->select($type)->from('user_teacher')->where('user_id', (int)$user_id)->get();
        if (!empty($query)){
            return $query->result();
        } else {
            return False;
        }
        // print_r($query->result());
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
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 检查 指定用户有没有看完课程的全部视频
     * @param  [type] $course_id [description]
     * @return [type]            [description]
     */
    public function check_watch($course_id, $user_id){
        if (isset($course_id) && isset($user_id)){

        }
    }

}
