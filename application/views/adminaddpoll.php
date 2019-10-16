<?php include_once('admin_panel_menu.php');?>
<div class="col-md-9" id="addpoll1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ADD POLL</h2>
                            </div>
                        </div>
                            <br><br>
                           <?php echo form_open('admin/form_submit_upload_poll'); ?>
                                <div class="row">
                                    <?php echo form_error("pollurl",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                    <div class="col-md-12 text-center">
                                        <input name="pollurl" type="text" placeholder="article url..." value="<?php echo set_value('pollurl'); ?>">
                                    </div>
                                </div>
                                    <br>
                                <div class="row">
                                    <?php echo form_error("pollquestion",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                    <div class="col-md-12 text-center">
                                        <input name="pollquestion" type="text" placeholder="poll question..." maxlength="200" value="<?php echo set_value('pollquestion'); ?>">
                                    </div>
                                </div>
                                    <br>
                
                                
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <?php echo form_error("pollopt1",'<h6 class="my-auto error">','</h6>'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <input name="pollopt1" type="text" placeholder="1st option" maxlength="25" value="<?php echo set_value('pollopt1'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <?php echo form_error("pollopt2",'<h6 class="my-auto error">','</h6>'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <input name="pollopt2" type="text" placeholder="2nd option" maxlength="25" value="<?php echo set_value('pollopt2'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <?php echo form_error("pollopt3",'<h6 class="my-auto error">','</h6>'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                        <input name="pollopt3" type="text" placeholder="3rd option" maxlength="25" value="<?php echo set_value('pollopt3'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                     <br>
                                     <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button name="uploadpoll">upload poll</button>
                                    </div>
                                    </div>
                                <br>
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