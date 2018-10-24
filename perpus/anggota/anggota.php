<?php ?>

			<div class="col-lg-12">
				<h3 class="page-header centered">ANGGOTA PERPUSTAKAAN</h3><br>
			</div>
	<!--/.row-->
<form role="form" action="perpus/anggota/simpan.php" method="post">
<div class="col-lg-7 col-lg-offset-3 centered">
<form>
  <div class="form-group row">
    <label for="staticEmail"  class="col-sm-4 col-form-label text-left">ID Anggota</label>
    <div class="col-sm-7">
    <input type="text" name="id" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Nama</label>
    <div class="col-sm-7">
      <input type="text" name="nama" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Institusi</label>
    <div class="col-sm-7">
      <input type="text" name="institusi" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Fakultas</label>
    <div class="col-sm-7">
      <input type="text" name="fakultas" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Tipe Keanggotaan</label>
    <div class="col-sm-7">
        <select name="tipe" class="form-control">
          <option>--Pilih--</option>
          <option>S1 PAK</option>
          <option>S1 TEOLOGI</option>
          <option>STAF TENAGA KEPENDIDIKAN</option>
          <option>DOSEN</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Jenis Kelamin</label>
    <div class="col-sm-7">
        <select name="jkelamin" class="form-control">
          <option>--Pilih--</option>
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Tempat Lahir</label>
    <div class="col-sm-7">
      <input type="text" name="tempatlahir"  class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Tanggal lahir</label>
    <div class="col-sm-7">
      <input type="text" name="tanggallahir" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"class="col-sm-4 col-form-label text-left">Alamat</label>
    <div class="col-sm-7">
      <input type="text" name="alamat"  class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Telepon</label>
    <div class="col-sm-7">
      <input type="text" name="telepon" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Email</label>
    <div class="col-sm-7">
      <input type="text" name="email" class="form-control" id="">
    </div>
  </div>
  <br>
  <input type="submit" class="btn btn-success" value="Simpan">
</form>
</div>

<div class="row">
	<div class="col-lg-12 centered">
		<h3 class="page-header">DATA ANGGOTA</h3><br>
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


</form>
 <?php  ?>
