  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="admin"){
    header("location:../index.php?pesan=gagal");
  }
 
  ?>



  <?php include "head.php" ?>
  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>



<?php
error_reporting(0);
//kode php yang lain
?>

<?php
//end of code 
?>


<?php 
	$id = $_GET['id'];
	$no =1;
			include "../koneksi.php";
			$data = mysqli_query($kon,"select * from surat where id = '$id'");
			while($d = mysqli_fetch_array($data)){
				?>

 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Atur Fedback Mahasiswa</h2>
		<form action="atur_feedback.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				<input type="hidden" name="nama" value="<?php echo $d['nama_surat'];?>">
					<input type="hidden" name="tujuan" value="<?php echo $d['lokasi_penelitian'];?>">
						<input type="hidden" name="alamat" value="<?php echo $d['tgl_penelitian'];?>">
						<input type="hidden" name="pembuat" value="<?php echo $d['pembuat'];?>">
						<input type="hidden" name="lain" value="<?php echo $d['lain'];?>">
							<input type="hidden" name="keterangan" value="<?php echo $d['keterangan'];?>">
							<input type="hidden" name="jenis" value="<?php echo $d['jenis'];?>">
						 
				 
			</div>
			 
		  
			<input type="submit" name="foto" value="Simpan" class="btn btn-primary">
		</form>
	<?php } ?>
	</div>
</div>
  <?php include "footer.php" ?>
  