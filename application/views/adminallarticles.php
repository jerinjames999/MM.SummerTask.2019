<?php include_once('admin_panel_menu.php')?>

<div class="col-md-9" id="allarticles1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ALL ARTICLES</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <?php echo form_open('admin/mm');?>
                                    <select name="category">
                                        <option value="all">ALL CATEGORIES</option>
                                        <?php foreach($categories as $category): ?>
                                        <option value="<?php echo $category['category_value']; ?>"><?php echo $category['category_hname']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                               <?php echo form_close();?>
                            </div>
                            <div class="col-md-6 text-center">
                                <?php echo form_open('admin/mm');?>
                                      <input type="text" name="url" placeholder="article url">
                                <?php echo form_close();?>
                            </div>
                        </div>
                            <br>
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
                                        <th scope="col">last live</th>
                                        <th scope="col">status</th>
                                        <th scope="col">display</th>
                                        <th scope="col">delete article</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($datas as $data):?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $data['article_category'];?></td>
                                        <td><?php echo $data['article_title'];?></td>
                                        <td><?php echo $data['article_author'];?></td>
                                        <td><?php echo $data['slug_url'];?></td>
                                        <td><?php echo $data['live_date'];?></td>
                                        <td><a href="<?php echo site_url(); ?>/admin/article_status/<?php echo $data['article_id'];?>" style ='color:red'><?php echo $data['article_status'];?></a></td>
                                        <td><a href="<?php echo site_url(); ?>/main/view/<?php echo $data['slug_url'];?>" style ='color:blue'>display</a></td>
                                        <td><a href="<?php echo site_url(); ?>/admin/delete_article/<?php echo $data['article_id'];?>" style ='color:red'>delete</a></td>
                                    </tr>
                                       
                                    <?php $count++; endforeach ?>
                                </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>