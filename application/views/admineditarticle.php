<?php include_once('admin_panel_menu.php')?>
<div class="col-md-9" id="editarticle1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>EDIT ARTICLE</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                                <?php 
                                    echo form_open('admin/form_slugrtkl');
                                ?>

                                        <div class="row">
                                            <?php echo form_error("pollurl",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                            <div class="col-md-12 text-center">
                                                <input name="pollurl" type="text" placeholder="article url..." value="<?php echo set_value('pollurl'); ?>">
                                            </div>
                                            
                                            <div class="col-md-12 text-center">
                                                <input name="submit_slugrtkl" type="submit" placeholder="article url..." value="search">
                                            </div>
                                        </div>
                                 
                                <?php echo form_close();?>
                                
                                
                                <?php 
                                    echo form_open_multipart('admin/form_submit_edit_article');
                                ?>
                                        
                                <input type="hidden" name="articleid" value="<?php if(isset($article['article_id'])){
                                                            echo $article['article_id'];
                                                            } 
                                                        ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <?php echo form_error("title",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                        <input type="text" name="title" placeholder="Title" value="<?php if(isset($article['article_title'])){
                                                            echo $article['article_title'];
                                                            } 
                                                        else{echo set_value('title'); }
                                                        ?>">
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <?php echo form_error("author",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                        <input type="text" name="author" placeholder="Author" value="<?php
                                                                    if(isset($article['article_author'])){
                                                                        echo $article['article_author'];
                                                                        } 
                                                                        else{echo set_value('author');} ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">

                                                        <select name="category">
                                                            <?php foreach($categories as $category): ?>
                                                            <option value="<?php echo $category['category_value']; ?>"><?php echo $category['category_hname']; ?></option>
                                                            <?php endforeach ?>
                                                        </select>

                                                    </div>
                                                    <div class="col-md-12 text-center">

                                                          <input type="file" name="image"> <?php if(isset($error)){echo $error;}?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <br>
                                        <div class="row">
                                            <div class="col-md-12 text-center my-auto">

                                                <?php echo form_error("img_desc",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                                <input type="text" name="img_desc" placeholder="image description..." value="<?php
                                                                    if(isset($article['article_description'])){
                                                                        echo $article['article_description'];
                                                                        } 
                                                                        else{echo set_value('img_desc');} ?>" style="width:50%;">
                                            </div>
                                        </div>
                                
                                         
                                        <div class="row">
                                            <div class="col-md-12 text-center my-auto">

                                                <?php echo form_error("content",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>

                                                <textarea rows="20" cols="100" placeholder="content..." name="content"><?php 
                                                                    if(isset($article['article_content'])){
                                                                        echo $article['article_content'];
                                                                        } 
                                                                        else{echo set_value('content'); }?></textarea>
                                            </div>
                                        </div>
                                <br>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button name="editarticle">save article</button>
                                            </div>
                                        </div>
                                 <?php echo form_close(); ?>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h5><?php if(isset($upload_data)){ echo $upload_data;}?></h5>
                                    </div>
                                </div> 
                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>