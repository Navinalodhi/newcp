<?php loadView('dashboard/sidebar',["db" => $db])?>


				<div class="span9">
					<div class="content">
                        
						<div class="module">
							<div class="module-head">
								<h3>Manage Students</h3>
							</div>
							
							<div class="module-body ">
							<?php if(isset($_GET['msg'])){
                            ?>
                                <div class="alert alert-success"><?php echo $_GET['msg']?></div>
                                <?php
                           
                        }
                        ?>
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
											<th>Class</th>
											<th>Username</th>
											<th>Password</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($students as $student):?>
										    <tr>
										        <td><?php echo $student['student_id']?></td>
										        <td><img src="<?php echo assets('images/'.$student['student_image'])?>" width="32"/></td>
										        <td><?php echo $student['student_name']?></td>
										        <td><?php echo $student['student_class']?></td>
										        <td><?php echo $student['student_username']?></td>
										        <td><?php echo $student['student_password']?></td>
										        <td><a href="#" data-student-id ="<?php echo $student['student_id']?>" data-student-name ="<?php echo $student['student_name']?>" data-student-class ="<?php echo $student['student_class']?>" 
										        class="updatestudentBox">Edit</a></td>
										        <td><a href="<?php echo route('dashboard/students',array('a' => 'delete','id' => $student['student_id']),$student['student_id'])?>">Delete</a></td>
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
            
             <div class="control-group" style="display:none"> 
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
<div id="updatestudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header">
            
            <h4 class="modal-title">Student Details</h4>
        </div>
        <div class="modal-body">
            <form class="form-vertical" method="post" action="<?php echo route('dashboard/students')?>">
            
            <div class="control-group">
		        <div class="controls row-fluid">
		        <input type="hidden" name="studentId" id="studentId"/>
		        <label>Name</label>
                    <input type="text" name="studentName" id="studentName" required/>
                    <label>Class</label>
                    <input type="text" name="studentClass" id="studentClass" required/>
                </div>
            </div>
            
            <input type="submit" class="btn btn-success" name="saveStudent" value="Save Student">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
<script>
    $('.updatestudentBox').click(function(e){
        e.preventDefault();
        
        var id = $(this).data('student-id');
        var name = $(this).data('student-name');
       var studentclass = $(this).data('student-class');
        $('#studentId').val(id);
        $('#studentName').val(name);
        $('#studentClass').val(studentclass);
        $('#updatestudentModal').modal('show');
    })
</script>
	<?php loadView('dashboard/footer')?>