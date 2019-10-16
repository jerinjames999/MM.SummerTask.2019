<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {

      
    public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('comment_model');
    }
    public function addcomment(){
        if(isset($_POST['comment'])){
            $error='';
            if(empty($_POST['comment'])){
                $error.='<p class="text-danger">enter some text</p>';
            }
        
            else{
                    $comment=$_POST['comment'];
                    $article_id=$_POST['article_id'];
                    $parent_id=$_POST['parent_id'];
                    $datenow=date("Y-m-d");
                    $timenow=date("H:i:s");

                    $data=array(
                        'comment_articleid'=>$article_id,
                        'comment_text'=>$comment,
                        'parent_comment_id'=>$parent_id,
                        'comment_date'=> $datenow,
                        'comment_time'=> $timenow,
                        'comment_uname'=> $_SESSION['username']
                    );
                    if($this->comment_model->add_comment($data)!=1){
                        $error.='<label class="text-success">some error occured</label>';
                    }
                    else{
                        $error.='<label class="text-success">comment added</label>';
                        
                    }
                
               }
                echo $error;
        }
        
    }
    public function load_all_comments(){
        $article_id=$_POST['article_id'];
        $result=$this->comment_model->all_comments($article_id);
        $results=$result->result();
        $output='';
        foreach($results as $ans){
            //$ans=$result->row();
            $type='';
            if($ans->usertype=='admin'){$type='admin';}
        $output.='<div class="card">
                            <div class="card-header">By <b>'.$ans->comment_uname.'</b><span style="background-color:gray; border-radius:3px">'.$type.'</span> on <i>'.$ans->comment_date.'</i></div>
                            <div class="card-body">'.$ans->comment_text.'</div>
                            <div class="card-footer" align="right"><button class="btn btn-default reply" id="'.$ans->comment_id.'" >Reply</button></div>
                </div>';
        }
        echo $output;
    }
}