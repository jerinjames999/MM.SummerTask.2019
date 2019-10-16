<?php include_once('admin_panel_menu.php')?>
<div class="col-md-9" id="addcategory1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD CATEGORY</h2>
                            </div>
                        </div>
                        <br><br><br>
            <?php echo form_open('admin/form_submit_add_category'); ?>
                        <div class="row">
                            <div class="col-md-6 text-center ">
                                <?php echo form_error("category_name",'<h6 class="my-auto error">','</h6>'); ?>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center ">
                                
                                Category name : <input type="text" name="category_name" maxlength="20" placeholder="category" value="<?php echo set_value('category_name'); ?>">
                            </div>
                            <div class="col-md-6 text-center">
                                
                                New position : <select name="category">
                                    <option value="<?php echo $max_category_order+1; ?>">at end</option>
                                    <option value="1">at begining</option>
                                
                                    <?php foreach($categories as $category):?>
                                    <option value="<?php echo $category['category_order']+1; ?>">after <?php echo $category['category_hname'] ?></option>
                                    <?php endforeach?>
                                </select> 
                            </div>
                        </div>
                            <br><br>
                        <div class="row">
                            <div class="col-md-12 text-center">
                             <input type="submit" name="submit_category" value="ADD CATEGORY"> 
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
    </body>
</html>