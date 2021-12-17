<?php include "head.php" ?>



  <section class="content">
   <div class="container-fluid">

 <div class="row">
<div class="col-lg-3 col-12">
<img style="width:60px;  transform: translate(100px, 120%);" src="../gambar/logoukdw.jpg">
</div>
<div class="col-lg-9 col-12">
<h3 style="text-align:center">UNIVERSITAS KRISTEN DUTA WACANA</h3>
<h3 style="text-align:center">FAKULTAS TEKNOLOGI INFORMASI</h3>
<h3 style="text-align:center">PROGRAM STUDI TEKNOLOGI INFORMASI</h3>
</div>

</div>
</div>
</section>
<br>
<br>
<?php
include '../koneksi.php';
$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from feedback where nama_surat='$id' ");
while ($hasil = mysqli_fetch_array($tampil)){

   $jenis= $hasil['jenis'];
 $tujuan = $hasil['tujuan'];
  $waktu = $hasil['opsional'];
    $pembuat = $hasil['pembuat'];
$alamat = $hasil['alamat'];
}


$tampil = mysqli_query($kon, "SELECT  *  from feedback where nama_surat='$id'  ");
while ($hasil2 = mysqli_fetch_array($tampil)){

  $urut = $hasil2['urutan'];
$nama_surat = $hasil2['nama_surat'];
}

?>

<center><h5  >Surat Berita Acara
</h5></center>
<center><h5  >Kuliah umum
</h5></center>
<center><h5  >“<?php echo $nama_surat ?>”  
</h5></center>
<center><h5><?php echo $urut ?>/Na/18</h5></center>





  <p>Pada <?php echo $tgl_penelitian ?> bertempat di Ruang Hartono, telah dilangsungkan Kuliah
Umum dengan tema: “How To Build Products at Tokopedia” dengan mengundang pembicara
yaitu Bpk. Leonardus. Acara ini diikuti oleh seluruh civitas akademika dari beberapa mitra
kerjasama Fakultas Teknologi Informasi.
</p>
<h5 style="margin-left:50px">Nama : <?= $pembuat ?></h5>

<p>Adapun TOR acara, daftar kehadiran peserta, foto kegiatan seperti terlampir pada berita acara
ini. 

<p>Demikian Berita Acara ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana
mestinya.</p>

<center><h5  >Yogyakarta
</h5></center>
<center><h5  ><?php echo $tgl_penelitian ?>
</h5></center>
<?php
include '../koneksi.php';
$tampil = mysqli_query($kon, "SELECT * from ttd  ");
while ($hasil = mysqli_fetch_array($tampil)){

    $ttd= $hasil['ttd'];

}
?>

<h5 style="margin-left:50px">ttd</h5>
<img style="width:120px; margin-left:50px" src="../gambar/<?php echo $ttd; ?>">
<script>
		window.print();
	</script>
