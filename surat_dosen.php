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

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengajuan Surat Dosen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
 
    <br>    
    
               <div class="table-responsive">
                <table style="margin-left: 20px; margin-right: 15px " id="example1" class="table table-bordered table-striped">
      <tr>
        <th width="5%">No</th>
        <th width="10%">Nama Surat</th>
        <th width="10%">Kepentingan</th>
        <th width="20%">Tanggal</th>
        <th width="10%">deskripsi</th>
        <th width="10%">Status</th>
        <th width="10%">Aksi</th>
      </tr>
        <?php 
        $no =1;
      include "../koneksi.php";
      $data = mysqli_query($kon,"select * from surat where lain='dosen'");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++ ?> </td>
          <td><?php echo $d['nama_surat']; ?> </td>
          <td><?php echo $d['lokasi_penelitian']; ?> </td>
          <td><?php echo $d['tgl_penelitian']; ?> </td>
          <td><?php echo $d['keterangan']; ?> </td>
            <td><?php echo $d['status']; ?> </td>
          <td><a href="tolak_dosen.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Tolak</button></a>
          <a href="ubadosen.php?id=<?php echo $d['id']; ?>"><button class="btn btn-success">Setujui</button></a></td>
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