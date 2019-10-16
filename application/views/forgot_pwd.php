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
               <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/signup.css">-->
        

    </head>
    <body>
       <?php 
        echo form_open(site_url('user/recover_password'));
       ?>
        
        <div class="row">
             <?php echo form_error("email",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
               <div class="col-sm-4 col-4"></div>
                <div class="col-sm-2 col-2">
                           Email: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type=" email" name="email" value="<?php echo set_value('email') ?>" placeholder="email"/></div>
        </div>
        <div class="row ">
                  <div class="col-sm-12 text-center my-auto"><button type="submit" name="submit">submit</button></div>  
                  </div>
        
        <?php 
           echo form_close();
        ?>          
    
    
    
    </body>
</html>