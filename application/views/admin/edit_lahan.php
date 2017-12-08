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
						<i class="icon-list-alt"></i>
						<a href="<?php echo base_url("controller_admin/get_list_tanaman"); ?>">Iklan</a>
					</li>
				</ul>


				<!-- inputannya -->
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<form class="form-horizontal" method="POST" action="<?php echo base_url('controller_admin/edit_data_lahan/')."/".$deskripsi[0]['id_lahan'] ?>" accept-charset="utf-8" enctype="multipart/form-data">
						  <fieldset>
						  	<div class="control-group">
								<label class="control-label" for="selectError">Tanaman</label>
								<div class="controls">
								  <select tabindex="1" data-placeholder="Select here.." class="span8" name="tanaman">
                                                    <option value="">Select here..</option>
                                                    <?php 
                                                    foreach ($tanaman as $key) {
                                                        echo "<option value='".$key -> id_tanaman."'>".$key -> nama_tanaman."</option>";
                                                    } ?>
                                                </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Luas (Hektar)</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="luas" value="<?php echo $deskripsi[0]['luas']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Alamat Lahan</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="alamat_lahan" value="<?php echo $deskripsi[0]['alamat_lahan']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Latitude</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="lat" value="<?php echo $deskripsi[0]['lat']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Longitude</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="long" value="<?php echo $deskripsi[0]['long']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama Pengelola</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="nama_pengelola" value="<?php echo $deskripsi[0]['nama_pengelola']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Alamat Pengelola</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="alamat_pengelola" value="<?php echo $deskripsi[0]['alamat_pengelola']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">No Telp Pengelola</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="no_telp_pengelola" value="<?php echo $deskripsi[0]['no_telp_pengelola']?>">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Pemilik</label>
								<div class="controls">
								  <select tabindex="1" data-placeholder="Select here.." class="span8" name="pemilik">
                                                    <option value="">Select here..</option>
                                                    <?php 
                                                    foreach ($pemilik as $key) {
                                                        echo "<option value='".$key -> id_pemilik."'>".$key -> nama_pemilik."</option>";
                                                    } ?>
                                                </select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="selectError">Provinsi</label>
								<div class="controls">
								  <select tabindex="1" data-placeholder="Select here.." class="span8" name="provinsi">
                                                    <option value="">Select here..</option>
                                                    <?php 
                                                    foreach ($provinsi as $key) {
                                                        echo "<option value='".$key -> id_provinsi."'>".$key -> nama_provinsi."</option>";
                                                    } ?>
                                                </select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="selectError">Kabupaten</label>
								<div class="controls">
								  <select tabindex="1" data-placehdolder="Select here.." class="span8" name="kabupaten">
                                                    <option value="">Select here..</option>
                                                    <?php 
                                                    foreach ($kabupaten as $key) {
                                                        echo "<option value='".$key -> id_kabupaten."'>".$key -> nama_kabupaten."</option>";
                                                    } ?>
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
