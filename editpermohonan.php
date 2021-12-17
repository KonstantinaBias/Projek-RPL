  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="dosen"){
    header("location:../index.php?pesan=gagal");
  }
 
  ?>


  <?php include "head.php" ?>
  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

<?php 
	$id = $_GET['id'];
	$no =1;
			include "../koneksi.php";
			$data = mysqli_query($kon,"select * from surat where id = '$id'");
			while($d = mysqli_fetch_array($data)){
			 ?>
				
				
 
 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Tambah Data Surat</h2>
		<form action="ubah4.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Ditujukan :</label>
				<input type="text" class="form-control" placeholder="Masukkan Tujuan" name="tujuan" value="<?= $d['tujuan'] ?>">
			</div>
			<div class="form-group">
				<label>Tanggal/hari :</label>
				<input type="text" class="form-control"  name="tgl"  value="<?= $d['tgl_penelitian'] ?>">
			</div>
			<div class="form-group">
				<label>Tempat :</label>
				<input type="text" class="form-control"   name="alamat"  value="<?= $d['alamat'] ?>">
			</div>
		 
			<div class="form-group">
				<label>waktu :</label>
				<input type="text" class="form-control"  name="opsional"  value="<?= $d['opsional'] ?>">
			</div>
 
		 
			 
		<input type="hidden" class="form-control" placeholder="" name="id"  value="<?= $d['id'] ?>">
		  
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</form>
	</div>
<?php } ?>
</div>
  <?php include "footer.php" ?>
 