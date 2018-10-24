<?php

?>
<div class="container pt">
		<div class="row mt">
		<form action="konten/login_proses.php" method="POST">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>LOGIN</h3>

			</div>
		</div>
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<form role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="username" placeholder="Username" name="username">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
				  </div>
				    <br>
				  <input type="submit" class="btn btn-success" value="Login">
				</form>
			</div>
			</form>
		</div><!-- /row -->
	</div><!-- /container -->
	<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
