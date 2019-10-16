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
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
             $('document').ready(function(){
                $('#submit_reply').click(function(event){
                             event.preventDefault();
                             //var form_data=$(this).serialize();
                             var reply=$('#reply').val();
                             var forum_id=$('#forum_id').val();

                             $.ajax({
                                     type: 'POST',
                                     url: "<?php echo site_url('forum/addforumreply'); ?>",
                                     data : {'reply':reply,
                                             'forum_id':forum_id
                                            },
                                     success:function(data){
                                         
                                         
                                         
                                        alert('thank you for your valuable response \n reply added successfully');
                                        if(data.error!=''){
                                            $('#reply_form')[0].reset();
                                            $('#reply_message').html(data);
                                             /*load_replies();
                                             function load_replies(){
                                                 $.ajax({
                                                     type:'POST',
                                                     url:"<?php //echo site_url('forum/load_all_replies')?>",
                                                     data:{'forum_id':forum_id},
                                                     success:function(data){
                                                         alert('xxxxxxxxxxxxxx');
                                                         $('#comments').html(data);
                                                     }
                                                 });
                                             }*/
                                            }
                                        }

                                     });

                             });
                  });
        </script>
    </head>
    <body>
        <div class="container">
     
            <br>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo site_url(); ?>/forum"><input type="button"  value="Back"></a>
                </div>
            </div>
            <?php if(!isset($_SESSION['user_logged'])){?>
            <div class="row">
                <div class="col-md-12">
                    <p>Please <a href="<?php echo site_url(); ?>/user/login"><span>Login</span></a> to reply.</p>
                </div>
            </div>
            <?php }?>
            <div class="row main-plate">
                <div class="col-12 main-plate">
                    <div class="row">
                        <div class="col-12">
                            <h3><?php echo $forum['forum_title']; ?></h3>
                        </div>
                    </div>
                    <?php 
                        $type='';
                        if($forum['usertype']=='admin'){$type='admin';}
                     ?>
                    <div class="row">
                        <div class="col-12">
                            <p>By <?php echo $forum['forum_startedby'];?>  <span style="background-color:gray; border-radius:3px;"><?php echo $type; ?></span>| on <?php echo $forum['forum_date'];?> at <?php echo $forum['forum_time'];?> | <?php echo $forum['forum_replies'];?> Replies</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p><?php echo $forum['forum_description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

                <br>
<style>
    .reply_text{
        width: 50%;
    }
    .forumreplyplate{
        background-color: #dbdbd7;
        border-radius: 10px;
        width: 90%;
    }
    .main-plate{
        background-color: #f2f2ee;
        border-radius: 5px;
    }
    .allreplies{
        margin-left: 8%;
    }
</style> 
            <div class="row">
                <div class="col-12 allreplies">
                    <?php foreach($replies as $reply): ?>
                    <div class="row forumreplyplate">
                        <div class="col-12">
                            <h5><?php echo $reply['reply_uname']; ?></h5>
                        </div>
                        <div class="col-12">
                            <p><?php echo $reply['reply_date']; ?></p>
                        </div>
                        <div class="col-12">
                            <p><?php echo $reply['reply_text']; ?></p>
                        </div>
                    </div>
                    <br>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12">
                    <span id="reply_message"></span>
                </div>

                <div class="col-12" id="replies">


                </div>

                <?php if(isset($_SESSION['user_logged'])){?>
                <div class="col-12">

                      <?php 
                         echo form_open(site_url('forum/addforumreply'),'id="reply_form"');
                        ?>
                                <input type="hidden" id="forum_id" name="forum_id" value="<?php echo $forum['forum_id'] ; ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <textarea id="reply" name="reply" placeholder="Reply here..." class="reply_text"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" name="submit" id="submit_reply" value="submit">
                                    </div>
                                </div>
                                <br>
                        <?php 
                            echo form_close();
                        ?>

                </div>
                
                <?php }?>  

            </div>
        </div>
    </body>