<?php
//menyertakan file fpdf
ob_start();
include "../fpdf/fpdf.php";
include "../koneksi.php";

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
$pdf->Cell(190,7,'UNIVERSITAS NEGERI INDONESIA',0,1,'C');
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
$pdf->Cell(4,6,"Pada hari ini: Rabu, 21 Oktober 2015 bertempat di Ruang Hartono, telah dilangsungkan Kuliah Umum dengan tema:",0,1);
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

?>
