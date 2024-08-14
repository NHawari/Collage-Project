<?php 
session_start();

if( isset($_SESSION["login"])){
	echo "
			<script>
				alert('Anda sudah login !');
				document.location.href = 'index.php';
			</script>
		";
}elseif( isset($_SESSION['login_id'])){
	echo "
			<script>
				alert('Anda sudah login !');
				document.location.href = 'index.php';
			</script>
		";
}

require 'functions.php';

if( isset($_POST["register"]) ){
	if( registrasi($_POST) > 0 ){
		echo "<script>
				alert('User baru berhasil ditambahkan !');
                document.location.href = 'login2.php';
			  </script>";
	}else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
	<style>
		body{
			font-family: 'SF Pro Display', sans-serif;
			background-color: black;
		}
		h1{
			text-align: center;
			font-weight: 300;
		}
		.tulisan_regis{
			text-align: center;
			font-size: 17pt;
			text-transform: uppercase;
			font-weight: bold;
		}
		.kotak_regis{
			width: 350px;
			background: white;
			margin: 19px auto;
			padding: 30px 20px;
			border-radius: 5px;
		}
		label{
			font-size: 11pt;
		}
		.password{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.password2{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.username{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.regis{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		.regis:hover{
            background-color: #229954 ;
        }
		a{
			color: #46de4b;
			opacity: 0.8;
			text-decoration: none;
			font-size: 10pt;
			margin-top: 13.5px;
			margin-left: 3px;
		}
		a:hover{
			opacity: 1;
		}
		.bawah{
			display: flex;
			font-size: 10pt;
			padding-left: 95px;
			padding-top: 10px;
		}
	</style>
</head>
<body>

<div class="kotak_regis">
	<p class="tulisan_regis" style="font-weight: bold;">Silahkan Daftar</p>
	<form action="" method="post">
		<label for="username" style="font-weight: bold;">Username</label><br>
		<input type="text" name="username" class="username" id="username"><br>
		<label for="password" style="font-weight: bold;">Password</label><br>
		<input type="password" name="password" class="password" id="password"><br>
		<label for="password2" style="font-weight: bold;">Konfirmasi Password</label><br>
		<input type="password" name="password2" class="password2" id="password2"><br><br>
		<button type="submit" name="register" class="regis">Daftar</button><br><br>
		<div class="bawah">
			<p>Sudah punya akun?</p>
			<a href="login2.php">Login.</a>
		</div>
	</form>
</div>
<marquee scrollamount="15" style="background-color:white ; color: black; font-weight:bold;">SMART PARKING SYSTEM - 
SMART PARKING SYSTEM - SMART PARKING SYSTEM - SMART PARKING SYSTEM - SMART PARKING SYSTEM
 - SMART PARKING SYSTEM - SMART PARKING SYSTEM</marquee>

</body>
</html>