<?php

	include "../../koneksi.php";

  $kode = $_POST['kode'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$fakultas = $_POST['fakultas'];
	$kodebuku = $_POST['kodebuku'];
  $namabuku = $_POST['namabuku'];
	$jumlah = $_POST['jumlah'];
  $dd=$_POST['dd'];
  $mm=$_POST['mm'];
  $yyyy=$_POST['yyyy'];
  $kdd=$_POST['kdd'];
  $kmm=$_POST['kmm'];
  $kyyyy=$_POST['kyyyy'];
	$tanggalpinjam = $dd ."-". $mm ."-". $yyyy;
	$tanggalkembali = $kdd ."-". $kmm ."-". $kyyyy;

  $query = mysql_query("insert into pinjam values('$kode','$id','$fakultas','$fakultas','$kodebuku','$namabuku','$jumlah','$tanggalpinjam','$tanggalkembali')");

  if ($query) {
    echo "<script>alert('Data berhasil tersimpan');window.location=history.go(-1) </script> ";
  }else {
    echo "<script>alert('Data gagal disimpan');window.location=history.go(-1) </script> ";
  }
?>
