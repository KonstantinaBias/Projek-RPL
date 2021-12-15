<?php 
include '../koneksi.php';
 $nama = $_POST['nama'];
 
$tgl = $_POST['tgl'];
$ringkasan = $_POST['ringkasan'];
 $pembuat = $_POST['pembuat'];
  $jenis = $_POST['jenis'];
  $opsional = $_POST['opsional'];
   $tujuan = $_POST['tujuan'];
  $alamat = $_POST['alamat'];
  $lain = $_POST['lain'];
 
 
		mysqli_query($kon, "INSERT INTO suratbaru VALUES(NULL,'$nama' ,'$tujuan','$alamat','$ringkasan','$pembuat','Dalam Proses','$lain','','$tgl','$jenis','','$opsional','')");
		
	 
header("location:index.php?alert=berhasil");