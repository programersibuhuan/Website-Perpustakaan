<div class="row">
	<div class="col-lg-12 centered">
		<h3 class="page-header">TABEL PENGEMBALIAN</h3>
	</div>
		</div><!--/.row-->
	<table class="table table-striped table-hover table-responsive">
						    <thead>
						    <tr>
									<th>No</th>
									<th>Kode</th>
									<th>ID Anggota</th>
									<th>Nama</th>
									<th>Fakultas</th>
									<th>Kode Buku</th>
									<th>Judul Buku</th>
									<th>Jumlah Dipinjam</th>
									<th>Tanggal Pinjam</th>
									<th>Tanggal Kembali</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    $no=0;
								$query = "select * from pinjam";
							$hasil = mysql_query($query) or die("");
							while ($data = mysql_fetch_array($hasil)) {
								$no++;
							?>
							<tr>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $data['kode']; ?></td>
								<td><?php echo $data['id']; ?></td>
								<td><?php echo $data['Nama']; ?></td>
								<td><?php echo $data['fakultas']; ?></td>
								<td><?php echo $data['kodebuku']; ?></td>
								<td><?php echo $data['namabuku']; ?></td>
								<td><?php echo $data['jumlah']; ?></td>
								<td><?php echo $data['tanggalpinjam']; ?></td>
								<td><?php echo $data['tanggalkembali']; ?></td>
							<?php
							}
							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
