<?php
		?>
    <div class="row">
    	<div class="col-lg-12 centered">
    		<h3 class="page-header">FORM LAPORAN</h3>
    	</div>
    		</div><!--/.row-->
						<table class="table table-striped table-hover table-responsive">
						    <thead>
						    <tr>
							    <th><center>No</th>
									<th><center>Laporan</th>
									<th><center>Aksi</center></th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
								<td><center>1</td>
								<td>Data Anggota Perpustakaan</td>
								<td><center><?php if (isset($_GET['ap']) && $_GET['ap']=="lapanggota") echo "class='active'";?><a href="?ap=lapanggota"class="btn btn-success btn-sm" id="btn-todo" target="_blank">Print</a></td>
							</tr>
              <tr>
                <td><center>2</td>
                <td>Data Koleksi Buku</td>
                <td><center><?php if (isset($_GET['ap']) && $_GET['ap']=="lapbuku") echo "class='active'";?><a href="?ap=lapbuku"class="btn btn-success btn-sm" id="btn-todo" target="_blank">Print</a></td>
              </tr>
              <tr>
                <td><center>3</td>
                <td>Data Pinjaman Buku</td>
                <td><center><?php if (isset($_GET['ap']) && $_GET['ap']=="lappinjam") echo "class='active'";?><a href="?ap=lappinjam"class="btn btn-success btn-sm" id="btn-todo" target="_blank">Print</a></td>
              </tr>
              <tr>
                <td><center>4</td>
                <td>Data Pengembalian Buku</td>
                <td><center><?php if (isset($_GET['ap']) && $_GET['ap']=="lapkembali") echo "class='active'";?><a href="?ap=lapkembali"class="btn btn-success btn-sm" id="btn-todo" target="_blank">Print</a></td>
              </tr>
							</tbody>
						</table>
            <h1 style="color:#ffffff;">I</h1>
          	<h1 style="color:#ffffff;">I</h1>
<?php  ?>
