<?php 

require 'functions.php';

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

if( isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	if( mysqli_num_rows($result) === 1 ) {
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			$_SESSION["login"] = true;
			echo "
			<script>
				alert('Login Berhasil!');
                document.location.href = 'index.php';
			</script>";
		}
	}
	$error = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		.tulisan_login{
			text-align: center;
			font-size: 17pt;
			text-transform: uppercase;
			font-weight: bold;
		}
		.kotak_login{
			width: 350px;
			background: white;
			margin-top: 40px;
			margin-left: 48px;
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
		.username{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.login{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		.login:hover{
            background-color: #229954 ;
        }
		.google{
			display: flex;
			background: white;
			color: black;
			font-size: 11pt;
			width: 88.5%;
			border: none;
			border-style: solid;
			border-color: black;
			border-radius: 3px;
			padding: 10px 20px;
		}
		.google:hover{
			background-color: whitesmoke;
		}
		a{
			color: white;
			text-decoration: none;
			margin-left: 5px;
		}
		a:hover{
			color: #424949;
		}
		p{
			text-align: center;
		}
		.kembali{
			display: flex;
			margin-top: 10px;
			margin-left: 10px;
			font-weight: bold;
			background-color: black;
			width: 30%;
			height: 5vh;
		}
		.all{
			background-color: black;
			display: flex;
			margin-bottom: 48px;
		}
		
	</style>
</head>
<body>
<div class="all">
	<div class="kembali">
		<i class="fa-solid fa-backward" style="color: #ffffff; margin-top:1px;"></i>
		<a href="registrasi.php"> Kembali</a>
	</div>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
		<form action="" method="post">
			<label for="username" style="font-weight: bold;">Username</label><br>
			<input type="text" name="username" class="username" id="username" placeholder="Enter username"><br>
			<label for="password" style="font-weight: bold;">Password</label><br>
			<input type="password" name="password" class="password" id="password" placeholder="Enter password"><br><br>
			<?php 
			if( isset($error) ) : ?>
				<p style="color: red; font-style: italic;">username / password salah</p>
			<?php 
			endif; ?>
			<button type="submit" name="login" class="login">Login</button><br>
			<p>------------------- OR -------------------</p>
			<div class="google">
				<i class="fa-brands fa-google" style="margin-left:83px;margin-top:2px;color:black;"></i>
				<a style="text-decoration:none; color:black; margin-left:9px;" href="login.php">Login with Google</a>
			</div>
		</form>
	</div>
</div>
<marquee scrollamount="15" style="background-color:white ; color: black; font-weight:bold;">SMART PARKING SYSTEM - 
SMART PARKING SYSTEM - SMART PARKING SYSTEM - SMART PARKING SYSTEM - SMART PARKING SYSTEM
 - SMART PARKING SYSTEM - SMART PARKING SYSTEM</marquee>

</body>
</html>
