<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$status = $_POST['status'];
 

		$update = "UPDATE transaksi SET status = '$status' WHERE id = '$id'";
mysqli_query($kon, $update);
header('location:index.php');
?>
		