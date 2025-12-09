<?php
$host = "localhost";
$user = "root"; 
$pass = "";
$db   = "ujian_muhammadalifmaulana";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal konek database: " . mysqli_connect_error());
}
?>
