<?php
if (isset($_GET['id'])) {
  $query = mysql_query ("DELETE FROM pinjam WHERE kode='".$_GET['id']."'");
}
if ($query) {
	echo "<script>alert('Buku Telah Dikembalikan');document.location=history.go(-1) </script> ";
	header("Refresh:0");
}else {
	echo "<script>alert('Gagal!');document.location='../../admin.php' </script> ";
}
?>
