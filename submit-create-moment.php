<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Moment - Gerak Aksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: url('img/bg_homeatas.png'); /* Ganti dengan jalur gambar yang benar */
            background-size: cover;
            background-position: center bottom;
            background-attachment: scroll;
            background-repeat: no-repeat;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="flex items-center justify-between py-4 px-8 bg-white shadow">
            <div class="flex items-center space-x-2">
                <img src="img/LOGO UTAMA.png" alt="Logo" class="h-8">
                <div class="text-2xl font-bold text-[#5A72A0] ml-2">Gerak Aksi</div>
            </div>
            <nav class="flex items-center space-x-8 text-lg text-[#5A72A0]">
                <a href="home-page.php" class="nav-link">Home</a>
                <a href="galang-dana.php" class="nav-link">Galang Dana</a>
                <a href="donasi-saya.php" class="nav-link">Donasi Saya</a>
                <a href="inbox.php" class="nav-link">Inbox</a>
                <a href="voluntrip.php" class="nav-link">VolunTrip</a>
                <a href="akun-saya.php">
                    <img src="img/profile.png" alt="User Profile" class="rounded-full h-8">
                </a>
            </nav>
        </div>
    </header>
    
    <!-- Form Section -->
    <section class="max-w-4xl mx-auto p-8">
        <header class="text-center py-10">
            <h1 class="text-3xl font-bold text-[#5A72A0]">Create Moment<br>#GerakAksi</h1>
            <div class="text-center mb-6">
                <img src="img/LOGO SUBMIT CREATE MOMENT.png" alt="Illustration" class="mx-auto w-64"> <!-- Ganti dengan jalur gambar yang benar -->
            </div>
            <p class="text-lg mt-2 text-[#5A72A0]">Yuk, ceritakan momentmu bersama #BestieAksi lainnya dan jadilah inspirasi banyak orang.</p>
        </header>

        <!-- Form Upload Foto dan Deskripsi -->
        <form id="createMomentForm" action="submit-moment.php" method="POST" enctype="multipart/form-data">
            <!-- Upload Foto Moment -->
            <div class="mb-6 bg-[#FEF9D9] p-6 rounded-lg">
                <label for="foto" class="block text-lg font-bold text-[#5A72A0] mb-2">1. Upload Foto Moment Kebersamaanmu dengan #BestieAksi</label>
                <p class="text-[#5A72A0] mb-2">Foto moment bisa foto kebersamaan dengan #BestieAksi lainnya atau foto ketika kegiatan berlangsung</p>
                <div class="mt-1 flex items-center justify-center px-6 pt-5 pb-6 border border-[#5A72A0] rounded-md bg-white">
                    <div class="space-y-1 text-center">
                        <div class="flex text-sm text-[#5A72A0]">
                            <label for="foto" class="relative cursor-pointer bg-white rounded-md font-medium text-[#5A72A0] hover:text-[#5A72A0] flex items-center justify-center h-12 px-10">
                                <span>Upload Foto Moment</span>
                                <input id="foto" name="foto" type="file" class="sr-only" accept="image/*" onchange="previewImage(event)">
                            </label>
                        </div>
                        <!-- Preview Image -->
                        <img id="imagePreview" src="#" alt="Image Preview" class="mt-4 hidden w-full h-auto rounded-md border border-[#5A72A0]">
                    </div>
                </div>
            </div>
            
            <!-- Deskripsi Moment Kebersamaan -->
            <div class="mb-6 bg-[#FEF9D9] p-6 rounded-lg">
                <label for="description" class="block text-lg font-bold text-[#5A72A0] mb-2">2. Ceritakan Bagaimana Moment Kebersamaanmu dengan #BestieAksi dalam melakukan Kebaikan!</label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="5" class="block w-full bg-white border border-[#5A72A0] rounded-lg p-3 text-[#5A72A0] focus:outline-none focus:border-[#5A72A0]"></textarea>
                </div>
            </div>

            <!-- Button Posting -->
            <div class="max-w-4xl mx-auto text-center">
                <button class="w-full bg-[#FEF9D9] text-[#5A72A0] font-semibold px-8 py-2 rounded-lg hover:bg-yellow-100" type="submit">Posting</button>
            </div>
        </form>

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            $description = $_GET['description'];
            $image_path = $_GET['image_path'];
        }
        ?>

        <!-- Grid Section for Posted Moments -->
        <div id="momen-grid" class="grid grid-cols-3 gap-6 mt-10">
        <?php
            if (isset($_GET['status']) && $_GET['status'] == 'success') {
                $description = $_GET['description'];
                $image_path = $_GET['image_path'];
                ?>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="<?php echo $image_path; ?>" class="w-full h-auto rounded-md mb-4">
                    <p class="text-[#5A72A0] font-semibold"><?php echo $description; ?></p>
                </div>
                <?php } ?>
            </div>
    </section>

    <script>
        // Preview Image
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden'); // Tampilkan gambar
                }
                reader.readAsDataURL(file); // Membaca file sebagai URL
            } else {
                imagePreview.classList.add('hidden'); // Sembunyikan gambar jika tidak ada file
            }
        }

        // Handle Form Submission
        document.getElementById('createMomentForm').addEventListener('submit', function(e) {

            const formData = new FormData(this);

            // Kirim data ke backend menggunakan fetch API
            fetch('submit-moment.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Menampilkan momen yang baru di-post tanpa reload halaman
                    displayPostedContent(data.description, data.image_path); // Menggunakan data dari server

                    alert('Posting berhasil!');
                } else {
                    alert('Terjadi kesalahan. Coba lagi.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim data.');
            });
        });

        // Fungsi untuk menampilkan konten yang diposting (deskripsi dan gambar) dalam grid
        function displayPostedContent(description, imagePath) {
            const gridContainer = document.getElementById('momen-grid');

            // Membuat elemen baru untuk momen
            const momenItem = document.createElement('div');
            momenItem.classList.add('bg-white', 'p-6', 'rounded-lg', 'shadow-lg');

            // Menambahkan gambar ke dalam elemen momen
            const momenImage = document.createElement('img');
            momenImage.src = imagePath; // Menggunakan URL gambar dari server
            momenImage.classList.add('w-full', 'h-auto', 'rounded-md', 'mb-4');
            momenItem.appendChild(momenImage);

            // Menambahkan deskripsi ke dalam elemen momen
            const momenDescription = document.createElement('p');
            momenDescription.textContent = description;
            momenDescription.classList.add('text-[#5A72A0]', 'font-semibold');
            momenItem.appendChild(momenDescription);

            // Menambahkan elemen momen ke grid
            gridContainer.appendChild(momenItem);
        }
    </script>

    <!-- Footer -->
