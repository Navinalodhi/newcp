<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Avees Sign Up</title>
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('css/theme.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('images/icons/css/font-awesome.css')?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Avees
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Sign Up
						</a></li>

						

						<li><a href="#">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				    
					<form action="<?php echo route('dashboard/register')?>" method="post" class="form-vertical">
						<div class="module-head">
							<h3>Teacher Sign Up</h3>
						</div>
						<div class="module-body">
						    <?php if(isset($_GET['error'])) :?>
				    <div class="alert alert-danger"><?php echo $_GET['msg']?></div>
				    <?php endif ?>
				            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="name" placeholder="Your Name" required>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="username" placeholder="Username" required>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
									<select name="class">
									    <option value="0" disabled selected>Select Class</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									</select>
								</div>
							</div>
							
						</div>
						
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="signup" class="btn btn-primary pull-right">Sign Up</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Avees Academy </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>