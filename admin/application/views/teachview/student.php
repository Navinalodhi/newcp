
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View</a></li>
            <li class="active">Student</li>
          </ol>
        </section>
        
<div class="container">
 
  <ul    style="margin-top: 20px;" class="nav nav-pills">
   
   <li style="background: #fff;border-radius: 3px"><a data-toggle="pill" href="#menu1">New Student</a></li>
    <li class="active"><a data-toggle="pill" href="#menu2">Students</a></li>
   
  </ul>
  
  <div class="tab-content">
   
    <div id="menu1" class="tab-pane fade">
      <h3>New Student</h3>
     
      
            <!-- left column -->
 <div class="col-md-8">
 <!-- general form elements -->
 <div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title">New Student</h3>
</div><!-- /.box-header -->
<!-- form start -->
 <div class="box-body">
	<div class="form-group">



<form name="studentadd" action="<?php echo site_url('avesteach_c/studentinsert');?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

             <div>
                  <label for="exampleInputstudentname">Student Name</label>
                  <input type="text" id="studentname" class="form-control" name="studentname" placeholder="Enter Student Name" value="">
            </div>
            
            <div>
                  <label for="exampleInputaddress">Student Address</label><br>
                  <textarea id="studentaddress" name="studentaddress" rows="4" cols="50"></textarea><br>
            </div>
            
            <div>
                  <label for="exampleInputstudentImage">Student Image</label>
                  <br>Select Image to upload:</br>
                 <input type="file" name="userfile" id="userfile">
            </div> 
            <div>
                  <label for="exampleInputstudentphone">Student Phone</label>
                  <input type="text" id="studentphone" class="form-control" name="studentphone" placeholder="Enter Student Phone" value="">
            </div>
            <div>
                  <label for="exampleInputstudentemail">Student Email</label>
                  <input type="text" id="studentemail" class="form-control" name="studentemail" placeholder="Enter Student Email" value="">
            </div>
            <div>
                  <label for="exampleInputstudentemail">Student Date of Birth</label>
                  <input type="date" id="studentdob" class="form-control" name="studentdob" placeholder="Enter Student Date of Birth" value="">
            </div>
            <div>
                  <label for="exampleInputstudentadmissionyear">Student Admission Year</label>
                  <input type="text" id="studentadmyear" class="form-control" name="studentadmyear" placeholder="Enter Student Admission Year" value="">
            </div>
            <div>
             <br>
            <button class="btn btn-success" id="submit" name="submit" type="submit" class="btn btn-default" value="submit">ADD</button>
            </div>
    
             </form>
          
             </div>
             </div>
 
                
                 </div><!-- /.col -->
                 </div><!-- /.box-body -->
              </div><!-- /.box -->
    <div id="menu2" class="tab-pane fade in active">
    
      <h3>View Students</h3>
       <div class="col-md-11">
      <div class="box">
				  <div class="box-header">
                  <h3 class="box-title">Student Contents</h3>
                </div><!-- /.box-header -->
               
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Status</th>
                         
                        </tr>
                    </thead>
                    <tbody>
						
                      <tr>
                      <?php $tid=1;
                      
                      foreach($post as $posts){
                        $studentid=$posts->student_id;
                      $salt="+deleteidstudent";
                      $str=$studentid.$salt;
                      $studentid = do_hash($str);
                        ?>
						  <tr>
		 <td><?php echo $tid;?></td>
         <td><?php echo $posts->student_name;?></td>
          <td><?php echo $posts->student_class;?></td>
          <td><?php echo $posts->student_username;?></td>
          <td><?php echo $posts->student_password;?></td>
         <td><a href ="<?php echo site_url('avesteach_c/studentedit')."/".$posts->student_id;?>">Edit</a></td>
         <td><a id="delete" class="prompt-for-delete" href ="<?php echo site_url('avesteach_c/studentdelete')."/".$posts->student_id."/".$studentid;?>">Delete</a></td>
      <div>
           <?php
           $status=$posts->student_status;
           if($status==1)
           {

           ?>
      <td><a href="<?php echo site_url('avesteach_c/studentactive')."/".$posts->student_id."/".$studentid;?>"><button class="btn btn-success " type="button" value="Active" name="fname">Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
        </div>
         <?php
   }
   
         else
         {
      ?>
      <div>
         <td><a href="<?php echo site_url('avesteach_c/studentdeactive')."/".$posts->student_id."/".$studentid;?>"><button class="btn  btn-danger " type="button" value="Deactive" name="f1name">Deactive</button></a>
</div>
<?php
}
?>
</td>
                    </tr>
                    <?php
                    $tid++;
				}
				?>
				
                     
                    </tbody>
                    
                  </table>
                  </div></div>
    </div>
    
  </div>
</div>
</div>
</div>	
 <script type="text/javascript"  src="/viewjs/student.js"></script>
	 
	
        <script src="<?php echo base_url(); ?>jquery.js"></script>
        <script>
function myFunction() {
    $("p").hide();
}
$(document).ready(function(){
    
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
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
<script type="text/javascript">
function ChangeUrl(title, url) {
    if (typeof (history.pushState) != "undefined") {
        var obj = { Title: title, Url: url };
        history.pushState(obj, obj.Title, obj.Url);
    } else {
        alert("Browser does not support HTML5.");
    }
}
</script>
<style type="text/css">
  .error_message
  {
    color:#FF0000;
  }
</style>



