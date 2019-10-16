<?php

class forum_model extends CI_Model{


    public function __construct(){
        parent::__construct();
    }
    public function get_all_forums(){
        $this->db->select('forums.*,login.user_type AS usertype');
        $this->db->from('forums');
        $this->db->join('login','forums.forum_startedby=login.user_uname');
        $this->db->order_by('forum_date','DESC');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function upload_threat($data){
        return $this->db->insert('forums',$data);
    }
    public function get_forum($slug = FALSE)
     {
        if ($slug === FALSE)
        {
                $query = $this->db->get('forums');
                return $query->result_array();
        }
        $this->db->select('forums.*,login.user_type AS usertype');
        $this->db->from('forums');
        $this->db->join('login','forums.forum_startedby=login.user_uname');
        $this->db->where('forum_slug_url',$slug);
        $query=$this->db->get();
        //$query = $this->db->get_where('forums',array('forum_slug_url' => $slug));
        return $query->row_array();
     }
    public function update_views($slug){
        $this->db->where("forum_slug_url",$slug);
        $query=$this->db->get('forums');
        $result=$query->row_array();
        $result['forum_views']=$result['forum_views']+1;
        
        $this->db->where("forum_slug_url",$slug);
        $this->db->update("forums",$result);
    }
    public function view_replies($forum_id){
        $this->db->select('*');
        $this->db->from('forum_replies');
        $this->db->where('reply_forumid',$forum_id);
        $this->db->order_by('reply_date','ASC');
        //$this->order_by('reply_time','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
    public function add_reply($forum_data){
        return $this->db->insert("forum_replies",$forum_data);
    }
    
}