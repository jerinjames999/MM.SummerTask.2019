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
     

    <title>newspaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newsdetail.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
             $('document').ready(function(){
                 
                 $('.pollq').click(function(){
                     $value=$('.pollq').val();
                 });
                 $('.pollsubmit').click(function(event){
                    event.preventDefault();
                    
                     var ans='';
                     
                     var id= $(this).attr('id');
                     $('.pollq').each(function(){
                         if($(this).is(':checked')){
                            ans=$(this).val();
                     }
                     });
                     
                     //$.post('<?php //echo site_url('poll/poll_submit')?>',{'ans': ans,'id':id },function(data){ alert('success'); });
      if(typeof ans!=='undefined'){
                         $.ajax({
                             type: "POST",
                             url: "<?php echo site_url('poll/poll_submit')?>",
                             data : { 
                                      'ans':ans,
                                      'id':id
                                   },
                             success:function(data){
                                 alert('thank you for your valuable response \n poll added successfully');
                                 displaypollresult();
                                 
                                  function displaypollresult(){
                                       $.ajax({
                                                 type: "POST",
                                                 url: "<?php echo site_url('poll/poll_answer')?>",
                                                 data : { 
                                                          'id':id
                                                       },
                                                 success:function(data){
                                                    //$('#id<?php //echo $poll['poll_id']?> #pollreslt').html('<div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer1.'</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer2.'</p></div><div class="col-3 text-center"><p class="poll_percent" id="poll_percent1">'.$answer3.'</p></div>');
                                                     
                                                    $('#id'+id).html(data);

                                                 }
                                               });
                                            }
                                
                             }
                           });
                        
              
                    }
                     
                     
                  });
                 
                 $('#submit_comment').click(function(event){
                    event.preventDefault();
                     //var form_data=$(this).serialize();
                     var comment=$('#comment').val();
                     var article_id=$('#article_id').val();
                     var parent_id=$('#parent_id').val();
                     
                     $.ajax({
                             type: "POST",
                             url: "<?php echo site_url('comment/addcomment')?>",
                             data : {'comment':comment,
                                     'article_id':article_id,
                                     'parent_id':parent_id
                                    },
                             success:function(data){
                                alert('thank you for your valuable response \n comment added successfully');
                                if(data.error!=''){
                                    $('#comment_form')[0].reset();
                                    $('#comment_message').html(data);
                                     load_comments();
                                     function load_comments(){
                                         $.ajax({
                                             type:'POST',
                                             url:"<?php echo site_url('comment/load_all_comments')?>",
                                             data:{'article_id':article_id},
                                             success:function(data){
                                                 alert('xxxxxxxxxxxxxx');
                                                 $('#comments').html(data);
                                             }
                                         });
                                     }
                                    }
                                }
                                
                             });
                    
                     
                     
                     
                         
                     });
                 
                 
                 
                 $('.reply').click(function(){
                     alert('rdygty');
                     var comment_id=$(this).attr('id');
                     $('#parent_id').val(comment_id);
                     
                     $('#comment').focus();
                 });
                 
                     
                  });
        </script>
    </head>
    <body>
     <div class="articlepage">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="row newshead">
                    <div class="col-12 text-center my-auto">
                    <h2><?php echo $news_item['article_title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6>By <?php echo $news_item['article_author']; ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6><?php echo $news_item['edited_date']; ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6>20 mins ago</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                        <figure class="figure-caption">
                             <img src="<?php echo base_url().$news_item['article_img'];?>" class="img-fluid">
                             <figcaption class="figure-caption "><?php echo $news_item['article_description'];?></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-left my-auto">
                    <p class="explanation"><?php echo $news_item['article_content']; ?></p>
                        
                    </div>
                </div>
                <?php if(!isset($_SESSION['user_logged'])){?>
                        <p>Please <a href="<?php echo site_url(); ?>/user/login">Login</a> to continue</p>
                <?php }
                    else{?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-8 text-center my-auto poll">
                           <?php foreach($polls as $poll):?>
                           <div class="row pollsection ">
                               <div class="col-12">
                                   <h2><?php echo $poll['poll_question']; ?></h2>
                               </div>
                                
                               <div class="col-12 text-center">
                                   <?php 
                                     echo form_open(site_url('poll/poll_submit'));
                                    ?>
                                    <div class="row">
                                        
                                        <div class="col-3 text-center">
                                            <input type="checkbox"  name="pollagree-1" value="poll_ans1" class="pollq">
                                            <label><?php echo $poll['poll_option1']; ?></label>
                                           
                                        </div>
                                        <div class="col-3 text-center">
                                            <input type="checkbox"  name="pollagree-2" value="poll_ans2" class="pollq">
                                            <label><?php echo $poll['poll_option2']; ?></label>
                                            
                                        </div>
                                        <div class="col-3 text-center">
                                            <input type="checkbox"  name="pollagree-3" value="poll_ans3" class="pollq">
                                            <label><?php echo $poll['poll_option3']; ?></label>
                                            
                                        </div>
                                        
                                        
                                        <div class="col-3 text-center">
                                            <button type="button" class="text-center pollsubmit" id="<?php echo $poll['poll_id']; ?>" name="submit">submit</button>
                                        </div>
                                        
                                    </div>
                                <?php 
                                    echo form_close();
                                ?>
                                   </div>
                                   <div class="col-12 text-center">
                                       
                                       <div class="row" id="id<?php echo $poll['poll_id']?>">
                                          
                                        </div>
                                       
                                   </div>
                           </div>
                            <?php endforeach?>
                             
                        </div>
                        
                        <div class="col-2">
                        </div>
                    </div>
                </div> 
                <br>
                
                <div class="row">
                <!--for like and comments-->
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                  <?php 
                                     echo form_open(site_url('comment/addcomment'),'id="comment_form"');
                                    ?>
                                <!--<input type="text" name="comment" id="commentid" placeholder="Comment here...">-->
                                <input type="hidden" id="article_id" name="article_id" value="<?php echo $news_item['article_id'] ; ?>">
                                <input type="hidden" id="parent_id" name="parent_id" value="0">
                                <div class="row">
                                    <div class="col-12">
                                        <textarea id="comment" name="comment" placeholder="Comment here..."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <input type="submit" name="submit" id="submit_comment" value="submit">
                                    </div>
                                </div>
                                    <?php 
                                        echo form_close();
                                    ?>
                                
                            </div>
                            <div class="col-12">
                                <span id="comment_message"></span>
                            </div>
                            
                            <div class="col-12" id="comments">
                                
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                    </div>
                    
                </div>
                <?php }?>
            </div>
            <br>
            <div class="col-lg-3 col-12 mostpplur">
                
                
                <style>
                    #comment{
                        width: 100%;
                    }
                .newstext,
                .newstext:hover{
                    text-decoration:none;
                    color: black;
                 }
                    .reactnav{
                            float: right;
                        }
                    .reactnav p{
                        margin-right: 15px;
                    }
                    .reactnav:before{

                        display: block;
                        height: 1px;
                        background-color: rgba(209, 205, 205, 0.83);
                        content: " ";
                        width: 100%;
                        margin:0 auto 5px auto;

                    }
                
                </style>
                
                
                 <h3>Most popular:-</h3>
                <?php foreach($most_popular as $news):?>
                <div class="row putline">
                    <div class="col-lg-6 col-3 text-center">
                                                
                <!--img of 1:1 ratio-->

                        <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>"><img src="<?php echo base_url().$news['article_img'];?>" class="img-fluid img-thumbnail "></a>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><h5><?php echo $news['article_title'];?></h5></a>
                        <div class="row reactnav">
                            <p><?php echo $news['article_likes'];?><i class="far fa-thumbs-up"></i></p>
                            <p><?php echo $news['article_views'];?> views</p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                
            </div>
        </div>
         <div class="row">
             <div class="col-12">
             </div>
     </div>
    </div>
    </body>
</html>
