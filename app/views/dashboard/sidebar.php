<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Avees Dashboard</title>
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('css/theme.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('images/icons/css/font-awesome.css')?>" rel="stylesheet">
	<script src="<?php echo assets('scripts/jquery-1.9.1.min.js')?>"></script>
	<script src="<?php echo assets('scripts/jquery-ui-1.10.1.custom.min.js')?>"></script>
	<script src="<?php echo assets('bootstrap/js/bootstrap.min.js')?>"></script>
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
			  		Avees Dashboard
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					
				
					<ul class="nav pull-right">
						
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo assets('images/user.png')?>" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo route('dashboard/logout')?>">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							
							<li>
								<a href="<?php echo route('dashboard/index')?>">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							
							<?php if($type === "student") :?>
							<li>
								<a href="http://colorpencil.avesacademy.org/index.php/Avesacademy_c/articlesubmission">
									<i class="menu-icon icon-bullhorn"></i>
									Submit Artwork
								</a>
								
							</li>
							<?php endif; ?>
							
							<?php if($type === "student") :?>
							<li>
								<a href="<?php echo route('dashboard/myclass')?>">
									<i class="menu-icon icon-bullhorn"></i>
									My Class Group
								</a>
							</li>
							<?php endif; ?>
							
							
							
							<?php if($type === "student") :?>
							<li>
								<a href="<?php echo route('dashboard/myuploads')?>">
									<i class="menu-icon icon-bullhorn"></i>
									My Uploads
								</a>
							</li>
							<?php endif; ?>
							
							<?php if($type === "teacher") :?>
							<li>
								<a href="<?php echo route('dashboard/students')?>">
									<i class="menu-icon icon-bullhorn"></i>
									Students
								</a>
							</li>
							<?php endif; ?>
							
						</ul>

						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->