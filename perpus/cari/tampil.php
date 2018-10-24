<?php
    include "cari.php";
 ?>

<div class="row">
	<div class="col-lg-12 centered">
		<h3 class="page-header">HASIL PENCARIAN</h3>
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
 include 'koneksi.php';
 $no_urut = 0;
 $search = $_POST['cari'];
 $query = "SELECT * FROM buku WHERE kode LIKE '%$search%' or judul LIKE '%$search%'" ;
 $result = mysql_query($query);
 while($data = mysql_fetch_array($result)) {
  $no_urut++;
  echo "<tr>
     <td>$no_urut</td>
     <td>".$data['kode']."</td>
     <td>".$data['judul']."</td>
     <td>".$data['pengarang']."</td>
     <td>".$data['penerbit']."</td>
     <td>".$data['tempatterbit']."</td>
     <td>".$data['tahun']."</td>
     <td>".$data['nomor']."</td>
     <td>".$data['bahasa']."</td>
     <td>".$data['topik']."</td>
     <td>".$data['deskripsi']."</td>
     <td>".$data['stok']."</td>
  <tr>";
 }
?>
</table>
