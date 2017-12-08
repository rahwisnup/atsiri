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
						<i class="icon-user"></i>
						<a href="<?php echo base_url("controller_admin/get_list_pemilik"); ?>">Manajemen Pemilik Lahan</a>
					</li>
				</ul>


				<!-- inputannya -->
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manajemen Pemilik Lahan</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="<?php echo base_url('controller_admin/get_list_pemilik/') ?>" accept-charset="utf-8" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama Pemilik</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="nama_pemilik">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Alamat Pemilik</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="alamat_pemilik">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">No Rumah</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name = "no_rumah">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">No Handphone</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="no_handphone">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">No Telepon</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="no_telepon">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Status</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="status">
									<option>Perorangan/Pribadi</option>
									<option>Pemerintah</option>
									<option>Perusahaan</option>
									<option>Institusi</option>
									<option>Bersama</option>
								  </select>
								</div>
							  </div>
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

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
							  <th>Nomor</th>
								  <th>Nama</th>
								  <th>Alamat</th>
								  <th>No Rumah</th>
								  <th>No Telepon</th>
								  <th>No Handphone</th>
								  <th>Status</th>
								  <th>Aksi</th>
							  </tr>
						  </thead>
						  <tbody>
						  <?php for ($i=0; $i < $perulangan ; $i++) { ?>
							<tr >
								<td class="span3"><?php echo $i+1 ?></td>
								<td class="span3"><?php echo $data_pemilik[$i]['nama_pemilik']; ?></td>
								<td class="span3"><?php echo $data_pemilik[$i]['alamat_pemilik']; ?></td>
								<td class="center span2"><?php echo $data_pemilik[$i]['no_rumah']; ?></td>
								<td class="center span2"><?php echo $data_pemilik[$i]['no_telepon']; ?></td>
								<td class="center span2"><?php echo $data_pemilik[$i]['no_handphone']; ?></td>
								<td class="center span2"><?php echo $data_pemilik[$i]['status']; ?></td>
								<td class="center span2">
									<a title="Edit" class="btn btn-info" href="<?php echo base_url('controller_admin/edit_data_pemilik')."/".$data_pemilik[$i]['id_pemilik']; ?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									                                            
									<a title="Hapus" class="btn btn-danger" href="<?php echo base_url('controller_admin/delete_data_pemilik')."/".$data_pemilik[$i]['id_pemilik']; ?>">
										<i class="halflings-icon white trash"></i> 

									</a>
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
