<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$ringkasan = $_POST['ringkasan'];
 
 
 
 
 
		mysqli_query($kon, "INSERT INTO surat VALUES(NULL,'$nama','$harga','$stock','$ringkasan','$deskripsi','$warna','$warna2','$warna3','$warna4','$warna5','$xx')");
		header("location:index.php?alert=berhasil");
	 
}