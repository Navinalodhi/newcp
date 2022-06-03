<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta https-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ColorPencil Workspace</title>
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('css/theme.css')?>" rel="stylesheet">
	<link type="text/css" href="<?php echo assets('images/icons/css/font-awesome.css')?>" rel="stylesheet">
	<script src="<?php echo assets('scripts/jquery-1.9.1.min.js')?>"></script>
	<script src="<?php echo assets('scripts/jquery-ui-1.10.1.custom.min.js')?>"></script>
	<script src="<?php echo assets('bootstrap/js/bootstrap.min.js')?>"></script>
	<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo assets('css/font-awesome.min.css')?>">

	<link type="text/css" href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="<?php echo route('dashboard/index')?>">
			  		ColorPencil Workspace
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					
				

					<ul class="nav pull-right">
						
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php
							echo $name;?>
								<img src="<?php echo assets('images/'.$image)?>" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							<?php if($type === "student"):?>
								<li><a target="blank" href="https://<?php echo $_SERVER['SERVER_NAME']?>/index.php/Avesacademy_c/portfolio/<?php echo $_SESSION['aves_uid']?>">Your Profile</a></li>
								<li class="divider"></li>
								<li><a href="#" data-toggle="modal" data-target="#addProfilepicModal">Settings</a></li>
								<?php endif ?>
								
								<?php if($type === "teacher"):?>
								<li><a target="blank" href="https://<?php echo $_SERVER['SERVER_NAME']?>/index.php/Avesacademy_c/artistprofile/<?php echo $_SESSION['aves_uid']?>">Your Profile</a></li>
								<li><a href="#" data-toggle="modal" data-target="#addProfilepicModal">Settings</a></li>
								<li class="divider"></li>
								<?php endif ?>
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
							
							
							
							
							<?php if($type === "student") :?>
							<li>
								<a href="https://<?php echo $_SERVER['SERVER_NAME']?>/index.php/Avesacademy_c/articlesubmission?uid=<?php echo $_SESSION['aves_uid']?>&_sign=<?php echo md5('key123'.$_SESSION['aves_uid'])?>">
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
								<a href="<?php echo route('dashboard/index')?>">
									<i class="menu-icon icon-bullhorn"></i>
									All Artworks
								</a>
							</li>
							
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
<div id="addProfilepicModal" class="modal hide fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Settings</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal row-fluid" method="post" action="<?php echo route('dashboard/sidebar')?>" enctype="multipart/form-data">
            
            
            
     <div class="control-group" >

     	<div class="controls">
            <input type="text" class="span8" placeholder="Username" name="username" id="username" >
        </div>
        <br>
        <div class="controls">
            <input type="password" class="span8" placeholder="Password" name="password" id="password" >
        </div>
        <br>
        <div class="controls">
            <input type="password" class="span8" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" >
        </div>
        <br>
        <div class="controls">
            <input type="file" class="span8" name="userfile" id="userfile" >
        </div>
        
    </div>
                
            
            
            <input type="submit" class="btn btn-success" name="addProfilepic" value="Save">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
