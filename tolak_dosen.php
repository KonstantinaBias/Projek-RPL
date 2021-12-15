<?php 
include '../koneksi.php';
$id = $_GET['id'];
 
 
		mysqli_query($kon,"UPDATE surat set status='Ditolak'  where id='$id'");
		header("location:surat.php?alert=berhasil"); 	 