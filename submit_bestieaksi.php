<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username MySQL Anda
$password = "";      // Sesuaikan dengan password MySQL Anda
$dbname = "db_users";  // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = isset($_POST['name']) ? $_POST['name'] : null;
$dob = isset($_POST['dob']) ? $_POST['dob'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$nim = isset($_POST['nim']) ? $_POST['nim'] : null;
$ektm = null;

// Debugging: Cek data yang diterima
var_dump($name, $dob, $phone, $email, $address, $nim);

// Cek apakah semua field terisi
if (!$name || !$dob || !$phone || !$email || !$address || !$nim) {
    echo "Semua kolom harus diisi!";
    exit();
}

// Proses upload E-KTM
if (isset($_FILES['ektm']) && $_FILES['ektm']['error'] == 0) {
    $ektm_dir = 'uploads/';
    $ektm_file = $ektm_dir . basename($_FILES['ektm']['name']);
    
    // Pastikan direktori upload ada
    if (!is_dir($ektm_dir)) {
        mkdir($ektm_dir, 0755, true); // Membuat direktori jika belum ada
    }

    // Pindahkan file ke direktori upload
    if (move_uploaded_file($_FILES['ektm']['tmp_name'], $ektm_file)) {
        $ektm = $ektm_file;
    } else {
        echo "Gagal mengunggah file E-KTM.";
        exit();
    }
} else {
    echo "File E-KTM tidak valid.";
    exit();
}

// Insert data ke dalam database
$sql = "INSERT INTO bestie (name, dob, phone, email, address, nim, ektm) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $name, $dob, $phone, $email, $address, $nim, $ektm);

if ($stmt->execute()) {
    // Pendaftaran berhasil, redirect ke halaman VolunTrip
    header("Location: voluntrip.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$conn->close();
