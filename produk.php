  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="admin"){
    header("location:index.php?pesan=gagal");
  }
 
  ?>


  <?php include "head.php" ?>
  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

 <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
   
		<h2 style="text-align: center;">Data Barang</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<a href="tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
		<br>		
		<br>		
		
               <div class="table-responsive">
                <table style="margin-left: 20px; margin-right: 15px " id="example1" class="table table-bordered table-striped">
			<tr>
				<th width="5%">No</th>
				<th width="10%">Nama</th>
				<th width="10%">Harga</th>
				<th width="20%">Deskripsi</th>
				<th width="10%">Warna yang ada</th>
				<th width="10%">Foto</th>
				<th width="10%">Aksi</th>
			</tr>
				<?php 
				$no =1;
			include "../koneksi.php";
			$data = mysqli_query($kon,"select * from data");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $d['nama']; ?> </td>
					<td><?php echo $d['harga']; ?> </td>
					<td><?php echo $d['deskripsi']; ?> </td>
					<td> <?php if($d['warna']=="y"){ ?>
                <label class="btn btn-default text-center active">
                   

                  Green
                  <br>
                
                </label>
              <?php }else{ } ?>
              <?php if($d['warna2']=="y"){ ?>
                <label class="btn btn-default text-center">
                
                  Blue
                  <br>
                 
                </label>
                <?php }else{ } ?>
                <?php if($d['warna3']=="y"){ ?>
                <label class="btn btn-default text-center">
                 
                  Purple
                  <br>
             
                </label>
                  <?php }else{ } ?>
                <?php if($d['warna4']=="y"){ ?>
                <label class="btn btn-default text-center">
               
                  Red
                  <br>
                </label>
                  <?php }else{ } ?>
                <?php if($d['warna5']=="y"){ ?>
                <label class="btn btn-default text-center">
               
                  Orange
                  <br>
          
                </label>
                  <?php }else{ } ?></td>
					<td><img src="../gambar/<?php echo $d['foto'] ?>" width="35" height="40"></td>
					<td><a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
					<a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning">Edit</button></a></td>
				</tr>
				<?php } ?>
		</table>
</div>

	</div>
          <!-- ./col -->
     
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


