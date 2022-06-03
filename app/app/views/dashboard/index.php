<?php loadView('dashboard/sidebar',["db" => $db]) ?>


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Activity Feed</h3>
							</div>
							<div class="module-body">
							
							    <h3>Welcome, <?php echo $name?></h3>
							    <?php
							    if(isset($_GET['msg'])) :?>
							    	<div class="alert alert-success"><?php echo $_GET['msg'];?></div>
							    <?php endif ?>
								<?php if($type == 'teacher') :?>
								<p>Updates from your students will be shown here</p>
								<?php else :?>
								
								<?php endif?>

								<div class="stream-list">
									
									<?php
									if(count($articles) > 0 ):
									foreach($articles as $article) :
									?>
									
									
									
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo assets('images/user.png')?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													<?php echo $article['student_name'];?>
													<small><?php echo date('d M, h:i',strtotime($article['article_insertdate']));?></small>
												</h5>
												<div class="stream-text">
													 <?php echo $article['article_description']?>
                                                </div>
                                                <a href="<?php echo route('dashboard/index',array('a' => 'deletearticle','id' => $article['article_id']),$article['article_id'])?>" onclick="return confirm('Are you sure want to delete this ?')"><i class="fa fa-times pull-right fa-icon-close-btn" aria-hidden="true"></i></a>
                                                <?php switch($article['article_filetype']) :
									
									case 'image':
									?>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="../../upload/articleimage/<?php echo $article['article_file'];?>" />
													</div>
												</div>
												<?php break; 
									
									case 'video':
									?>
										<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        <video width="320" height="240" controls>
  <source src="../../upload/articlevideo/<?php echo $article['article_file'];?>" type="video/mp4">
Your browser does not support the video tag.
</video>

                                                       
                                                        
                                                        
													</div>
												</div>
												<?php 
												
									break;
									
									case 'pdf':
									?>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<a href="https://colorpencil.me/upload/articlepdf/<?php echo $article['article_file']?>" target="_blank">
														<img src="<?php echo assets('images/pdficon.png')?>" />
														</a>
													</div>
												</div>
												<?php break; 
												 
                                    endswitch;
                                    ?>
												
											</div><!--/.stream-headline-->

											<div class="stream-options">
												
												<a href="#" data-article-id ="<?php echo $article['article_id']?>" class="openCommentBox btn btn-small">
													<i class="icon-comment shaded"></i>
													Comment
												</a>
												<?php
												$status=$article['article_status'];
											    if($status==1)
											    {
											        ?>
											        <a href="<?php echo route('dashboard/index',array('a'=>'unpublish','id'=>$article['article_id']))?>"  class="btn btn-normal">
													
													UnPublish
													
												</a>
												<?php
											    }
											    else
											    {
											        ?>
											        <a href="<?php echo route('dashboard/index',array('a'=>'publish','id'=>$article['article_id']))?>"  class="btn btn-normal">
													
													Publish
													
												</a>
											        <?php
											        
											    }
												?>
												
											</div>
											<div class="stream-respond">
                                            <?php $comments = getComments($article['article_id'],$db);
                                        foreach($comments as $comment) :
                                        ?>
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo assets('images/user.png')?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																<?php echo $comment['teacher_name'];
																$date=date('d M, Y',strtotime($comment['created_at']))?>
																<small><?php echo $date;?></small>
															</h5>
															<div class="stream-text">
																<?php echo $comment['comment']?>
															</div>
														</div><!--/.stream-headline-->
														<a href="<?php echo route('dashboard/index',array('a' => 'delete','id' => $comment['id']),$comment['id'])?>"><i class="fa fa-times pull-right fa-icon-close-btn" aria-hidden="true"></i></a>
														<a href="#" data-article-id ="<?php echo $comment['id']?>" data-article-comment ="<?php echo $comment['comment']?>" class="updateCommentBox"><i class="fa fa-pencil pull-right fa-icon-edit-btn" aria-hidden="true"></i></a>
												</div>
												</div><!--/.media .stream-->
												<?php endforeach?>
											</div><!--/.stream-respond-->
										</div>
										
									</div><!--/.media .stream-->
									
                                    
                                    <?php endforeach; else :  ?>
                                  
                                    <?php endif?>
									
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	
	<!-- Modal -->
<div id="commentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header">
            
            <h4 class="modal-title">Comment</h4>
        </div>
        <div class="modal-body">
            <form class="form-vertical" method="post" action="<?php echo route('dashboard/index')?>">
            
            <div class="control-group">
		        <div class="controls row-fluid">
                    <textarea class="form-control"  style="min-width: 85%" rows="3" width="100%" name="comment" placeholder="Type your comment"></textarea>
                    <input type="hidden" name="articleId" id="articleId"/>
                </div>
            </div>
            
            <input type="submit" class="btn btn-success" name="publishComment" value="Publish Comment">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
<div id="updatecommentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header">
            
            <h4 class="modal-title">Comment</h4>
        </div>
        <div class="modal-body">
            <form class="form-vertical" method="post" action="<?php echo route('dashboard/index')?>">
            
            <div class="control-group">
		        <div class="controls row-fluid">
		        <input type="hidden" name="commentId" id="commentId"/>
                    <textarea class="form-control"  style="min-width: 85%" rows="3" width="100%" name="comment" id="articleComment"></textarea>
                </div>
            </div>
            
            <input type="submit" class="btn btn-success" name="saveComment" value="Save Comment">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
<script>
    $('.openCommentBox').click(function(e){
        e.preventDefault();
        
        var id = $(this).data('article-id');
        
        $('#articleId').val(id);
        $('#commentModal').modal('show');
    })
</script>
<script>
    $('.updateCommentBox').click(function(e){
        e.preventDefault();
        
        var id = $(this).data('article-id');
        var comment = $(this).data('article-comment');
   
        $('#commentId').val(id);
        $('#articleComment').val(comment);
        $('#updatecommentModal').modal('show');
    })
</script>

	<?php loadView('dashboard/footer')?>
