<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "parkir_mat");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function book($data) {
	global $conn;

	$nomor = $data["nomor"];
	$booked = $data["booked"];
	$status = $data["status"];
	$by = htmlspecialchars($data["by"]);

	$query = "UPDATE `tiket` SET
				`booked` = '$booked',
				`status` = '$status',
				`by` = '$by'
			  WHERE nomor = $nomor
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function bookcancel($data) {
	global $conn;

	$nomor = $data;
	$booked = 'No';
	$status = 'No';
	$by = '-';

	$query = "UPDATE `tiket` SET
				`booked` = '$booked',
				`status` = '$status',
				`by` = '$by'
			  WHERE nomor = $nomor
			";

	mysqli_query($conn, $query);
}

function in($data) {
	global $conn;

	$nomor = $data["nomor"];
	$booked = $data["booked"];
	$status = $data["status"];
	$by = $data["by"];

	$query = "UPDATE `tiket` SET
				`booked` = '$booked',
				`status` = '$status',
				`by` = '$by'
			  WHERE nomor = $nomor
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function cancel($data) {
	global $conn;

	$nomor = $data["nomor"];
	$booked = $data["booked"];
	$status = $data["status"];
	$by = $data["by"];

	$query = "UPDATE `tiket` SET
				`booked` = '$booked',
				`status` = '$status',
				`by` = '$by'
			  WHERE nomor = $nomor
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function out($data) {
	global $conn;

	$nomor = $data["nomor"];
	$booked = $data["booked"];
	$status = $data["status"];
	$by = $data["by"];

	$query = "UPDATE `tiket` SET
				`booked` = '$booked',
				`status` = '$status',
				`by` = '$by'
			  WHERE nomor = $nomor
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Mohon maaf ! Username sudah terdaftar !')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai !');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);

}

?>