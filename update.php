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
			$data = mysqli_query($kon,"select * from data where id = '$id'");
			while($d = mysqli_fetch_array($data)){
				?>

 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Update Data Barang</h2>
		<form action="ubah.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?php echo $d['nama'];?>" required="required">
			</div>
			<div class="form-group">
				<label>Harga :</label>
				<input type="number" class="form-control" placeholder="Masukkan harga" name="harga" value="<?php echo $d['harga'];?>"  required="required">
			</div>
			<div class="form-group">
				<label>Deskripsi Ringkas:</label>
				<textarea class="form-control" name="ringkasan" required="required"><?php echo $d['ringkasan'];?> </textarea>
			</div>
			<div class="form-group">
				<label>Deskripsi :</label>
				<textarea class="form-control" name="deskripsi"  required="required"><?php echo $d['deskripsi'];?></textarea>
			</div>
			<div class="form-group">
				<label>Warna Hijau :</label><br>
				<label><input type="radio" name="warna" value="y" <?php if($d['warna']=='y') echo 'checked'?>> Ada </label><br> 
				<label><input type="radio" name="warna" value="n" <?php if($d['warna']=='n') echo 'checked'?>> Kosong </label><br>
			</div>
			<div class="form-group">
				<label>Warna Biru :</label><br>
			<label><input type="radio" name="warna2" value="y" <?php if($d['warna2']=='y') echo 'checked'?>>Ada</label><br> 
				<label><input type="radio" name="warna2" value="n" <?php if($d['warna2']=='n') echo 'checked'?>> Kosong </label><br>
			</div>
			<div class="form-group">
				<label>Warna Ungu :</label><br>
				<label><input type="radio" name="warna3" value="y" <?php if($d['warna3']=='y') echo 'checked'?>> Ada</label> <br> 
				<label><input type="radio" name="warna3" value="n" <?php if($d['warna3']=='n') echo 'checked'?>> Kosong </label><br>
			</div>
				<div class="form-group">
				<label>Warna Merah :</label><br>
				<label><input type="radio" name="warna4" value="y" <?php if($d['warna4']=='y') echo 'checked'?>> Ada </label><br> 
				<label><input type="radio" name="warna4" value="n" <?php if($d['warna4']=='n') echo 'checked'?>> Kosong </label><br>
			</div>
				<div class="form-group">
				<label>Warna Orange :</label><br>
				<label><input type="radio" name="warna5" value="y" <?php if($d['warna5']=='y') echo 'checked'?>> Ada</label> <br> 
				<label><input type="radio" name="warna5" value="n" <?php if($d['warna5']=='n') echo 'checked'?>> Kosong </label><br>
			</div>
			
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="foto" value="Simpan" class="btn btn-primary">
		</form>
	<?php } ?>
	</div>
</div>
  <?php include "footer.php" ?>
  