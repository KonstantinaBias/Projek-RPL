<?php
//menyertakan file fpdf
ob_start();

require('../fpdf/fpdf.php');
include "../koneksi.php";
 $id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from feedback where nama_surat='$id'");
while ($hasil = mysqli_fetch_array($tampil)){

    $jenisss= $hasil['jenis'];

}

if($jenisss=="A"){




//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF();

// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'UIVERSITAS DUTA KENCANA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'FAKULTAS TEKNOLOGI INFORMASI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PROGRAM STUDI INFORMASI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,0);

$pdf->SetFont('Arial','',10);


$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from feedback where nama_surat='$id' ");
while ($hasil = mysqli_fetch_array($tampil)){

    $jenis= $hasil['jenis'];
 $tujuan = $hasil['tujuan'];
  $waktu = $hasil['opsional'];
}


$tampil = mysqli_query($kon, "SELECT * from ttd  ");
while ($hasil = mysqli_fetch_array($tampil)){

    $ttd= $hasil['ttd'];

}

/**
 *
 */
class pdf extends FPDF
{

  function logo($gambar)
  {
    $this->Image($gambar, 10,10,10,10);
  }
}

$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where jenis='$jenis' ");
while ($hasil2 = mysqli_fetch_array($tampil)){

  $no= $hasil2['jns'];

}

$pdf->Cell(85,6,'',0,1);
$pdf->Cell(15,7,'Nomor :',0,0);
$pdf->Cell(4,7,$no,0,0);
$pdf->Cell(0,7,"/G.02/FTI/2021",0,1);
$pdf->Cell(15,7,'Hal       :',0,0);
$pdf->Cell(4,7,"Permohonan",0,1);
$pdf->Cell(4,7,"Lamp : 1 Lembar",0,1);
$pdf->SetFont('Arial','',10);

$pdf->Cell(85,6,'',0,1);

$pdf->Cell(4,10,"Kepada YTH",0,1);
$pdf->Cell(4,10,$tujuan,0,1);
$pdf->Cell(4,7,"Salam Sejahterah",0,0);

$pdf->Cell(85,6,'',0,1);
$pdf->Cell(85,6,'',0,1);
$pdf->Cell(4,5,"Menindaklanjuti pembicaraan beberapa waktu yang lalu antara FTI dengan pihak Rumah Sakit Harapan",0,1);
$pdf->Cell(4,5,"Kasih perihal kerjasama pelaksanaan MBKM, dengan ini kami mohon kesediaanRumah Sakit untuk",0,1);
$pdf->Cell(4,5,"meluangkan waktu guna menyelenggarakan diskusi/audiensi MBKM tersebut diatas. Adapun waktu",0,1);
$pdf->Cell(4,5,"pelaksanaannya adalah:",0,1);

$pdf->Cell(4,5,"",0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Hari/tanggal ",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$tujuan,0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Waktu ",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$waktu,0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Tempat ",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$waktu,0,1);

$pdf->Cell(4,5,"Demikian permohonan kami sampaikan. Atas perhatian dan kerjasama yang diberikankami
mengucapkan terimakasih.",0,1);
$pdf->Cell(12,5," ",0,1);
$pdf->Cell(12,5,"",0,0);
$pdf->Cell(12,5,"ttd",0,1);
$pdf->Cell(12,5,"",0,0);
 


//koneksi ke database
 $id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from suratbaru where nama_surat='$id'");
while ($hasil = mysqli_fetch_array($tampil)){

    $pdf->Cell(85,6,$hasil['nama_surat'],1,0);
    $pdf->Cell(35,6,$hasil['tujuan'],1,0);
    $pdf->Cell(25,6,$hasil['pembuat'],1,1);
}

$pdf->Output();
}else if($jenisss=="B"){
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'UIVERSITAS NEGERI INDONESIA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'FAKULTAS TEKNOLOGI INFORMASI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PROGRAM STUDI INFORMASI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,0);

$pdf->SetFont('Arial','',10);


$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from feedback where nama_surat='$id' ");
while ($hasil = mysqli_fetch_array($tampil)){

    $jenis= $hasil['jenis'];
 $tujuan = $hasil['tujuan'];
  $waktu = $hasil['opsional'];
    $pembuat = $hasil['pembuat'];
}
$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where jenis='$jenis' ");
while ($hasil2 = mysqli_fetch_array($tampil)){

  $no= $hasil2['jns'];

}

$pdf->Cell(85,6,'',0,1);
$pdf->Cell(85,6,' ',0,0);
$pdf->Cell(25,6,'Surat Tugas :',0,1);
$pdf->Cell(95,6,' ',0,0);
$pdf->Cell(4,7,$no,0,1);
$pdf->Cell(4,6,"Sehubungan dengan permintaan dari Sentra Penginjil BPK PKK Surabaya, untuk ini Dekan",0,1);
$pdf->Cell(4,6,"Fakultas Teknologi Informasi memberikan tugas kepada dosen tersebut dibawah ini:",0,1);

$pdf->SetFont('Arial','',10);


$pdf->Cell(4,5,"",0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Nama",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$pembuat,0,1);
$pdf->Cell(24,5,"",0,0);

$pdf->Cell(4,7,'',0,1);
$pdf->Cell(4,5,"Untuk bertugas sebagai narasumber dalam pembekalan Alumni Kursus Evangelisasi Pribadi
Eksekutif  ",0,1);
 $pdf->Cell(4,5," Keusukupan Surabaya Angkatan ke-2, yang diselenggarakan pada:",0,1);
 $pdf->Cell(4,5,"",0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Hari/tanggal:",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$pembuat,0,1);
$pdf->Cell(24,5,"",0,0);
 $pdf->Cell(4,5,"",0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Tema:",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$pembuat,0,1);
$pdf->Cell(24,5,"",0,0);
 $pdf->Cell(4,5,"",0,1);
$pdf->Cell(24,5,"",0,0);
$pdf->Cell(25,5,"Tempat:",0,0);
$pdf->Cell(5,5,":",0,0);
$pdf->Cell(5,5,$pembuat,0,1);
$pdf->Cell(24,5,"",0,0);

$pdf->Cell(4,7,'',0,1);
$pdf->Cell(4,5,"Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.",0,1);
//koneksi ke database
 $id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from suratbaru where nama_surat='$id'");
while ($hasil = mysqli_fetch_array($tampil)){

    $pdf->Cell(85,6,$hasil['nama_surat'],1,0);
    $pdf->Cell(35,6,$hasil['tujuan'],1,0);
    $pdf->Cell(25,6,$hasil['pembuat'],1,1);
}

$pdf->Output();
}else if($jenisss=="C"){

//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas



//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'UIVERSITAS DUTA KENCANA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'FAKULTAS TEKNOLOGI INFORMASI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PROGRAM STUDI INFORMASI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,0);

$pdf->SetFont('Arial','',10);


$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from feedback where nama_surat='$id' ");
while ($hasil = mysqli_fetch_array($tampil)){

    $jenis= $hasil['jenis'];
 $tujuan = $hasil['tujuan'];
  $waktu = $hasil['opsional'];
}
$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where jenis='$jenis' ");
while ($hasil2 = mysqli_fetch_array($tampil)){

  $no= $hasil2['jns'];

}

$pdf->Cell(85,6,'',0,1);
$pdf->Cell(15,7,'Nomor :',0,0);
$pdf->Cell(4,7,$no,0,0);
$pdf->Cell(0,7,"/G.02/FTI/2021",0,1);
$pdf->Cell(15,7,'Hal       :',0,0);
$pdf->Cell(4,7,"Permohonan",0,1);
$pdf->Cell(4,7,"Lamp : 1 Lembar",0,1);
$pdf->SetFont('Arial','',10);

$pdf->Cell(85,6,'',0,1);

$pdf->Cell(4,10,"Kepada YTH",0,1);

$pdf->Cell(4,7,"Rektor",0,1);
$pdf->Cell(4,7,"Universitas",0,1);
$pdf->Cell(4,7,"Salam Sejahterah",0,1);
$pdf->Cell(85,6,'',0,1);
$pdf->Cell(85,6,'',0,1);
$pdf->Cell(40,5,"Menyusuli surat kami No",0,0);
$pdf->Cell(4,5,$no,0,0);
$pdf->Cell(25,5,"/G.02/FTI/2021",0,0);
$pdf->Cell(4,5,"Perihal Permohonan SK Dosen Kontrak dan NUP atas nama",0,1);
$pdf->Cell(4,5,"Johana. Melalui surat ini kami menyampaikan surat persetujuan dari yang bersangkutan untuk",0,1);
$pdf->Cell(4,5,"melengkapi persyaratan pengangkatan dosen kontrak.",0,1);
$pdf->Cell(4,5,"Demikian surat ini kami sampaikan. Atas perhatian dan kerjasama yang diberikan kami mengucapkan
terima kasih.",0,1);



//koneksi ke database
 $id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from suratbaru where nama_surat='$id'");
while ($hasil = mysqli_fetch_array($tampil)){

    $pdf->Cell(85,6,$hasil['nama_surat'],1,0);
    $pdf->Cell(35,6,$hasil['tujuan'],1,0);
    $pdf->Cell(25,6,$hasil['pembuat'],1,1);
}

$pdf->Output();



}

?>
