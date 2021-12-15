  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""||$_SESSION['level']!="admin"){
    header("location:index.php?pesan=gagal");
  }
 
  ?>


  <?php include "head.php" ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

 <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
   
		<h2 style="text-align: center;">Transaksi</h2>		
		<br>
		
		
               <div class="table-responsive">
                <table style="margin-left: 20px; margin-right: 15px " id="example1" class="table table-bordered table-striped">
			<tr>
				<th width="5%">No</th>
				<th width="10%">Nomor Invoice</th>
				<th width="10%">Nama Barang</th>
				<th width="20%">Jumlah</th>
				<th width="10%">Warna</th>
				<th width="10%">Total</th>
				<th width="10%">Status</th>
				<th width="10%">Aksi</th>
			</tr>
				<?php 
				$no =1;
				$ide = $_SESSION['username'];
			include "../koneksi.php";
			$data = mysqli_query($kon,"select * from transaksi ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $d['inv']; ?> </td>
					<td><?php echo $d['nama']; ?> </td>
					<td><?php echo $d['jumlah']; ?> </td>
					<td><?php echo $d['warna']; ?> </td>
					<td><?php echo $d['total']; ?> </td>
					<td><?php echo $d['status']; ?> </td>
				
					<td>
							<?php if($d['bukti']!=""){?>
						<a href="hapus2.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
						<a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning">Edit</button></a></td></td>
				<?php }else{ } ?>
				</tr>
				<div class="modal fade" id="myModal<?php echo $d['id']; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title">Bukti Resi</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
<div class="modal-body">
<form role="form" action="status.php" method="post" enctype="multipart/form-data">


<input type="hidden" name="id" value="<?php echo $d['id']; ?>" >

<div class="form-group">
				
 <select id="sel_id" name="nama" >
<option value="">Select</option>
<option value="Diproses">Diproses</option> 
<option value="Dijalan">Dijalan</option> 
<option value="Diterima">Diterima</option> 
<input type=submit name="id" value="Daftar" >                  
</select>
</form>
			</div>			
			
		


<div class="modal-footer">  

</div>

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






