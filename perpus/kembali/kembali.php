<?php ?>

			<div class="col-lg-12">
				<h3 class="page-header centered">FORM PENGEMBALIAN</h3><br>
			</div>
	<!--/.row-->
<form role="form" action="perpus/pinjam/simpan.php" method="post">
<div class="col-lg-7 col-lg-offset-3 centered">
<form>
  <div class="form-group row">
    <label for="staticEmail"  class="col-sm-4 col-form-label text-left">Kode Peminjaman</label>
    <div class="col-sm-7">
    <input type="text" name="kode" class="form-control" id="">
    </div>
  </div>
  <br>
	<b>
  <input type="submit" class="btn btn-success" value="Cari "></b>
</form>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Tabel Peminjam</h3>
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
									<th>Aksi</th>
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
								<td>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="hapus") echo "class='active'";?><a href="?ap=hapus&id=<?php echo ($data['kode']); ?>"  class="btn btn-info btn-sm" style="background-color:#4CAF50; border-color: #4CAF50;">Selesai</a>
							<?php
							}
							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
</form>
 <?php  ?>
