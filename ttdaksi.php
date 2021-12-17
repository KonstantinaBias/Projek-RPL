
    <?php
    include '../koneksi.php';






  $ekstensi =  array('png','jpg','jpeg','gif');
  $filename = $_FILES['ttd']['name'];

  $ukuran1 = $_FILES['ttd']['size'];

  $ext1 = pathinfo($filename, PATHINFO_EXTENSION);

  if(!in_array($ext1, $ekstensi) ) {
    header("location:index.php?alert=gagal_ekstensi");
  }else{
    if($ukuran < 1044070){
      $xx1 = $rand.'_'.$filename;

      move_uploaded_file($_FILES['ttd']['tmp_name'], '../gambar/'.$rand.'_'.$filename);

      mysqli_query($kon, "UPDATE ttd SET ttd='$xx1' where id='1' ");
      header("location:ttd.php?alert=berhasil");
    }else{
      header("location:ttd.php?alert=gagak_ukuran");
    }
  }
