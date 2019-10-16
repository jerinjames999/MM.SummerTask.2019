<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

      
	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('news_model');
         $this->load->library('session');
    }
       

    
     public function index(){
        $this->load->model('admin_model');
        
        $categories=$this->admin_model->list_all_categories();
        /*order it*/
        foreach($categories as $category){ 
            $data[$category['category_value']] = $this->news_model->get_category($category['category_value']);
         }
        /*$data['international'] = $this->news_model->get_category('international');
        $data['national'] = $this->news_model->get_category('national');
        $data['politics'] = $this->news_model->get_category('politics');
        $data['business'] = $this->news_model->get_category('business');
        $data['editorials'] = $this->news_model->get_category('editorials');
        $data['obituaries'] = $this->news_model->get_category('obituaries');
        $data['education'] = $this->news_model->get_category('education');
        $data['sports'] = $this->news_model->get_category('sports');
        $data['opinion'] = $this->news_model->get_category('opinion');*/
        $data['categories']=$categories;
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
     
     }
    public function page($category='home'){
        if($category!='home'){
            $this->load->model('admin_model');
        
            $data['categories']=$this->admin_model->list_all_categories();
            $data[$category] = $this->news_model->get_category($category);
            $this->load->view('header');
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
        else{
            redirect('main/index');
        }
    }
    
    public function view($slug = NULL)
    {         
            $data['news_item'] = $this->news_model->get_news($slug);
            if (empty($data['news_item']))
            {    
                   show_404();
            }
        else{
              $this->news_model->update_views($slug);
            //$data['title'] = $data['news_item']['article_title'];
            $data['most_popular']=$this->most_popular($slug);
            $this->load->model('poll_model');
            
            /////find articleid using slug or id is there above news_item and display polls using it.
            
            $data['polls']=$this->poll_model->view_poll_slug($slug);
            $this->load->view('header');
            $this->load->view('newsdetail', $data);
            $this->load->view('footer');
        }
    }
    public function most_popular($slug){
        return $data= $this->news_model->most_popular_news($slug);
    }
    public function search(){
        if(isset($_GET['submit'])){
            $word=$this->input->get();
            $data=$this->news_model->search_word($word['search']);
            $result['search_result']=$data['data'];
            $result['count']=$data['count'];
            $this->load->view('header');
            //print_r($result);
            $this->load->view('searchresults',$result);
            $this->load->view('footer');

        }
    }
    
    
    
}
