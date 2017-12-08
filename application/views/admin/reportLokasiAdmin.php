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
						<a href="<?php echo base_url("controller_admin/get_list_tanam"); ?>">Data Report Lokasi</a>
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
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_sulteng = 0; ?>
                            <br>Sulawesi Tenggara</br>
                            <?php for ($i = 0; $i < $perulangan_sulteng; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_sulteng = $data_lokasi_sulteng[$i]['luas_tanam'] + $tot_luas_sulteng;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_sulteng; ?></th>
                                </tr>
                            </tfoot>
                        </table>

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_bali = 0; ?>
                            <br>Bali</br>
                            <?php for ($i = 0; $i < $perulangan_bali; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_bali = $data_lokasi_bali[$i]['luas_tanam'] + $tot_luas_bali;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_bali; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jatim = 0; ?>
                            <br>Jawa Timur</br>
                            <?php for ($i = 0; $i < $perulangan_jatim; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jatim = $data_lokasi_jatim[$i]['luas_tanam'] + $tot_luas_jatim;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jatim; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jateng = 0; ?>
                            <br>Jawa Tengah</br>
                            <?php for ($i = 0; $i < $perulangan_jateng; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jateng = $data_lokasi_jateng[$i]['luas_tanam'] + $tot_luas_jateng;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jateng; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jabar = 0; ?>
                            <br>Jawa Barat</br>
                            <?php for ($i = 0; $i < $perulangan_jabar; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jabar = $data_lokasi_jabar[$i]['luas_tanam'] + $tot_luas_jabar;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jabar; ?></th>
                                </tr>
                            </tfoot>
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
		