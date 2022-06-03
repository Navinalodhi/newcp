

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Student
            <small>Edit Table content of Student</small>
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
          <form name="studentadd" action="<?php echo site_url('avesteach_c/studentupdate');?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
          <input type="hidden" id="studentid" name="studentid" value="<?php echo $posts->student_id; ?>">
                      <label for="edit">Edit</label><br><br>
                       <div>
                  <label for="exampleInputstudentname">Student Name</label>
                  <input type="text" id="studentname" class="form-control" name="studentname" placeholder="Enter Student Name" value="<?php echo $posts->student_name; ?>">
            </div> 
            <div>
                  <label for="exampleInputaddress">Student Address</label><br>
                  <textarea id="studentaddress" name="studentaddress" rows="4" cols="50"><?php echo $posts->student_address; ?></textarea><br>
            </div>
            <div>
                 <label for="exampleInputteacherclass">Class</label>
                  <input type="text" id="studentclass" class="form-control" name="studentclass" placeholder="Enter Student Class" value="<?php echo $posts->student_class; ?>">
            </div>
            <br>
            <div>
                 <label for="exampleInputteacherschool">School</label>
                  <input type="text" id="studentschool" class="form-control" name="studentschool" placeholder="Enter Student School" value="<?php echo $posts->student_school; ?>">
            </div>
            <br>
            <div>
                  <label for="exampleInputstudentphone">Student Phone</label>
                  <input type="text" id="studentphone" class="form-control" name="studentphone" placeholder="Enter Student Phone" value="<?php echo $posts->student_phone; ?>">
            </div> 
            <br>
            <div>
                  <label for="exampleInputstudentemail">Student Email</label>
                  <input type="text" id="studentemail" class="form-control" name="studentemail" placeholder="Enter Student Email" value="<?php echo $posts->student_email; ?>">
            </div> 
            <br>
           <div>
                 <label for="exampleInputteacherusername">Username</label>
                  <input type="text" id="teacherusername" class="form-control" name="teacherusername" placeholder="Enter Student Username" value="<?php echo $posts->student_username; ?>" readonly>
            </div>
            <br>
           <div>
                 <label for="exampleInputteacherpassword">Password</label>
                  <input type="text" id="studentpassword" class="form-control" name="studentpassword" placeholder="Enter Student Password" value="<?php echo $posts->student_password; ?>" readonly>
            </div>
            <br>
            <div>
                 <label for="exampleInputproductstudentimage">Student Image</label>
                 <br><br>
                 <img src="<?php echo base_url("./upload/studentimage/".$posts->student_image);?>" />
                  <br><br>
                 <br>Select Image to upload:</br>
                 <input type="file" name="userfile" id="userfile">
            </div>
            <br>
            <div>
                  <label for="exampleInputstudentemail">Student Date of Birth</label>
                  <input type="date" id="studentdob" class="form-control" name="studentdob" placeholder="Enter Student Date of Birth" value="<?php echo $posts->student_dob; ?>">
            </div>
            <br>
            <div>
                  <label for="exampleInputstudentadmissionyear">Student Admission Year</label>
                  <input type="text" id="studentadmyear" class="form-control" name="studentadmyear" placeholder="Enter Student Admission Year" value="<?php echo $posts->student_admissionyear; ?>">
            </div>
            <br>
            <br>
    <button class="btn btn-success " id="submit" name="submit" type="submit" class="btn btn-default" value="submit">Save</button>
       <button class="btn btn-success " type="button" value="back" name="back" onclick="window.location='<?php echo site_url('avesteach_c/tback')?>'">Back</button>      
             </form>
           
            <?php
    }
    ?>
   
</section>
</div>      
</div>
<div>

  <script type="text/javascript"  src="/viewjs/studentedit.js"></script>
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

