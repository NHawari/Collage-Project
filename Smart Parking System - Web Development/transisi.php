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

$nomor = $_GET["id"];

$tiket = query("SELECT * FROM tiket WHERE nomor = $nomor")[0];

$parkir = query("SELECT * FROM tiket");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Transisi</title>
    <meta http-equiv="refresh" content="5">
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
            color: white;
            width: 45%;
            margin-top: 9px;
            margin-bottom: 14px;
            margin-right: 35px;
            border-radius: 5px;
        }
        h1{
            text-align: center;
        }
        .pilihan{
            background-color: black;
			color: white;
			font-size: 13pt;
			width: 100%;
            height: 81.7%;
			border-style: solid;
			border-color: #424949;
            text-align: center;
            padding-top: 50px;
            border-radius: 5px;
        }
        .bawah{
            margin-bottom: 0;
            margin-top: 6px;
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: center;
            background-color: black;
            width: 100%;
            border-style: solid;
            border-color: #424949;
            border-radius: 5px;
        }
        .tampilan{
            background-color: black;
            padding-left: 35px;
            justify-content: center;
            width: 60%;
        }
        .layer1, .layer2, .layer3, .layer4{
            margin-top: 9px;
            display : flex;
            width: 100%;
        }
        .slot2{
            margin-right : 9px;
            opacity: 0.9;
            width: 125.7px;
            height: 125.7px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-style: solid;
            border-color: #424949;
        }
        .slot2:hover{
            opacity: 1;
            border-color: white;
        }
        a:hover{
            color:#B2BABB ;
        }
        .slot{
            margin:auto;
            width: 300px;
            height: 300px;
            font-size: 30px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        a{
            font-size: 23px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .aksi{
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 120px;
            height: 40px;
            background-color: black;
            color: white;
            margin-bottom: 10px;
            border-style: solid;
            border-color: #424949;
        }
        .aksi:hover{
            background-color: #424949;
            border-color: #424949;
        }
        .bawah:hover{
            background-color: #424949;
            border-color: #424949;
        }
    </style>
</head>
<body>

<div class="all"> 
    <div class="tampilan">
        <div class="layer1">
            <?php
            for( $i = 0; $i <= 4; $i++ ){
		        if($parkir[$i]["booked"]=="Yes"){
                    if($parkir[$i]["status"]=="Yes"){
                        $warna = "maroon";
                        $cek = 1;
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot2">
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
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot2">
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
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot2">
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
                    }else{
                        $warna = "#B9770E";
                        $cek = 2;
                    }
                }else{
                    $warna = "#117A65";
                    $cek = 3;
                }?>
                <div style="background-color: <?php echo $warna; ?>" class="slot2">
                    <a href="transisi.php?id=<?= $parkir[$i]["nomor"];?>"> <?php echo $parkir[$i]["nomor"]; ?> </a>
                </div>    
            <?php
            }
            ?>
        </div>
    </div>
    <div class="menu">
        <?php
        if($tiket["booked"] == "Yes"){
            if($tiket["status"] == "Yes"){?>
                <div class="pilihan">
                    <div style="background-color: maroon" class="slot">
                        <h1> <?php echo $tiket["nomor"]; ?></h1>
                    </div>
                    <div class="aksi">
                        <a style="font-size: 18px;" href="out2.php?id=<?= $tiket["nomor"];?>">OUT</a>
                    </div>
                </div>
                <div class="bawah">
                    <a href="area3.php">Kembali</a>
                </div>
            <?php
            }else{?>
                <div class="pilihan">
                    <div style="background-color: #B9770E" class="slot">
                        <h1> <?php echo $tiket["nomor"]; ?></h1>
                    </div>
                    <div class="aksi">
                        <a style="font-size: 18px;" href="in2.php?id=<?= $tiket["nomor"];?>">IN</a>
                    </div>
                    <div class="aksi">
                        <a style="font-size: 18px;" href="cancel2.php?id=<?= $tiket["nomor"];?>">CANCEL</a>
                    </div>
                </div>
                <div class="bawah">
                    <a href="area3.php">Kembali</a>
                </div>
            <?php
            }
        }else{?>
            <div class="pilihan">
                <div style="background-color: #117A65" class="slot">
                    <h1> <?php echo $tiket["nomor"]; ?></h1>
                </div>
                <div class="aksi">
                    <a style="font-size: 18px;" href="book2.php?id=<?= $tiket["nomor"];?>">BOOK</a>
                </div>
            </div>
            <div class="bawah">
                <a href="area3.php">Kembali</a>
            </div>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>