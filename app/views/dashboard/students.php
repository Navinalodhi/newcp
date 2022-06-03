<?php loadView('dashboard/sidebar')?>


				<div class="span9">
					<div class="content">
                        <?php if(isset($_GET['msg'])){
                            if(isset($_GET['success'])){
                                ?>
                                <div class="alert alert-success"><?php echo $_GET['msg']?></div>
                                <?php
                            }
                        }
                        ?>
						<div class="module">
							<div class="module-head">
								<h3>Manage Students</h3>
							</div>
							
							<div class="module-body ">
							    <div style="margin-bottom:20px">
							        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addStudentModal">Add Student</a>
							    </div>
							      
							      <hr />
							 
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Student ID</th>
											<th>Image</th>
											<th>Name</th>
											<th>Username</th>
											<th>Password</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($students as $student):?>
										    <tr>
										        <td><?php echo $student['student_id']?></td>
										        <td><img src="<?php echo assets('uploads/'.$student['student_image'])?>" width="32"/></td>
										        <td><?php echo $student['student_name']?></td>
										        <td><?php echo $student['student_username']?></td>
										        <td><?php echo $student['student_password']?></td>
										        <td></td>
										        <td></td>
										    </tr>
										<?php endforeach ?>
									</tbody>
									
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	
	<!-- Modal -->
<div id="addStudentModal" class="modal hide fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Student</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal row-fluid" method="post" action="<?php echo route('dashboard/students')?>">
            
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    
                    <input class="span8" type="text" name="name" placeholder="Student's Name" required>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    <input class="span8" type="text" name="class" placeholder="Student's Class" required>
                </div>
                
            </div>
            
             <div class="control-group"> 
                <div class="controls">
                    <input type="file" name="userfile" id="userfile" >
                </div>
                
            </div>
                
            
            
            <input type="submit" class="btn btn-success" name="addStudent" value="Save">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

	<?php loadView('dashboard/footer')?>