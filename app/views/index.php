<!--
	Project Name       :	 Article website
	Project Done by    :     Team Cloudfoyo
	Framework OR Tools :     Bootstrap
	Design & UI/UX     :     Jayakrishnan T N
	Backend Developer  :	 Karthik S K
	Support Head       :     Anand Nair
--> 
<!DOCTYPE HTML>
<html lang="en">
	<?php loadView('header',array('page'=>$page)) ?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-slider" >
					<ul class="rslides" id="rslides">
					  <li><img src="<?php echo assets('images/slider/1.jpg')?>" alt=""></li>
					  <li><img src="<?php echo assets('assets/images/slider/2.jpg')?>" alt=""></li>
					  <li><img src="<?php echo assets('assets/images/slider/3.jpg')?>" alt=""></li>
					  <li><img src="<?php echo assets('assets/images/slider/4.jpg')?>" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-article">
					<h2>Categories</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="<?php echo assets('images/article/article1.jpg')?>" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Category 1
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									498 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="<?php echo assets('images/article/article2.jpg')?>" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Category 2
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									36 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="<?php echo assets('images/article/article3.jpg')?>" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Category 3
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									314 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="<?php echo assets('images/article/article4.jpg')?>" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Category 4
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									107 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-categories" >
					<h2>Articles</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category1.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									See My shadow
									</div>
									<div class="category-rating">
									774 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Ajay Devadas
									</div>
									<div class="article-category">
										<div class="rounded-box">
											Drama
										</div>
										<div class="rounded-box">
											Fiction
										</div>
									</div>
									<div class="category-update">
									54 min ago
									</div>
								</div>			
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category2.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Fighter
									</div>
									<div class="category-rating">
									611 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Karthik S
									</div>
									<div class="article-category">
										<div class="rounded-box">
											story
										</div>
										<div class="rounded-box">
											adventure
										</div>
									</div>
									<div class="category-update">
									3 months ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category3.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Now you see me
									</div>
									<div class="category-rating">
									1.4k views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Hafeez Muhammad
									</div>
									<div class="article-category">
										<div class="rounded-box">
											poem
										</div>
									</div>
									<div class="category-update">
									4 months ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category4.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									sachin Tendulker
									</div>
									<div class="category-rating">
									3.7 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Krishna Das
									</div>
									<div class="article-category">
										<div class="rounded-box">
											 Autobiography
										</div>
										<div class="rounded-box">
											Sports
										</div>
									</div>
									<div class="category-update">
									10 min ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category5.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Biography
									</div>
									<div class="category-rating">
									774 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Anandu S
									</div>
									<div class="article-category">
										<div class="rounded-box">
											Drama
										</div>
										<div class="rounded-box">
											Fiction
										</div>
									</div>
									<div class="category-update">
									10 min ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category6.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Biography
									</div>
									<div class="category-rating">
									774 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Sania George
									</div>
									<div class="article-category">
										<div class="rounded-box">
											Drama
										</div>
										<div class="rounded-box">
											Fiction
										</div>
									</div>
									<div class="category-update">
									10 min ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category7.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Biography
									</div>
									<div class="category-rating">
									774 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Nithya R
									</div>
									<div class="article-category">
										<div class="rounded-box">
											Drama
										</div>
										<div class="rounded-box">
											Fiction
										</div>
									</div>
									<div class="category-update">
									10 min ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
							<div class="category-card">
								<div class="category-image">
									<img src="<?php echo assets('images/category/category8.jpg')?>" alt="top-category" />
									<div class="category-image-overlay">
									</div>
									<div class="popularity">
										<img src="<?php echo assets('images/icons/like-dark.png')?>" alt="thumbs-up" />77
									</div>
								</div>
								<div class="category-details">
									<div class="category-name">
									Biography
									</div>
									<div class="category-rating">
									774 views
									</div>
									<div class="publisher">
										<span class="publisher-round">P</span> Rahul Nair
									</div>
									<div class="article-category">
										<div class="rounded-box">
											Drama
										</div>
										<div class="rounded-box">
											Fiction
										</div>
									</div>
									<div class="category-update">
									10 min ago
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 login-popup" id="login-popup" >
				</div>
			</div>-->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo assets('images/logo/article-logo.png')?>" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Categories</h6>
						<ul>
							<li>Writings</li>
							<li>Drawings</li>
							<li>Biography</li>
							<li>History</li>
							<li>Novel</li>
							<li>Stories</li>
							<li>Short Stories</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li>Contact Us</li>
							<li>Privacy & Policy</li>
							<li>About Us</li>
							<li>FeedBack</li>
							<li>Site map</li>
							<li>Need help</li>
						</ul>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<a href="https://www.facebook.com/aves"><img src="<?php echo assets('images/icons/social/facebook-box.png')?>" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<a href="https://youtube.com/aves"><img src="<?php echo assets('images/icons/social/youtube-box.png')?>" alt="youtube-icon" /></a>
						</div>
						<div class="linkedin col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<a href="#"><img src="<?php echo assets('images/icons/social/linkedin-box.png')?>" alt="linkedin-icon" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header">
            
            <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body text-center">
            <div style="margin-bottom:20px">
                <a href="<?php echo route('dashboard/login?type=student')?>" class="span12 btn btn-large btn-primary">Login as Student</a>
            </div>
            <div>
                <a href="<?php echo route('dashboard/login?type=teacher')?>" class="span12 btn btn-large btn-primary">Login as Teacher</a>
            </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
		

		<!--Javascript files are linked here-->

		<script type="text/javascript" src="<?php echo assets('js/jquery-1.12.0.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo assets('js/bootstrap.min.js')?>"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script src="<?php echo assets('js/responsiveslides.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo assets('js/main-script.js')?>"></script>
	</body>
</html>
