<?php

	include "../koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];


	$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	?><script language="JavaScript">alert('Login Berhasil  !');
			document.location='../admin.php'</script><?php
}else{
	echo mysql_error();
			?><script language="JavaScript">alert('Username atau Password Anda Salah!');
			document.location='../index.php?ap=login'</script><?php
		}

?>
