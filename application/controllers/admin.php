<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model(array('admin_model','news_model'));
    }
    public function index(){
        $this->load->view('admin_panel');
    }
    public function add_article(){
        $result['categories']=$this->admin_model->list_all_categories();
        $this->load->view('adminaddarticle',$result);
    }
    public function all_articles(){
        $result['categories']=$this->admin_model->list_all_categories();
        $result['datas']=$this->admin_model->list_articles();
        $this->load->view('adminallarticles',$result);
    }
    public function edit_article(){
        $result['categories']=$this->admin_model->list_all_categories();
        $this->load->view('admineditarticle',$result);
    }
    public function add_poll(){
        
        $this->load->view('adminaddpoll');
    }
    public function all_polls(){
        $result['categories']=$this->admin_model->list_all_categories();
        $this->load->model('poll_model');
        $result['datas']=$this->poll_model->list_polls();
        $this->load->view('adminallpolls',$result);
    }
    public function edit_poll(){
        $this->load->view('admineditpoll');
    }
    public function add_category(){
        $result=$this->admin_model->list_categories_not1st();
        $data['categories']=$result['category'];
        $data['max_category_order']=$result['max_category_order'];
        $this->load->view('adminaddcategory',$data);
    }
    public function delete_category(){
        $this->load->view('admindeletecategory');
    }
    public function answer_question(){
        $this->load->view('adminansquestion');
    }
    public function edit_status(){
        $this->load->view('admineditstatus');
    }
    public function add_admin(){
        $this->load->view('adminaddadmin');
    }
    public function approve_cment(){
        $this->load->view('adminapprovecment');
    }
    
    public function form_submit_upload_article(){
        if(isset($_POST['uploadarticle']))
        {
          
        $this->form_validation->set_rules('title','Title','required|min_length[4]|max_length[100]|trim');
        $this->form_validation->set_rules('author','Author name','required|min_length[3]|max_length[45]|trim');
        $this->form_validation->set_rules('category','Category','required');
        $this->form_validation->set_rules('content','Content','required|min_length[20]');
        $this->form_validation->set_rules('img_desc','Image description','max_length[500]|trim');
        $data['categories']=$this->admin_model->list_all_categories();
            if($this->form_validation->run()==false){
                    $this->load->view('adminaddarticle',$data);
            }
            else{
                $location=strtolower($_POST['category']);
                $config['upload_path']='assets/images/articles/'.$location;
                $config['allowed_types']='jpg|png|jpeg';
                $config['max_size']='2000';
                $this->load->library('upload',$config);
                
                   
                    if(!$this->upload->do_upload('image'))
                    {
                        $data['error']=$this->upload->display_errors();
                        $this->load->view('adminaddarticle',$data);
                    }
                    else{
                        $imgdata = array('upload_data' => $this->upload->data());
                        //$imgname=$imgdata['file_name'];
                        $imgname=$_FILES['image']['name'];
                       // $imgextension=$_FILES['image']['type'];
                        $data=$this->input->post();
                        $datenow=date("Y-m-d H:i:s");
                        $slug = date("Y-m-d-His").url_title($this->input->post('title'), 'dash', TRUE);
                        
                            $article_data=array(
                            "article_category"=>$data['category'],
                            "article_title"=>$data['title'],
                            "article_author"=>$data['author'],
                            "article_content"=>$data['content'],
                            "article_description"=>$data['img_desc'],
                            "article_img"=>'assets/images/articles/'.$location.'/'.$imgname,
                            "slug_url"=>$slug,
                            "edited_date"=> $datenow
                            );
                            if($this->admin_model->add_article($article_data)=='1'){
                               $data['upload_data']='article uploaded successfully'; 
                               $data['categories']=$this->admin_model->list_all_categories();
                               $this->load->view('adminaddarticle',$data);
                            
                          }
                        else{   
                               $data['upload_data']='article uploading failed';
                               $data['categories']=$this->admin_model->list_all_categories();
                               $this->load->view('adminaddarticle',$data); 

                            }
                    }
        
            }
            
    }
     
}  
    public function form_submit_edit_article(){
        if(isset($_POST['editarticle']))
        {
           
        $this->form_validation->set_rules('title','Title','required|min_length[4]|max_length[100]|trim');
        $this->form_validation->set_rules('author','Author name','required|min_length[3]|max_length[45]|trim');
        $this->form_validation->set_rules('category','Category','required');
        $this->form_validation->set_rules('img_desc','Image description','max_length[500]|trim');
        $this->form_validation->set_rules('content','Content','required|min_length[20]');
        $data['categories']=$this->admin_model->list_all_categories();
            if($this->form_validation->run()==false){
                    $this->load->view('admineditarticle',$data);
                
            }
            else{
                $location=strtolower($_POST['category']);
                $config['upload_path']='assets/images/articles/'.$location;
                $config['allowed_types']='jpg|png|jpeg';
                $config['max_size']='2000';
                $this->load->library('upload',$config);
                
                   
                    if(!$this->upload->do_upload('image'))
                    {
                        $data['error']=$this->upload->display_errors();
                        $this->load->view('admineditarticle',$data);
                    }
                    else{
                        $imgdata = array('upload_data' => $this->upload->data());
                        //$imgname=$imgdata['file_name'];
                        $imgname=$_FILES['image']['name'];
                       // $imgextension=$_FILES['image']['type'];
                        $data=$this->input->post();
                        $datenow=date("Y-m-d H:i:s");
                        $slug = date("Y-m-d-His").url_title($this->input->post('title'), 'dash', TRUE);
                        
                       
                            $article_data=array(
                            "article_id"=>$data['articleid'],
                            "article_category"=>$data['category'],
                            "article_views"=>0,
                            "article_likes"=>0,
                            "article_status"=>0,
                            "article_comments"=>0,
                            "article_title"=>$data['title'],
                            "article_author"=>$data['author'],
                            "article_content"=>$data['content'],
                            "article_img"=>'assets/images/articles/'.$location.'/'.$imgname,
                            "article_description"=>$data['img_desc'],
                            "slug_url"=>$slug,
                            "edited_date"=> $datenow
                            );
                             if($this->admin_model->edit_article($article_data)=='1'){
                               $data['upload_data']='article uploaded successfully'; 
                               $data['categories']=$this->admin_model->list_all_categories();
                               $this->load->view('admineditarticle',$data);
                            
                          }
                        else{   
                               $data['upload_data']='article uploading failed';
                               $data['categories']=$this->admin_model->list_all_categories();
                               $this->load->view('admineditarticle',$data); 

                            }
                        
                        
                        
                       
                    }
        
            
            }
            
            
            
        /*    
        $this->form_validation->set_rules('pwd','passord','required|min_length[5]');
        $this->form_validation->set_rules('cpwd','conform password','required|matches[pwd]');
       // $this->form_validation->set_rules('recaptua','recaptua','required|matches[recapt]');
        if($this->form_validation->run()==false){
            $this->signup();
        }
        else{
          $data=$this->input->post();
          //$hashedpwd = password_hash($data['pwd'],PASSWORD_DEFAULT);
          $hashedpwd = md5($data['pwd']);
          $datenow=date("Y-m-d");
            $data_array=array(
                "user_name"=>$data['name'],
                "user_uname"=>$data['uname'],
                "user_email"=>$data['email'],
                "user_pwd"=>$hashedpwd,
                "user_created"=> $datenow
            );
            //$this->user_model->insert_into_loginsystem($data_array);
            //redirect('user/signup');

          if($this->user_model->insert_into_loginsystem($data_array)=='1'){
              $this->session->set_flashdata("success","user has been created successfully");
              redirect('user/signup','refresh');
          }
        else{
               $this->session->set_flashdata("error","failed to create user");
               redirect('user/signup','refresh'); 
            }
        }
    }
    
    else{
       // redirect('user/signup','refresh');
        show_404();
    }*/
    }
     
}
    public function form_submit_upload_poll(){
        if(isset($_POST['uploadpoll']))
                {
                $this->form_validation->set_rules('pollurl','article url','required|trim|callback_check_url|min_length[8]');
                $this->form_validation->set_rules('pollquestion','Question','required|min_length[10]|max_length[200]|trim');
                $this->form_validation->set_rules('pollopt1','Option 1','required|max_length[25]|trim');
                $this->form_validation->set_rules('pollopt2','Option 2','required|max_length[25]|trim');
                $this->form_validation->set_rules('pollopt3','Option 3','required|max_length[25]|trim');

                if($this->form_validation->run()==false){
                    $this->load->view('adminaddpoll');
                }
                else{
                    ////////////////function to find article id from slug and insert it into the poll table instad of slug
                   
                        $data=$this->input->post();
                        $datenow=date("Y-m-d H:i:s");         
                     ////////
                       $article_id=$this->admin_model->getid_fromslug($data['pollurl']);
                    ///////////
                        $category=$this->admin_model->get_category($data['pollurl']);
                            $poll_data=array(
                                "poll_category"=>$category,
                                "poll_question"=>$data['pollquestion'],
                                "poll_option1"=>$data['pollopt1'],
                                "poll_option2"=>$data['pollopt2'],
                                "poll_option3"=>$data['pollopt3'],
                                "poll_articleurl"=>$data['pollurl'],
                                "poll_articleid"=>$article_id,
                                "edited_date"=> $datenow
                            );
                            if($this->admin_model->upload_poll($poll_data)=='1'){
                                   $data['upload_data']='poll uploaded successfully';
                                   $this->load->view('adminaddpoll',$data);

                              }
                            else{   
                                   $data['upload_data']='poll uploading failed';
                                   $this->load->view('adminaddpoll',$data); 
                                }
                }
                    
    }
    else{
        
    }
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
        
        
        $this->load->view('',$poll);
  }
     public function check_url($url){
         if(!$this->admin_model->check_url($url)){
             $this->form_validation->set_message('check_url', 'This article doesn\'t exist');
             return FALSE;
         }
        else{
            return true;
        }
            
    }
    public function form_submit_add_category(){
        if(isset($_POST['submit_category']))
                {
                $this->form_validation->set_rules('category_name','Category Name','required|is_unique[categories.category_hname]|trim|min_length[3]');

                if($this->form_validation->run()==false){
                     

                }
                else{
                        $data=$this->input->post();
                        $datenow=date("Y-m-d H:i:s");                        
                        $category_value=strtolower($data['category_name']);
                        $category_value=preg_replace('/[^a-z0-9]+/','_',$category_value);
                        $category_data=array(
                            "category_value"=>$category_value,
                            "category_hname"=>strtoupper($data['category_name']),
                            "category_order"=>$data['category'],
                            "category_date"=>$datenow
                        );
                        if($this->admin_model->add_new_category($category_data)=='1'){
                               //$data['upload_data']='Category added successfully';
                               /*echo '<script type="text/javascript">
                 window.onload=function(){
                alert("loggedout successfuly");
            }
            </script>';*/   $data['upload_data']='Category added successfully';
                            /*$result=$this->admin_model->list_categories_not1st();
                             $data['categories']=$result['category'];
                             $data['max_category_order']=$result['max_category_order'];
                             $this->load->view('adminaddcategory',$data);*/
                                      // redirect('admin/add_category');
                               //$this->load->view('adminaddcategory',$data);
                          }
                        else{   
                               $data['upload_data']='Category adding failed';
                          
                                //redirect('admin/add_category');
                            }
                    }
            
                     $result=$this->admin_model->list_categories_not1st();
                     $data['categories']=$result['category'];
                     $data['max_category_order']=$result['max_category_order'];
                     $this->load->view('adminaddcategory',$data);
             
        }
    }
    public function form_slugrtkl(){
        if(isset($_POST['submit_slugrtkl'])){
            $this->form_validation->set_rules('pollurl','article url','required|trim|callback_check_url|min_length[8]');
            
            if($this->form_validation->run()==false){
                $article['upload_data']='';
                }
            else{
                $data=$this->input->post();
                $article['categories']=$this->admin_model->list_all_categories();
                $article['article']=$this->news_model->get_news($data['pollurl']);
            }
            $this->load->view('admineditarticle',$article);
            
        }
        
    }
    public function delete_article($article_id){
        $this->admin_model->delete_this_article($article_id);
        redirect('admin/all_articles');
    }
    public function delete_poll($id){
        $this->admin_model->delete_this_poll($id);
        redirect('admin/all_polls');
    }
    public function article_status($article_id){
        $this->admin_model->toggle_article_status($article_id);
        redirect('admin/all_articles');
    }
    public function poll_status($poll_id){
        $this->admin_model->toggle_poll_status($poll_id);
        redirect('admin/all_polls');
    }
}