<?php
error_reporting(E_ERROR | E_PARSE);
$page = 'home';

?>


<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="art,portfolio,digital,drawings,paintings,mural,artists,students,learn,art enthusiasts,colorpencil">
		<meta name="description" content="digital career portfolio for artists and art enthusiasts from imagiobox">
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="ColorPencil" />
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
		<title>ColorPencil - Art Meets Learning</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	<!-- frk google ad sense not detected -->	
		<script data-ad-client="ca-pub-1640795459211854" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
	<!-- frk mailchimp code -->
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/1b09f3cfbe410bea3598525af/76bf5f31d89f72a7a0afbb595.js");</script>
		
	</head>

	<body>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" >
			<nav class="navbar navbar-default">
					
					<div class="container-fluid">
					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
					      	<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" /></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
						    
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo base_url();?>">Home</a></li>
				  				<li><a href="https://imagiobox.com/aves">About Us</a></li>
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/contactus">Contact Us</a></li>
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/articlesearch/1">Explore</a></li>
				  				<?php
				  				$var=$_COOKIE['login'];
				  				//var_dump($var);
				  				//exit(0);
								if(!isset($var)) {
									?>
				  				<!--<li><a href="<?php echo base_url()?>login" id ="login" class="btn button-link rose-madder" role="button">Login</a></li>-->
				  				<?php
				  			}
				  			?>
				  			<?php
								
									if($var==1)
									{
									?>
				  			
									<li><a href="<?php echo base_url();?>app/dashboard/logout" id ="login" class="btn button-link rose-madder" role="button">Logout</a></li>
				  				<?php
				  			}
				  			else
				  			{
				  				?>
				  				<li><a href="<?php echo base_url()?>login" id ="login" class="btn button-link rose-madder" role="button">Login</a></li>
				  				<?php
				  			}
				  	
				  			?>
				  				
						    </ul>
						</div>
					</nav>		
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-slider" >
					<ul class="rslides" id="rslides">
					 
					  <li>
					  	<img src="<?php echo base_url();?>assets/images/slider/2.jpg" alt="slider">
					  	<div class="gallerycon">
        <h1>ColorPencil</h1>
        <p>Digital Portfolio for Artists & Students from imagiobox</p>
        <a class="button" href="<?php echo base_url()?>login">Sign In</a>
        <a class="button" href="https://play.google.com/store/apps/details?id=com.avesacademy.color_pencil&hl=en_US">Get the App</a>
      </div>
					  </li>
					 
				
					</ul>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="avees-description">
					<h2>WHAT WE OFFER?</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/school.png" alt="school" />
						<h6>For Artists</h6>
						<p>An Artist account to share your creative portfolio and to manage student accounts. A centralised platform with easy controls to document student development that ensures better interaction and feedback. Easily organise local and national level workshops and activities.
