<?php
$msg = "";
if(isset($_POST['submit']))
{
	$no_induk 					= $_POST['no_induk'];
	$nama_lengkap				= $_POST['nama_lengkap'];
	$jabatan 					= $_POST['jabatan'];
	$point_of_hire 				= $_POST['point_of_hire'];
	$perusahaan 				= $_POST['perusahaan'];
	$no_rumah 					= $_POST['no_rumah'];
	$lokasi 					= $_POST['lokasi'];
	$status 					= $_POST['status'];
	$tgl_masuk_mg				= $_POST['tgl_masuk_mg'];
	$tgl_akhir_kontrak 			= $_POST['tgl_akhir_kontrak'];
	$departemen 				= $_POST['departemen'];
	$status_karyawan 			= $_POST['status_karyawan'];
	$alamat_tinggal 			= $_POST['alamat_tinggal'];
	$alamat_ktp 				= $_POST['alamat_ktp'];
	$jenis_kelamin 				= $_POST['jenis_kelamin'];
	$tempat_lahir 				= $_POST['tempat_lahir'];
	$tanggal_lahir 				= $_POST['tanggal_lahir'];
	$telepon 					= $_POST['telepon'];
	$telp_emergency 			= $_POST['telp_emergency'];
	$agama 						= $_POST['agama'];
	$golongan_darah 			= $_POST['golongan_darah'];
	$no_ktp 					= $_POST['no_ktp'];
	$masa_berlaku_ktp 			= $_POST['masa_berlaku_ktp'];
	$sim_jenis 					= $_POST['sim_jenis'];
	$no_sim						= $_POST['no_sim'];
	$tgl_berakhir_sim			= $_POST['tgl_berakhir_sim'];
	$tinggi_badan 				= $_POST['tinggi_badan'];
	$berat_badan 				= $_POST['berat_badan'];
	$npwp 						= $_POST['npwp'];
	$no_jamsostek 				= $_POST['no_jamsostek'];
	$no_rekening 				= $_POST['no_rekening'];
	$nama_bank 					= $_POST['nama_bank'];
	$atas_nama_bank 			= $_POST['atas_nama_bank'];
	$pendidikan_terakhir 		= $_POST['pendidikan_terakhir'];
	$nama_sekolah 				= $_POST['nama_sekolah'];
	$fak_jurusan 				= $_POST['fak_jurusan'];
	$tahun_lulus 				= $_POST['tahun_lulus'];
	$perusahaan1 				= $_POST['perusahaan1'];
	$perusahaan2 				= $_POST['perusahaan2'];
	$perusahaan3 				= $_POST['perusahaan3'];
	$perusahaan4 				= $_POST['perusahaan4'];
	$perusahaan5 				= $_POST['perusahaan5'];
	$jabatan1 					= $_POST['jabatan1'];
	$jabatan2 					= $_POST['jabatan2'];
	$jabatan3 					= $_POST['jabatan3'];
	$jabatan4 					= $_POST['jabatan4'];
	$jabatan5 					= $_POST['jabatan5'];
	$tahun1 					= $_POST['tahun1'];
	$tahun2 					= $_POST['tahun2'];
	$tahun3 					= $_POST['tahun3'];
	$tahun4 					= $_POST['tahun4'];
	$tahun5 					= $_POST['tahun5'];
	$namakeluarga1 				= $_POST['namakeluarga1'];
	$namakeluarga2 				= $_POST['namakeluarga2'];
	$namakeluarga3 				= $_POST['namakeluarga3'];
	$namakeluarga4 				= $_POST['namakeluarga4'];
	$namakeluarga5 				= $_POST['namakeluarga5'];
	$hubungankeluarga1			= $_POST['hubungankeluarga1'];
	$hubungankeluarga2			= $_POST['hubungankeluarga2'];
	$hubungankeluarga3			= $_POST['hubungankeluarga3'];
	$hubungankeluarga4			= $_POST['hubungankeluarga4'];
	$hubungankeluarga5			= $_POST['hubungankeluarga5'];
	$tgl_lahir_keluarga1 		= $_POST['tgl_lahir_keluarga1'];
	$tgl_lahir_keluarga2 		= $_POST['tgl_lahir_keluarga2'];
	$tgl_lahir_keluarga3 		= $_POST['tgl_lahir_keluarga3'];
	$tgl_lahir_keluarga4 		= $_POST['tgl_lahir_keluarga4'];
	$tgl_lahir_keluarga5 		= $_POST['tgl_lahir_keluarga5'];
	$jenis_kelamin_keluarga1 	= $_POST['jenis_kelamin_keluarga1'];
	$jenis_kelamin_keluarga2 	= $_POST['jenis_kelamin_keluarga2'];
	$jenis_kelamin_keluarga3 	= $_POST['jenis_kelamin_keluarga3'];
	$jenis_kelamin_keluarga4 	= $_POST['jenis_kelamin_keluarga4'];
	$jenis_kelamin_keluarga5 	= $_POST['jenis_kelamin_keluarga5'];
	
/*
	$title 				= $_POST['title'];
	$content		 	= $_POST['content'];
	$category 			= $_POST['category'];
	$author		 		= $_POST['author'];

	$huruf_kecil 		= strtolower($title);
	$hapus_teks_minus	= str_replace("-", "", $huruf_kecil);
	$slug				= str_replace(" ", "-", $hapus_teks_minus);

*/

		if($_FILES['fileField']['tmp_name'] != ""){
		$maxfilesize = 2000000;
		if($_FILES['fileField']['size'] > $maxfilesize){
			$msg = "Gambar terlalu besar, silahkan coba lagi.";
		}
		elseif(!preg_match("/\.(gif|jpg|JPG|png|bmp)$/i", $_FILES['fileField']['name'])){
			$msg= "Gambar yang anda masukkan tidak sesuai format yang disediakan, silahkan coba lagi.";

		}
		else{
			$newname= ".jpg";
			include("koneksi.php");
			$sql = mysql_query("INSERT INTO t_karyawan(no_induk, nama_lengkap, jabatan, point_of_hire, perusahaan, no_rumah, lokasi, status, tgl_masuk_mg, tgl_akhir_kontrak, departemen, status_karyawan, alamat_tinggal, alamat_ktp, jenis_kelamin, tempat_lahir, tanggal_lahir, telepon, telp_emergency, agama, golongan_darah, no_ktp, masa_berlaku_ktp, sim_jenis, no_sim, tgl_berakhir_sim, tinggi_badan, berat_badan, npwp, no_jamsostek, no_rekening, nama_bank, atas_nama_bank, pendidikan_terakhir, nama_sekolah, fak_jurusan, tahun_lulus, perusahaan1, perusahaan2, perusahaan3, perusahaan4, perusahaan5, jabatan1, jabatan2, jabatan3, jabatan4, jabatan5, tahun1, tahun2, tahun3, tahun4, tahun5, namakeluarga1, namakeluarga2, namakeluarga3, namakeluarga4, namakeluarga5, hubungankeluarga1, hubungankeluarga2, hubungankeluarga3, hubungankeluarga4, hubungankeluarga5, tgl_lahir_keluarga1, tgl_lahir_keluarga2, tgl_lahir_keluarga3, tgl_lahir_keluarga4, tgl_lahir_keluarga5, jenis_kelamin_keluarga1, jenis_kelamin_keluarga2, jenis_kelamin_keluarga3, jenis_kelamin_keluarga4, jenis_kelamin_keluarga5)VALUES('$no_induk', '$nama_lengkap', '$jabatan', '$point_of_hire', '$perusahaan', '$no_rumah', '$lokasi', '$status', '$tgl_masuk_mg', '$tgl_akhir_kontrak', '$departemen', '$status_karyawan', '$alamat_tinggal', '$alamat_ktp', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$telepon', '$telp_emergency', '$agama', '$golongan_darah', '$no_ktp', '$masa_berlaku_ktp', '$sim_jenis', '$no_sim', '$tgl_berakhir_sim', '$tinggi_badan', '$berat_badan', '$npwp', '$no_jamsostek', '$no_rekening', '$nama_bank', '$atas_nama_bank', '$pendidikan_terakhir', '$nama_sekolah', '$fak_jurusan', '$tahun_lulus', '$perusahaan1', '$perusahaan2', '$perusahaan3', '$perusahaan4', '$perusahaan5', '$jabatan1', '$jabatan2', '$jabatan3', '$jabatan4', '$jabatan5', '$tahun1', '$tahun2', '$tahun3', '$tahun4', '$tahun5', '$namakeluarga1', '$namakeluarga2', '$namakeluarga3', '$namakeluarga4', '$namakeluarga5', '$hubungankeluarga1', '$hubungankeluarga2', '$hubungankeluarga3', '$hubungankeluarga4', '$hubungankeluarga5', '$tgl_lahir_keluarga1', '$tgl_lahir_keluarga2', '$tgl_lahir_keluarga3', '$tgl_lahir_keluarga4', '$tgl_lahir_keluarga5', '$jenis_kelamin_keluarga1', '$jenis_kelamin_keluarga2', '$jenis_kelamin_keluarga3', '$jenis_kelamin_keluarga4', '$jenis_kelamin_keluarga5')");
			$id = mysql_insert_id();
			$place_file = move_uploaded_file( $_FILES['fileField']['tmp_name'], "./images/upload/$id".$newname);
			$msg ="<font color='#3AB4A6'><b>Berhasil Ditambahkan</b></font>";
         }
	}


}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Karyawan - MG Asset Management</title>

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
				<li class="active">Form Karyawan <?php echo "$msg";?></li>
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
				    <li role="presentation" class="active"><a href="#data_karyawan" aria-controls="data_karyawan" role="tab" data-toggle="tab">1. Data Karyawan</a></li>
				    <li role="presentation"><a href="#status_karyawan" aria-controls="status_karyawan" role="tab" data-toggle="tab">2. Status Karyawan</a></li>
				    <li role="presentation"><a href="#data_pribadi" aria-controls="data_pribadi" role="tab" data-toggle="tab">3. Data Pribadi</a></li>
				    <li role="presentation"><a href="#riwayat_pendidikan" aria-controls="riwayat_pendidikan" role="tab" data-toggle="tab">4. Riwayat Pendidikan</a></li>
				    <li role="presentation"><a href="#pengalaman_kerja" aria-controls="pengalaman_kerja" role="tab" data-toggle="tab">5. Pengalaman Kerja</a></li>
				    <li role="presentation"><a href="#data_keluarga" aria-controls="data_keluarga" role="tab" data-toggle="tab">6. Data Keluarga</a></li>
				  </ul>
				  	<form action="form-karyawan.php" method="post" enctype="multipart/form-data">
					 	<div class="tab-content">
						  	<div role="tabpanel" class="tab-pane fade in active" id="data_karyawan">

							  	<div class="form-horizontal">
								  <div class="form-group">
								    <label for="no_induk" class="col-sm-2 control-label">No Induk</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="no_induk" name="no_induk" placeholder="ex. 12345">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="jabatan" name="jabatan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="point_of_hire" class="col-sm-2 control-label">Point of Hire</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="point_of_hire" name="point_of_hire">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="perusahaan" class="col-sm-2 control-label">Perusahaan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="perusahaan" name="perusahaan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="no_rumah" class="col-sm-2 control-label">No. Rumah</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="no_rumah" name="no_rumah">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="lokasi" name="lokasi">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="status" class="col-sm-2 control-label">Status</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="status" name="status">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="foto" class="col-sm-2 control-label">Foto</label>
								    <div class="col-sm-3">
								      <input type="file" class="form-control" name="fileField" id="fileField"/>
            						  <input name="parse_var" type="hidden"/>
								    </div>
								  </div>
								</div>
						  	</div>
					  		<div role="tabpanel" class="tab-pane fade" id="status_karyawan">
					  			<div class="form-horizontal">
								  <div class="form-group">
								    <label for="tgl_masuk_mg" class="col-sm-2 control-label">Tanggal Masuk MG</label>
								    <div class="col-sm-3">
								      <input type="date" class="form-control" id="tgl_masuk_mg" name="tgl_masuk_mg">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="tgl_akhir_kontrak" class="col-sm-2 control-label">Tanggal Akhir Kontrak</label>
								    <div class="col-sm-3">
								      <input type="date" class="form-control" id="tgl_akhir_kontrak" name="tgl_akhir_kontrak">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="departemen" class="col-sm-2 control-label">Departemen</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="departemen" name="departemen">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="status_karyawan" class="col-sm-2 control-label">Status Karyawan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="status_karyawan" name="status_karyawan">
								    </div>
								  </div>							  
								</div>
					  		</div>
					  		<div role="tabpanel" class="tab-pane fade" id="data_pribadi">
					  			<div class="form-horizontal">							 
								  <div class="form-group">
								    <label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="alamat_tinggal" name="alamat_tinggal">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="alamat_ktp" class="col-sm-2 control-label">Alamat KTP</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
								    <div class="col-sm-3">
								      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								      	<option value="">Silahkan Pilih</option>
								      	<option value="Laki-Laki">Laki-Laki</option>
								      	<option value="Perempuan">Perempuan</option>
								      </select>							      
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
								    <div class="col-sm-3">
								      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="telepon" class="col-sm-2 control-label">Telepon</label>
								    <div class="col-sm-3">
								      <input type="number" class="form-control" id="telepon" name="telepon">
								    </div>
								  </div>	
								  <div class="form-group">
								    <label for="telp_emergency" class="col-sm-2 control-label">Telp Emergency</label>
								    <div class="col-sm-3">
								      <input type="number" class="form-control" id="telp_emergency" name="telp_emergency">
								    </div>
								  </div>	
								  <div class="form-group">
								    <label for="agama" class="col-sm-2 control-label">Agama</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="agama" name="agama">
								    </div>
								  </div>	
								  <div class="form-group">
								    <label for="golongan_darah" class="col-sm-2 control-label">Golongan Darah</label>
								    <div class="col-sm-1">
								      <input type="text" class="form-control" id="golongan_darah" name="golongan_darah">
								    </div>
								  </div>	
								  <div class="form-group">
								    <label for="no_ktp" class="col-sm-2 control-label">NO KTP</label>
								    <div class="col-sm-3">
								      <input type="number" class="form-control" id="no_ktp" name="no_ktp">
								    </div>
								  </div>
								   <div class="form-group">
								    <label for="masa_berlaku_ktp" class="col-sm-2 control-label">Masa Berlaku KTP</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="masa_berlaku_ktp" name="masa_berlaku_ktp">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="sim_jenis" class="col-sm-2 control-label">Jenis SIM</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="sim_jenis" name="sim_jenis">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="no_sim" class="col-sm-2 control-label">NO SIM</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="no_sim" name="no_sim">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="tgl_berakhir_sim" class="col-sm-2 control-label">Tanggal Berakhir SIM</label>
								    <div class="col-sm-3">
								      <input type="date" class="form-control" id="tgl_berakhir_sim" name="tgl_berakhir_sim">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="tinggi_badan" class="col-sm-2 control-label">Tinggi / Berat Badan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="cm">  
								    </div>
								    <div class="col-sm-5">
								    	<input type="text" class="form-control" id="berat_badan" name="berat_badan" placeholder="kg"> 
								    </div>
								  </div>							   	
								   <div class="form-group">
								    <label for="npwp" class="col-sm-2 control-label">NPWP</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="npwp" name="npwp">
								    </div>							   
								  </div>	
								   <div class="form-group">
								    <label for="no_jamsostek" class="col-sm-2 control-label">No. Jamsostek</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="no_jamsostek" name="no_jamsostek">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="no_rekening" class="col-sm-2 control-label">No. Rekening</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="no_rekening" name="no_rekening">
								    </div>
								  </div>	
								   <div class="form-group">
								    <label for="nama_bank" class="col-sm-2 control-label">Nama Bank</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="nama_bank" name="nama_bank">
								    </div>
								  </div>
								   <div class="form-group">
								    <label for="tgl_masuk_mg" class="col-sm-2 control-label">Atas Nama Bank</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="atas_nama_bank" name="atas_nama_bank">
								    </div>
								  </div>									  
								</div>
					  		</div>
					  		<div role="tabpanel" class="tab-pane fade" id="riwayat_pendidikan">
					  			<div class="form-horizontal">
								  <div class="form-group">
								    <label for="pendidikan_terakhir" class="col-sm-2 control-label">Pendidikan Terakhir</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="nama_sekolah" class="col-sm-2 control-label">Nama Sekolah</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="fak_jurusan" class="col-sm-2 control-label">Fak/Jurusan</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="fak_jurusan" name="fak_jurusan">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="tahun_lulus" class="col-sm-2 control-label">Tahun Lulus</label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus">
								    </div>
								  </div>							  
								</div>
					  		</div>
					  		<div role="tabpanel" class="tab-pane fade" id="pengalaman_kerja">
					  			<div class="form-horizontal">
								  <div class="row">
									  <div class="col-xs-2">
									  	<label>Perusahaan</label>
									    <input type="text" class="form-control" name="perusahaan1" id="perusahaan1" placeholder="perusahaan">
									    <br>
									    <input type="text" class="form-control" name="perusahaan2" id="perusahaan2" placeholder="perusahaan ke-2">
									    <br>
									    <input type="text" class="form-control" name="perusahaan3" id="perusahaan3" placeholder="perusahaan ke-3">
									    <br>
									    <input type="text" class="form-control" name="perusahaan4" id="perusahaan4" placeholder="perusahaan ke-4">
									    <br>
									    <input type="text" class="form-control" name="perusahaan5" id="perusahaan5" placeholder="perusahaan ke-5">
									  </div>
									  <div class="col-xs-3">
									  	<label>Jabatan</label>
									    <input type="text" class="form-control" name="jabatan1" id="jabatan1" placeholder="Jabatan">
									    <br>
									    <input type="text" class="form-control" name="jabatan2" id="jabatan2" placeholder="Jabatan ke-2">
									    <br>
									    <input type="text" class="form-control" name="jabatan3" id="jabatan3" placeholder="Jabatan ke-3">
									    <br>
									    <input type="text" class="form-control" name="jabatan4" id="jabatan4" placeholder="Jabatan ke-4">
									    <br>
									    <input type="text" class="form-control" name="jabatan5" id="jabatan5" placeholder="Jabatan ke-5">
									  </div>
									  <div class="col-xs-4">
									  	<label>Tahun</label>
									    <input type="text" class="form-control" name="tahun1" id="tahun1" placeholder="Tahun">
									    <br>
									    <input type="text" class="form-control" name="tahun2" id="tahun2" placeholder="Tahun ke-2">
									    <br>
									    <input type="text" class="form-control" name="tahun3" id="tahun3" placeholder="Tahun ke-3">
									     <br>
									    <input type="text" class="form-control" name="tahun4" id="tahun4" placeholder="Tahun ke-4">
									    <br>
									    <input type="text" class="form-control" name="tahun5" id="tahun5" placeholder="Tahun ke-5">
									  </div>
									</div>
								</div>
					  		</div>
					  		<div role="tabpanel" class="tab-pane fade" id="data_keluarga">
					  			<div class="form-horizontal">
								  <div class="row">
									  <div class="col-xs-3">
									  	<label>Nama</label>
									    <input type="text" class="form-control" name="namakeluarga1" id="namakeluarga1" placeholder="Nama">
									    <br>
									    <input type="text" class="form-control" name="namakeluarga2" id="namakeluarga2" placeholder="Nama ke-2">
									    <br>
									    <input type="text" class="form-control" name="namakeluarga3" id="namakeluarga3" placeholder="Nama ke-3">
									    <br>
									    <input type="text" class="form-control" name="namakeluarga4" id="namakeluarga4" placeholder="Nama ke-4">
									    <br>
									    <input type="text" class="form-control" name="namakeluarga5" id="namakeluarga5" placeholder="Nama ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Hubungan</label>
									    <input type="text" class="form-control" name="hubungankeluarga1" id="jabatan1" placeholder="Hubungan">
									    <br>
									    <input type="text" class="form-control" name="hubungankeluarga2" id="hubungankeluarga2" placeholder="Hubungan ke-2">
									    <br>
									    <input type="text" class="form-control" name="hubungankeluarga3" id="hubungankeluarga3" placeholder="Hubungan ke-3">
									    <br>
									    <input type="text" class="form-control" name="hubungankeluarga4" id="hubungankeluarga4" placeholder="Hubungan ke-4">
									    <br>
									    <input type="text" class="form-control" name="hubungankeluarga5" id="hubungankeluarga5" placeholder="Hubungan ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Tanggal Lahir</label>
									    <input type="text" class="form-control" name="tgl_lahir_keluarga1" id="tahun1" placeholder="Tanggal Lahir">
									    <br>
									    <input type="text" class="form-control" name="tgl_lahir_keluarga2" id="tgl_lahir_keluarga2" placeholder="Tanggal Lahir ke-2">
									    <br>
									    <input type="text" class="form-control" name="tgl_lahir_keluarga3" id="tgl_lahir_keluarga3" placeholder="Tanggal Lahir ke-3">
									     <br>
									    <input type="text" class="form-control" name="tgl_lahir_keluarga4" id="tgl_lahir_keluarga4" placeholder="Tanggal Lahir ke-4">
									    <br>
									    <input type="text" class="form-control" name="tgl_lahir_keluarga5" id="tgl_lahir_keluarga5" placeholder="Tanggal Lahir ke-5">
									  </div>
									  <div class="col-xs-2">
									  	<label>Jenis Kelamin</label>
									    <select name="jenis_kelamin_keluarga1" id="jenis_kelamin_keluarga1" class="form-control">
								      		<option value="-">Silahkan Pilih</option>
								      		<option value="Laki-Laki">Laki-Laki</option>
								      		<option value="Perempuan">Perempuan</option>
								      	</select>	
									    <br>
									    <select name="jenis_kelamin_keluarga2" id="jenis_kelamin_keluarga2" class="form-control">
								      		<option value="-">Silahkan Pilih</option>
								      		<option value="Laki-Laki">Laki-Laki</option>
								      		<option value="Perempuan">Perempuan</option>
								      	</select>	
									    <br>
									    <select name="jenis_kelamin_keluarga3" id="jenis_kelamin_keluarga3" class="form-control">
								      		<option value="-">Silahkan Pilih</option>
								      		<option value="Laki-Laki">Laki-Laki</option>
								      		<option value="Perempuan">Perempuan</option>
								      	</select>	
									     <br>
									    <select name="jenis_kelamin_keluarga4" id="jenis_kelamin_keluarga4" class="form-control">
								      		<option value="-">Silahkan Pilih</option>
								      		<option value="Laki-Laki">Laki-Laki</option>
								      		<option value="Perempuan">Perempuan</option>
								      	</select>	
									    <br>
									    <select name="jenis_kelamin_keluarga5" id="jenis_kelamin_keluarga5" class="form-control">
								      		<option value="-">Silahkan Pilih</option>
								      		<option value="Laki-Laki">Laki-Laki</option>
								      		<option value="Perempuan">Perempuan</option>
								      	</select>	
									  </div>
									</div>
									<br>
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
