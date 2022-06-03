<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<title>Article Website - Think,Smile,Explore your world.</title>
			<!--header is placed here-->
			<link rel="shortcut icon" type="image/png" href="assets/images/logo/favicon.jpg"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="assets/css/main-sheet.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body>
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
					      	<a class="navbar-brand" href="<?php echo base_url();?>"><img src="assets/images/logo/colorpencil.png" alt="article-logo" /></a>
					    </div>
					    <!--<div class="collapse navbar-collapse" id="myNavbar">
						    <ul class="nav navbar-nav navbar-right">
								
								<a href="login.html" id ="login" class="btn button-link rose-madder" role="button">Login</a>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/">Home</a></li>
				  				<li><a href="#">About Us</a></li>
				  				<li><a href="#">Contact Us</a></li>
				  				<li><a href="#">Explore</a></li>
						    </ul>
						</div>-->
					</nav>
				</div>
			</div>
			<div class="row profile">
				<div class="col-lg-3 profile-settings-sidebar">
					<h4 class="prepend-top-0">
						Profile settings
					</h4>
					<p>
					This information will appear on your profile.
					</p>
				</div>
				<div class="col-lg-9">
					<div class="form-group">
						<label class="label-light" for="user_name">Name</label>
						<input class="form-control width-75" required="required" type="text" value="Jayakrishnan T N" name="user[name]" id="user_name" readonly="readonly"/>
						<span class="help-block">Enter your name, so people you know can recognize you.</span>
					</div>
					<div class="form-group">
						<label class="label-light" for="user_email">Email</label>
						<input class="form-control width-75" required="required" type="text" value="jayakrishnan@logidots.com" name="user[email]" id="user_email" />
						<span class="help-block">We also use email for avatar detection if no avatar is uploaded.</span>
					</div>
					<div class="form-group">
						<label class="label-light" for="user_std">School</label>
						<input class="form-control width-75" type="text" value="Govt H.S.Thekkekara" name="user[std]" id="user_std" readonly="readonly"/>
					<!--<div class="form-group">
						<label class="label-light" for="user_public_email">Public email</label>
						<select class="select2" name="user[public_email]" id="user_public_email">
							<option value="">Do not show on profile</option>
							<option value="jayakrishnan@logidots.com">jayakrishnan@logidots.com</option>
						</select>
						<span class="help-block">This email will be displayed on your public profile.</span>
					</div>-->
					<!--<div class="form-group">
						<label class="label-light" for="user_preferred_language">Preferred language</label>
						<select class="select2" name="user[preferred_language]" id="user_preferred_language">
							<option value="en">English</option>
							<option value="es">EspaÃ±ol</option>
							<option value="de">Deutsch</option>
						</select>
						<span class="help-block">This feature is experimental and translations are not complete yet.</span>
					</div>-->
					<div class="form-group">
						<label class="label-light" for="user_std">Class</label>
						<input class="form-control width-75" type="text" value="7 A" name="user[std]" id="user_std" readonly="readonly"/>
					</div>
					<div class="form-group">
						<label class="label-light" for="user_addr">Address</label>
						<input class="form-control width-75" type="text" value="Thunduparambil House,Thekkekara P O" name="user[address]" id="user_addr" />
					</div>
					<div class="form-group">
						<label class="label-light" for="user_city">City</label>
						<input class="form-control width-75" type="text" value="Alappuzha" name="user[city]" id="user_city" />
					</div>
					<div class="form-group">
						<label class="label-light" for="user_state">State</label>
						<input class="form-control width-75" type="text" value="Kerala" name="user[state]" id="user_state" />
					</div>
				
					<div class="form-group">
						<label class="label-light" for="user_phone">Phone</label>
						<input class="form-control width-75" type="text" value="8943949562" name="user[phone]" id="user_phone" />
					</div>
					 <div class="form-group">
        				<label class="label-light" for="user_dob">Date of Birth</label>
            				<div class="input-group input-append date" id="datePicker">
                				<input  class="form-control" type="text" placeholder="click to show datepicker" value="26/07/2001" id="user_dob">
            				</div>
    				</div>
    				<div class="form-group">
						<label class="label-light" for="user_prof_pic">Profile Picture</label>
						<div class="clearfix avatar-image append-bottom-default">
						<a target="_blank" rel="noopener noreferrer" href=">
							<img alt="" class="avatar s160" src="assets/images/icons/user/female-student.png" />
						</a>
					</div>
					<h5 class="prepend-top-0">
						Upload new avatar
					</h5>
					<div class="prepend-top-5 append-bottom-10">
						<a type="file" class="btn js-choose-user-avatar-button browse">
							<input id="avatar-input" type="file" title="select an image" accept=".jpg,.png,.jpeg"/>
							Browse file...
						</a>
						<span class="avatar-file-name prepend-left-default js-avatar-filename">No file chosen</span>
						<input class="js-user-avatar-input hidden" accept="image/*" type="file" name="user[avatar]" id="user_avatar" />
					</div>
					<div class="help-block">
						The maximum file size allowed is 200KB.
					</div>
					</div>
					<!--<div class="form-group">
						<label class="label-light" for="user_bio">Bio</label>
						<textarea rows="4" class="form-control" maxlength="250" name="user[bio]" id="user_bio">
						</textarea>
						<span class="help-block">Tell us about yourself in fewer than 250 characters.</span>
					</div>-->
					<div class="prepend-top-default append-bottom-default">
						<input type="submit" name="commit" value="Update profile settings" class="btn update-profile" />
						<a class="btn btn-cancel" href="/jkjaikrishna">Cancel</a>
					</div>

				</div>
			</div>
			<!--footer is placed here-->
			<!--<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Categories</h6>
						<ul>
							<li><a href="articles.html">Writings</a></li>
							<li><a href="articles.html">Drawings</a></li>
							<li><a href="articles.html">Biography</a></li>
							<li><a href="articles.html">History</a></li>
							<li><a href="articles.html">Novel</a></li>
							<li><a href="articles.html">Stories</a></li>
							<li><a href="articles.html">Short Stories</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>
						</ul>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://www.facebook.com/aves"><img src="assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/aves"><img src="assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="#"><img src="assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="#"><img src="assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>-->
		

		<!--Javascript files are linked here-->

		<script type="text/javascript" src="assets/js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script src="assets/js/responsiveslides.min.js"></script>
		<script type="text/javascript" src="assets/js/main-script.js"></script>
		<script type="text/javascript" src="assets/js/javascript.js"></script>

	</body>
</html>