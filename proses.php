<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM anggota WHERE id='".mysqli_escape_string($conn, $_POST['id'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);
