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
                       <?php foreach($categories as $category) : 
                          if($category['category_hname']!='MAIN NEWS') { ?>
                               <a href="<?php echo site_url('main/page/'.$category['category_value']); ?>"><button class="main-nav"><?php echo strtolower($category['category_hname']) ?></button></a>
                       <?php } endforeach ?>
                </div>
        
            <div class="row lineafter">
                <div class="col-lg-3 col-sm-6 col-12 comnews line ">
                    <a href="#" class="newstext">
                        <div class="row notes ">
                            <div class="col-5 containimg">
                                <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <div class="col-7">
                                
                                    <h6>Sports</h6>
                                    <p>'better luck india.</p>
                                    
                            </div>
                     </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 comnews line ">
                    <a href="#" class="newstext">
                        <div class="row notes ">
                                <div class="col-5 containimg">
                                    <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" class="img-fluid img-thumbnail">
                                </div>
                                <div class="col-7">
                                    <h6>Money conversions</h6>
                                </div>
                         </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 comnews line">
                    <a href="#" class="newstext">
                    <div class="row notes ">
                            <div class="col-5 containimg">
                                <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" class="img-fluid img-thumbnail  ">
                            </div>
                            <div class="col-7">
                                <h6>nitrkl been the next super nit</h6>
                            </div>
                     </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 comnews line">
                    <a href="#" class="newstext">
                    <div class="row notes ">
                            <div class="col-5 containimg">
                                <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" class="img-fluid img-thumbnail  ">
                            </div>
                            <div class="col-7">
                                <h6>Today's Weather</h6>
                                <p>rourkela: 36 </p>
                            </div>
                     </div>
                    </a>
                </div>
            </div>



<?php foreach($categories as $category) : ?>
    <?php if(isset(${$category['category_value']})){?>
        <?php if($category['category_hname']=='MAIN NEWS'){ ?>
            <div class="main-news">
                        <div class="row">
                            <div class="col-12">
                                <h3><?php echo $category['category_hname'] ?></h3>
                            </div>
                        </div>
                        <div class="row linebefore lineafter">
                            <div class="col-lg-12 ">
                                <div class="row notes">
                                    <?php $count=1;?>
                                     <?php foreach(${$category['category_value']} as $news):?>
                                    <?php if($count==1) { ?>
                                    <div class="col-lg-6 smlbnews smlnews">
                                        <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                   <p>by <?php echo $news['article_author'];?></p>
                                                   <h3><?php echo $news['article_title'];?></h3>
                                             </div>
                                          </div>
                                        </a>
                                        <div class="row bignews">
                                            <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext">
                                            <div class="col-lg-12">


                                                <figure class="figure-caption">
                                  <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><img src="<?php echo base_url().$news['article_img'];?>" class="img-fluid img-thumbnail  "></a>                                      <figcaption class="figure-caption "><?php echo $news['article_description'] ; ?></figcaption>
                                                </figure>

                                                <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><p><?php echo substr($news['article_content'],0,1350).'...';?></p></a>
                                            </div>
                                            </a>
                                            <div class="col-12">
                                             <div class="row reactnav">
                                                        <p>20m ago</p>
                                                        <p><?php echo $news['article_likes'];?><i class="far fa-thumbs-up"></i></p>
                                                        <p>6<i class="far fa-comment"></i></p>
                                                        <p><?php echo $news['article_views'];?> views</p>
                                             </div>
                                            </div>
                                    </div>
                                </div>


                                    <div class="col-lg-6 ">
                                        <div class="row">

                                        <?php }?>
                                        <?php if($count==2||$count==3||$count==4){?>

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
                                           <?php }?>
                                            <?php if($count==4){
                                          echo '</div></div>';
                                             }?>

                                     <?php if($count>4){?>
                                    <div class="col-lg-4 col-md-6 col-12 smlnew ">
                                        <div class="row notes comnews line">
                                        <div class="col-md-5 col-4 containimg">
                                            <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><img src="<?php echo base_url().$news['article_img'];?>" class="img-fluid img-thumbnail  "></a>
                                        </div>
                                        <div class="col-md-7 col-8">
                                            <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><h5><?php echo $news['article_title'];?></h5></a>
                                            <div class="row reactnav">
                                                        <p><?php echo $news['article_likes'];?><i class="far fa-thumbs-up"></i></p>
                                                        <p><?php echo $news['article_views'];?> views</p>
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                    <?php } $count++;?>
                                    <?php endforeach?>
                                    <?php if($count<5 && $count>1){?>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </div>
                        </div>
                        </div>
                        </div>

        <?php } 
        else{ ?>


                    <div class="main-news">
                    <div class="row">
                    <div class="col-12">
                            <h3><?php echo $category['category_hname'] ?></h3>
                    </div>
                    </div>
                    <div class="row linebefore lineafter">
                        <div class="col-lg-12 ">
                            <div class="row notes">




                                <?php foreach(${$category['category_value']} as $news):?>
                                <div class="col-lg-4 col-md-6 col-12 smlnew ">
                                    <div class="row notes comnews line">
                                    <div class="col-md-5 col-4 containimg">
                                        <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><img src="<?php echo base_url().$news['article_img'];?>" class="img-fluid img-thumbnail  "></a>
                                    </div>
                                    <div class="col-md-7 col-8">
                                        <a href="<?php echo site_url(); ?>/main/view/<?php echo $news['slug_url'] ; ?>" class="newstext"><h5><?php echo $news['article_title'];?></h5></a>
                                        <div class="row reactnav">
                                                    <p><?php echo $news['article_likes'];?><i class="far fa-thumbs-up"></i></p>
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
       <?php } ?>
    <?php } ?>
<?php endforeach ?>

   
     
  </div>    
        
        
       
    </body>
</html>


<!--<div class="col-md-4 image">
                                            <figure class="figure-caption">
                                                <img src="images/eg.jpg" class="img-fluid img-thumbnail xyz">
                                                <figcaption class="figure-caption ">rytuy iu hg v sssgfg yu</figcaption>
                                            </figure>
                                        </div>




<p><i class="fas fa-bars"></i></p>
<p><i class="fas fa-search"></i></p>
<p><i class="fas fa-user-cog"></i></p>
<p><i class="fas fa-upload"></i></p>
<p><i class="fas fa-plus-square"></i></p>
<p><i class="fas fa-user-plus"></i></p>
<p><i class="fas fa-edit"></i></p> 
-->