<div class="row">
	<div class="col-lg-12 centered">
		<h3 class="page-header">LAPORAN DATA ANGGOTA</h3><br>
	</div>
		</div><!--/.row-->
	<table class="table table-striped table-hover table-responsive">
						    <thead>
						    <tr>
									<th>No</th>
									<th>ID Anggota</th>
									<th>Nama Lengkap</th>
									<th>Institusi</th>
									<th>Fakultas</th>
									<th>Tipe</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Email</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    $no=0;
								$query = "select * from anggota";
							$hasil = mysql_query($query) or die("");
							while ($data = mysql_fetch_array($hasil)) {
								$no++;
							?>
							<tr>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $data['id']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['institusi']; ?></td>
								<td><?php echo $data['fakultas']; ?></td>
								<td><?php echo $data['tipe']; ?></td>
								<td><?php echo $data['jkelamin']; ?></td>
								<td><?php echo $data['tempatlahir']; ?></td>
								<td><?php echo $data['tanggallahir']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td><?php echo $data['telepon']; ?></td>
								<td><?php echo $data['email']; ?></td>
							<?php
							}
							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
