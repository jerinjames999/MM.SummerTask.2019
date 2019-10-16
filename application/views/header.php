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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">

    <title>header</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css">

    </head>
    
    <body>
    
        
    <header>
    
        
        <div class="container">
            <div class="row headrow">
                    <div class="col-sm-3 col-3 my-auto">
                        <div class="row">
                            <div class="col-sm-6 col-6 text-center date">
                                <div class="row"><div class="col-sm-12 col-12 text-center"><h5><?php echo date('d');?></h5></div></div>
                                    <div class="row"><div class="col-sm-12 col-12 text-center"><h5><?php echo date('M');?></h5></div></div>
                                    <div class="row"><div class="col-sm-12 col-12 text-center"><h5><?php echo date('Y');?></h5></div></div>
                                    <div class="row"><div class="col-sm-12 col-12 text-center"><h5><?php echo date('l');?></h5></div></div>
                            </div>
                            <div class="col-sm-6 col-3 text-center my-auto menus">
                            
                                <button class="menuicon"><i class="fas fa-bars"></i></button>
                                    <ul class="menu">
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                              <li><a href="#">a</a></li>
                                      
                                        </ul> 
                                        
                             </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-5 text-center my-auto name">
                           <h1>newspaper</h1>               
                    </div>

                    <div class="col-sm-4 col-3 my-auto option">
                        <div class="row my-auto text-right">
                            
                                       <div class="col-sm-4  text-left admin">
                                           <?php if(isset($_SESSION['user_type'])){
                                                    if($_SESSION['user_type']=='admin'){?>
                                           
                                            <a href="<?php   echo site_url('admin');  ?>"><button class="btn btn-dark btn-sm" >admin</button></a>
                                           
                                           <?php }}?>
                                       </div>
                                       <div class="col-sm-4 col-6 text-left">
                                           <?php if(!isset($_SESSION['user_logged'])){?>
                                           <a href="<?php   echo site_url('user/login');  ?>"><button class="btn btn-dark btn-sm">login</button></a>
                                           <?php } else{?>
                                           <a href="<?php   echo site_url('user/logout');  ?>"><button class="btn btn-dark btn-sm">logout</button></a>
                                           <?php } ?>
                                       </div>
                                       <div class="col-sm-4 col-6 text-left">
                                           <a href="#"><button class="btn btn-dark btn-sm">subscribe</button></a>
                                       </div>
                                   
                        </div>
                        <div class="row" >

                      <div class="col-sm-12 col-12 text-left search">
                                  <?php echo form_open('main/search',array('method'=>'get'));?>
                                   <input type="search" placeholder="Search.." maxlength="25" name="search" autocomplete="on">
                                   <button type="submit" name="submit" class=" btn-secondary"><i class="fas fa-search"></i></button>
                                  <?php echo form_close()?>
                              </div>
                        </div>
                    </div>
                    
            </div>
        </div> 
    </header>
    
    </body>
</html>




