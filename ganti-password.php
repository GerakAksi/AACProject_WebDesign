<?php

session_start();
require 'koneksi.php';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Ambil data dari form
    $password_baru = $_POST['password'];
    $konfirmasi_password = $_POST['confirm-password'];
    $user_id = $_SESSION['user_id'];  // Ambil ID pengguna dari session (harusnya sudah login)

    // Validasi apakah kedua password cocok
    if ($password_baru === $konfirmasi_password) {
        
        // Hash password baru
        $hashed_password = password_hash($password_baru, PASSWORD_DEFAULT);
        
        // Siapkan query untuk update password
        $sql = "UPDATE tbl_users SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $hashed_password, $user_id);

        // Jalankan query
        if ($stmt->execute()) {
            // Jika berhasil
            echo "Password berhasil diperbarui!";
            header("Location: home-page.php");  // Arahkan kembali ke halaman Akun Saya setelah berhasil
            exit;
        } else {
            echo "Terjadi kesalahan saat memperbarui password.";
        }
    } else {
        // Jika password tidak cocok
        echo "Password dan konfirmasi password tidak cocok.";
    }
}
