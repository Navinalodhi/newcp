<!DOCTYPE html>
<html lang="en">
<head>
	<meta https-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ColorPencil</title>
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('css/theme.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('images/icons/css/font-awesome.css')?>" rel="stylesheet">
	<link type="text/css" href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="https://colorpencil.me?login=false">
			  		ColorPencil
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						

						

						
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				    
					<form action="<?php echo route('dashboard/login')?>" method="post" class="form-vertical">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
						    <?php if(isset($_GET['error'])) :?>
				    <div class="alert alert-danger">Oops. Invalid Username or Password!</div>
				    <?php endif ?>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<?php if(!isset($_GET['type'])) :?>
									    <select name="type">
									        <option value="student">Student</option>
									         <option value="teacher">Teacher</option>
									    </select>
									<?php else:?>
									<input type="hidden" name="type" value = "<?php echo $type?>"/>
									<?php endif ?>
								</div>
							</div>
						</div>
						
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="login" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
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
			 

			<b class="copyright">&copy; 2020 AVES </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
