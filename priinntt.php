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


$tampil = mysqli_query($kon, "SELECT * from feedback   ");
while ($hasil2 = mysqli_fetch_array($tampil)){

  $no= $hasil2['urutan'];

}

?>

<h5  >Nomor : <?= $no ?>/112/A</h5>
<h5  >Hal : Permohonan</h5>
<h5  >Lamp : 1 Lembar</h5>
<br>
<h5  >Kepada YTH :</h5>
<h5  >Salam Sejahterah</h5>

  <p>Menindaklanjuti pembicaraan beberapa waktu yang lalu antara FTI dengan pihak Rumah Sakit Harapan
Kasih perihal kerjasama pelaksanaan MBKM, dengan ini kami mohon kesediaanRumah Sakit untuk
meluangkan waktu guna menyelenggarakan diskusi/audiensi MBKM tersebut diatas. Adapun waktu
pelaksanaannya adalah</p>
<h5 style="margin-left:50px">Hari/Tanggal : <?= $tujuan ?></h5>
<h5 style="margin-left:50px">Waktu :  <?= $waktu ?></h5>
<h5 style="margin-left:50px">Tempat</h5>

<p>Demikian permohonan kami sampaikan. Atas perhatian dan kerjasama yang diberikankami
mengucapkan terimakasih</p>
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
