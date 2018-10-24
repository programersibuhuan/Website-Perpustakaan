<?php

	include "../../koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$institusi = $_POST['institusi'];
	$fakultas = $_POST['fakultas'];
	$tipe = $_POST['tipe'];
	$jkelamin = $_POST['jkelamin'];
	$tempatlahir = $_POST['tempatlahir'];
	$tanggallahir = $_POST['tanggallahir'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];

  $query = mysql_query("insert into anggota values('$id','$nama','$institusi','$fakultas','$tipe','$jkelamin','$tempatlahir','$tanggallahir','$alamat','$telepon','$email')");

  if ($query) {
		echo "<script>alert('Data berhasil tersimpan');document.location='../../admin.php' </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan');document.location='../../admin.php' </script> ";
	}
?>
