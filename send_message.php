<?php
// Informasi koneksi database
$host = 'localhost'; // Nama host
$user = 'root'; // Nama pengguna MySQL
$pass = ''; // Kata sandi MySQL
$dbname = 'db_users'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data sudah dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data dari formulir dan mencegah karakter berbahaya
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $instagram = htmlspecialchars($_POST['instagram']);
    $massage = htmlspecialchars($_POST['massage']);

    // Menyiapkan perintah SQL dengan prepared statements untuk mencegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO massages (name, email, phone, instagram, massage) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $instagram, $massage);

    // Mengeksekusi perintah SQL dan memberikan feedback
    if ($stmt->execute()) {
        echo "<center><h1>Pesan Terkirim!</h1>
                <button><strong><a href='home-page.php'>Kembali</a></strong></button></center>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
}

$conn->close();
