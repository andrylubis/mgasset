<?php 
    include("koneksi.php");
    $sql=mysql_query ("SELECT * FROM t_karyawan WHERE id='$_GET[id]' ");
    $row= mysql_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Karyawan <?php echo $row['nama_lengkap'];?></title>
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
    <style type="text/css">
        .modal-dialog {width:600px;}
        .thumbnail {margin-bottom:6px;}
    </style>
    <script src="assets/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
     <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <style type="text/css">
    .tdTitle{
        font-weight: ;
        font-style: ;
        background-colorX: #EEEEEE;
        padding: 2px;
        padding-left: 5px;
    }
    .tdContent{
        font-weight: bold;
        padding-left: 5px;
    }
    .trData1{
        border: 1px solid;
        font-weight: bold; 
        background: #EEEEEE;
    }
    .trData1 td{
        border-left: 1px solid;
        border-right: 1px solid;
    }
    .trData2{
        border: 1px solid; 
    }
    .trData2 td{
        border-left: 1px solid;
        border-right: 1px solid;
    }
    .photo{
        width: 130px; height: 160px; padding-top: 5px; padding-bottom: 3px;
    }
    .tdDataLeft2{
        background: #EAEAEA; font-weight: bold; text-align: center; font-size: large;
    }
    </style>  
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
				</ul><!-- /.nav-list -->
                <!--
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
                -->
			</div>
            <div class="main-content">
   <div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Data Bangunan</li>
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
  <!--==================================Start Content Table ===================================--->	
  <div class="row">
    <div class="col-xs-10">
    <table id="tb_data_bangunan" style="width: 75%;" class="">
        <tbody>                        
           <tr class="trData">
                <td class="tdDataLeft2" colspan="9"><?php echo $row['perusahaan'];?></td> <!--Nama Peusahaan-->
            </tr>
        </tbody>
    </table>
    <br />
    <br />
    <table id="tb_data_bangunan" style="width: 75%;" class="">
        <thead>
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">DATA KARYAWAN</td>
            </tr>
        </thead>
        <tbody>                   
            <tr class="trData">
                <td class="tdTitle">Nama Lengkap &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['nama_lengkap'];?></td> <!--nama lengkap-->
                <td class="" colspan="6" rowspan="5" style="text-align: right;">
                    <div style="" ><img class="photo" src="images/upload/<?php echo $row['id']; ?>.jpg" width="125px" height="190px"/></div> <!--photo karyawan-->
                </td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">No Induk &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['no_induk'];?></td><!--no induk-->
                <td colspan="2"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Jabatan &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['jabatan'];?></td><!--jabatan-->
                <td colspan="2"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Status &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['status'];?></td><!--status aktiv/tidak aktif-->
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">STATUS KARYAWAN</td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Tanggal Masuk MG &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tgl_masuk_mg'];?></td><!--tanggal masuk-->
                <td class="tdTitle">Departemen &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['departemen'];?></td><!--departemen-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Tanggal Akhir Kontrak &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tgl_akhir_kontrak'];?></td><!--tanggal akhir kontrak-->
                <td class="tdTitle">Status Karyawan </td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['status_karyawan'];?></td><!--status karyawan /staff/kontrak/freelance-->
                <td class="" colspan="3"></td>
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">DATA PRIBADI</td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Alamat Tinggal &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent" colspan="7"><?php echo $row['alamat_tinggal'];?></td><!--alamat tinggal-->
            </tr>
            <tr class="trData">
                <td class="tdTitle">Alamat KTP &nbsp;</td> 
                <td class="tdTitle">:</td>
                <td class="tdContent" colspan="7"><?php echo $row['alamat_ktp'];?></td><!--alamat KTP-->
            </tr>
            <tr class="trData">
                <td class="tdTitle">Jenis Kelamin &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['jenis_kelamin'];?></td><!--Jenis Kelamin-->
                <td class="tdTitle">SIM Jenis </td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['sim_jenis'];?></td><!--Jenis SIM-->
                <td class="" colspan="3"></td>
            </tr>
            <tr cl	ass="trData">
                <td class="tdTitle">Tempat Lahir &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tempat_lahir'];?></td><!--Tempat Lahir-->
                <td class="tdTitle">No SIM</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['no_sim'];?></td><!--No SIM-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Tanggal Lahir &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tanggal_lahir'];?></td><!--Tenggal Lahir (dd/mm/yyyy)-->
                <td class="tdTitle">Tanggal Berahir</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tgl_berakhir_sim'];?></td><!--Tanggal Berahir SIM-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Telepon &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['telepon'];?></td><!--Telepon-->
                <td class="tdTitle">Tinggi / Berat Badan </td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['berat_badan'];?></td><!--Berat Badan-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Telp. Emergency &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"> <?php echo $row['telp_emergency'];?></td><!--Tel Emergency-->
                <td class="tdTitle">NPWP &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['npwp'];?> </td><!--NPWP-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Agama &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['agama'];?></td><!--Agama-->
                <td class="tdTitle">No. Jamsostek &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['no_jamsostek'];?></td><!--Jamsostek-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Golongan Darah &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['golongan_darah'];?></td><!--Golongan Darah-->
                <td class="tdTitle">No. Rekening &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['no_rekening'];?></td><!--No Rekening-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">No. KTP &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['no_ktp'];?></td><!--No KTP-->
                <td class="tdTitle">Nama Bank &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['nama_bank'];?></td><!--Nama Bank dan Cabang-->
                <td class="" colspan="3"></td>
            </tr>
            <tr class="trData">
                <td class="tdTitle">Masa Berlaku&nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['masa_berlaku_ktp'];?></td><!--Masa Berlaku KTP-->
                <td class="tdTitle">Atas Nama &nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['atas_nama_bank'];?></td><!--Atas Nama rekening-->
                <td class="" colspan="3"></td>
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>                         
            <tr class="trData">
                <td class="" colspan="3" style="background: #EAEAEA; font-weight: bold;">RIWAYAT PENDIDIKAN</td>

            </tr>
            <tr class="trData">
                <td class="tdTitle">Pendidikan Terakhir&nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['pendidikan_terakhir'];?></td><!--Pendidikan Terahir-->
                <!--<td class="tdContent" colspan="3">?????</td><!--Riwayat Pendidikan-->
                <!--<td class="tdContent" colspan="3">?????</td> <!--Tahun-->                
            </tr>
            <tr class="trData">
                <td class="tdTitle">Nama Sekolah&nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['nama_sekolah'];?></td><!--Nama Sekolah-->
                <!--<td class="tdContent" colspan="3">?????</td><!--Riwayat Pendidikan-->
                <!--<td class="tdContent" colspan="3">?????</td> <!--Tahun-->                
            </tr>
            <tr class="trData">
                <td class="tdTitle">Fak/Jurusan&nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['fak_jurusan'];?></td><!--Fakultas/Jurusan-->
                <!--<td class="tdContent" colspan="3">?????</td><!--Riwayat Pendidikan-->
                <!--<td class="tdContent" colspan="3">?????</td> <!--Tahun-->                
            </tr>
            <tr class="trData">
                <td class="tdTitle">Tahun Lulus&nbsp;</td>
                <td class="tdTitle">:</td>
                <td class="tdContent"><?php echo $row['tahun_lulus'];?></td><!--Tahun Lulus-->
                <!--<td class="tdContent" colspan="3">?????</td><!--Riwayat Pendidikan-->
                <!--<td class="tdContent" colspan="3">?????</td> <!--Tahun-->                
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <!---
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">PENDIDIKAN NON FORMAL/TRAINING/SEMINAR</td>
            </tr>
            <tr class="trData">
                <td class="tdContent" colspan="3">Jenis Training&nbsp;</td>
                <td class="tdContent">Tahun</td>
                <td class="tdContent" colspan="5">Penyelenggara</td>           
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3">????</td>Jenis Training
                <td class="tdTitle">???</td>Tahun
                <td class="tdTitle" colspan="5">???</td>Penyelenggara           
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            -->
            
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">PENGALAMAN KERJA</td>
            </tr>
            <tr class="trData">
                <td class="tdContent" colspan="3">Perusahaan&nbsp;</td>
                <td class="tdContent" colspan="3">Jabatan</td>
                <td class="tdContent" colspan="3">Tahun</td>
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['perusahaan1'];?></td> <!--Perusahaan-->
                <td class="tdTitle" colspan="3"><?php echo $row['jabatan1'];?></td> <!--Jabatan-->
                <td class="tdTitle" colspan="3"><?php echo $row['tahun1'];?></td> <!--Tahun-->
            </tr>
            <tr class="trData">
                 <td class="tdTitle" colspan="3"><?php echo $row['perusahaan2'];?></td> <!--Perusahaan-->
                <td class="tdTitle" colspan="3"><?php echo $row['jabatan2'];?></td> <!--Jabatan-->
                <td class="tdTitle" colspan="3"><?php echo $row['tahun2'];?></td> <!--Tahun-->
            </tr>
            <tr class="trData">
                 <td class="tdTitle" colspan="3"><?php echo $row['perusahaan3'];?></td> <!--Perusahaan-->
                <td class="tdTitle" colspan="3"><?php echo $row['jabatan3'];?></td> <!--Jabatan-->
                <td class="tdTitle" colspan="3"><?php echo $row['tahun3'];?></td> <!--Tahun-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['perusahaan4'];?></td> <!--Perusahaan-->
                <td class="tdTitle" colspan="3"><?php echo $row['jabatan4'];?></td> <!--Jabatan-->
                <td class="tdTitle" colspan="3"><?php echo $row['tahun4'];?></td> <!--Tahun-->
            </tr>
			<tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['perusahaan5'];?></td> <!--Perusahaan-->
                <td class="tdTitle" colspan="3"><?php echo $row['jabatan5'];?></td> <!--Jabatan-->
                <td class="tdTitle" colspan="3"><?php echo $row['tahun5'];?></td> <!--Tahun-->
            </tr>
			
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr class="trData">
                <td class="" colspan="9" style="background: #EAEAEA; font-weight: bold;">DATA KELUARGA</td>
            </tr>
            <tr class="trData">
                <td class="tdContent" colspan="3">Nama</td>
                <td class="tdContent" colspan="">Hubungan</td>
                <td class="tdContent" colspan="2">Tgl Lahir</td>
                <td class="tdContent" colspan="3">Jenis Kelamin</td>
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga1']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga1']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga1']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga1']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga2']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga2']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga2']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga2']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga3']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga3']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga3']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga1']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga3']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga1']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga1']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga1']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga4']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga4']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga4']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga4']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr class="trData">
                <td class="tdTitle" colspan="3"><?php echo $row['namakeluarga5']; ?></td> <!--Nama-->
                <td class="tdTitle" colspan=""><?php echo $row['hubungankeluarga5']; ?></td> <!--Hubungan-->
                <td class="tdTitle" colspan="2"><?php echo $row['tgl_lahir_keluarga5']; ?></td> <!--Tanggal lahir-->
                <td class="tdTitle" colspan="3"><?php echo $row['jenis_kelamin_keluarga5']; ?></td> <!--Jenis Kelamin-->
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr class="trData"">
                <td class="tdContent" colspan="">Note:</td>
                <td class="tdTitle" colspan="8"></td>
            </tr>
            <tr class="trData"  style="border-bottom: 1px solid;">
                <td class="tdTitle" colspan="9"> </td> <!--Note-->
            </tr>
    </table>    
    <br />
</div>
</div>   
<!--=====================================End Content Table =============================================================--->			
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->	
    <div class="footer">
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
         $(document).ready(function() {
            $('.thumbnail').click(function(){
                  $('.modal-body').empty();
              	var title = $(this).parent('a').attr("title");
              	$('.modal-title').html(title);
              	$($(this).parents('div').html()).appendTo('.modal-body');
              	$('#myModal').modal({show:true});
            });
            });
    	</script>
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

	</body>
</html>
