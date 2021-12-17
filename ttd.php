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


 <div class="content-wrapper">
<div class="container">
		<h2 style="text-align: center;">Data</h2>
		<form action="ttdaksi.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
      <label>Masukan TTD :</label>
      <input type="file" class="form-control"   name="ttd"   required="required">
    </div>
			<input type="submit" name="foto" value="Simpan" class="btn btn-primary">
		</form>

	</div>
</div>
  <?php include "footer.php" ?>
