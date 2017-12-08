<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Dashboard Admin</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<?php include('css.php') ?>		
	</head>

	<body>
	<?php include('menu.php') ?>				<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
				
				
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="<?php echo base_url("controller_admin"); ?>">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li>
						<i class="icon-user"></i>
						<a href="<?php echo base_url("controller_admin/get_profil"); ?>">Profil Admin</a>
					</li>
				</ul>


				<!-- taroh isinya di sini -->

				<form class="form-horizontal">
					<fieldset>
					  <div class="control-group">
						<label class="control-label">Nama Admin</label>
						<div class="controls">
						  <span class="input-xlarge uneditable-input">Master Admin</span>
						</div>
					  </div>

					  <div class="control-group">
						<label class="control-label" for="focusedInput">Password</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="password" value="">
						</div>
					  </div>

					  <div class="control-group">
						<label class="control-label" for="focusedInput">Verifikasi Password</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="password" value="">
						</div>
					  </div>
					  
					  <div class="form-actions">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button class="btn">Batal</button>
					  </div>
					</fieldset>
				  </form>

				<!-- akhir dari isinya -->


			</div><!--/.fluid-container-->
			
			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->
	
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->
	<?php include('javascript.php') ?>
	<!-- end: JavaScript-->
	
</body>
</html>
