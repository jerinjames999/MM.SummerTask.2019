<?php

class comment_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function add_comment($article_data){
        return $this->db->insert("comments",$article_data);
    }
    public function all_comments($id){
        $this->db->select('comments.*,login.user_type AS usertype');
        $this->db->from('comments');
        $this->db->join('login','comments.comment_uname=login.user_uname');
        $this->db->where(array(
               "comment_articleid"=>$id,
               "parent_comment_id"=>0
       ));
        $this->db->order_by('comment_id','DESC');
        $query=$this->db->get();
        return $query;
        
        
        
        /*$this->db->select('articles.*');
            $this->db->from('articles');
            $this->db->order_by('edited_date','DESC');
            //$this->db->join('categories','articles.article_category=categories.category_value');
            //$this->db->group_by('article_category');
            //$this->db->order_by('category_order','ASC');
            */
    }
}
