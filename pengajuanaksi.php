<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$alamat = $_POST['alamat'];
$ringkasan = $_POST['ringkasan'];
 $pembuat = $_POST['pembuat'];
   $jenis = $_POST['jenis'];
    $lain = $_POST['lain'];
 
 
 
		mysqli_query($kon, "INSERT INTO suratbaru VALUES(NULL,'$nama','$tujuan','$alamat','$ringkasan','$pembuat','Dalam Proses','$lain','','','$jenis','','$opsional','')");
		header("location:index.php?alert=berhasil");
	 
