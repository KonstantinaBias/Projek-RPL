  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="mahasiswa"){
    header("location:../index.php?pesan=gagal");
  }
 
  ?>


  <?php include "head.php" ?>
  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cetak Surat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cetak Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
 
     
    
               <div class="table-responsive">
                <table style="margin-left: 20px; margin-right: 15px " id="example1" class="table table-bordered table-striped">
      <tr>
        <th width="5%">No</th>
        <th width="10%">Nama Surat</th>
     
        <th width="10%">Print</th>
      </tr>
        <?php 
        $no =1;
       $username = $_SESSION['username'];
      include "../koneksi.php";
      $data = mysqli_query($kon,"SELECT * from feedback where lain='mahasiswa' AND pembuat='$username'");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++ ?> </td>
          <td><?php echo $d['nama_surat']; ?> </td>
    
            
        <td><a href="print.php?id=<?php echo $d['nama_surat']; ?>"><button class="btn btn-success">Print</button></a>
        </td>
        </tr>
        <?php } ?>
    </table>
 

  </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include "footer.php" ?>