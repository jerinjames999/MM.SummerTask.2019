<?php
class news_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    public function get_newsby_id($id)
     {
        $query = $this->db->get_where('articles', array('article_id' => $id));
        return $query->row_array();
     }
    public function get_news($slug)
     {
        $query = $this->db->get_where('articles', array('slug_url' => $slug));
        return $query->row_array();
     }
    public function get_category($category) {
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->where(array("article_category"=>$category,
                                   "article_status"=>1));
            $this->db->order_by('article_views','DESC');
            $query=$this->db->get();
            return $query->result_array();
        }
    public function update_views($slug){
        $this->db->where("slug_url",$slug);
        $query=$this->db->get('articles');
        $result=$query->row_array();
        $result['article_views']=$result['article_views']+1;
        
        $this->db->where("slug_url",$slug);
        $this->db->update("articles",$result);
    }
    public function most_popular_news($slug){
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->where_not_in("slug_url",$slug);
            $this->db->where("article_status",1);
            $this->db->order_by('article_views','DESC');
            $this->db->limit(5);
            $query=$this->db->get();
            return $query->result_array();
    }
    public function search_word($word){
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->like("article_category",$word);
            $this->db->or_like("article_title",$word);
            $this->db->or_like("article_author",$word);
            $this->db->or_like("article_description",$word);
            $this->db->or_like("article_content",$word);
            $this->db->or_like("live_date",$word);
            $this->db->group_by("article_category");
            $this->db->order_by('live_date','DESC');
            $this->db->order_by('article_views','DESC');
            $query=$this->db->get();
            return array(
                'data'=>$query->result_array(),
                'count'=>$query->num_rows()
                    );
    }
}