<?php loadView('dashboard/sidebar',["db" => $db]) ?>


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>My Class Group Activity</h3>
							</div>
							<div class="module-body">
							<?php if(isset($_GET['success'])){
                            ?>
                                <div class="alert alert-success"><?php echo $_GET['msg']?></div>
                                <?php
                           
                        }
                        ?>
                        <?php if(isset($_GET['error'])){
                            ?>
                                <div class="alert alert-danger"><?php echo $_GET['msg']?></div>
                                <?php
                           
                        }
                        ?>
								<p>Updates from your class group will be shown here</p>

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
													<a href="https://colorpencil.me/index.php/Avesacademy_c/portfolio/<?php echo  $article['student_id']?>"><?php echo $article['student_name'];?></a>
													<small><?php echo date('d M, h:i',strtotime($article['article_insertdate']))?></small>
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

											<div class="stream-options">
												
												
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
