<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="assets/images/logo/favicon.png"/>
		<title>Article Website - Think,Smile,Explore your world.</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo assets('css/main-sheet.css')?>" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo assets('css/revolution-slider.css')?>" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo assets('css/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo assets('css/bootstrap-theme.min.css')?>">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="" >
					<nav class="navbar navbar-default">
					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
					      	<a class="navbar-brand" href="/"><img src="<?php echo assets('images/logo/article-logo.png')?>" alt="article-logo" /></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
						    <ul class="nav navbar-nav navbar-right">
								<!--<a href="https://app.engagespot.co/register" class="btn button-link caribbean-green" role="button">Sign Up</a>-->
								<a href="https://app.engagespot.co" id ="login" class="btn button-link rose-madder" data-toggle="modal" data-target="#loginModal">Login</a>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li <?php if($page === 'home') echo 'class="clicked"';?>><a href="index.html">Home</a></li>
				  				<li <?php if($page === 'pricing') echo 'class="clicked"';?>><a href="articles.html">Articles</a></li>
				  				<li <?php if($page === 'features') echo 'class="clicked"';?>><a href="features.html">Link 2</a></li>
				  				<li><a href="https://engagespot.co/blog/">Blog</a></li>
				  				<li <?php if($page === 'case_studies') echo 'class="clicked"';?>><a href="case-studies.php">Reviews</a></li>
				  				<li <?php if($page === 'contact') echo 'class="clicked"';?>><a href="contact-page.php">Contact</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>