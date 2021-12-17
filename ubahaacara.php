<?php 
include '../koneksi.php';
 $nama = $_POST['nama'];
 
$tgl = $_POST['tgl'];
$ringkasan = $_POST['ringkasan'];
 
  $id = $_POST['id'];
  $opsional = $_POST['opsional'];
   $tujuan = $_POST['tujuan'];
  $alamat = $_POST['alamat'];
 
 
 
		mysqli_query($kon, "UPDATE surat set nama_surat='$nama', tujuan='$tujuan', tgl_penelitian='$tgl', alamat='$alamat', opsional='$opsional', keterangan='$ringkasan' where id='$id'");
		
	 
header("location:pengajuan.php?alert=berhasil");
 	
				
 