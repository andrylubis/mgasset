<?php
$msg = "";
if(isset($_POST['submit']))
{
	$id_t_bangunan			= $_POST['id_t_bangunan'];
	$deskripsi				= $_POST['deskripsi'];
	$foto			 	   = $_FILES['fileField']['name'];


		if($_FILES['fileField']['tmp_name'] != ""){
		$maxfilesize = 2000000;
		if($_FILES['fileField']['size'] > $maxfilesize){
			$msg = "Gambar terlalu besar, silahkan coba lagi.";
		}
		elseif(!preg_match("/\.(gif|jpg|JPG|png|bmp)$/i", $_FILES['fileField']['name'])){
			$msg= "Gambar yang anda masukkan tidak sesuai format yang disediakan, silahkan coba lagi.";

		}
		else{
			include("koneksi.php");
			$sql = mysql_query("INSERT INTO t_foto_bangunan(id_t_bangunan, foto, deskripsi)VALUES('$id_t_bangunan', '$foto', '$deskripsi')");
			$id = mysql_insert_id();
			$place_file = move_uploaded_file( $_FILES['fileField']['tmp_name'], "./images/upload/$foto");
			$msg ="<font color='#3AB4A6'><b>Berhasil Ditambahkan</b></font>";
			header("location:data_bangunan.php");
         }
	}


}

