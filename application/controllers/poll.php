<?php
class poll extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('poll_model');
    }
    public function view($category='all'){
        if($category!='all'){
            $poll[$category]=$this->poll_model->view_poll($category);
        }
        else{
            $poll['main_news']=$this->poll_model->view_poll('main_news');
            $poll['international']=$this->poll_model->view_poll('international');
            $poll['national']=$this->poll_model->view_poll('national');
            $poll['politics']=$this->poll_model->view_poll('politics');
            $poll['business']=$this->poll_model->view_poll('business');
            $poll['editorials']=$this->poll_model->view_poll('editorials');
            $poll['obituaries']=$this->poll_model->view_poll('obituaries');
            $poll['education']=$this->poll_model->view_poll('education');
            $poll['sports']=$this->poll_model->view_poll('sports');
            $poll['opinion']=$this->poll_model->view_poll('opinion');
        }
        
 }
    public function poll_slug($slug){
       $data=$this->poll_model->view_poll_slug($slug);
       return $data;
    }
    public function poll_submit(){
        if(isset($_POST['ans'])){
            $column=$_POST['ans'];/* it is column name to increment */
            $id=$_POST['id'];
             $data=array(
                 'id'=>$id,
                 'option'=>$column
             );
            $this->poll_model->add_poll($data); 
            //$answer1=$dta['poll_ans1']*100/$dta['poll_response_no'];
            //$answer2=$dta['poll_ans2']*100/$dta['poll_response_no'];
            //$answer3=$dta['poll_ans3']*100/$dta['poll_response_no'];
            
            //echo '<div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer1.'</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer2.'</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer3.'</p></div>';
        }
    }
     public function poll_answer(){
         
         $id=$_POST['id'];
         $dta=$this->poll_model->poll_display_answer($id); 
         $result=$dta->row();
         $answer1=round($result->poll_ans1*100/$result->poll_response_no,1);
         $answer2=round($result->poll_ans2*100/$result->poll_response_no,1);
         $answer3=round($result->poll_ans3*100/$result->poll_response_no,1);
         
      
        echo '<div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer1.'%</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer2.'%</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer3.'%</p></div>';
     }
}







    




