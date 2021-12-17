<?php 
 include '../koneksi.php';
echo $nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$alamat = $_POST['alamat'];
$ringkasan = $_POST['ringkasan'];
echo $id = $_POST['id'];
 
 
 
 
		mysqli_query($kon, "UPDATE surat set nama_surat='$nama', alamat='$alamat', tujuan='$tujuan', keterangan='$ringkasan' where id='$id'");
	
header("location:pengajuan.php?alert=berhasil");