<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'projek_sbd';
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi bodo". $conn->connect_error);
}
?>
