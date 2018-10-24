<div class="row">
	<div class="col-lg-12 centered">
		<h3 class="page-header">LAPORAN BUKU PERPUSTAKAAN</h3>
	</div>
		</div><!--/.row-->
	<table class="table table-striped table-hover table-responsive">
						    <thead>
						    <tr>
									<th>No</th>
									<th>Kode Buku</th>
									<th>Judul Buku</th>
									<th>Pengarang</th>

									<th>Penerbit</th>
									<th>Tempat Terbit</th>
									<th>Tahun Terbit</th>

									<th>Nomor</th>
									<th>Bahasa</th>
									<th>Topik</th>
									<th>Deskripsi</th>
									<th>Stok</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    $no=0;
								$query = "select * from buku";
							$hasil = mysql_query($query) or die("");
							while ($data = mysql_fetch_array($hasil)) {
								$no++;
							?>
							<tr>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $data['kode']; ?></td>
								<td><?php echo $data['judul']; ?></td>
								<td><?php echo $data['pengarang']; ?></td>
								<td><?php echo $data['penerbit']; ?></td>
								<td><?php echo $data['tempatterbit']; ?></td>
								<td><?php echo $data['tahun']; ?></td>
								<td><?php echo $data['nomor']; ?></td>
								<td><?php echo $data['bahasa']; ?></td>
								<td><?php echo $data['topik']; ?></td>
								<td><?php echo $data['deskripsi']; ?></td>
								<td><?php echo $data['stok']; ?></td>
							<?php
							}
							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
