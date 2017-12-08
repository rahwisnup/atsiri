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
	</head>

	<body>
	 <div class="pull-right">
                            </div>
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
						<i class="icon-tasks"></i>
						<a href="<?php echo base_url("controller_admin/get_list_tanam"); ?>">Data Report Kategori</a>
					</li>
				</ul>


				<!-- inputannya -->
				<div class="row-fluid sortable">

			</div><!--/row-->

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
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas Tanam</th>
                                </tr>
                            </thead>
                            <tbody>
                            <br>Sidikalang</br>
                            <?php for ($i = 0; $i < $perulanganSidikalang; $i++) { ?>
                                <tr >
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>     
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas Tanam (Hektar)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <br>Nilam</br>
                            <?php for ($i = 0; $i < $perulanganNilam; $i++) { ?>
                                <tr >
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
_

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas Tanam (Hektar)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <br>Sereh Wangi</br>
                            <?php for ($i = 0; $i < $perulanganSerehWangi; $i++) { ?>
                                <tr >
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['luas_tanam']; ?></td>
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
