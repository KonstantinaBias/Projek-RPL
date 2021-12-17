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
   
		<h2 style="text-align: center;">Transaksi</h2>		
		<br>
		
		<br>
		<a href="tambah.php" class="btn btn-info btn-sm"></a>
		<br>		
		<br>		
		
               <div class="table-responsive">
                <table style="margin-left: 20px; margin-right: 15px " id="example1" class="table table-bordered table-striped">
			<tr>
				<th width="5%">No</th>
				<th width="10%">Nomor Invoice</th>
				<th width="10%">Nama Barang</th>
				<th width="20%">Jumlah</th>
				<th width="10%">Harga</th>
				<th width="10%">Status</th>
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
					<td><?php echo $d['warna']; ?> </td>
					<td><img src="../gambar/<?php echo $d['foto'] ?>" width="35" height="40"></td>
					<td><a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
					<a href="update.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning">Edit</button></a></td>
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


