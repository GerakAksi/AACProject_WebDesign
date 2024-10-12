<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerak Aksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        background-image: url('img/bg_homeatas.png');
        background-size: cover;
        background-position: center bottom;
        background-attachment: scroll;
        background-repeat: no-repeat;
        font-family: sans-serif;
    }

    .custom-shadow {
        box-shadow: 0px -15px 30px rgba(0, 0, 0, 0.5), 
                    0px 10px 15px rgba(0, 0, 0, 0.1); /* Bayangan atas dan bawah */
        background-color: white;
        border-radius: 12px;
        padding: 12px;
        max-width: 64rem; /* sesuai dengan max-w-4xl */
        margin: 20px auto;
    }
</style>
</head>
<body>

<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between py-4 px-8 bg-white shadow">
        <div class="flex items-center pace-2">
            <img src="img/LOGO UTAMA.png" alt="Logo" class="h-8">
            <div class="text-2xl font-bold text-[#5A72A0] ml-2">Gerak Aksi</div>
        </div>
        <nav class="flex items-center space-x-8 text-lg text-[#5A72A0]">
            <a href="index.php" class="nav-link">Home</a> <!-- Replace with your actual page -->
            <a href="gd.php" class="nav-link">Galang Dana</a> <!-- Replace with your actual page -->
            <a href="login.php" class="nav-link">Donasi Saya</a> <!-- Replace with your actual page -->
            <a href="login.php" class="nav-link">Inbox</a> <!-- Replace with your actual page -->
            <a href="vn.php" class="nav-link">VolunTrip</a> <!-- Replace with your actual page -->
            <a href="login.php" class="border border-[#5A72A0] px-4 py-2 rounded-full text-[#5A72A0] mr-2 hover:bg-yellow-100">Login</a>
            <a href="register.php" class="bg-[#FEF9D9] text-[#5A72A0] px-4 py-2 rounded-full hover:bg-yellow-100">Get Started</a>
        </nav>
    </div>
</header>

    <main class="flex justify-center items-center min-h-screen">
        <!-- Kontainer Utama -->
        <div class="flex flex-col items-center space-y-8">

            <!-- Teks Utama -->
            <div class="text-center space-y-4">
                <h1 class="text-3xl font-bold text-[#5A72A0]">
                    Daftar <span class="text-[#5A72A0]">#GerakAksi</span>
                </h1>
                <p class="text-[#5A72A0]">
                    Yuk, ikut berdonasi di setiap kegiatannya & berpartisipasi aktif dalam VolunTrip dengan menjadi 
                    <span class="text-[#5A72A0]">#BestieAksi</span>!
                </p>
            </div>

            <!-- Formulir dan Ilustrasi -->
            <div class="flex items-center space-x-20">
                <!-- Formulir -->
                <form action="regis.php" method="POST">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-[#5A72A0]">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#5A72A0]">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                
                        <div>
                            <label for="phone" class="block text-sm font-medium text-[#5A72A0]">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                
                        <div>
                            <label for="password" class="block text-sm font-medium text-[#5A72A0]">Password</label>
                            <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                
                    <button type="submit" class="w-full bg-[#FEF9D9] text-[#5A72A0] border border-blue-500 py-2 rounded-full font-semibold hover:bg-yellow-600 mt-4">Daftar</button>
                </form>
                
                <script>
                    // Menambahkan event listener pada form submit
                    document.getElementById('registerForm').addEventListener('submit', function (e) {
                        e.preventDefault();
                        // Ambil nilai input dari form
                        const name = document.getElementById('name').value;
                        const email = document.getElementById('email').value;
                        const phone = document.getElementById('phone').value;
                        const password = document.getElementById('password').value;
                
                        // Validasi jika ada input yang kosong
                        if (!name || !email || !phone || !password) {
                            alert('Semua kolom harus diisi!');
                            return;
                        }
                
                        // Tampilkan notifikasi registrasi berhasil (opsional)
                        alert('Registrasi Berhasil!');
                        window.location.href = 'login.php';
                    });
                </script>
                    
                
                <!-- Ilustrasi -->
                <div class="flex justify-center items-center">
                    <img src="img/FOTO REGISTER.png" alt="Yuk jadi #BestieAksi" class="h-56">
                </div>
            </div>
        </div>
    </main>

    
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
                            <li><a href="index.php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
                            <li><a href="gd.php" class="text-[#5A72A0] hover:text-gray-900">Galang Dana</a></li>
                            <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Donasi Saya</a></li>
                            <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Inbox</a></li>
                            <li><a href="vn.php" class="text-[#5A72A0] hover:text-gray-900">VolunTrip</a></li>
                        </ul>
                    </div>

                    <!-- Support Links -->
                    <div class="text-center lg:text-left mt-6 lg:mt-0">
                        <h4 class="text-[#5A72A0] font-bold mb-4">Kontak</h4>
                        <ul class="space-y-2">
                            <li><a href="index.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
                            <li><a href="index.php" class="text-[#5A72A0] hover:text-gray-900">Chat Support</a></li>
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