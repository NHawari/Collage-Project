<?php
 
session_start();

require 'functions.php';

$parkir = query("SELECT * FROM tiket");

if( !isset($_SESSION["login"])){
	if(!isset($_SESSION['login_id'])){
		//header('Location : http://localhost/ParkirMat/login2.php');
		//exit;
		echo "
			<script>
				alert('Anda belum login ! Silahkan login terlebih dahulu !');
				document.location.href = 'login2.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<meta http-equiv="refresh" content="20">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
	<style>
		* {box-sizing: border-box;}
		body{
            margin: 0;
            padding: 0;
			background-color: black;
			font-family: 'SF Pro Display', sans-serif;
        }
        .all{
            display: flex;
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .menu{
            background-color: #424949;
			opacity: 0.7;
            color: white;
            width: 20%;
            margin-top: 10px;
            margin-bottom: 11px;
            margin-left: 35px;
            border-radius: 5px;
			border-style: solid;
            border-color: #424949;
        }
		.menu:hover{
			opacity: 1;
            border-style: solid;
            border-color: white;
		}
        .pilihan1{
            background: #222;
			color: white;
			font-size: 10pt;
			width: 100%;
			border-style: solid 1px;
			margin-top: 2px;
			padding: 5px 10px;
			border-color: black;
			border-radius: 4px;
        }
		.pilihan2{
            background: #424949;
			color: white;
			font-size: 10pt;
			width: 100%;
			border-style: solid 1px;
			margin-top: 2px;
			padding: 5px 10px;
			border-color: black;
        }
		.pilihan1:hover{
            background: #222;
            opacity: 0.7;
        }
        .pilihan2:hover{
            background: #222;
            opacity: 0.7;
        }
		a{
            font-size: 15px;
			font-weight: bold;
            text-decoration: none;
            color: white;
        }
		a:hover{
			color: #AAB7B8;
		}
		.tengah{
			float: left;
  			width: 40%;
			margin-top: 10px;
            margin-bottom: 11px;
            margin-left: 9px;
            border-radius: 5px;
		}
		.kiri {
  			float: left;
  			width: 40%;
			margin-top: 10px;
            margin-bottom: 11px;
            margin-right: 35px;
			margin-left: 0px;
            border-radius: 5px;
		}
		.tabel::after {
  			content: "";
  			clear: both;
  			display: table;
		}
		table{
  			border-collapse: collapse;
  			border-spacing: 0;
  			width: 100%;
			height: 96.5vh;
  			border: 1px solid #ddd;
			border-radius: 5px;
			border-style: solid 3px;
			border-color: #424949;
		}
		th,td{
			height: 30px;
			text-align: center;
		}
		tr:nth-child(even) {
  			background-color: #424949;
			color: white;
		}
		tr:nth-child(odd) {
  			background-color: #222;
			color: white;
		}
		.icon{
			display: flex;
			padding: 5px 10px;
			background-color: white;
			color: black;
			border-style: solid;
			border-color: white;
			border-radius: 3px;
			opacity: 1;
		}
	</style>
</head>
<body>

<div class="all">
    <div class="menu" >
		<div class="icon">
			<i class="fa-solid fa-bars" style="color: black; padding-top:21px; margin-right:5px;"></i>
        	<h3>Menu</h3>
		</div>
        <div class="pilihan1">
            <a href="index.php">Daftar Parkir</a>
        </div>
        <div class="pilihan2">
            <a href="area3.php">Area Parkir</a>
        </div>
		<div class="pilihan2">
            <a href="logout.php">Logout</a>
        </div>
    </div>
	<div class="tengah">
		<table>
			<tr>
				<th>Nomor Tiket</th>
				<th>Booked</th>
				<th>Status</th>
				<th>By</th>
			</tr>
			<?php
			for($i=0;$i<10;$i++){?>
			<tr>
				<td> <?php echo $parkir[$i]["nomor"]; ?></td>
				<td> <?php echo $parkir[$i]["booked"]; ?></td>
				<td> <?php echo $parkir[$i]["status"]; ?></td>
				<td> <?php echo $parkir[$i]["by"]; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<div class="kiri">
		<table>
			<tr>
				<th>Nomor Tiket</th>
				<th>Booked</th>
				<th>Status</th>
				<th>By</th>
			</tr>
			<?php
			for($i=10;$i<20;$i++){?>
			<tr>
				<td> <?php echo $parkir[$i]["nomor"]; ?></td>
				<td> <?php echo $parkir[$i]["booked"]; ?></td>
				<td> <?php echo $parkir[$i]["status"]; ?></td>
				<td> <?php echo $parkir[$i]["by"]; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>

</body>
</html>