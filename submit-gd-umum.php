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

// Ambil data dari form dengan validasi
$siapa = isset($_POST['siapa']) ? $_POST['siapa'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tujuan = isset($_POST['tujuan']) ? $_POST['tujuan'] : '';
$tujuan_lain = isset($_POST['tujuan_lain']) ? $_POST['tujuan_lain'] : null;
$perkiraan_biaya = isset($_POST['perkiraan_biaya']) ? $_POST['perkiraan_biaya'] : 0;
$masa = isset($_POST['masa']) ? $_POST['masa'] : '';
$masa_lain = isset($_POST['masa_lain']) ? $_POST['masa_lain'] : null;
$judul = isset($_POST['judul']) ? $_POST['judul'] : '';
$rincian = isset($_POST['rincian']) ? $_POST['rincian'] : '';
$detail = isset($_POST['detail']) ? $_POST['detail'] : '';

// Upload dokumen pendukung
$dokumen_pendukung = null;
if (isset($_FILES['dokumen_pendukung']) && $_FILES['dokumen_pendukung']['error'] === 0) {
    $dokumen_pendukung = 'uploads/dokpen' . basename($_FILES['dokumen_pendukung']['name']);
    if (!move_uploaded_file($_FILES['dokumen_pendukung']['tmp_name'], $dokumen_pendukung)) {
        echo "Error saat mengupload dokumen pendukung.";
        exit();
    }
}

// Upload foto cover
$foto_cover = null;
if (isset($_FILES['foto_cover']) && $_FILES['foto_cover']['error'] === 0) {
    $foto_cover = 'uploads/cover' . basename($_FILES['foto_cover']['name']);
    if (!move_uploaded_file($_FILES['foto_cover']['tmp_name'], $foto_cover)) {
        echo "Error saat mengupload foto cover.";
        exit();
    }
}

// Insert data ke dalam database
$sql = "INSERT INTO gd_umum (siapa, email, dokumen_pendukung, tujuan, tujuan_lain, perkiraan_biaya, masa, masa_lain, judul, foto_cover, rincian, detail) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssississss", $siapa, $email, $dokumen_pendukung, $tujuan, $tujuan_lain, $perkiraan_biaya, $masa, $masa_lain, $judul, $foto_cover, $rincian, $detail);

if ($stmt->execute()) {
    header("Location: galang-dana.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$conn->close();
