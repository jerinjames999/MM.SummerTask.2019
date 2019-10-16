
<!--images should be in 1:1 ratio-->
<?php include_once('admin_panel_menu.php')?>
<!--<html lang="en">
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
    </head>-->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
             $('document').ready(function(){
                 hideall();
                 $('#adminpage1').show();
                 $('#admin').click(function(){
                        hideall();
                         $('#adminpage1').show();
                          
                      });
                 $('#addarticle').click(function(){
                     hideall();
                     $('#addarticle1').show();
                     
                  });
                 $('#allarticles').click(function(){
                     hideall();
                     $('#allarticles1').show();
                     
                  });
                 $('#editarticle').click(function(){
                     hideall();
                     $('#editarticle1').show();
                     
                  });
                 $('#addpoll').click(function(){
                     hideall();
                     $('#addpoll1').show();
                     
                  });
                 $('#allpolls').click(function(){
                     hideall();
                     $('#allpolls1').show();
                     
                  });
                 $('#editpoll').click(function(){
                     hideall();
                     $('#editpoll1').show();
                     
                  });
                 $('#addcategory').click(function(){
                     hideall();
                     $('#addcategory1').show();
                     
                  });
                 $('#deletecategory').click(function(){
                     hideall();
                     $('#deletecategory1').show();
                     
                  });
                 $('#answerq').click(function(){
                     hideall();
                     $('#answerq1').show();
                     
                  });
                 $('#editstatus').click(function(){
                     hideall();
                     $('#editstatus1').show();
                     
                  });
                 $('#addadmin').click(function(){
                     hideall();
                     $('#addadmin1').show();
                     
                  });
                 $('#approvecment').click(function(){
                     hideall();
                     $('#approvecment1').show();
                     
                  });
                  
                 function hideall(){
                     $('#adminpage1').hide();
                     $('#addarticle1').hide();
                     $('#allarticles1').hide();
                     $('#editarticle1').hide();
                     $('#addpoll1').hide();
                     $('#allpolls1').hide();
                     $('#editpoll1').hide();
                     $('#addcategory1').hide();
                     $('#deletecategory1').hide();
                     $('#answerq1').hide();
                     $('#editstatus1').hide();
                     $('#addadmin1').hide();
                     $('#approvecment1').hide();
                 }
               });
    </script>
    -->
    <!--<body>
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
-->
                <!--
                <div class="col-md-3 adminmenu">

                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><p id="admin"><i class="fas fa-user-cog" style="color:blue;font-size:1000%;"></i></p>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="addarticle">ADD ARTICLE</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="allarticles">ALL ARTICLES</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="editarticle">EDIT ARTICLE</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="addpoll">ADD POLL</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="allpolls">ALL POLLS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="editpoll">EDIT POLL</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="addcategory">ADD CATEGORY</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="deletecategory">DELETE CATEGORY</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="answerq">ANSWER QUESTIONS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="editstatus">EDIT STATUS</h3></a>
                                </div>
                            </div>
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="addadmin">ADD ADMIN</h3></a>
                                </div>
                            </div>
                    
                            <div class="row adminopt">
                                <div class="col-md-12 text-center">
                                    <a href="#"><h3 id="approvecment">APPROVE COMMENTS</h3></a>
                                </div>
                            </div>
                </div>
                
                
                 -->   
                <div class="col-md-9" id="adminpage1">
                    <h3><i class="fas fa-user-cog" style="color:blue;font-size:2000%;"></i></h3>
                </div>
                    
                    
              <!--      
                <div class="col-md-9" id="addarticle1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD ARTICLES</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">


                                <?php 
                                    echo form_open_multipart('admin/form_submit_upload_article');

                                    //if($this->session->flashdata('success')){ ?>

                              <div class="row text-center my-auto"> <div class="cl-12"> <?php // echo $this->session->flashdata('success'); ?> </div></div>
                                <?php //} ?>
                                 <? php //else{  ?>
                                <div class="row text-center my-auto"><div class="cl-12"> <?php //echo $this->session->flashdata('error'); ?> </div> </div>   
                               <?php  //} ?>





                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <?php echo form_error("title",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                        <input type="text" name="title" placeholder="Title" value="<?php echo set_value('title'); ?>">
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <?php echo form_error("author",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                        <input type="text" name="author" placeholder="Author" value="<?php echo set_value('author'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">

                                                        <select name="category">
                                                            <option value="main_news">MAIN NEWS</option>
                                                            <option value="international">INTERNATIONAL</option>
                                                            <option value="national">NATIONAL</option>
                                                            <option value="politics">POLITICS</option>
                                                            <option value="business">BUSINESS</option>
                                                            <option value="editorials">EDITORIAL</option>
                                                            <option value="obituaries">OBITUARIES</option>
                                                            <option value="education">EDUCATION</option>
                                                            <option value="sports">SPORTS</option>
                                                            <option value="opinion">OPINION</option>
                                                        </select>

                                                    </div>
                                                    <div class="col-md-12 text-center">

                                                          <input type="file" name="image"> <?php if(isset($error)){echo $error;}?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center my-auto">

                                                <?php echo form_error("content",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>

                                                <textarea rows="20" cols="100" placeholder="content..." name="content" value="<?php echo set_value('content'); ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button name="upload">upload article</button>
                                            </div>
                                        </div>
                                 <?php 
                                     echo form_close();
                                            if(isset($upload_data)){
                                                echo $upload_data;
                                            }
                                  ?>

                              </div>
                      </div>
               </div>
                    
                    
                    
                <div class="col-md-9" id="allarticles1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ALL ARTICLES</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php echo form_open('admin/mm');?>
                                    <select name="category">
                                        <option value="all">ALL CATEGORIES</option>
                                        <option value="main_news">MAIN NEWS</option>
                                        <option value="international">INTERNATIONAL</option>
                                        <option value="national">NATIONAL</option>
                                        <option value="politics">POLITICS</option>
                                        <option value="business">BUSINESS</option>
                                        <option value="editorials">EDITORIAL</option>
                                        <option value="obituaries">OBITUARIES</option>
                                        <option value="education">EDUCATION</option>
                                        <option value="sports">SPORTS</option>
                                        <option value="opinion">OPINION</option>
                                    </select>
                               <?php echo form_close();?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="table-responsive">
                                <table class="table table-striped table-hover table-sm">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">category</th>
                                        <th scope="col">title</th>
                                        <th scope="col">author</th>
                                        <th scope="col">slug url</th>
                                        <th scope="col">live date</th>
                                        <th scope="col">status</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                    <tr>
                                        <td>id</td>
                                        <td>id</td>
                                        <td>id</td>
                                        <td>id</td>
                                        <td>id</td>
                                        <td>id</td>
                                        <td>id</td>
                                    </tr>
                                    
                                </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    
                </div>
                    
                   
                    
                <div class="col-md-9" id="editarticle1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>EDIT ARTICLE</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                     -->
                <!--<div class="col-md-9" id="addpoll1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD POLL</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                   --> 
                    
                    
                <!--<div class="col-md-9" id="allpolls1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ALL POLLS</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                    
                <div class="col-md-9" id="editpoll1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>EDIT POLL</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                    
                <div class="col-md-9" id="addcategory1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD CATEGORY</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                 
                <div class="col-md-9" id="deletecategory1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>DELETE CATEGORY</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                    
                <div class="col-md-9" id="answerq1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ANSWER QUESTIONS</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                       
                <div class="col-md-9" id="editstatus1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>EDIT STATUS </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                    
                <div class="col-md-9" id="addadmin1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD ADMIN </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
                    
                    
                    
                <div class="col-md-9" id="approvecment1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>APPROVE COMMENTS </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    
                </div>
-->
            </div>
        </div>
    </body>
</html>