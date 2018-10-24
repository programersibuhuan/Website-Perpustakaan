<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];

		if($ap=="login"){
			include "konten/login.php";
		}

		if($ap=="tampil"){
			include "perpus/cari/tampil.php";
		}

		if($ap=="cari"){
			include "perpus/cari/cari.php";
		}

	}else{
		//include "konten/login.php";
		include "perpus/cari/cari.php";
	}

?>
