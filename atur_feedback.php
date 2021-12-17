<?php 
include '../koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $tujuan = $_POST['tujuan'];
  $alamat = $_POST['alamat'];
    $pembuat = $_POST['pembuat'];
$keterangan = $_POST['keterangan'];
$lain = $_POST['lain'];
  $jenis = $_POST['jenis'];
 $sk = $_POST['sk'];
 
 
 
	$no =1;
			include "../koneksi.php";
			$data = mysqli_query($kon,"SELECT count(jenis) as jns from surat where fedback = 'Selesai' AND jenis='$jenis'");
			while($d = mysqli_fetch_array($data)){
		$jnss =  $d['jns'];
	}
 		$urutan = $jnss+1;
 
		mysqli_query($kon, "INSERT INTO feedback VALUES('$id','$nama','$tujuan','$alamat','$keterangan','$pembuat',' ','$lain','','','$jenis','$urutan','$sk')");
		
		mysqli_query($kon,"UPDATE surat set  fedback='Selesai'  where id='$id'");
	  
	 header("location:feedback_mahasiswa.php?alert=berhasil");
 