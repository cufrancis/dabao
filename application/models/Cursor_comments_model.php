<?php

class Cursor_comments_model extends CI_Model{
    public $id;
    public $cursor_id;
    public $text;
    public $author;


    public function get_comments_of_cursor($cursor_id){
        $query = $this->db->select($type)->from('cursor_comments')->where('cursor_id', (int)$cursor_id)->get();
        echo $query;
    }
}
