<?php ?>
<nav class="navbar-right">
	<a href="?ap=login"class="btn btn-danger" id="btn-todo">Login</a>
</nav>
			<div class="col-lg-12">
				<h3 class="page-header centered">CARI BUKU ?</h3><br>
			</div>
	<!--/.row-->
<form role="form" method="POST" action="?ap=tampil">
<div class="col-lg-6 col-lg-offset-3 centered">
    <input type="text" name="cari" class="form-control" placeholder="Judul Buku atau Pengarang...">
<br>
	<input type="submit" name="submit" class="btn btn-success" value="Cari Buku">

</div>
</form>
