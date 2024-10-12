<?php
// Mulai session
session_start();

// Hubungkan ke database (sesuaikan dengan konfigurasi Anda)
$host = 'localhost';
$dbname = 'db_users';
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Ambil data dari form
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];

// Mengunggah file KTP
$ktpFilePath = '';
if (isset($_FILES['ktp-upload']) && $_FILES['ktp-upload']['error'] === UPLOAD_ERR_OK) {
    $ktpFile = $_FILES['ktp-upload'];
    $uploadDir = 'uploads/'; // Pastikan folder ini ada dan memiliki izin yang sesuai
    $ktpFilePath = $uploadDir . basename($ktpFile['name']);
    
    // Memindahkan file ke direktori yang ditentukan
    if (!move_uploaded_file($ktpFile['tmp_name'], $ktpFilePath)) {
        echo json_encode(['success' => false, 'message' => 'KTP gagal diunggah.']);
        exit;
    }
}

// Simpan data profil ke database
try {
    $stmt = $pdo->prepare("UPDATE penggguna SET name = ?, dob = ?, phone = ?, address = ?, gender = ?, ktp_upload = ? WHERE phone = ?");
    $stmt->execute([$name, $dob, $phone, $address, $gender, $ktpFilePath, $phone]);

    // Redirect ke halaman home setelah berhasil
    header("Location: home-page.php");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
