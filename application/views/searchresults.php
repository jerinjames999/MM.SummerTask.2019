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
          
               <div class="row navrow lineafter d-none d-lg-block">
                      <a href="<?php echo site_url('main'); ?>"><button class="main-nav">home</button></a>
                      <a href="<?php echo site_url('main/page/international'); ?>"><button class="main-nav">international</button></a>
                      <a href="<?php echo site_url('main/page/national'); ?>"><button class="main-nav">national</button></a>
                      <a href="<?php echo site_url('main/page/politics'); ?>"><button class="main-nav">politics</button></a>
                      <a href="<?php echo site_url('main/page/business'); ?>"><button class="main-nav">business</button></a>
                      <a href="<?php echo site_url('main/page/editorials'); ?>"><button class="main-nav">editorials</button></a>
                      <a href="<?php echo site_url('main/page/obituaries'); ?>"><button class="main-nav">obituaries</button></a>
                      <a href="<?php echo site_url('main/page/education'); ?>"><button class="main-nav">education</button></a>
                      <a href="<?php echo site_url('main/page/sports'); ?>"><button class="main-nav">sports</button></a>
                      <a href="<?php echo site_url('main/page/opinion'); ?>"><button class="main-nav">opinion</button></a>
                </div>





<div class="row">
    
    
    <div class="col-lg-12 ">
        <h3>Search Results:-</h3>
        <?php if($count>0){?>
        <h5>Search finished, found <?php echo $count; ?> page(s) matching the search query.</h5>
        <?php }else{?>
        <h5>Your search did not match any documents. Please make sure that all words are spelled correctly and that you've selected enough categories.</h5>
        <?php }?>
    </div>
    
</div>
<div class="row">
<div class="col-lg-10 ">
 <div class="row">
     <?php foreach($search_result as $news):?>
<div class="col-lg-12 smlnews">
                                    <div class="row">
                                        <div class="col-4 containimg">
                                    <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><img src="<?php echo base_url().$news['article_img'];?>" class="img-fluid img-thumbnail  "></a>                                        </div>
                                        <div class="col-8 ">
                                            <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext">
                                            <h5><?php echo $news['article_title'];?></h5>
                                            <p>by <?php echo $news['article_author'];?></p>
                                            <p><?php echo substr($news['article_content'],0,100).'...';?></p>
                                            </a>
                                            <div class="row reactnav">
                                            <p>20m ago</p>
                                            <p><?php echo $news['article_likes'];?><i class="far fa-thumbs-up"></i></p>
                                            <p>6<i class="far fa-comment"></i></p>
                                            <p><?php echo $news['article_views'];?> views</p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
     <?php endforeach?>
                            </div>
                    </div>
        </div>
        </div>
    </body>
</html>