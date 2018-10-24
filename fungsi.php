<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];

		if ($ap=="anggota"){
			include "perpus/anggota/anggota.php";
		}

		if($ap=="buku"){
			include "perpus/buku/buku.php";
		}

		if($ap=="peminjaman"){
			include "perpus/pinjam/pinjam.php";
		}

		if($ap=="pengembalian"){
			include "perpus/kembali/kembali.php";
		}

		if($ap=="login"){
			include "konten/login.php";
		}

		if($ap=="laporan"){
			include "perpus/laporan/index.php";
		}

		if($ap=="lappinjam"){
			include "perpus/laporan/lappinjam.php";
		}

		if($ap=="lapbuku"){
			include "perpus/laporan/lapbuku.php";
		}

		if($ap=="lapanggota"){
			include "perpus/laporan/lapanggota.php";
		}

		if($ap=="lapkembali"){
			include "perpus/laporan/lapkembali.php";
		}

		if($ap=="hapus"){
			include "perpus/kembali/hapus.php";
		}

		if($ap=="logout"){
			include "logout.php";
		}

		if($ap=="home"){
			include "home.php";
		}


	}else{
		//include "konten/login.php";
		include "home.php";
	}

?>
