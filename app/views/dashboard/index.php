<?php loadView('dashboard/sidebar') ?>


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Activity Feed</h3>
							</div>
							<div class="module-body">
							    <h3>Welcome, <?php echo $name?></h3>
								<?php if($type == 'teacher') :?>
								<p>Updates from your students will be shown here</p>
								<?php else :?>
								<p>You will all the public posts here</p>
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
													<small><?php echo date('d M, h:i',$article['article_insertdate']);?></small>
												</h5>
												<div class="stream-text">
													 <?php echo $article['article_body']?>
                                                </div>
                                                <?php switch($article['article_filetype']) :
									
									case 'image':
									?>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="<?php echo assets('uploads/'.$article['article_file'])?>" />
													</div>
												</div>
												<?php break; 
									
									case 'video':
									?>
										<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        
                                                        <iframe src="<?php echo $article['article_file']?>" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                        
                                                        
													</div>
												</div>
												<?php break; 
                                    endswitch;
                                    ?>
												
											</div><!--/.stream-headline-->

											<div class="stream-options">
												
												<a href="#" data-id ="<?php echo $article['article_id']?>" class="openCommentBox btn btn-small">
													<i class="icon-comment shaded"></i>
													Comment
												</a>
												<?php
												$status=$article['article_status'];
											    if($status==0)
											    {
											        ?>
											        <a href="#" data-id ="<?php echo $article['article_id']?>"><button class="btn btn-normal">
													
													UnPublish
													</button>
												</a>
												<?php
											    }
											    else
											    {
											        ?>
											        <a href="#" data-id ="<?php echo $article['article_id']?>"><button class="btn btn-normal">
													
													Publish
													</button>
												</a>
											        <?php
											        
											    }
												?>
												
											</div>
										</div>
									</div><!--/.media .stream-->
									
                                    
                                    <?php endforeach; else :  ?>
                                    <p align="center"> No art works to show.</p>
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
<script>
    $('.openCommentBox').click(function(e){
        e.preventDefault();
        $('#commentModal').modal('show');
    })
</script>

	<?php loadView('dashboard/footer')?>