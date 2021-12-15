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



<th width="20%">No</th>
				<th width="20%">Nama</th>
				<th width="40%">Harga</th>
				<th width="40%">Deskripsi</th>
				<th width="40%">Warna</th>
				<th width="20%">Foto</th>

 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Tambah Data Barang</h2>
		<form action="aksi_tambah.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Harga :</label>
				<input type="number" class="form-control" placeholder="Masukkan harga" name="harga" required="required">
			</div>
			<div class="form-group">
				<label>Stock :</label>
				<input type="number" class="form-control" placeholder="" name="stock" required="required">
			</div>
			<div class="form-group">
				<label>Deskripsi Ringkas:</label>
				<textarea class="form-control" name="ringkasan" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Deskripsi :</label>
				<textarea class="form-control" name="deskripsi" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Warna Hijau :</label><br>
				<input type="radio" name="warna" value="y"> Ada <br>
				<input type="radio" name="warna" value="n"> Kosong <br>
			</div>
			<div class="form-group">
				<label>Warna Biru :</label><br>
				<input type="radio" name="warna2" value="y"> Ada <br>
				<input type="radio" name="warna2" value="n">Kosong <br>
			</div>
			<div class="form-group">
				<label>Warna Ungu :</label><br>
				<input type="radio" name="warna3" value="y"> Ada <br>
				<input type="radio" name="warna3" value="n"> Kosong <br>
			</div>
				<div class="form-group">
				<label>Warna Merah :</label><br>
				<input type="radio" name="warna4" value="y"> Ada <br>
				<input type="radio" name="warna4" value="n">Kosong <br>
			</div>
				<div class="form-group">
				<label>Warna Orange :</label><br>
				<input type="radio" name="warna5" value="y"> Ada <br>
				<input type="radio" name="warna5" value="n">Kosong<br>
			</div>
			
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="foto" value="Simpan" class="btn btn-primary">
		</form>
	</div>
</div>
  <?php include "footer.php" ?>
  