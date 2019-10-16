<?php include_once('admin_panel_menu.php')?>
<div class="col-md-9" id="allpolls1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ALL POLLS</h2>
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
                                        <th scope="col">question</th>
                                        <th scope="col">option 1</th>
                                        <th scope="col">option 2</th>
                                        <th scope="col">option 3</th>
                                        <th scope="col">slug url</th>
                                        <th scope="col">live date</th>
                                        <th scope="col">status</th>
                                        <th scope="col">responses</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($datas as $data):?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $data['poll_category'];?></td>
                                        <td><?php echo $data['poll_question'];?></td>
                                        <td><?php echo $data['poll_option1'];?></td>
                                        <td><?php echo $data['poll_option2'];?></td>
                                        <td><?php echo $data['poll_option3'];?></td>
                                        <td><?php echo $data['poll_articleurl'];?></td>
                                        <td><?php echo $data['live_date'];?></td>
                                        <td><a href="<?php echo site_url(); ?>/admin/poll_status/<?php echo $data['poll_id'];?>" style ='color:red'><?php echo $data['poll_status'];?></a></td>
                                        <td><?php echo $data['poll_response_no'];?></td>
                                        <td><a href="<?php echo site_url(); ?>/admin/delete_poll/<?php echo $data['poll_id'];?>" style ='color:red'>delete</a></td>
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