<?php
// Koneksi Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_pelanggan";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Koneksi Gagal: ".$conn->connect_error);
}
?>