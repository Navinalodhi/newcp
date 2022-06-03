<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<title>Article Website - Think,Smile,Explore your world.</title>
		<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
  .toggle.ios .toggle-handle { border-radius: 20px; }
  .toggle.android { border-radius: 0px;}
  .toggle.android .toggle-handle { border-radius: 0px; }
  button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.jpg"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-tagsinput.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body class="art-works">
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
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/contactus">Contact Us</a></li>
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/articlesearch/1">Explore</a></li>
				  				
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="art-sub-content">
					<h3>Submit Your Art work</h3>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form">
					<h5 style="color:#fff" class="text-white">Upload Image/Video/PDF</h5>
					
						<form  enctype="multipart/form-data" id="submit_form" name="contact-form"  action = "/index.php/Avesacademy_c/articlesubmissioninsert" method="post">
		                    <!--<div id="name" class="gap">
		                    <label id="name-label" for="name"> Article name : </label>
		                    	<input id="name-field" type="text" placeholder="Article name" name="name" value="">
		                    </div>-->
		                    <div id="img" class="form-group icon-set img">
		                    	<div class="icon-disable"></div>
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label style="width:100%!important" class="image-input">
        							<a style="width:100%" type="file" class="">
										<img style="max-width:100%" class="img-pic" src="<?php echo base_url();?>assets/images/icons/add-image.png" alt="" />
									</a>
    							</label>

    							<input id="image-input" name="image-input" type="file" title="select an image" accept=".jpg,.png,.jpeg"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							 <div  id="video" class="form-group icon-set video">
							 	<div class="icon-disable"></div>
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label  style="width:100%!important" class="video-input">
        							<a style="width:100%" type="file" class="">
										<img style="max-width:100%" class="video-pic" src="<?php echo base_url();?>assets/images/icons/add-video.png" alt="" />
									</a>
    							</label>

    							<input id="video-input" name="video-input" type="file" title="select a video" accept=".mp4,.wmv"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							 <div id="pdf" class="form-group icon-set pdf">
							 	<div class="icon-disable"></div>
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label  style="width:100%!important" class="pdf-input">
        							<a style="width:100%" type="file" class="">
										<img style="max-width:100%" class="pdf-pic" src="<?php echo base_url();?>assets/images/icons/add-pdf.png" alt="" />
									</a>
    							</label>

    							<input name="pdf-input" id="pdf-input" type="file" title="select a pdf file" accept=".pdf"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							<!--<div>
								<input type="checkbox" checked data-toggle="toggle" data-style="ios">
								<button class="accordion">Section 1</button>
								<div class="panel">
								  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>-->
							<div class="form-group">
								<label class="label-light white-text" for="art_title">Your File is</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title" readonly/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							<div class="form-group">
								<label class="label-light white-text" for="art_name">Art Tittle</label>
								<input class="form-control art-sub-input" type="text" value="" name="artname" id="artname"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
		                    <!--<div id="sh-desc" class="gap" >
		                    	<label id="sh-desc-field-label" for="sh-desc-field"> Description : </label>
		                    	<input id="sh-desc-field" type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Give a short description here" required name="short-description" value="">
		                    </div>-->
		                   	<!--<div class="form-group">
								<label class="label-light white-text" for="art_desc">Description</label>
								<textarea rows="5" class="form-control bg-transparent" maxlength="250" placeholder="Give a short description here" name="art[desc]" id="art_desc" required>
								</textarea>
								<span class="help-block white-text">Tell us about your art work in fewer than 250 characters.</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_category">Category</label>
								<select class="select2 art-sub-input" name="art[category]" id="art_category">
									<option value="cat1">Drawing</option>
									<option value="cat2">Story</option>
									<option value="cat3">Short stories</option>
									<option value="cat4">Poem</option>
									<option value="cat5">Novel</option>
								</select>
								<span class="help-block white-text">select type of category.</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_type">Upload type</label>
								<select class="select2 art-sub-input" name="art[type]" id="art_type">
									<option value="image">Image</option>
									<option value="pdf">PDF</option>
									<option value="video">video format</option>
								</select>
								<span class="help-block white-text">select format of upload</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_file">Add File</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[file]" id="art_file"/>
									<a type="file" class="btn js-choose-user-avatar-button browse">
									Browse file...
									</a>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_file">Add Thumbnail</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[file]" id="art_file"/>
									<a class="btn js-choose-user-avatar-button browse">
									Browse file...
									</a>
									
									<span class="help-block white-text">For better presentation make the thumbnail in 314 *132 px format.</span>
							</div>-->
		                    <!--<div id="add-file gap" class="gap" >
		                    	<label ld="file-label" for="add-file-field"> Add file : </label>
		                    	<input id="add-file-field" type="text" placeholder="add article file" name="phone" value="">
		                    	<button id="browse-btn" class="btn caribbean-green filled" type="submit" name="browse btn" value="search" >Browse ..</button>
		                    </div>-->
		                    <div id="privacy" class="gap">
		                    	<label id="privacy-label" class="white-text" for="privacy"> Who can see my work : </label>
		                    	<div class="show white-text">
		                    		<input type="radio" name="public" value="public" checked> Public
		                    		<br>
		                    		<input type="radio" name="public" value="private" > My Class Group 
		                    	</div>
		                    	<div id="tag" class="gap">
		                    	<label id="tag-label" class="white-text" for="tag"> Tags for my work : </label>
		                    	<div class="show white-text set-align">
		                    		<input type="text" value="" data-role="tagsinput" name="arttags" id="arttags" class="form-control">
		                    	</div>

		                    </div>
		                    <div class="gap">
		                    	<input type="hidden" name="uid" value="<?php echo $_GET['uid']?>"/>
		                        <button id="send" class="btn caribbean-green filled" type="submit" name="submitform" value="send" >Submit</button>
		                               <div class="prog" style="position: absolute; top:102%;left: 37%;display: none;">
<div class="progress progress-striped active" style="width: 400px;height: 20px; ">
  <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 400px;height: 20px;">
  </div>
</div>
</div>
		                    </div>

		                    <div class="gap">
		                        <div id="submit-info"></div>
		                    </div>
		                </form>
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" />
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
							<a href="https://www.facebook.com/avesorganisation"><img src="<?php echo base_url();?>assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://twitter.com/imagiobox"><img src="<?php echo base_url();?>assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://instagram.com/avesorganisation"><img src="<?php echo base_url();?>assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/channel/UCl8K-dvzQ1RtRG5V0e-AUEQ"><img src="<?php echo base_url();?>assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>-->
		</div>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-tagsinput.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/javascript.js"></script>
		<script>
			$(document).ready(function(){
    			$("#send").click(function(){
        		$(".prog").show();
        		$("#send").hide();
    			});
    			});

    		
</script>
	</body>
</html>
