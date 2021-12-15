<?php 
include '../koneksi.php';
 $nama = $_POST['nama'];
  $lokasi = $_POST['lokasi'];
$tgl = $_POST['tgl'];
$ringkasan = $_POST['ringkasan'];
 $pembuat = $_POST['pembuat'];
  $jenis = $_POST['jenis'];
  $opsional = $_POST['opsional'];
   $tujuan = $_POST['tujuan'];
  $alamat = $_POST['alamat'];
   $saatini = $_POST['saatini'];
 
 
		mysqli_query($kon, "INSERT INTO surat VALUES(NULL,'$nama' ,'$tujuan','$alamat','$saatini','$pembuat','Dalam Proses','dosen','$lokasi','$tgl','$jenis','','$opsional','')");
		
	 
header("location:pengajuan.php?alert=berhasil");