</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/familyp.png" alt="family" />
						<h6>For Parents</h6>
						<p> Offers parents a personalised window into their child’s development hence also creating a real audience for the student’s works. Easy to collect and organise their children’s works through their school years. Improving the parent teacher relations through feedback and interaction. </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/student.png" alt="student" />
						<h6>For Students</h6>
						<p> A safe and moderated space for them to connect with their friends and peers. A platform to document and share their art works. Easy access to resources and art facilities in a moderated environment. An opportunity for them to be part of community based art projects and learning through co-operation. </p>
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 explore-more-article">
				<a href="<?php echo base_url();?>index.php/Avesacademy_c/articlesubmission" class="view-more-btn btn btn-danger">Submit Your Artwork</a>
			</div>
		</div>
			<!--<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-article">
					<h2>Categories</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article1.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Short stories
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
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article2.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Stories
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
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article3.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Biography
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
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article4.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Drawings
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
						</div></a>
					</div>
				</div>
			</div>-->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-categories" >
					<h2>Art Works</h2>
					<p>Find out the Best in our dreams...Dreams always come true.</p>
					<?php
					if(count($post) > 12){
						$count = 12;
					}else{
						$count = count($post);
					}
					
					for($i=0;$i<$count;$i++)
					{
						?>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
								<a href="<?php echo base_url('/index.php/Avesacademy_c/articledetail')."/".$post[$i]['article_id'];?>"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
									<div class="category-card">
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
											<?php echo $post[$i]['student_name'];?>
											</div>
											<!--<div class="category-rating">
											774 views
											</div>-->
											<div class="popularity">
												<img  class="likeBtn" data-article-id = "<?php echo $post[$i]['article_id'];?>" src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="thumbs-up" />
												<div class="like-count"><?php echo $post[$i]['article_like'];?></div>
											</div>
											
											<!--<div class="article-category">
												<div class="rounded-box">
													Drama
												</div>
												<div class="rounded-box">
													Fiction
												</div>
											</div>-->
											<!--<div class="category-update">
											54 min ago
											</div>-->
										</div>			
									</div>
								</div></a>
							</div>
							<?php
						}
						?>

					
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 load-more-article">
				<a href="<?php echo base_url("index.php/Avesacademy_c/articles/1")?>" class="view-more-btn btn btn-danger">View More</a>
			</div>
			<div class="row">
				<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 login-popup" id="login-popup" >
					<div class="popup-box">
						<div class="popup-header">
							Login
						</div>
						<div class="popup-body">
							<p>Enter your Email Id and password to login</p>
							<form>
								<div class="sminputs">
              						<div class="input full">
             						   <label class="string optional" for="user-name">Email*</label>
             						   <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
          						    </div>
            					 </div>
            					<div class="sminputs">
              						<div class="input string optional">
                						<label class="string optional" for="user-pw">Password *</label>
                						<input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              						</div>
              						<div class="input string optional">
                						<label class="string optional" for="user-pw-repeat">Repeat password *</label>
                						<input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              						</div>
            					</div>
            					<div class="simform__actions">
              						<input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              						<span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            					</div> 
							</form>
						</div>
						<div class="popup-footer">
							<div class="facebook-login">
								Login with Facebook
							</div>
							<div class="google-login">
								Login with Google+
							</div>
						</div>
					</div>
				</div>-->
				<!--<div class="logmod">
  					<div class="logmod__wrapper">
    					<span class="logmod__close">Close</span>
    					<div class="logmod__container">
      						<ul class="logmod__tabs">
        						<li data-tabtar="lgm-2"><a href="#">Login</a></li>
        						<li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      						</ul>
      					<div class="logmod__tab-wrapper">
      						<div class="logmod__tab lgm-1">
        						<div class="logmod__heading">
          							<span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        						</div>
        						<div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>-->
			</div>
			
<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url()?>assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>AVES</h6>
						<!--<ul>
							<li><a href="articles.html">Writings</a></li>
							<li><a href="articles.html">Drawings</a></li>
							<li><a href="articles.html">Biography</a></li>
							<li><a href="articles.html">History</a></li>
							<li><a href="articles.html">Novel</a></li>
							<li><a href="articles.html">Stories</a></li>
							<li><a href="articles.html">Short Stories</a></li>
						</ul>-->
						<p>Our Branches:</p>
						<p>Mumbai, Maharashtra</p>
 						<p>Kollam, Kerala</p>
						<p>E-mail:	info@imagiobox.com</p>
						<p>Phone: 7907713977</p>
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="https://colorpencil.me/Avesacademy_c/contactus">Contact Us</a></li>
							<li><a href="/privacy-policy.html">Privacy Policy</a></li>
							<li><a href="https://imagiobox.com/aves">About Us</a></li>
						<!--	<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>  -->
						</ul>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-offset-3 col-lg-offset-3 col-xl-offset-3 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://www.facebook.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://twitter.com/imagiobox"><img src="<?php echo base_url()?>assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://instagram.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/channel/UCl8K-dvzQ1RtRG5V0e-AUEQ"><img src="<?php echo base_url()?>assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>
		

		<!--Javascript files are linked here-->

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jscookie.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main-script.js"></script>
		<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8305603.js"></script>
<!-- End of HubSpot Embed Code -->
	</body>
</html>
