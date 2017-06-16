<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>MG - Asset Management</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

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
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
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
                    <li class="active">
						<a href="index.php">
							<i class="menu-icon fa fa-folder-open blue"></i>
							<span class="menu-text"> Data Karyawan </span>
						</a>

						<b class="arrow"></b>
					</li>
                    <li  class="">
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
				<li class="active">Data Karyawan</li>
			</ul><!-- /.breadcrumb -->

			
		</div>
		<div class="page-content">
        
<!--==============================Start Content Table ===================================--->	
    <div style="opacity: 1;" class="widget-box  ui-sortable-handle light-border" id="widget-box-2">
	   <div class="widget-header">
			<h5 class="widget-title bigger">
				<i class="ace-icon fa fa-institution"></i>
				Daftar Data Karyawan
			</h5>
            <div class="widget-toolbar">
				<a href="form-karyawan.php" class="">
					<i class="ace-icon fa fa-plus-square"></i> Tambah Data Baru
				</a>
			</div>           
		</div>
        <div class="widget-body">
        	<div class="widget-main no-padding">
        		<!-- Awal HTML data table -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Jabatan</th>
                            <th>Point OF Hire</th>
                            <th>Perusahaan</th>
                            <th>No. Rumah</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>No. Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Jabatan</th>
                            <th>Point OF Hire</th>
                            <th>Perusahaan</th>
                            <th>No. Rumah</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    	include("koneksi.php");
							$query="SELECT id, no_induk, nama_lengkap, jabatan, point_of_hire, perusahaan, no_rumah, lokasi, status FROM t_karyawan";
							$sql= mysql_query($query);

							while($row = mysql_fetch_array($sql))
							{
								
								$id 						= $row['id'];
								$no_induk 					= $row['no_induk'];
								$nama_lengkap				= $row['nama_lengkap'];
								$jabatan 					= $row['jabatan'];
								$point_of_hire 				= $row['point_of_hire'];
								$perusahaan 				= $row['perusahaan'];
								$no_rumah 					= $row['no_rumah'];
								$lokasi 					= $row['lokasi'];
								$status 					= $row['status'];
					?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $no_induk; ?></td>
                            <td><?php echo $nama_lengkap; ?></td>
                            <td><?php echo $jabatan; ?></td>
                            <td><?php echo $point_of_hire; ?></td>
                            <td><?php echo $perusahaan; ?></td>
                            <td><?php echo $no_rumah; ?></td>
                            <td><?php echo $lokasi; ?></td>
                            <td><span class="label label-success"><?php echo $status;?></span></td>
                            <td><a href="karyawan.php?id=<?php echo $id; ?>"><span class="label label-info"> Details</span></a> <a href=""><span class="label label-warning">Edit</span></a> <a href=""><span class="label label-danger">Delete</span></a></td>
                        </tr> 

                    <?php } ?>                      
                    </tbody>
                </table>
                <!-- Akhir HTML data table -->
        	</div>
        </div>        
  </div>
<!--==============================End Content Table ===================================--->	
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

		 <!-- function JavaScript untuk memanggil id="#example" sih data tables-->
	    <script type="text/javascript">
	    	$(document).ready(function() {
			    $('#example').DataTable();
			} );
	    </script>
    <!-- akhir function JavaScript untuk memanggil id="#example" sih data tables-->

		

	</body>
</html>
