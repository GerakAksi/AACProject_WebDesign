<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";  // Sesuaikan dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $conn->real_escape_string($_POST['description']);  // Menghindari SQL Injection
    $target_dir = "uploads/";
    $target_file = $target_dir . uniqid() . basename($_FILES["foto"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Validasi apakah file adalah gambar
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Batasi ukuran file (contoh: maksimum 5MB)
    if ($_FILES["foto"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Batasi format file yang diizinkan
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk bernilai 0 (gagal)
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            // Gunakan prepared statement untuk menyimpan data ke database
            $stmt = $conn->prepare("INSERT INTO moment (image_path, description) VALUES (?, ?)");
            $stmt->bind_param("ss", $target_file, $description);

            if ($stmt->execute()) {
                // Redirect ke halaman create moment dengan pesan
                header("Location: create-moment.php?$description$target_file");
            exit();
            
    
            } else {
                echo json_encode(['success' => false, 'error' => $stmt->error]);
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Tutup koneksi
$conn->close();