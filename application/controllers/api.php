<?php
class api extends CI_Controller{

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('poll_model');
         $this->load->model('admin_model');
         $this->load->model('comment_model');
         $this->load->model('forum_model');
         $this->load->model('news_model');
         $this->load->model('user_model');
    }
    public function echo_json($response){
        $data['json_response']=json_encode($response);
        $this->load->view('api',$data);
    }
    public function get_newsby_id($id){
        $news=$this->news_model->get_newsby_id($id);
        $this->echo_json($news);
    }
    public function get_news($slug){
        $news=$this->news_model->get_news($slug);
        $this->echo_json($news);
    }
    public function get_category($category){
        $category=$this->news_model->get_category($category);
        $this->echo_json($category);
    }
    public function most_popular_news($slug){
        $most_popular=$this->news_model->most_popular_news($slug);
        $this->echo_json($most_popular);
    }
    public function search_word($word){
        $search=$this->news_model->search_word($word);
        $this->echo_json($search);
    }
    public function view_polls($category){
        $polls=$this->poll_model->view_polls($category);
        $this->echo_json($polls);
    }
    public function view_poll_slug($slug){
        $poll_slug=$this->poll_model->view_poll_slug($slug);
        $this->echo_json($poll_slug);
    }
    public function list_polls($category='all'){
        $polls=$this->poll_model->list_polls($category);
        $this->echo_json($polls);
    }
    public function poll_display_answer($id){
        $poll_ans=$this->poll_model->poll_display_answer($id);
        $this->echo_json($poll_ans);
    }
    public function get_all_forums(){
        $forums=$this->forum_model->get_all_forums();
        $this->echo_json($forums);
    }
    public function get_forum($slug){
        $forum=$this->forum_model->get_forum($slug);
        $this->echo_json($forum);
    }
    public function view_replies($id){
        $forum_replies=$this->forum_model->view_replies($id);
        $this->echo_json($forum_replies);
    }
    public function all_comments($id){
        $comments=$this->comment_model->all_comments($id);
        $this->echo_json($comments);
    }
    public function list_articles($category){
        $articles=$this->admin_model->list_articles($category);
        $this->echo_json($articles);
    }
    public function list_all_categories(){
        $articles=$this->admin_model->list_all_categories();
        $this->echo_json($articles);
    }
}