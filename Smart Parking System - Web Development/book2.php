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

if( isset($_POST["submit"]) ){
	if($nomor == 1001){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["a"] = time(); 
	}elseif($nomor == 1002){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["b"] = time(); 
	}elseif($nomor == 1003){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["c"] = time(); 
	}elseif($nomor == 1004){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["d"] = time(); 
	}elseif($nomor == 1005){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["e"] = time(); 
	}elseif($nomor == 1006){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["f"] = time(); 
	}elseif($nomor == 1007){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["g"] = time(); 
	}elseif($nomor == 1008){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["h"] = time(); 
	}elseif($nomor == 1009){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["i"] = time(); 
	}elseif($nomor == 1010){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["j"] = time(); 
	}elseif($nomor == 1011){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["k"] = time(); 
	}elseif($nomor == 1012){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["l"] = time(); 
	}elseif($nomor == 1013){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["m"] = time(); 
	}elseif($nomor == 1014){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["n"] = time(); 
	}elseif($nomor == 1015){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["o"] = time(); 
	}elseif($nomor == 1016){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["p"] = time(); 
	}elseif($nomor == 1017){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["q"] = time(); 
	}elseif($nomor == 1018){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["r"] = time(); 
	}elseif($nomor == 1019){
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["s"] = time(); 
	}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$_SESSION["t"] = time(); 
	}

	if( book($_POST) > 0 ) { 
		echo "
			<script>
				alert('Book berhasil! Waktu anda 20 menit untuk menempati!');
				document.location.href = 'area3.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Book gagal!');
				document.location.href = 'area3.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
            background-color: black;
            color: white;
            width: 45%;
            margin-top: 9px;
            margin-bottom: 14px;
            margin-right: 35px;
            border-radius: 5px;
            padding-bottom: 0px;
        }
        h1{
            text-align: center;
        }
        .tulisan_book{
			text-align: center;
			font-size: 17pt;
            color: white;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
			font-weight: bold;
		}
		.kotak_book{
			width : 350px;
            height: 276px;
			background: black;
			/*meletakkan form ke tengah*/
			margin: 40px auto;
			padding: 30px 20px;
		}
		.kolom{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.book{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
        .book:hover{
            background-color: #229954 ;
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
            border-radius: 5px;
            width: 100%;
            border-style: solid;
            border-color: #424949;
        }
        .tampilan{
            background-color: Black;
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
            width: 125.7px;
            height: 125.7px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-style: solid;
            border-color: #424949;
            opacity: 0.9;
        }
        .slot2:hover{
            opacity: 1;
            border-color: white;
        }
        a:hover{
            color:#B2BABB ;
        }
        a{
            font-size: 23px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .bawah:hover{
            background-color: #424949;
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
        <div class="pilihan">
        <div class="kotak_book">
	        <p class="tulisan_book">Booking</p>
	        <form action="" method="post">
		        <input type="hidden" name="nomor" value="<?= $tiket["nomor"]; ?>">
                <input type="hidden" name="booked" value="Yes">
                <input type="hidden" name="status" value="No">
		        <input type="text" name="by" class="kolom"id="by" placeholder="Enter name">
		        <button type="submit" name="submit" class="book">Book</button>
	        </form>
	    </div>
        </div>
        <div class="bawah">
            <a href="transisi.php?id=<?= $nomor; ?>">Kembali</a>
        </div>
    </div>
</div>

</body>
</html>