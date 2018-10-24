<?php ?>

			<div class="col-lg-12">
				<h3 class="page-header centered">KOLEKSI BUKU</h3><br>
			</div>
	<!--/.row-->
<form role="form" action="perpus/buku/simpan.php" method="post">
<div class="col-lg-7 col-lg-offset-3 centered">
<form>
	<div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Kode Buku</label>
    <div class="col-sm-7">
    <input type="text" name="kode" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Judul</label>
    <div class="col-sm-7">
    <input type="text" name="judul" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">pengarang</label>
    <div class="col-sm-7">
      <input type="text" name="pengarang" class="form-control" id="">
    </div>
  </div>
    <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Penerbit</label>
    <div class="col-sm-7">
      <input type="text" name="penerbit" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Tempat Penerbitan</label>
    <div class="col-sm-7">
      <input type="text" name="tempatterbit" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Tahun Penerbitan</label>
    <div class="col-sm-7">
      <input type="text" name="tahun" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Nomor Panggil</label>
    <div class="col-sm-7">
      <input type="text" name="nomor" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Bahasa</label>
    <div class="col-sm-7">
      <input type="text" name="bahasa" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Topik</label>
    <div class="col-sm-7">
      <input type="text" name="topik" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Deskripsi Singkat</label>
    <div class="col-sm-7">
      <input type="text" name="deskripsi" class="form-control" id="">
    </div>
  </div>
	<div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Stok</label>
    <div class="col-sm-7">
      <input type="text" name="stok" class="form-control" id="">
    </div>
  </div>
  <br>
  <input type="submit" class="btn btn-success" value="Simpan">
</form>
</div>
</form>
 <?php  ?>
