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


 
 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Tambah Data Surat</h2>
		<form action="aksi_tambah.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Lokasi Penelitian :</label>
				<input type="text" class="form-control" placeholder="Masukkan Tujuan" name="lokasi" required="required">
			</div>
			<div class="form-group">
				<label>Tanggal Penelitian :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="tgl" required="required">
			</div>
		
			<div class="form-group">
				<label>nama mitra :</label>
				<input type="text" class="form-control" placeholder="" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Deskripsi  :</label>
				<textarea class="form-control" name="ringkasan" required="required"></textarea>
			</div>
				<input type="hidden" class="form-control" placeholder="" name="jenis" value="A">
		 		<input type="hidden" class="form-control" placeholder="" name="pembuat" required="required" value="<?php  echo $_SESSION['username'];  ?>">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</form>
	</div>
</div>
  <?php include "footer.php" ?>
  