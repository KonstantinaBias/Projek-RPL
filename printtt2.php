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

}

?>

<center><h5  >Surat Tugas  </h5></center>
<center><h5><?php echo $urut ?>/Na/18</h5></center>



  <p>Sehubungan dengan permintaan dari Sentra Penginjil BPK PKK Surabaya, untuk ini Dekan
Fakultas Teknologi Informasi memberikan tugas kepada dosen tersebut dibawah ini:
</p>
<h5 style="margin-left:50px">Nama : <?= $pembuat ?></h5>

<p>Untuk bertugas sebagai narasumber dalam pembekalan Alumni Kursus Evangelisasi Pribadi
Eksekutif
 Keusukupan Surabaya Angkatan ke-2, yang diselenggarakan pada:</p>
<h5 style="margin-left:50px">Hari Tanggal :  <?= $waktu ?></h5>
<h5 style="margin-left:50px">Tempat</h5>
<h5 style="margin-left:50px">Tema</h5>

<p>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.</p>
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
