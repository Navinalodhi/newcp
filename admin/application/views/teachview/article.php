
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Article
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View</a></li>
            <li class="active">Article</li>
          </ol>
        </section>
        
<div class="container">
 
  
  
  <div class="tab-content">
   
    
    <div id="menu2" class="tab-pane fade in active">
    
      <h3>View Articles</h3>
       <div class="col-md-11">
      <div class="box">
				  <div class="box-header">
                  <h3 class="box-title">Article Contents</h3>
                </div><!-- /.box-header -->
               
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Student Name</th>
                        <th>Description</th>
              
                         
                        </tr>
                    </thead>
                    <tbody>
						
                      <tr>
                      <?php $tid=1;
                      
                      foreach($post as $posts){
                        $articleid=$posts->article_id;
                        $studentid=$posts->article_studentid;
                        $result=$this->avesteach_m->showcontent('student_db',$studentid);
                        foreach($result as $results)
                        {
                          $studentname=$results->student_name;
                        }
                      
                        ?>
						  <tr>
		 <td><?php echo $tid;?></td>
         <td><?php echo $posts->article_name;?></td>
          <td><?php echo $posts->article_studentclass;?></td>
          <td><?php echo $studentname;?></td>
          <td><?php echo $posts->article_description;?></td>
    

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



