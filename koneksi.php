<?php
$root="localhost";
$user="root";
$password="";
$db="surat";

$kon = mysqli_connect($root,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>