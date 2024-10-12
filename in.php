<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

// Siapkan query untuk memeriksa email dan password
$query_sql = "SELECT * FROM tbl_users WHERE email = ? AND password = ?";

if ($stmt = $conn->prepare($query_sql)) {
    // Bind parameter ke statement
    $stmt->bind_param("ss", $email, $password); // Pastikan jumlah parameter dan variabel cocok

    // Eksekusi statement
    $stmt->execute();
    
    // Dapatkan hasil
    $result = $stmt->get_result();

    // Periksa apakah ada hasil
    if ($result->num_rows > 0) {
        header("Location: home-page.php");
        exit(); // Penting untuk keluar setelah redirect
    } else {
        header("Location: login.php?error=1");
        exit(); // Juga exit di sini untuk menghentikan eksekusi lebih lanjut
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

// Tutup koneksi
$conn->close();

