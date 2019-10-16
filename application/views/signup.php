<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.css.map">
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
     
    <title>signup:newspaper</title>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/signup.css">

    </head>
    <body>
           <div class="container">
           <div class="row">
               <div class="col-sm-12 text-center heading"><h3>Create your NEWSPAPER Account</h3></div>
           </div>
           <div class="row  gfsingup">
               <div class="col-sm-6 col-6 text-right">
                   <a href="#"><img src="<?php echo base_url();?>assets/images/googlesignupnew.jpg" class="img-fluid"></a>
               </div>
               <div class="col-6 ">
                   <a href="#"><img src="<?php echo base_url();?>assets/images/fbsignupnew.png" class="img-fluid"></a>
               </div>
           </div>
            
           <div class="row">
               <div class="col-sm-12 text-center my-auto">
               <h6>or</h6>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-12">
            <!--<form action="includes/signup.inc.php" method="post">-->
                   <style>
                       .error{
                           color: red;
                           font-weight: 500;
                           font-size: 13px;
                       }
                   </style>
                   
                   
                  
                                        
                   <?php 
                   echo form_open(site_url('user/form_submit_signup'));
                   
                   if($this->session->flashdata('success')){ ?>
                   
                   <div class="row text-center my-auto"> <div class="cl-12"> <?php echo $this->session->flashdata('success'); ?> </div> </div>
                   <?php }
                   else{ ?>
                    <div class="row text-center my-auto"> <div class="cl-12"> <?php echo $this->session->flashdata('error'); ?> </div> </div>   
                   <?php } ?>
                  <div class="row">
                  <?php echo form_error("name",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>

                   <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">Name: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="name" value="<?php echo set_value('name') ?>" placeholder="name"/></div>
                  </div>
                  <div class="row">
                    <?php echo form_error("uname",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Username: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="uname" value="<?php echo set_value('uname') ?>" placeholder="username"/></div>
                  </div>
                  <div class="row">
                      <?php echo form_error("email",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                      <div class="col-sm-4 col-4"></div>
                       <div class="col-sm-2 col-2">
                           Email: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type=" email" name="email" value="<?php echo set_value('email') ?>" placeholder="email"/></div>
                  </div>
                  <div class="row">
                      <?php echo form_error("pwd",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Password: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="password" name="pwd" placeholder="password"/></div>
                  </div>
                  <div class="row">
                <?php echo form_error("cpwd",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>                    
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Conform password: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="password" name="cpwd" placeholder="password"/></div>
                  </div>
                  <div class="row">
                      <?php echo form_error("recaptua",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Recaptcha: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="recaptua"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-6"></div>
                      <div class="col-sm-6 col-6 my-auto">
                          <div class="recaptua"><p><?php echo($recaptua); ?><p></div> 
                      </div>            
                  </div>
                   <div class="row ">
                  <div class="col-sm-12 text-center"><p>By creating an account,you agree to the <a href="#">Terms of service</a> and acknowledge our <a href="#">privacy policy</a>. </p></div>
                </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center my-auto"><button type="submit" name="submit">Create Account</button></div>  
                  </div>
                   <div class="row ">
            <div class="col-sm-12 text-center"><p>Already have an account ? <a href="<?php   echo site_url('user/login');  ?>">Login</a> </p></div>
                </div>
            <?php 
                   echo form_close();
            ?>
            </div>
            </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center"><p>This site is protected by reCAPTCHA and the Google <a href="#">privacy policy</a>and <a href="#">Terms of Service</a> apply. </p></div>
                </div>
            </div>
    </body>
</html>
