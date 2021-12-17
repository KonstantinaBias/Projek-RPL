<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$alamat = $_POST['alamat'];
$ringkasan = $_POST['ringkasan'];
 $id = $_POST['id'];
 
  $opsional = $_POST['opsional'];
 
 
 
		mysqli_query($kon, "UPDATE surat set nama_surat='$nama', alamat='$alamat', tujuan='$tujuan', keterangan='$ringkasan', opsional='$opsional' where id='$id'");
		header("location:pengajuan.php?alert=berhasil");
	 
