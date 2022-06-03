
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
 
  
  
  <div class="tab-content">
   
    
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
                        <th>Teacher Name</th>
                        <th>Admission Year</th>
              
                         
                        </tr>
                    </thead>
                    <tbody>
						
                      <tr>
                      <?php $tid=1;
                      
                      foreach($post as $posts){
                        $studentid=$posts->student_id;
                        $teacherid=$posts->student_teacherid;
                        $result=$this->avesadmin_m->showcontent('teacher_db',$teacherid);
                        foreach($result as $results)
                        {
                          $teachername=$results->teacher_name;
                        }
                      
                        ?>
						  <tr>
		 <td><?php echo $tid;?></td>
         <td><?php echo $posts->student_name;?></td>
          <td><?php echo $posts->student_class;?></td>
          <td><?php echo $teachername;?></td>
          <td><?php echo $posts->student_admissionyear;?></td>
    

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



