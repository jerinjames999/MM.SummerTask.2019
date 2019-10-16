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
     

    <title>add new threat</title>
        <div class="col-md-12" id="addarticle1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD NEW THREAT</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
<style>
    .error {
    color: red;
    font-weight: 500;
    font-size: 13px;
    }
    .forum_description{
    width: 50%;
    }
    .forum_title{
    width: 50%;
    }
</style>
                                <?php 
                                    echo form_open('forum/forum_submitthreat');
                                ?>    
                              
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <?php echo form_error("forum_title",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                <input type="text" name="forum_title" placeholder="Title" value="<?php echo set_value('forum_title'); ?>" class="forum_title">
                                            </div>                                            
                                        </div>
                                       <br>   
                                        <div class="row">
                                            <div class="col-md-12 text-center my-auto">

                                                <?php echo form_error("description",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>

                                                <textarea rows="5" placeholder="description..." name="description" value="<?php echo set_value('description'); ?>" class="forum_description"></textarea>
                                            </div>
                                        </div>
                                       <br>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <input type="submit" name="add-thread" value="ADD THREAT">
                                            </div>
                                        </div>
                                <br>
                                <br>
                                 <?php echo form_close(); ?>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h5><?php if(isset($upload_data)){ echo $upload_data;}?></h5>
                                    </div>
                                </div>

                            </div>
                      </div>
               </div>
    </head>
</html>