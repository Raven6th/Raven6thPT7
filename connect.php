<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_user";

// sambung ke mysql
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die("MySQLi Connection failed: " . mysqli_connect_error());
}
?>