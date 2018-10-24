<?php

	include "../../koneksi.php";

	$kode = $_POST['kode'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tempatterbit = $_POST['tempatterbit'];
	$tahun = $_POST['tahun'];
	$nomor = $_POST['nomor'];
	$bahasa = $_POST['bahasa'];
	$topik = $_POST['topik'];
	$deskripsi = $_POST['deskripsi'];
	$stok = $_POST['stok'];

  $query = mysql_query("insert into buku values('$kode','$judul','$pengarang','$penerbit','$tempatterbit','$tahun','$nomor','$bahasa','$topik','$deskripsi','$stok')");

  if ($query) {
		echo "<script>alert('Data berhasil tersimpan');window.location=history.go(-1) </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan');window.location=history.go(-1) </script> ";
	}
?>
