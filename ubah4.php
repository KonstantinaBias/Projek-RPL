<?php 
include '../koneksi.php';
 
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
 
 
  $opsional = $_POST['opsional'];
   $tujuan = $_POST['tujuan'];
  $id = $_POST['id'];
 
 
 
	 
	 	mysqli_query($kon, "UPDATE surat set alamat='$alamat', opsional='$opsional', tgl_penelitian='$tgl', tujuan='$tujuan' where id='$id'");
header("location:pengajuan.php?alert=berhasil");