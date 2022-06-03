<?php
$page="portfolio";
$postsize=count($post);
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
		<title>Color Pencil - Think,Smile,Explore your world.</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	</head>

	<body class="art-works">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" >
					<nav class="navbar navbar-default">
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
								<!--<a href="https://app.engagespot.co/register" class="btn button-link caribbean-green" role="button">Sign Up</a>-->
								<?php
								if(!isset($_COOKIE['login'])) {
									?>
								<a href="<?php echo base_url()?>login" id ="login" class="btn button-link rose-madder" role="button">Login</a>
								<?php
								}
								?>
								<?php
								if(isset($_COOKIE['login'])) {
									?>
				  			
									<li><a href="<?php echo base_url();?>app/dashboard/logout" id ="login" class="btn button-link rose-madder" role="button">Logout</a></li>
				  				<?php
				  			}
				  			?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/">Home</a></li>
				  				<li><a href="https://imagiobox.com/aves">About Us</a></li>
				  				<li><a href="<?php echo base_url()?>/Avesacademy_c/contactus">Contact Us</a></li>
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/articlesearch/1">Explore</a></li>
				  				
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			</div>
			<?php
			if($postsize>0)
			{
			?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="portfolio" >
					<div class="portfolio-header">
						<div class="profile-picture">
							<img src="<?php echo base_url();?>app//public/assets/images/<?php echo $val[0]->student_image;?>" alt="" />
						</div>
						<div class="profile-name">
							<?php echo $val[0]->student_name;?>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " id="portfolio-content" >
					<div class="portfolio-headline">
						<h3>Portfolio</h3>
						<h5>Scroll down to view the timeline</h5>
					</div>
					<section class="timeline">
					  <ul>
					  <?php 
					for($i=0;$i<$postsize;$i++)
					{
						
						
						
						?>
					    <li>
					      <div class="timeline-article">
					        <time><?php echo date('d M, Y',strtotime($post[$i]['article_insertdate']));?></time>
					      
										<a href="<?php echo base_url() ?>Avesacademy_c/articledetail/<?php echo $post[$i]['article_id']; ?>">
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
											
											</a>
					      </div>
					    </li>
					   
    					<?php
    				}
    					?>
					  </ul>
					</section>
				</div>
			</div>
			<?php
			}
			else
			{
			?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="portfolio" >
					<div class="portfolio-header">
						<div class="profile-picture">
							<img src="<?php echo base_url();?>app//public/assets/images/<?php echo $val[0]->student_image;?>" alt="" />
						</div>
						<div class="profile-name">
							<?php echo $val[0]->student_name;?>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " id="portfolio-content" >
					<div class="portfolio-headline">
						<h3>Sorry No Art Work has been Uploaded Yet</h3>
						<h3>Sorry No Art Work has been Uploaded Yet<h3>
					</div>
				</div>
			</div>
			<?php
			}
		?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url()?>assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Aves academy</h6>
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
					<!--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>
						</ul>  
					</div>-->
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
			
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/javascript.js"></script>
	</body>
</html>
