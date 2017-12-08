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
					<li><a href="<?php echo base_url("controller_admin"); ?>">Lalu-lintas Data</a></li>
				</ul>

				<div class="row-fluid green span12" style="margin-bottom: 20px; margin-left: 0px; padding-bottom:-20px; padding-left:10px; padding-right:10px">
					<h2><span class="glyphicons charts"><i></i></span> Jumlah Pengunjung</h2>
					<hr>
					<div class="row-fluid span12" style="margin-left: 0px;">

						<div class="span3 statbox purple" onTablet="span6" onDesktop="span3" style="margin-bottom: 10px;">
							<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
							<div class="number"><?php echo $hari;?><i class="icon-arrow-down"></i></div>
							<div class="title">kunjungan</div>
							<div class="footer">
								<a href="#"> Hari ini</a>
							</div>	
						</div>
						<div class="span3 statbox red" onTablet="span6" onDesktop="span3" style="margin-bottom: 10px;">
							<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
							<div class="number"><?php echo $bulan;?><i class="icon-arrow-down"></i></div>
							<div class="title">kunjungan</div>
							<div class="footer">
								<a href="#"> Bulan ini</a>
							</div>
						</div>
						<div class="span3 statbox blue" onTablet="span6" onDesktop="span3" style="margin-bottom: 10px;">
							<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
							<div class="number"><?php echo $tahun;?><i class="icon-arrow-down"></i></div>
							<div class="title">kunjungan</div>
							<div class="footer">
								<a href="#"> Tahun ini</a>
							</div>
						</div>
						<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3" style=" margin-bottom: 10px;">
							<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
							<div class="number"><?php echo $semua;?><i class="icon-arrow-down"></i></div>
							<div class="title">kunjungan</div>
							<div class="footer">
								<a href="#"> Sampai saat ini</a>
							</div>
						</div>	
					</div>
				</div>	


				<div class="row-fluid">

					<div class="widget span3 red" onTablet="span8" onDesktop="span3">

						<h2><span class="glyphicons pie_chart"><i></i></span> Browsers</h2>

						<hr>

						<div class="content">

							<div class="browserStat big">
								<img src="<?php echo base_url('assets/img')."/browser-chrome-big.png"; ?>" alt="Chrome">
								<span><?php echo substr($chrome/$total*100,0,5); ?>%</span>
							</div>
							<div class="browserStat big">
								<img src="<?php echo base_url('assets/img')."/browser-firefox-big.png"; ?>" alt="Firefox">
								<span><?php echo substr($mozila/$total*100,0,5); ?>%</span>
							</div>
							<div class="browserStat">
								<img src="<?php echo base_url('assets/img')."/browser-ie.png"; ?>" alt="Internet Explorer">
								<span><?php echo substr($ie/$total*100,0,5); ?>%</span>
							</div>
							<div class="browserStat">
								<img src="<?php echo base_url('assets/img')."/browser-safari.png"; ?>" alt="Safari">
								<span><?php echo substr($safari/$total*100,0,5); ?>%</span>
							</div>
							<div class="browserStat">
								<img src="<?php echo base_url('assets/img')."/browser-opera.png"; ?>" alt="Opera">
								<span><?php echo substr($opera/$total*100,0,5); ?>%</span>
							</div>	


						</div>
					</div>

					<div class="widget yellow span9 noMargin" onTablet="span12" onDesktop="span9">
						<h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
						<hr>
						<div class="content">
							<div id="serverLoad2" style="height:224px;"></div>
						</div>
					</div>

				</div>



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
	
</body>
</html>
