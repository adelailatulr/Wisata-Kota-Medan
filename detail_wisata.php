<?php include "header.php"; ?>

		<!-- Awal Page -->
		<div class="container">
		<!-- Awal Baris -->
		<div class="row">
			<div class="col-md-10"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				 <div class="panel-body">
				 <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Data Wisata</h2>
				 <?php
				 $id=$_GET['id'];
				 include "koneksi.php";
				 $tampil=$koneksi->query("select * from wisata where wisata_id='$id'");
				 $row=$tampil->fetch_assoc();
				 ?>
				 		<table class="table table-bordered table-hover" id="data-table">
				 			<thead>
				 			<tr>
				 				<td width="20%">Nomor</td><td width="5%">:</td><td><?php echo $row['nomor']?></td>
				 			</tr>
				 			<tr>
				 				<td>Nama Wisata</td><td>:</td><td><?php echo $row['nama_wisata']?></td>
				 			</tr>
				 			<tr>
				 				<td>Alamat</td><td>:</td><td><?php echo $row['alamat']?></td>
				 			</tr>
				 			<tr>
				 				<td>Harga Masuk</td><td>:</td><td><?php echo $row['harga_masuk']?></td>
				 			</tr>
				 			</thead>

				 		</table><a href="wisata.php">kembali
				</div>
			</div>
		</div><!--Akhir Kolom Pertama-->
<?php include "footer.php";?>