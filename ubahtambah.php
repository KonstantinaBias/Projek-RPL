<?php 
include '../koneksi.php';
 $nama = $_POST['nama'];
  $lokasi = $_POST['lokasi'];
$tgl = $_POST['tgl'];
$ringkasan = $_POST['ringkasan'];
 
  $id = $_POST['id'];
 
 
 
 
			mysqli_query($kon, "UPDATE surat set nama_surat='$nama', lokasi_penelitian='$lokasi', tgl_penelitian='$tgl', keterangan='$ringkasan' where id='$id'");
	 
header("location:pengajuan.php?alert=berhasil");