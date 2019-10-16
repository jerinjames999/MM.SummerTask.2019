<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('user_model');
    }
	 
	public function signup()
	{
        $recaptua['recaptua']=random_string('alnum',6);
		$this->load->view('signup',$recaptua);
	}
    public function login()
	{
        if(isset($_SESSION['user_logged'])){
            show_404();
        }
        else{
		$this->load->view('login');
        }
	}
    
    public function form_submit_signup(){
        if(isset($_POST['submit']))
        {
        $this->form_validation->set_rules('name','Name','required|min_length[3]|max_length[25]|trim');
        
        $this->form_validation->set_rules('uname','UserName','required|min_length[3]|max_length[20]|trim|is_unique[login.user_uname]|callback_check_username');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[login.user_email]');
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
    }
  }

    public function form_submit_login(){
        if(isset($_POST['submit']))
        {
        $this->form_validation->set_rules('u_name','UserName','required|trim');
        $this->form_validation->set_rules('p_wrd','passord','required');
        
        if($this->form_validation->run()==false){
            $this->login();
        }
       else{
          $data=$this->input->post();
          $hashedpwd = md5($data['p_wrd']);
          $datenow=date("Y-m-d H:i:s");
            $data_array=array(
                "user_uname"=>$data['u_name'],
                "user_pwd"=>$hashedpwd,
                "user_lastlogin"=> $datenow
            );
            
            //redirect('user/signup');

          if($this->user_model->get_user($data_array)=='1'){
              $this->session->set_flashdata("success","user has been loggedin successfully");
              //echo "<script language=javascript> javascript:history.back();</script>";
              redirect('main');
              
             
              
               //redirect('user/login','refresh'); 

          }
        else{
               $this->session->set_flashdata("error","failed to login user");
            
               redirect('user/login','refresh'); 
            
            }
        }
    }
    else{
        show_404();
    }
    }
    
    
    public function logout(){
        if(!$this->session->has_userdata('user_logged')){
            show_404();
        }
        else{
        $this->session->sess_destroy();
            
            echo '<script type="text/javascript">
                 window.onload=function(){
                alert("loggedout successfuly");
            }
            </script>';
            redirect('user/login');
    }
    }
    
    /*public function recover_pwd(){
        $this->load->view('forgot_pwd');
    }
    public function recover_password(){
        if(isset($_POST['submit']))
        {
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run()==false){
            $this->recover_pwd();
        }
      else{
          $data=$this->input->post();
            $data_array=array(
                "user_email"=>$data['email']
            );
    
        $pwd=$this->user_model->select_user_pwd($data_array);

        mail("jerinjameskarippa999@gmail.com",'password',$pwd);

        }
}
}*/
    
    public function check_username($user_name){
        if(strcasecmp($user_name,'admin')=='0'){
            $this->form_validation->set_message('check_username', 'The {field} cannot be '.$user_name);
                        return FALSE;
        }
        else{
            return true;
        }
            
    }
    
    
}
