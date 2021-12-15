<?php
//menyertakan file fpdf
ob_start();
include "../fpdf/fpdf.php";
include "../koneksi.php";

//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'UIVERSITAS KRISTEN DUTA WACANA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'FAKULTAS TEKNOLOGI INFORMASI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PROGRAM STUDI INFORMASI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);

$id = $_GET['id'];
$tampil = mysqli_query($kon, "SELECT * from suratbaru where nama_surat='$id'");
while ($hasil = mysqli_fetch_array($tampil)){
    
    $pdf->Cell(85,6,$hasil['nama_surat'],1,0);
      
}
$pdf->Cell(85,6,'Nomor :',1,1);
$pdf->Cell(35,6,'Hal',1,0);
$pdf->Cell(25,6,'Lampiran',1,1);
$pdf->Cell(85,6,'Nomor :',1,1);
$pdf->SetFont('Arial','',10);
 
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
