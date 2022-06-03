<?php loadView('dashboard/sidebar') ?>


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>My Class Group Activity</h3>
							</div>
							<div class="module-body">
								<p>Updates from your class group will be shown here</p>

								<div class="stream-list">
									
									<?php
									if(count($articles) > 0) :
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
													<small><?php echo date('d M, h:i',$article['article_insertdate'])?></small>
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
												
												<a href="#" class="btn btn-small">
													<i class="icon-comment shaded"></i>
													Comment
												</a>
												
											</div>
										</div>
									</div><!--/.media .stream-->
									
                                    
                                    <?php endforeach; else : ?>
                                    <p align="center">None of your classmates have posted yet</p>
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