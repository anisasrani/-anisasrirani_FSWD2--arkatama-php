<?php
// Koneksi Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "arkatama_store";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Koneksi Gagal: ".$conn->connect_error);
}
?>