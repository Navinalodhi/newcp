<div id="cardchange">
					<?php
					$postsize=count($post);
					if($postsize===0)
					{
						?>
						<div class="row">
        					<div class="col-xs-12 text-center">            
            					<div id="noresults"><h4><strong style="color:white;">No Search Results</strong></h4></div>
       					 	</div>
    					</div>
						<?php
					}
				else
				{
					for($i=0;$i<$postsize;$i++)
			{
				?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 single-article-box">
							<!--<div class="single-article-image">
								<img src="assets/images/article/single-article1.jpg" alt="top-category" />
								<div class="single-article-image-overlay">
								</div>
								<div class="share"></div>
							</div>-->
							<a href="<?php echo base_url('/index.php/Avesacademy_c/articledetail')."/".$post[$i]['article_id'];?>"><div class="category-card">
								<div class="category-image">
										<?php
										
											if($post[$i]['article_filetype']=='image')
											{
												
												?>
											<img src="<?php echo base_url("/upload/articleimage/".$post[$i]['article_file']);?>" alt="top-category" />
											<?php
											}
											else
											if($post[$i]['article_filetype']=='video')
											{
												
											?>
											<img src="<?php echo base_url("/upload/articleimage/videodefault.jpg");?>" alt="top-category" />
											<?php
											}
											else
											{
											?>
											<img src="<?php echo base_url("/upload/articleimage/pdfdefault.png");?>" alt="top-category" />
											<?php
											}
											?>
									<div class="category-image-overlay">
									</div>
									<!--<div class="popularity">
										<img src="assets/images/icons/like-dark.png" alt="thumbs-up" />77
									</div>-->
								</div>
								<div class="category-details">
									<div class="category-name">
									<?php echo $post[$i]['student_name']?>
									</div>
									<div class="like-btn">
										
										<img class="likeBtn" data-article-id="<?php echo $post[$i]['article_id'] ?>" src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="share" />
										<div class="like-count"><?php echo $post[$i]['article_like'];?></div>
									</div>
									
									
								</div>			
							</div></a>
							<!--
								<div class="single-article-details">
									<div class="profile-img">
										
									</div>
									
									
									<div class="share-btn">
										<img src="assets/images/icons/share-lite.png" alt="share" />
									</div>
								</div>
								!-->
						</div>
					</div>
					<?php
				}

				}?>
			
				</div>