<footer class="bg-white py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Footer Top - Logo and Links -->
        <div class="flex flex-col lg:flex-row justify-between items-center">
            
            <!-- Left Section (Logo and Social Media) -->
            <div class="text-center lg:text-left mb-8 lg:mb-0">
                <!-- Logo and Text -->
                <div class="flex items-center">
                    <!-- Logo -->
                    <img src="img/LOGO UTAMA.png" alt="Gerak Aksi Logo" class="h-16 mb-4 mr-4">
                
                    <!-- Text next to the logo and below -->
                    <div>
                        <!-- Gerak Aksi aligned next to logo -->
                        <div class="text-2xl font-bold text-[#5A72A0]">Gerak Aksi</div>
                        
                        <!-- Slogan below the logo -->
                    </div>
                </div>

                <div class="text-2xl mt-2">
                    <h1 class="text-sm text-gray-500 mt-4">
                        #GerakAksi Menyambung Mimpi<br> bersama Gen Z.
                    </h1>
                </div>
                

                <!-- Social Media Icons -->
                <div class="flex items-start space-x-4 mt-4">
                    <a href="https://www.facebook.com/profile.php?id=61566359445557&mibextid=ZbWKwL" target="_blank">
                        <img src="img/Facebook.png" alt="facebook logo" class="h-4 md:h-5 lg:h-8">
                    </a>
                    <a href="https://x.com/gerakaksi_unesa?t=ji-qPua7n3xWLxf3KN-usA&s=09" target="_blank">
                        <img src="img/Twitter.png" alt="Twitter logo" class="h-4 md:h-5 lg:h-8">
                    </a>
                    <a href="https://www.instagram.com/gerakaksi_unesa?igsh=MTB6czU4YndjNDA1MA==" target="_blank">
                        <img src="img/Instagram.png" alt="Instagram logo" class="h-4 md:h-5 lg:h-8">
                    </a>
                    <a href="http://www.linkedin.com/in/gerakaksiunesa" target="_blank">
                        <img src="img/LinkedIn.png" alt="LinkedIn logo" class="h-4 md:h-5 lg:h-8">
                    </a>
                    <a href="https://youtube.com/@gerakaksiunesa?si=k86eE8xfQMGZwJcB" target="_blank">
                        <img src="img/YouTube.png" alt="Youtube logo" class="h-4 md:h-5 lg:h-8">
                    </a>
                </div>
            </div>

            <!-- Right Section (Links) -->
            <div class="flex flex-col lg:flex-row lg:space-x-16">
                <!-- Company Links -->
                <div class="text-center lg:text-left">
                    <h4 class="text-[#5A72A0] font-bold mb-4">Menu</h4>
                    <ul>
                        <li><a href="home-page.php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
                        <li><a href="galang-dana.php" class="text-[#5A72A0] hover:text-gray-900">Galang Dana</a></li>
                        <li><a href="donasi-saya.php" class="text-[#5A72A0] hover:text-gray-900">Donasi Saya</a></li>
                        <li><a href="inbox.php" class="text-[#5A72A0] hover:text-gray-900">Inbox</a></li>
                        <li><a href="voluntrip.php" class="text-[#5A72A0] hover:text-gray-900">VolunTrip</a></li>
                    </ul>
                </div>

                <!-- Support Links -->
                <div class="text-center lg:text-left mt-6 lg:mt-0">
                    <h4 class="text-[#5A72A0] font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li><a href="help-center.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
                        <li><a href="chat-support.php" class="text-[#5A72A0] hover:text-gray-900">Chat Support</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom - Copyright -->
        <div class="border-t border-gray-200 mt-12 pt-4 text-center">
            <p class="text-sm text-gray-500">&copy; 2024 Gerak Aksi UNESA | All Rights Reserved | <a href="terms-conditions.php" class="text-blue-600 hover:underline">Terms and Conditions</a> | <a href="privacy-policy.php" class="text-blue-600 hover:underline">Privacy Policy</a></p>
        </div>
    </div>
</footer>


</body>
</html>

