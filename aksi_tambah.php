<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$alamat = $_POST['alamat'];
$ringkasan = $_POST['ringkasan'];
 $pembuat = $_POST['pembuat'];
   $jenis = $_POST['jenis'];
 
 
 
 
		mysqli_query($kon, "INSERT INTO surat VALUES(NULL,'$nama','$tujuan','$alamat','$ringkasan','$pembuat','Dalam Proses','mahasiswa','','','$jenis','','','')");
		header("location:index.php?alert=berhasil");
	 
