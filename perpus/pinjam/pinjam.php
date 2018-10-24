<?php  ?>

			<div class="col-lg-12">
				<h3 class="page-header centered">FORM PEMINJAMAN</h3><br>
			</div>
	<!--/.row-->

	<?php
	include "koneksi.php";
		//membaca kode barang terbesar
		$sql = "SELECT max(kode) FROM pinjam";
		$query = mysql_query($sql);
		$kode_faktur = mysql_fetch_array($query);

		if($kode_faktur){
			$nilai = substr($kode_faktur[0], 1);
			$kode = (int) $nilai;

			//tambahkan sebanyak + 1
			$kode = $kode + 1;
			$auto_kode = "P" .str_pad($kode, 3, "0",  STR_PAD_LEFT);
		} else {
			$auto_kode = "P0001";
		}
	?>
<form role="form" action="perpus/pinjam/simpan.php" method="post">
<div class="col-lg-7 col-lg-offset-3 centered">
<form>
  <div class="form-group row">
    <label for="staticEmail"  class="col-sm-4 col-form-label text-left">Kode Peminjaman</label>
    <div class="col-sm-7">
    <input type="text" name="kode" class="form-control" id="" value="<?php echo $auto_kode; ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail"  class="col-sm-4 col-form-label text-left">ID Anggota</label>
    <div class="col-sm-7">
    <input type="text" name="id" class="form-control" id="id">
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Nama</label>
    <div class="col-sm-7">
      <input type="text" name="nama" class="form-control" id="nama">
    </div>
  </div>
    <div class="form-group row">
    <label for="ex1" class="col-sm-4 col-form-label text-left">Fakultas</label>
    <div class="col-sm-7">
      <input type="text" name="fakultas" class="form-control" id="fakultas">
    </div>
  </div>
  <div class="form-group row">
  <label for="ex1" class="col-sm-4 col-form-label text-left">Kode Buku</label>
  <div class="col-sm-7">
    <input type="text" name="kodebuku" class="form-control" id="kodebuku">
  </div>
</div>
<div class="form-group row">
<label for="ex1" class="col-sm-4 col-form-label text-left">Nama Buku</label>
<div class="col-sm-7">
  <input type="text" name="namabuku" class="form-control" id="namabuku">
</div>
</div>
<div class="form-group row">
<label for="ex1" class="col-sm-4 col-form-label text-left">Jumlah Dipinjam</label>
<div class="col-sm-7">
  <input type="text" name="jumlah" class="form-control" id="jumlah">
</div>
</div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Tanggal Pinjam</label>
    <div class="col-xs-2">
        <select name="dd" class="form-control">
          <option>dd</option>
          <option>1</option>
          <option>2</option>
          <option>4</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
    </div>
    <div class="col-xs-3">
        <select name="mm" class="form-control">
          <option>mm</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="col-xs-3">
        <select name="yyyy" class="form-control">
          <option>yyyy</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="ex1"  class="col-sm-4 col-form-label text-left">Tanggal Kembali</label>
    <div class="col-xs-2">
        <select name="kdd" class="form-control">
          <option>dd</option>
          <option>1</option>
          <option>2</option>
          <option>4</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
    </div>
    <div class="col-xs-3">
        <select name="kmm" class="form-control">
          <option>mm</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="col-xs-3">
        <select name="kyyyy" class="form-control">
          <option>yyyy</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
        </select>
    </div>
  </div>
  <br>
  <input type="submit" class="btn btn-success" value="Simpan">
</form>
</div>
</form>


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
 <?php  ?>
