<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forum extends CI_Controller {

      
	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('forum_model');
     }
    
    /*public function show_article(){
        $slug='2019/06/21/international/renault-considering-fiat-s-offer-to-merge-into-a-new-auto-gianth';
        $data=$this->article_model->get_this_slug_article($slug);
        $this->load->view('newsdetail',$data);
    }*/
    public function index(){
        $data['forums']=$this->forum_model->get_all_forums();
        $this->load->view('header');
        $this->load->view('forums',$data);
        $this->load->view('footer');
    }
    public function threatform(){
        if(isset($_SESSION['user_logged'])){
        $this->load->view('header');
        $this->load->view('addthreat');
        $this->load->view('footer');
        }
        else{
            show_404();
        }
    }
    
    public function forum_submitthreat(){
    if(isset($_POST['add-thread']))
    {
    $this->form_validation->set_rules('forum_title','Title','required|min_length[4]|max_length[250]|trim');
    $this->form_validation->set_rules('description','Description','min_length[20]');

        if($this->form_validation->run()==false){
            $this->load->view('addthreat');

        }
        else{
                    $data=$this->input->post();
                    $datenow=date("Y-m-d");
                    $timenow=date("H:i:s");
                    $slug = date("Y-m-d-His").url_title($this->input->post('forum_title'), 'dash', TRUE);

                    $threat_data=array(
                        "forum_title"=>$data['forum_title'],
                        "forum_description"=>$data['description'],
                        "forum_startedby"=>$_SESSION['username'],
                        "forum_slug_url"=>$slug,
                        "forum_date"=> $datenow,
                        "forum_time"=> $timenow
                    );
                    if($this->forum_model->upload_threat($threat_data)=='1'){
                           $data['upload_data']='article uploaded successfully';                   
                           $this->load->view('addthreat',$data);

                      }
                    else{   
                           $data['upload_data']='article uploading failed';
                           $this->load->view('addthreat',$data); 

                        }
             
        }

        }

    }
    public function view($slug = NULL)
    {         
            $data['forum'] = $this->forum_model->get_forum($slug);
            if (empty($data['forum']))
            {    
                   show_404();
            }
            else{
                  $this->forum_model->update_views($slug);
                //$data['title'] = $data['news_item']['article_title'];
                //$data['most_popular']=$this->most_popular($slug);
                //$this->load->model('poll_model');
                  $data['replies']=$this->forum_model->view_replies($data['forum']['forum_id']);
                    $this->load->view('header');
                    $this->load->view('forumdetail', $data);
                    $this->load->view('footer');
            }
    }
    
     public function addforumreply(){
        if(isset($_POST['forum_id'])){
            $error='';
            if(empty($_POST['reply'])){
                $error.='<p class="text-danger">enter some text</p>';
            }
        
            else{
                    $reply=$_POST['reply'];
                    $forum_id=$_POST['forum_id'];
                    $datenow=date("Y-m-d");
                    $timenow=date("H:i:s");

                    $data=array(
                        'reply_forumid'=>$forum_id,
                        'reply_text'=>$reply,
                        'reply_date'=> $datenow,
                        'reply_time'=> $timenow,
                        'reply_uname'=> 'qwertyui'
                    );
                    if($this->forum_model->add_reply($data)!=1){
                        $error.='<label class="text-success">some error occured</label>';
                    }
                    else{
                        $error.='<label class="text-success">Reply added successfuly</label>';
                        
                    }
                
               }
                echo $error;
        }
        
    }
    public function load_all_replies(){
        $forum_id=$_POST['forum_id'];
        $result=$this->comment_model->all_comments($article_id);
        $results=$result->result();
        $output='';
        foreach($results as $ans){
            //$ans=$result->row();
            
        $output.='<div class="card">
                            <div class="card-header">By <b>'.$ans->comment_uname.'</b> on <i>'. $ans->comment_date.'</i></div>
                            <div class="card-body">'.$ans->comment_text.'</div>
                            <div class="card-footer" align="right"><button class="btn btn-default reply" id="'.$ans->comment_id.'" >Reply</button></div>
                </div>';
        }
        echo $output;
    }
    
}
  