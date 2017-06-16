<?php
$msg = "";
if(isset($_POST['submit']))
{
	$jenis_bangunan 	= $_POST['jenis_bangunan'];
	$owner				= $_POST['owner'];
	$id_bangunan		= $_POST['id_bangunan'];
	$no_rumah 			= $_POST['no_rumah'];
	$lokasi				= $_POST['lokasi'];
	$alamat 			= $_POST['alamat'];

	$kepala_keluarga	= $_POST['kepala_keluarga'];
	$status 			= $_POST['status'];

	$tahun_bangunan 	= $_POST['tahun_bangunan'];
	$nama_lengkap1		= $_POST['nama_lengkap1'];
	$nama_lengkap2 		= $_POST['nama_lengkap2'];
	$nama_lengkap3		= $_POST['nama_lengkap3'];
	$nama_lengkap4 		= $_POST['nama_lengkap4'];
	$nama_lengkap5 		= $_POST['nama_lengkap5'];

	$nik_1 				= $_POST['nik_1'];
	$nik_2 				= $_POST['nik_2'];
	$nik_3 				= $_POST['nik_3'];
	$nik_4 				= $_POST['nik_4'];
	$nik_5 				= $_POST['nik_5'];

	$pekerjaan_1		= $_POST['pekerjaan_1'];
	$pekerjaan_2		= $_POST['pekerjaan_2'];
	$pekerjaan_3		= $_POST['pekerjaan_3'];
	$pekerjaan_4		= $_POST['pekerjaan_4'];
	$pekerjaan_5		= $_POST['pekerjaan_5'];

	$jenis_kelamin_1	= $_POST['jenis_kelamin_1'];
	$jenis_kelamin_2	= $_POST['jenis_kelamin_2'];
	$jenis_kelamin_3	= $_POST['jenis_kelamin_3'];
	$jenis_kelamin_4	= $_POST['jenis_kelamin_4'];
	$jenis_kelamin_5	= $_POST['jenis_kelamin_5'];

	$status_hubungan_1	= $_POST['status_hubungan_1'];
	$status_hubungan_2	= $_POST['status_hubungan_2'];
	$status_hubungan_3	= $_POST['status_hubungan_3'];
	$status_hubungan_4	= $_POST['status_hubungan_4'];
	$status_hubungan_5	= $_POST['status_hubungan_5'];


	
/*
	$title 				= $_POST['title'];
	$content		 	= $_POST['content'];
	$category 			= $_POST['category'];
	$author		 		= $_POST['author'];

	$huruf_kecil 		= strtolower($title);
	$hapus_teks_minus	= str_replace("-", "", $huruf_kecil);
	$slug				= str_replace(" ", "-", $hapus_teks_minus);

*/

		
			include("koneksi.php");
			$sql = mysql_query("INSERT INTO t_bangunan(jenis_bangunan, owner, id_bangunan, no_rumah, lokasi, alamat, kepala_keluarga, status, tahun_bangunan, nama_lengkap1, nama_lengkap2, nama_lengkap3, nama_lengkap4, nama_lengkap5, nik_1, nik_2, nik_3, nik_4, nik_5, pekerjaan_1, pekerjaan_2, pekerjaan_3, pekerjaan_4, pekerjaan_5, jenis_kelamin_1, 	jenis_kelamin_2, jenis_kelamin_3, jenis_kelamin_4, jenis_kelamin_5, status_hubungan_1, status_hubungan_2, status_hubungan_3, status_hubungan_4, status_hubungan_5)VALUES('$jenis_bangunan', '$owner', '$id_bangunan', '$no_rumah', '$lokasi', '$alamat', '$kepala_keluarga', '$status', '$tahun_bangunan', '$nama_lengkap1', '$nama_lengkap2', '$nama_lengkap3', '$nama_lengkap4', '$nama_lengkap5', '$nik_1', '$nik_2', '$nik_3', '$nik_4', '$nik_5', '$pekerjaan_1', '$pekerjaan_2', '$pekerjaan_3', '$pekerjaan_4', '$pekerjaan_5', '$jenis_kelamin_1', '$jenis_kelamin_2', '$jenis_kelamin_3', '$jenis_kelamin_4', '$jenis_kelamin_5', '$status_hubungan_1', '$status_hubungan_2', '$status_hubungan_3', '$status_hubungan_4', '$status_hubungan_5')");
			$id = mysql_insert_id();
			$msg ="<font color='#3AB4A6'><b>Berhasil Ditambahkan</b></font>";
       
	


}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Bangunan - MG Asset Management</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- form wizard-->
		<link rel="stylesheet" href="assets/css/form-wizard.css">
		

        <!-- page specific plugin styles -->
		

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="assets/my_custome.css"/>
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin"><div id="navbar" class="navbar navbar-default  ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="?page=index" class="navbar-brand">
						<small>
							<i class="fa fa-th-large"></i>
							MG-Asset Management
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <!--
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon glyphicon glyphicon-edit"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>
                    -->

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
                
				<ul class="nav nav-list">
                    <li>
						<a href="index.php">
							<i class="menu-icon fa fa-folder-open blue"></i>
							<span class="menu-text"> Data Karyawan </span>
						</a>

						<b class="arrow"></b>
					</li>
                    <li class="active">
						<a href="data_bangunan.php">
							<i class="menu-icon fa fa-folder-o"></i>
							<span class="menu-text"> Data Bangunan </span>
						</a>
						<b class="arrow"></b>
					</li>
                    
                    <!--
                    <li  class="">
						<a href="?page=report">
							<i class="menu-icon fa fa-folder-o"></i>
							<span class="menu-text">Laporan </span>
						</a>

						<b class="arrow"></b>
					</li>
                    -->

				</ul><!-- /.nav-list -->
                <!--
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
                -->
			</div><div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Form Bangunan <?php echo "$msg";?></li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
        	<!-- form karyawan -->
        		<div>

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#data_bangunan" aria-controls="data_bangunan" role="tab" data-toggle="tab">1. Data Bangunan</a></li>
				    <li role="presentation"><a href="#penghuni_rumah" aria-controls="penghuni_rumah" role="tab" data-toggle="tab">2. Penghuni Rumah</a></li>
				    <!-- <li role="presentation"><a href="#photo_galllery" aria-controls="photo_galllery" role="tab" data-toggle="tab">3. Photo Gallery</a></li> -->
				   
				  </ul>
				  	<form action="form-bangunan.php" method="post" enctype="multipart/form-data">
					 	<div class="tab-content">
						  	<div role="tabpanel" class="tab-pane fade in active" id="data_bangunan">

							  	<div class="form-horizontal">
							  	  <div class="form-group">
								    <label for="jenis_bangunan" class="col-sm-2 control-label">Jenis Bangunan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="jenis_bangunan" name="jenis_bangunan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="owner" class="col-sm-2 control-label">Owner</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="owner" name="owner">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="id_bangunan" class="col-sm-2 control-label">ID Bangunan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="id_bangunan" name="id_bangunan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="no_rumah" class="col-sm-2 control-label">No Rumah</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="no_rumah" name="no_rumah" placeholder="ex. 12345">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="lokasi" name="lokasi">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="alamat" name="alamat">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="point_of_hire" class="col-sm-2 control-label">Tahun Bangunan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="tahun_bangunan" name="tahun_bangunan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="kepala_keluarga" class="col-sm-2 control-label">Kepala Keluarga</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="status" class="col-sm-2 control-label">Status</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="status" name="status">
								    </div>
								  </div>
								  
								</div>
						  	</div>
						  	<div role="tabpanel" class="tab-pane fade" id="penghuni_rumah">
					  			<div class="form-horizontal">
								  <div class="row">
									  <div class="col-xs-2">
									  	<label>Nama Lengkap</label>
									    <input type="text" class="form-control" name="nama_lengkap1" id="nama_lengkap1" placeholder="Nama Lengkap">
									    <br>
									    <input type="text" class="form-control" name="nama_lengkap2" id="nama_lengkap2" placeholder="Nama Lengkap ke-2">
									    <br>
									    <input type="text" class="form-control" name="nama_lengkap3" id="nama_lengkap3" placeholder="Nama Lengkap ke-3">
									    <br>
									    <input type="text" class="form-control" name="nama_lengkap4" id="nama_lengkap4" placeholder="Nama Lengkap ke-4">
									    <br>
									    <input type="text" class="form-control" name="nama_lengkap5" id="nama_lengkap5" placeholder="Nama Lengkap ke-5">
									  </div>
									  <div class="col-xs-1">
									  	<label>NIK</label>
									    <input type="text" class="form-control" name="nik_1" id="nik_1" placeholder="NIK">
									    <br>
									    <input type="text" class="form-control" name="nik_2" id="nik_2" placeholder="NIK ke-2">
									    <br>
									    <input type="text" class="form-control" name="nik_3" id="nik_3" placeholder="NIK ke-3">
									    <br>
									    <input type="text" class="form-control" name="nik_4" id="nik_4" placeholder="NIK ke-4">
									    <br>
									    <input type="text" class="form-control" name="nik_5" id="nik_5" placeholder="NIK ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Pekerjaan</label>
									    <input type="text" class="form-control" name="pekerjaan_1" id="pekerjaan_1" placeholder="Pekerjaan">
									    <br>
									    <input type="text" class="form-control" name="pekerjaan_2" id="pekerjaan_2" placeholder="Pekerjaan ke-2">
									    <br>
									    <input type="text" class="form-control" name="pekerjaan_3" id="pekerjaan_3" placeholder="Pekerjaan ke-3">
									     <br>
									    <input type="text" class="form-control" name="pekerjaan_4" id="pekerjaan_4" placeholder="Pekerjaan ke-4">
									    <br>
									    <input type="text" class="form-control" name="pekerjaan_5" id="pekerjaan_5" placeholder="Pekerjaan ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Jenis Kelamin</label>
									    <input type="text" class="form-control" name="jenis_kelamin_1" id="jenis_kelamin_1" placeholder="Jenis Kelamin">
									    <br>
									    <input type="text" class="form-control" name="jenis_kelamin_2" id="jenis_kelamin_2" placeholder="Jenis Kelamin ke-2">
									    <br>
									    <input type="text" class="form-control" name="jenis_kelamin_3" id="jenis_kelamin_3" placeholder="Jenis Kelamin ke-3">
									     <br>
									    <input type="text" class="form-control" name="jenis_kelamin_4" id="jenis_kelamin_4" placeholder="Jenis Kelamin ke-4">
									    <br>
									    <input type="text" class="form-control" name="jenis_kelamin_5" id="jenis_kelamin_5" placeholder="Jenis Kelamin ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Status Hubungan</label>
									    <input type="text" class="form-control" name="status_hubungan_1" id="status_hubungan_1" placeholder="Status Hubungan">
									    <br>
									    <input type="text" class="form-control" name="status_hubungan_2" id="status_hubungan_2" placeholder="Status Hubungan ke-2">
									    <br>
									    <input type="text" class="form-control" name="status_hubungan_3" id="status_hubungan_3" placeholder="Status Hubungan ke-3">
									     <br>
									    <input type="text" class="form-control" name="status_hubungan_4" id="status_hubungan_4" placeholder="Status Hubungan ke-4">
									    <br>
									    <input type="text" class="form-control" name="status_hubungan_5" id="status_hubungan_5" placeholder="Status Hubungan ke-5">
									  </div>
									</div>
									<div class="row">
										<div class="col-xs-3">
									      <input type="submit" value="Simpan" name="submit">
									    </div>
									</div>
								</div>
					  		</div>					  		
						</div>
					</form>
				</div>

        	<!-- -->

		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->	<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">MandiriGroup</span>
							Application &copy;2017
                    </div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>
        
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
                                
			
			})
		</script>
		<!-- form wizard js -->

		
		<script>
			$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});
		</script>
		<!-- end form wizard -->
	</body>
</html>
