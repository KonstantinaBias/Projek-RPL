<?php 
include '../koneksi.php';
$id = $_GET['id'];
 
 
		mysqli_query($kon,"UPDATE surat set status='Setuju', fedback='Diproses'  where id='$id'");
		header("location:surat_dosen.php?alert=berhasil"); 	 