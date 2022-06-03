

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Teacher
            <small>Edit Table content of Teacher</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>
        <section class="content">
<?php 
foreach ($post as $posts){ 

  ?>
  
          <!-- Default box -->
          <section class="content">
           <div class="box box-primary">
                <div class="box-header">
            <div class="box-body">
              <div class="form-group">
          <br>
         <?php 
         if($i==1)
         {echo $this->session->flashdata('success_msg');
           }?>
           <br>
          <form name="teacheradd" action="<?php echo site_url('avesadmin_c/teacherupdate');?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
          <input type="hidden" id="teacherid" name="teacherid" value="<?php echo $posts->teacher_id; ?>">
                      <label for="edit">Edit</label><br><br>
                       <div>
                  <label for="exampleInputteachername">Teacher Name</label>
                  <input type="text" id="teachername" class="form-control" name="teachername" placeholder="Enter Teacher Name" value="<?php echo 
                  $posts->teacher_name; ?>">
            </div> 
            <br>
            <div>
                 <label for="exampleInputteacherclass">Class</label>
                  <input type="text" id="teacherclass" class="form-control" name="teacherclass" placeholder="Enter Teacher Class" value="<?php echo $posts->teacher_class; ?>">
            </div>
            <br>
            <div>
                 <label for="exampleInputschoolname">School Name</label>
                  <input type="text" id="teacherschool" class="form-control" name="teacherschool" placeholder="Enter Teacher Class" 
                  value="<?php echo $posts->teacher_school; ?>">
            </div>
            <br>
           <div>
                 <label for="exampleInputteacherusername">Username</label>
                  <input type="text" id="teacherusername" class="form-control" name="teacherusername" placeholder="Enter Teacher Username" value="<?php echo $posts->teacher_username; ?>" readonly>
            </div>
            <br>
           <div>
                 <label for="exampleInputteacherpassword">Password</label>
                  <input type="text" id="teacherpassword" class="form-control" name="teacherpassword" placeholder="Enter Teacher Password" value="<?php echo $posts->teacher_password; ?>" readonly>
            </div>
            <br>
            
    <button class="btn btn-success " id="submit" name="submit" type="submit" class="btn btn-default" value="submit">Save</button>
       <button class="btn btn-success " type="button" value="back" name="back" onclick="window.location='<?php echo site_url('avesadmin_c/tback')?>'">Back</button>      
             </form>
           
            <?php
    }
    ?>
   
</section>
</div>      
</div>
<div>

  <script type="text/javascript"  src="/viewjs/teacher.js"></script>
<script src="<?php echo base_url(); ?>/jquery.js"></script>
<script>
$('.prompt-for-delete').on('click',function(e){
    e.preventDefault();
    var deletelink=$(this).attr('href');
    var answer=confirm('Do you want to delete?');
    if(answer){
     window.location=deletelink;
    }
    else{
         e.preventDefault();
    }
});
</script>
        

<style type="text/css">
  .error_message
  {
    color:#FF0000;
  }
</style>
</body>

