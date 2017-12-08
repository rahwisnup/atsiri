<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link type="text/css" href="<?php  echo base_url();?>assetsedmin/vendor/edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php  echo base_url();?>assetsedmin/vendor/edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php  echo base_url();?>assetsedmin/vendor/edmin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php  echo base_url();?>assetsedmin/vendor/edmin/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url("controller_pengguna");?>">Home</a>
                   
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<?php echo form_open('controller_pengguna/login','class="form-vertical"') ?><!-- <form class="form-vertical"> -->
						<div class="module-head">
							<h3>Sign In</h3>
						</div>

						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" name="username" type="text" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" name="password" type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
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
			 

			<b class="copyright">&copy; 2016 Wisnu Paramartha </b> All rights reserved.
		</div>
	</div>
	<script src="<?php  echo base_url();?>assetsedmin/vendor/edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php  echo base_url();?>assetsedmin/vendor/edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php  echo base_url();?>assetsedmin/vendor/edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>