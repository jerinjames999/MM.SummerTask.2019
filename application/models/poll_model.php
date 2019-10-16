<?php
class poll_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
    public function view_polls($category){
        $this->db->select("*");
        $this->db->from("polls");
        $this->db->where("poll_category",$category);
        $query=$this->db->get();
        return $query->result();
    }
    public function view_poll_slug($slug){
        $this->db->select("*");
        $this->db->from("polls");
        $this->db->where("poll_articleurl",$slug);
        $this->db->where("poll_status",1);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function add_poll($data){
        $this->db->set($data['option'],$data['option'].'+ 1', FALSE);
        $this->db->set('poll_response_no','poll_response_no+1', FALSE);
        $this->db->where("poll_id",$data['id']);
        $this->db->update("polls");/*tuwussssssssssssssssssssssssssssssssssssrsssssssssssssssjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj*/
        
       /* $this->db->select("*");
        $this->db->from("polls");
        $this->db->where("poll_id",$data['id']);
        $query=$this->db->get();
        return $query->result_array();*/
    }
    public function list_polls($category='all'){
        if($category=='all'){
            $this->db->select('polls.*');
            $this->db->from('polls');
            $this->db->join('categories','polls.poll_category=categories.category_value');
            //$this->db->group_by('article_category');
            $this->db->order_by('category_order','ASC');
            
            /*$this->db->select('*');
            $this->db->from('polls');
            $this->db->order_by('poll_category');*/
        }
        else{
            $this->db->select('*');
            $this->db->from('polls');
            $this->db->where('poll_category',$category);
        }
        $query=$this->db->get();
        return $query->result_array();
    }
    public function poll_display_answer($id){
         $this->db->select("*");
        $this->db->from("polls");
        $this->db->where("poll_id",$id);
        return $query=$this->db->get();
    }
    
}