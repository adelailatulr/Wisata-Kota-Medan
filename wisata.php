<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span>Daftar Wisata dikota Medan</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama Wisata</th>
							<th>Alamat</th>
							<th>Harga Masuk</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from wisata");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nomor']?></td>
							<td><?php echo $row['nama_wisata']?></td>
							<td><?php echo $row['alamat']?></td>
							<td><?php echo $row['harga_masuk']?></td>
							<td><a href="detail_wisata.php?id=<?php echo $row['wisata_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Wali Kota Medan</h4>
				<img src="images/wali.jpg" class="img-thumbnail img-responsive">
				<p><b>Muhammad Bobby Afif Nasution, </b>gelar Sutan Porang Gunung Baringin Naposo adalah Wali Kota Medan yang menjabat sejak 26 Februari 2021. Bobby adalah menantu kedua Joko Widodo dan suami dari anak kedua Jokowi, Kahiyang Ayu.<a class="btn btn-warning btn-xs" href="internet_cafe.php"role="button">Selengkapnya</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>