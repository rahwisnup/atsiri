		<!-- start: Header -->
		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href=""><i class="icon-leaf"></i><span>Sistem Monitoring Atsiri</span></a>

					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<!-- start: User Dropdown -->
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="halflings-icon white user"></i> Admin
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-menu-title">
										<span>Pengaturan Akun</span>
									</li>
									<li><a href="<?php echo base_url("controller_admin/logout")?>"><i class="halflings-icon off"></i> Logout</a></li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->

				</div>
			</div>
		</div>
		<!-- end: Header -->

		<div class="container-fluid-full">
			<div class="row-fluid">
				
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<!-- INI SAYA HILANGKAN KEMARIN HEHE -->
							<!-- <li><a href="<?php echo base_url("controller_admin"); ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Lalu-lintas Data</span></a></li>	
							<li><a href="<?php echo base_url("controller_admin/get_list_member"); ?>"><i class="icon-group"></i><span class="hidden-tablet">Anggota Admin</span></a></li>
							<li><a href=><i class=""></i><span class=""></span></a></li> -->


							<li><a href="<?php echo base_url("controller_admin/get_kategori_tanaman"); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet">Data Kategori Tanaman</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_pemilik"); ?>"><i class="icon-user"></i><span class="hidden-tablet">Data Pemilik Lahan</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_provinsi"); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Data Provinsi</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_kabupaten"); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Data Kabupaten</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_tanaman"); ?>"><i class="icon-leaf"></i><span class="hidden-tablet">Data Tanaman</span></a></li>	

							<li><a href=><i class=""></i><span class=""></span></a></li>

							<li><a href="<?php echo base_url("controller_admin/get_list_lahan"); ?>"><i class="icon-th-list"></i><span class="hidden-tablet">Data Lahan</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_info_lahan"); ?>"><i class="icon-th"></i><span class="hidden-tablet">Data Info Lahan</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_karakteristik_lahan"); ?>"><i class="icon-th"></i><span class="hidden-tablet">Data Karakteristik Lahan</span></a></li>							
							<li><a href="<?php echo base_url("controller_admin/get_list_tanam"); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Data Tanam</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_panen"); ?>"><i class="icon-th-large"></i><span class="hidden-tablet">Data Panen</span></a></li>

							<li><a href=><i class=""></i><span class=""></span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_reportPemilik"); ?>"><i class="icon-th-list"></i><span class="hidden-tablet">Report Pemilik</span></a></li>
							<li><a href="<?php echo base_url("controller_admin/get_list_reportLokasi"); ?>"><i class="icon-th"></i><span class="hidden-tablet">Report Lokasi</span></a></li>							
							<li><a href="<?php echo base_url("controller_admin/get_list_reportKategori"); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Report Kategori</span></a></li>

						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->