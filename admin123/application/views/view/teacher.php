
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Teacher
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View</a></li>
            <li class="active">Teacher</li>
          </ol>
        </section>
        
<div class="container">
 
  <ul    style="margin-top: 20px;" class="nav nav-pills">
   
   <li style="background: #fff;border-radius: 3px"><a data-toggle="pill" href="#menu1">New Teacher</a></li>
    <li class="active"><a data-toggle="pill" href="#menu2">Teachers</a></li>
   
  </ul>
  
  <div class="tab-content">
   
    <div id="menu1" class="tab-pane fade">
      <h3>New Teacher</h3>
     
      
            <!-- left column -->
 <div class="col-md-8">
 <!-- general form elements -->
 <div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title">New Teacher</h3>
</div><!-- /.box-header -->
<!-- form start -->
 <div class="box-body">
	<div class="form-group">



<form name="teacheradd" action="<?php echo site_url('avesadmin_c/teacherinsert');?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

             <div>
                  <label for="exampleInputteachername">Teacher Name</label>
                  <input type="text" id="teachername" class="form-control" name="teachername" placeholder="Enter Teacher Name" value="">
            </div> 
            <div>
                  <label for="exampleInputteachername">Teacher Class</label>
                  <input type="text" id="teacherclass" class="form-control" name="teacherclass" placeholder="Enter Teacher Class" value="">
            </div>
            <div>
                  <label for="exampleInputschoolname">School Name</label>
                  <input type="text" id="teacherschool" class="form-control" name="teacherschool" placeholder="Enter School Name" value="">
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
    
      <h3>View Teachers</h3>
       <div class="col-md-11">
      <div class="box">
				  <div class="box-header">
                  <h3 class="box-title">Teacher Contents</h3>
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
                        <th>Status</th>
                         
                        </tr>
                    </thead>
                    <tbody>
						
                      <tr>
                      <?php $tid=1;
                      
                      foreach($post as $posts){
                        $teacherid=$posts->teacher_id;
                      $salt="+deleteidteacher";
                      $str=$teacherid.$salt;
                      $teacherid = do_hash($str);
                        ?>
						  <tr>
		 <td><?php echo $tid;?></td>
         <td><?php echo $posts->teacher_name;?></td>
          <td><?php echo $posts->teacher_class;?></td>
          <td><?php echo $posts->teacher_username;?></td>
          <td><?php echo $posts->teacher_password;?></td>
         <td><a href ="<?php echo site_url('avesadmin_c/teacheredit')."/".$posts->teacher_id;?>">Edit</a></td>
      <div>
           <?php
           $status=$posts->teacher_status;
           if($status==1)
           {

           ?>
      <td><a href="<?php echo site_url('avesadmin_c/teacheractive')."/".$posts->teacher_id."/".$teacherid;?>"><button class="btn btn-success " type="button" value="Active" name="fname">Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
        </div>
         <?php
   }
   
         else
         {
      ?>
      <div>
         <td><a href="<?php echo site_url('avesadmin_c/teacherdeactive')."/".$posts->teacher_id."/".$teacherid;?>"><button class="btn  btn-danger " type="button" value="Deactive" name="f1name">Deactive</button></a>
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
 <script type="text/javascript"  src="/viewjs/teacher.js"></script>
	 
	
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



