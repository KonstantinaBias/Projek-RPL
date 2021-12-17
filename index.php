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
            <h1 class="m-0">Dashboard</h1>
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
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">



                  <center> <h5>Surat Keterangan</h5></center>
              </div>
              <div  style="height: 60px" class="icon">
                <?php
                $username = $_SESSION['username'];
                include "../koneksi.php";
                $tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where jenis='A' And pembuat='$username' ");
                while ($hasil2 = mysqli_fetch_array($tampil)){

                $jnss= $hasil2['jns'];

                }

                ?>
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"><?= $jnss ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">



                  <center> <h5>Surat Tugas</h5></center>
              </div>
              <div  style="height: 60px" class="icon">
                <?php
                include "../koneksi.php";
                $tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where jenis='B' And pembuat='$username' ");
                while ($hasil2 = mysqli_fetch_array($tampil)){

                $jnss= $hasil2['jns'];

                }

                ?>
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"><?= $jnss ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">



                  <center> <h5>Surat Keseluruhan</h5></center>
              </div>
              <div  style="height: 60px" class="icon">
                <?php
                $username = $_SESSION['username'];
                include "../koneksi.php";
                $tampil = mysqli_query($kon, "SELECT *, count(jenis) AS jns from feedback where pembuat='$username'");
                while ($hasil2 = mysqli_fetch_array($tampil)){

                $jnss= $hasil2['jns'];

                }

                ?>
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"><?= $jnss ?> <i class="fas fa-arrow-circle-right"></i></a>
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
