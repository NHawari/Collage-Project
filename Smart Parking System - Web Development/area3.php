<?php 

session_start();

if( !isset($_SESSION["login"])){
	if(!isset($_SESSION['login_id'])){
		echo "
			<script>
				alert('Anda belum login ! Silahkan login terlebih dahulu !');
				document.location.href = 'login2.php';
			</script>
		";
	}
}

require 'functions.php';

$parkir = query("SELECT * FROM tiket");

$ere = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t"];

for($i = 0; $i < 20; $i++){
    if(isset($_SESSION[$ere[$i]])){
        if($_SESSION[$ere[$i]] != 0){
            date_default_timezone_set('Asia/Jakarta'); 
            if((time()-$_SESSION[$ere[$i]]) > 60 ){
                bookcancel($parkir[$i]["nomor"]);
                $_SESSION[$ere[$i]] = 0;
                echo "
                <script>
                    alert('Book dicancel!');
                </script>
                ";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Area Parkir</title>
    <meta http-equiv="refresh" content="1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <style>
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
            color: white;
            width: 27.6%;
            opacity: 0.7;
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
        .kanan{
            padding-bottom: 0px;
            background-color: black;
            color: white;
            width: 37%; 
            margin-top: 10px;
            margin-bottom: 11px;
            margin-right: 35px;
            border-radius: 5px;
            margin-left: 9px;
        }
        .atas{
            margin: auto;
            border-style: solid;
            border-color: #424949;
            border-radius: 5px;
        }
        .bawah{
            margin-top: 9px;
            display: flex;
            border-style: solid;
            border-color: #424949;
            border-radius: 5px;
        }
        h2{
            text-align: center;
            font-weight: bold;
            font-family: 'Rubik Iso', cursive;
        }
        .left{
            margin-top: 50px;
            margin-bottom: 50px;
            padding-left: 50px;
            width: 60%;
            background-color: black;
        }
        .right{
            margin-top: 50px;
            margin-bottom: 50px;
            width: 40%;
            background-color: black;
        }
        .keterangan{
            margin-top: 10px;
            margin-left: 10px;
            display: flex;
        }
        .pilihan1{
            background: #424949;
			color: white;
			font-size: 10pt;
			width: 91%;
			border-style: solid 1px;
			margin-top: 2px;
			padding: 5px 10px;
			border-color: black;
			border-radius: 4px;
        }
		.pilihan2{
            background: #222;
			color: white;
			font-size: 10pt;
			width: 91%;
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
        .tampilan{
            background-color: black;
            justify-content: center;
            width: 50%;
        }
        .layer1, .layer2, .layer3, .layer4{
            margin-top: 10px;
            display : flex;
            width: 100%;
        }
        .slot{
            margin-left : 9px;
            opacity: 0.9;
            width: 125.7px;
            height: 125.7px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            border-style: solid;
            border-color: #424949;
        }
        .slot:hover{
            opacity: 1;
            border-color: white;

        }
        .ket{
            width: 30px;
            height: 30px;
            margin-top: 12px;
            margin-right: 5px;
            border-radius: 5px;
        }
        p{
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }
        a{
            font-size: 23px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        a:hover{
            color: #AAB7B8;
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
            <a style="font-size: 15px;" href="index.php">Daftar Parkir</a>
        </div>
        <div class="pilihan2">
            <a style="font-size: 15px;" href="area3.php">Area Parkir</a>
        </div>
        <div class="pilihan1">
            <a style="font-size: 15px;" href="logout.php">Logout</a>
        </div>
    </div>
    <div class="tampilan">
        <div class="layer1">
            <?php
            $abang=0;
            $oren=0;
            $ijo=0;
            for( $i = 0; $i <= 4; $i++ ){
		        if($parkir[$i]["booked"]=="Yes"){
                    if($parkir[$i]["status"]=="Yes"){
                        $warna = "maroon";
                        $cek = 1;
                        $abang = $abang + 1;
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                        $oren = $oren + 1;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                    $ijo = $ijo + 1;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot">
                    <a href="transisi.php?id=<?= $parkir[$i]["nomor"];?>"> <?php echo $parkir[$i]["nomor"]; ?> </a>
                </div>    
            <?php
            }
            ?>
        </div>
        <div class="layer2">
        <?php
            for( $i = 5; $i <= 9; $i++ ){
		        if($parkir[$i]["booked"]=="Yes"){
                    if($parkir[$i]["status"]=="Yes"){
                        $warna = "maroon";
                        $cek = 1;
                        $abang = $abang + 1;
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                        $oren = $oren + 1;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                    $ijo = $ijo + 1;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot">
                    <a href="transisi.php?id=<?= $parkir[$i]["nomor"];?>"> <?php echo $parkir[$i]["nomor"]; ?> </a>
                </div>   
            <?php
            }
            ?>
        </div>
        <div class="layer3">
        <?php
            for( $i = 10; $i <= 14; $i++ ){
		        if($parkir[$i]["booked"]=="Yes"){
                    if($parkir[$i]["status"]=="Yes"){
                        $warna = "maroon";
                        $cek = 1;
                        $abang = $abang + 1;
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                        $oren = $oren + 1;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                    $ijo = $ijo + 1;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot">
                    <a href="transisi.php?id=<?= $parkir[$i]["nomor"];?>"> <?php echo $parkir[$i]["nomor"]; ?> </a>
                </div>     
            <?php
            }
            ?>
        </div>
        <div class="layer4">
        <?php
            for( $i = 15; $i <= 19; $i++ ){
		        if($parkir[$i]["booked"]=="Yes"){
                    if($parkir[$i]["status"]=="Yes"){
                        $warna = "maroon";
                        $cek = 1;
                        $abang = $abang + 1;
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                        $oren = $oren + 1;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                    $ijo = $ijo + 1;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot">
                    <a href="transisi.php?id=<?= $parkir[$i]["nomor"];?>"> <?php echo $parkir[$i]["nomor"]; ?> </a>
                </div>     
            <?php
            }
            ?>
        </div>
    </div>
    <div class="kanan">
        <div class="atas">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $sekarang = date('H:i:s');
            ?>
            <h2 style="font-family: 'SF Pro Display', sans-serif;"> <?php echo $sekarang ?> </h2>
        </div>
        <div class="bawah">
            <div class="left">
                <div class = "keterangan">
                    <div style="background-color: #117A65;" class="ket"></div>
                    <p>Available</p>
                </div>
                <div class = "keterangan">
                    <div style="background-color: #B9770E;" class="ket"></div>
                    <p>Booked</p>
                </div>
                <div class = "keterangan">
                    <div style="background-color: maroon;" class="ket"></div>
                    <p>Not Available</p>
                </div>
            </div>
            <div class="right">
                <div class = "keterangan">
                    <p><?php echo $ijo ?></p>
                </div>
                <div class = "keterangan">
                    <p><?php echo $oren ?></p>
                </div>
                <div class = "keterangan">
                    <p><?php echo $abang ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>