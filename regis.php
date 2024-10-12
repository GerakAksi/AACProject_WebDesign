<?php
require 'koneksi.php';
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];

$query_sql = "INSERT INTO tbl_users (name, email, password, phone)
    VALUES ('$name', '$email', '$password', '$phone')";
    
if (mysqli_query($conn, $query_sql)) {
    header("Location: login.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}