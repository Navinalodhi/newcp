<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aves Teacher | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Aves Teacher</b></a>
        <div>
              
            </div>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php
        $d=$i;
if($d==1)
{
	
	?>
	<p class="login-box-msg">Invalid User or Password</p>
	<?php
}


?>
<!DOCTYPE html>
<body>


<form name="login" action="<?php echo site_url('avesteach_c/login');?>" method="post">
<div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="User" name="username" id="username" value="<?php echo set_value('username'); ?>">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <span style="color:#ff8080; font-size:12px;"><?php echo form_error('username'); ?>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span style="color:#ff8080; font-size:12px;"><?php echo form_error('password'); ?>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
             
               <button class="btn btn-block btn-success "id="button_submit" name="button_submit" type="submit" class="btn btn-default" value="submit">Login</button>
            </div><!-- /.col -->
          </div>
        </form>



</body>
</html>

        
          
        

       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
   
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
