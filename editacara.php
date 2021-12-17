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
		<form action="ubahaacara.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Tujuan :</label>
				<input type="text" class="form-control"   name="tujuan" value="<?= $d['tujuan'] ?>">
			</div>
			<div class="form-group">
				<label>Tanggal/hari :</label>
				<input type="text" class="form-control"   name="tgl" value="<?= $d['tgl_penelitian'] ?>">
			</div>
			<div class="form-group">
				<label>Tempat :</label>
				<input type="text" class="form-control" placeholder="" name="alamat" value="<?= $d['alamat'] ?>">
			</div>
			<div class="form-group">
				<label>nama acara :</label>
				<input type="text" class="form-control" placeholder="" name="nama"  value="<?= $d['nama_surat'] ?>">
			</div>
			<div class="form-group">
				<label>Nama Mitra :</label>
				<input type="text" class="form-control" placeholder="" name="opsional" value="<?= $d['opsional'] ?>">
			</div>
			<div class="form-group">
				<label>Pembicara  :</label>
				<textarea class="form-control" name="ringkasan"  ><?= $d['keterangan'] ?></textarea>
			</div>
		 <input type="hidden" class="form-control"   name="id"   value="<?= $d['id'] ?>" >
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</form>
	</div>
<?php } ?>
</div>
  <?php include "footer.php" ?>
  