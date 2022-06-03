

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Category
            <small>Edit Table content of Category</small>
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
          <form name="categoryadd" action="<?php echo site_url('avesadmin_c/categoryupdate');?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
          <input type="hidden" id="categoryid" name="categoryid" value="<?php echo $posts->category_id; ?>">
                      <label for="edit">Edit</label><br><br>
                       <div>
                  <label for="exampleInputcategoryname">Category Name</label>
                  <input type="text" id="categoryname" class="form-control" name="categoryname" placeholder="Enter Category Name" value="<?php echo 
                  $posts->category_name; ?>">
            </div> 
            <br>
            <div>
                 <label for="exampleInputcategoryclass">Description</label>
                  <input type="text" id="categorydescription" class="form-control" name="categorydescription" placeholder="Enter Category Description" value="<?php echo $posts->category_description; ?>">
            </div>
            <br>
          
            
    <button class="btn btn-success " id="submit" name="submit" type="submit" class="btn btn-default" value="submit">Save</button>
       <button class="btn btn-success " type="button" value="back" name="back" onclick="window.location='<?php echo site_url('avesadmin_c/cback')?>'">Back</button>      
             </form>
           
            <?php
    }
    ?>
   
</section>
</div>      
</div>
<div>

  <script type="text/javascript"  src="/viewjs/category.js"></script>
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

