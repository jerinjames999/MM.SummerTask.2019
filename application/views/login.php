<!DOCTYPE html>
<html lang="en">
    <head>
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.min.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.min.css.map">
    <title>login:newspaper</title>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/signup.css">

    </head>
    <body>
           <div class="container">
           <div class="row">
               <div class="col-sm-12 text-center heading"><h3>Login to your Account</h3></div>
           </div>
           <div class="row  gfsingup">
               <div class="col-sm-6 col-6 text-right">
                   <a href="#"><img src="<?php echo base_url();?>assets/images/googleloginnew.png" class="img-fluid"></a> 
               </div>
               <div class="col-6 ">
                   <a href="#"><img src="<?php echo base_url();?>assets/images/fbloginnew1.png" class="img-fluid"></a>
               </div>
           </div>
            
           <div class="row">
               <div class="col-sm-12 text-center my-auto">
               <h6>or</h6>
               </div>
           </div>
               <style>
                       .error{
                           color: red;
                           font-weight: 500;
                           font-size: 13px;
                       }
                   </style>
           <div class="row">
               <div class="col-sm-12">
               
             <?php echo form_open(site_url('user/form_submit_login')); ?>  
                 <?php
                   if($this->session->flashdata('success')){ ?>
                   
                   <div class="row "> <div class="cl-12 text-center my-auto"> <?php echo $this->session->flashdata('success'); ?> </div> </div>
                   <?php } 
                   
                   else{ ?>
                   
                   <div class="row "> <div class="cl-12 text-center my-auto"> <?php echo $this->session->flashdata('error'); ?> </div> </div>
                   <?php } 
                   ?>
                   
                   <div class="row">
                    <?php echo form_error("u_name",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                    <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Username: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="u_name" value="<?php echo set_value('u_name') ?>" placeholder="Username"/></div>
                  </div>
                  
                  <div class="row">
                    <?php echo form_error("p_wrd",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Password: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="password" name="p_wrd" placeholder="password"/></div>
                  </div>
                  
                  <div class="row">
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Recaptcha: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="recaptua"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-6"></div>
                      <div class="col-sm-6 col-6 my-auto">
                          <div class="recaptua"><p>234595<p></div> 
                      </div>
                
                  </div>
                   <div class="row ">
                  
                       <div class="col-6 text-right my-auto">
                           <input type="checkbox" name="remember"/> Remember me
                       </div>
                       <div class="col-6 text-left my-auto">
                           <a href="#"><p class="my-auto">forgot your password?</p></a>
                       </div>
                       
                </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center my-auto"><button type="submit" name="submit">Log in</button></div>  
                  </div>
                   <div class="row ">
                  <div class="col-sm-12 text-center"><p>Don't have NEWSPAPER account ? <a href="<?php   echo site_url('user/signup');  ?>">Create one</a>.</p></div>
                </div>
            <?php echo form_close(); ?>           
            </div>
            </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center"><p>This site is protected by reCAPTCHA and the Google <a href="#">privacy policy</a>and <a href="#">Terms of Service</a> apply. </p></div>
                </div>
            </div>
    </body>
</html>
