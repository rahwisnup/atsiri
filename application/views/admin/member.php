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
	
	
	<?php include('css.php') ?>
		
		<!-- start: Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- end: Favicon -->
		
	</head>

	<body>
		<?php include('menu.php') ?>
			
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
						<i class="icon-group"></i>
						<a href="<?php echo base_url("controller_admin/get_list_member"); ?>">Anggota</a>
					</li>
				</ul>

				<!-- di sini buat isinya -->
				
				<!-- <div class="box-header">
					<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Anggota</h2>
				</div>
 -->
				<!-- ini tabel -->

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Foto</th>
								  <th>Nama User</th>
								  <th>E-mail</th>
								  <th>Tanggal Registrasi</th>
								  <th>Status</th>
								  <!-- <th>Aksi</th> -->
							  </tr>
						  </thead>
						  <tbody>
						  <?php for ($i=0; $i < $perulangan; $i++) { ?>
							<tr >
								<td class="center"><img class="avatar" alt="Dennis Ji" src="<?php echo base_url("")?>foto_user/<?php echo $member[$i]['foto_member'] ?>" style="width: 66px; height:auto;"></td>
								<td><?php echo $member[$i]['nama'] ?></td>
								<td><?php echo $member[$i]['email'] ?></td>
								<td class="center"><?php echo $member[$i]['tanggal_daftar'] ?></td>
								
								<td class="center">
								<?php if($member[$i]['status']=='aktive'){?>
									<span class="label label-success"><?php echo $member[$i]['status'] ?></span>
								<?php } else {?>
									<span class="label label-important"><?php echo $member[$i]['status'] ?></span>
								<?php } ?>
								</td>
								
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
			

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
