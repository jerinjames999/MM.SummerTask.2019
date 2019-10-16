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

     

    <title>Admin:newspaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin.css">  
    </head>
    <body>
     <style>
.error {
color: red;
font-weight: 500;
font-size: 13px;
}
.adminmenu {
background-color: rgba(152, 76, 244, 0.38);
border-right: 3px solid rgba(112, 112, 112, 0.38);
}
.adminopt:hover{
background-color: rgba(119, 119, 255, 0.37);
}
.adminopt:before{
display: block;
height: 2px;
background-color: rgba(171, 102, 255, 0.38);
content: " ";
width: 100%;
margin:0 auto 0 auto;
}
.adminopt a{
text-decoration: none;
color: #56687c
}
textarea{
margin-top: 10px;      
}
        </style>
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 adminmenu">

                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin');?>"><p id="admin"><i class="fas fa-user-cog" style="color:blue;font-size:1000%;"></i></p>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/add_article');?>"><h3 id="addarticle">ADD ARTICLE</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/all_articles');?>"><h3 id="allarticles">ALL ARTICLES</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/edit_article');?>"><h3 id="editarticle">EDIT ARTICLE</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/add_poll');?>"><h3 id="addpoll">ADD POLL</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/all_polls');?>"><h3 id="allpolls">ALL POLLS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/edit_poll');?>"><h3 id="editpoll">EDIT POLL</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/add_category');?>"><h3 id="addcategory">ADD CATEGORY</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/delete_category');?>"><h3 id="deletecategory">DELETE CATEGORY</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/answer_question');?>"><h3 id="answerq">ANSWER QUESTIONS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/edit_status');?>"><h3 id="editstatus">EDIT STATUS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/add_admin');?>"><h3 id="addadmin">ADD ADMIN</h3></a>
                                </div>
                            </div>
                    
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="<?php echo site_url('admin/approve_cment');?>"><h3 id="approvecment">APPROVE COMMENTS</h3></a>
                                </div>
                            </div>
                </div>
        
