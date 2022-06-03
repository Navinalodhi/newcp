          
            <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php
            
if($i==2)
{	
	?>
	<p class="form-group"> Your password has changed succesfully</p>

	<?php
	
}
if($i==1)
	{?>
		<p class="form-group"> Your Current Password Entered is Wrong</p>
	<?php }
  if($i==3)
  {?>
    <p class="form-group"> Your New Password Entered is Wrong</p>
  <?php }
?>


              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Change Password</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form name="password" action="<?php echo site_url('avesadmin_c/passwordchk');?>"  method="post" enctype="multipart/form-data">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputpassword" class="col-sm-2 control-label">Old Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password"value="<?php echo set_value(''); ?>"><br>
                        <span style="color:#ff8080; font-size:12px;"><?php echo form_error('password'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">New Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="password" value="<?php echo set_value('npassword'); ?>"><br>
                      <span style="color:#ff8080; font-size:12px;"><?php echo form_error('newpassword'); ?>
                      </div>
                      <label for="inputPassword" class="col-sm-2 control-label">Confirm Password</label><br>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="password" value="<?php echo set_value('cpassword'); ?>">
                      <span style="color:#ff8080; font-size:12px;"><?php echo form_error('confirmpassword'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        </div>
                      </div>
                    </div>
                    
                  
                  <div class="box-footer">
                     <button class="btn btn-success " type="button" value="back" name="back" onclick="window.location='<?php echo site_url('avesadmin_c/dashboard1')?>'">Back</button>
                    <button class="btn  btn-success "id="button_submit" name="button_submit" type="submit" class="btn btn-default" value="submit">Change</button>
                  </div><!-- /.box-footer -->
                  </div><!-- /.box-body -->
                </form>

</div>
</section>
