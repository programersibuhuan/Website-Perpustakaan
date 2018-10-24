<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		<link rel="stylesheet" href="style/style.css">
    <title>Perpustakaan STT Bethel Medan</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <?php
    	include "koneksi.php";
    ?>

</head>
<body>


<div class="container">

	<div class="header">

			<img width=1028 height=160 src='images/header.jpg' />
		<nav class="navbar navbar-default">
		    <ul class="nav navbar-nav">

					<li><a href="?ap=home"><strong>Beranda</strong></a></li>
		      <li><a href="?ap=anggota"><strong>Anggota</strong></a></li>
		      <li><a href="?ap=buku"><strong>Koleksi Buku</strong></a></li>
		      <li><a href="?ap=peminjaman"><strong>Peminjaman</strong></a></li>
		      <li><a href="?ap=pengembalian"><strong>Pengembalian</strong></a></li>
					<li><a href="?ap=laporan"><strong>Laporan</strong></a></li>
					<li><a href="?ap=logout"><strong>Log out</strong></a></li>
		    </ul>
		</nav>
	</div> <!--/ .header -->

	<div class="main">
		<div class="middle">
				<?php
						include "fungsi.php";
				 	?>
		</div> <!--/ .middle -->
	</div> <!--/ .main -->

	<div class="footer">
		<p>
			SEKOLAH TINGGI TEOLOGI BETHEL MEDAN
			<br>
							2018 © All Right Reserved<br/>

						</p>
	</div> <!--/ .footer -->

</div>

</body>
</html>
