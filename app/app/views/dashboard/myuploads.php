<?php loadView('dashboard/sidebar',["db" => $db]) ?>


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>My Uploads</h3>
							</div>
							<div class="module-body">
							
							<?php
							    if(isset($_GET['msg'])) :?>
							    	<div class="alert alert-success"><?php echo $_GET['msg'];?></div>
							    <?php endif ?>
							    
								<p>Art works uploaded by you</p>

								<div class="stream-list">
									
									<?php
									if(count($articles) > 0) :
									foreach($articles as $article) :
									?>
									
									
									
									
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo assets('images/'.$article['student_image'])?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													<?php echo $article['student_name'];?>
													<small><?php echo date('d M, h:i',strtotime($article['article_insertdate']))?></small>
													<?php if($article['article_status'] == 0) : ?>
													<span class="label label-warning">Pending Approval</span>
													<?php endif ?>
												</h5>
												<div class="stream-text">
													 <?php echo $article['article_description']?>
                                                </div>
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
												<?php break; 
												
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
																<?php echo $comment['teacher_name']?>
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																<?php echo $comment['comment']?>
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<?php endforeach?>
											</div><!--/.stream-respond-->
										
											
											
										</div>
									</div><!--/.media .stream-->
									
                                    
                                    <?php endforeach; else : ?>
                                    <p align="center">You haven't uploaded any works yet!</p>
                                    <?php endif;?>
									
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php loadView('dashboard/footer')?>
