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
 
 
 
		mysqli_query($kon, "INSERT INTO surat VALUES(NULL,'$nama' ,'$tujuan','$alamat','$ringkasan','$pembuat','Dalam Proses','dosen','','$tgl','$jenis','','$opsional','')");
		
	 
