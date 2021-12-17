  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="mahasiswa"){
    header("location:../index.php?pesan=gagal");
  }
 
  ?>


  <?php include "head.php" ?>
  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>


 
 <div class="content-wrapper"
 >
<div class="container">
 
<?php 
	$id = $_GET['id'];
	$no =1;
			include "../koneksi.php";
			$data = mysqli_query($kon,"select * from surat where id = '$id'");
			while($d = mysqli_fetch_array($data)){
			 ?>
				
		
 

 
		<h2 style="text-align: center;">Tambah Data Surat</h2>
		<form action="ubahtambahtugas.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Tanggal :</label>
				<input type="text" class="form-control" placeholder="Masukkan Tanggal" name="tujuan"value="<?= $d['tujuan'] ?>">
			</div>
			<div class="form-group">
				<label>Nama Mitra :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?= $d['nama_surat'] ?>">
			</div>

			<div class="form-group">
				<label>Lokasi :</label>
				<input type="text" class="form-control" placeholder="" name="alamat" value="<?= $d['alamat'] ?>" >
			</div>
			<div class="form-group">
				<label>Deskripsi  :</label>
				<textarea class="form-control" name="ringkasan" required="required"><?= $d['keterangan'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Anggota (nama dan nim) *Opsional  :</label>
				<textarea class="form-control" name="opsional" required="required"><?= $d['opsional'] ?></textarea>
			</div>
		 		<input type="hidden" class="form-control" placeholder="" name="id" value="<?= $d['id'] ?>">
		 	 
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</form>
	</div>
	<?php } 
 	?>
</div>

		
 