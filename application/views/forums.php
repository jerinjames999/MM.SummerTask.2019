<!DOCTYPE html>

<!--images should be in 1:1 ratio-->
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
     

    <title>newspaper:home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
    </head>
        <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo site_url(); ?>/main"><input type="button"  value="Back"></a>
                </div>
            </div>
            <br>
            <?php if(!isset($_SESSION['user_logged'])){?>
            <div class="row">
                <div class="col-md-12">
                    <p>Please <a href="<?php echo site_url(); ?>/user/login"><span>Login</span></a> to add threads.</p>
                </div>
            </div>
            <?php }?>
            <div class="row">
                            <div class="col-md-12">
                                
                                <div class="table-responsive">
                                <table class="table table-striped table-hover table-sm">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">title</th>
                                        <th scope="col">replies</th>
                                        <th scope="col">views</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($forums as $forum):?>
                                     <?php 
                                        $type='';
                                        if($forum['usertype']=='admin'){$type='admin';}
                                     ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><div class="row"><div class="col-12"> <a href="<?php echo site_url(); ?>/forum/view/<?php echo $forum['forum_slug_url'];?>" ><?php echo $forum['forum_title'];?></a></div></div><div class="row"><div class="col-12"><p>By <?php echo $forum['forum_startedby'];?><span style="background-color:gray; border-radius:3px;"><?php echo $type; ?></span> | on <?php echo $forum['forum_date'];?> at <?php echo $forum['forum_time'];?></p></div></div></td>
                                        <td><?php echo $forum['forum_replies'];?></td>
                                        <td><?php echo $forum['forum_views'];?></td>
                                        
                                    </tr>
                                    <?php $count++; endforeach ?>
                                </tbody>
                                </table>
                                </div>
                            </div>
            </div>
            <?php if(isset($_SESSION['user_logged'])){?>
            <div class="row">
                <div class="col-md-12 text-center">
                <a href="<?php echo site_url('forum/threatform'); ?>"><button class="main-nav">Add a new threat</button></a>
                </div>
            </div>
            <?php }?>
            <br>
        </div>
    </body>
</html>
            
            
            