<?php

if (!isset($_COOKIE["nim"])) header("Location: login.php");
require "connection.php";

// Dapatkan data akun
$nim = $_COOKIE["nim"];
$sql = "SELECT * FROM akun WHERE nim='$nim';";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) == 0) die("Data akun tidak ditemukan");

$row = mysqli_fetch_assoc($query);
$paket = $row["paket"];
$dir = $row["password"];


// Dapatkan file soal sesuai paket
$filename = "";
$filepath = "./P4k3tt999100/";
switch ($paket) {
	case 0:
		$filename = "Paket 0.zip";
		$filepath .= $filename;
		break;
	default:
		die("Paket tidak ditemukan");
}
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($filepath);

?>