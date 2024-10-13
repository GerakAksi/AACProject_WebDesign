<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerak Aksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        </style>
        </head>
        <body>
      <!-- Navbar -->
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
    
    <section class="relative text-center py-8 bg-cover">
        <h1 class="text-[#5A72A0]">YUK IKUTI KEGIATANNYA DAN AMBIL PERAN</h1>
        <h2 class="text-3xl font-bold text-[#5A72A0] mt-2">#Gerak Aksi<br>Menyambung Mimpi<br> bersama Gen Z</h2>
        <p class="text-[#5A72A0] mt-2">
            Salurkan donasimu melalui event yang sedang berlangsung, dan saksikan <br>
            SATU KEBAIKANMU menorehkan SATU SENYUMAN pada masyarakat.
        </p>
    </div>
    

    <!-- BestieAksi Section -->
    <section class="container mx-auto py-8">
        <!-- Wrapper untuk bg kuning mencakup seluruh elemen -->
        <div class="bg-[#FEF9D9] shadow-lg rounded-lg py-8 px-12 max-w-4xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-[#5A72A0]">#BestiAksi Saat ini</h2>
                <a id="viewMoreButton" href="#" class="text-[#5A72A0] bg-white text-[#5A72A0] px-4 py-2 rounded-full shadow-lg hover:bg-yellow-200">Lihat lainnya</a>
            </div>
                                
                    <!-- Kegiatan 1 -->
                    <div class="mb-8 bg-white shadow-md rounded-lg overflow-hidden transform scale-90">
                        <div class="w-full">
                            <img src="img/3 RELAWAN PULAU BAWEAN.jpg" alt="Relawan Pulau Bawean" class="object-cover w-full h-48">
                        </div>
                        <div class="p-4 flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-[#5A72A0] text-left">Relawan Pulau Bawean</h3>
                                <p class="text-[#5A72A0] mt-1 mb-2 text-left">04 Okt - 06 Okt 2024</p>
                            </div>
                            <div class="flex flex-col items-end">
                                <span class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-1 rounded mb-2">Aktif</span>
                            </div>
                        </div>
                        <div class="px-4 pt-2 pb-4 flex justify-between items-center">
                            <button id="daftarButton1" class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2 mr-2">Daftar</button>
                            <button id="lihatDeskripsiButton1" class="bg-white text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2">Lihat Deskripsi</button>
                        </div>            
                    </div>
            
                    <!-- Kegiatan 2 -->
                    <div class="mb-8 bg-white shadow-md rounded-lg overflow-hidden transform scale-90">
                        <div class="w-full">
                            <img src="img/4 TIME TO HEAL NATURE.jpg" alt="Time to heal nature" class="object-cover w-full h-48">
                        </div>
                        <div class="p-4 flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-[#5A72A0] text-left">Time to Heal Nature Bumi Perkemahan Panceng Gresik</h3>
                                <p class="text-[#5A72A0] mt-1 mb-2 text-left">04 Okt - 06 Okt 2024</p>
                            </div>
                            <div class="flex flex-col items-end">
                                <span class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-1 rounded mb-2">Aktif</span>
                            </div>
                        </div>
                        <div class="px-4 pt-2 pb-4 flex justify-between items-center">
                            <button id="daftarButton2" class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2 mr-2">Daftar</button>
                            <button id="lihatDeskripsiButton2" class="bg-white text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2">Lihat Deskripsi</button>
                        </div>            
                    </div>
            
                    <!-- Kegiatan 3 -->
                    <div class="mb-8 bg-white shadow-md rounded-lg overflow-hidden transform scale-90">
                        <div class="w-full">
                            <img src="img/6 UNESA PEDULI LUMAJANG.jpg" alt="UNESA Peduli Lumajang" class="object-cover w-full h-48">
                        </div>
                        <div class="p-4 flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-[#5A72A0] text-left">UNESA Peduli Lumajang</h3>
                                <p class="text-[#5A72A0] mt-1 mb-2 text-left">04 Okt - 06 Okt 2024</p>
                            </div>
                            <div class="flex flex-col items-end">
                                <span class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-1 rounded mb-2">Aktif</span>
                            </div>
                        </div>
                        <div class="px-4 pt-2 pb-4 flex justify-between items-center">
                            <button id="daftarButton3" class="bg-[#FEF9D9] text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2 mr-2">Daftar</button>
                            <button id="lihatDeskripsiButton3" class="bg-white text-[#5A72A0] border border-[#5A72A0] px-4 py-2 rounded w-1/2">Lihat Deskripsi</button>
                        </div>            
                    </div>
                </div>
            
                <script>
                    // JavaScript untuk mengarahkan ke halaman yang dituju untuk Kegiatan 1
                    document.getElementById('daftarButton1').onclick = function() {
                        window.location.href = 'daftar-volun.php'; // Ganti dengan URL yang sesuai
                    };
                    document.getElementById('lihatDeskripsiButton1').onclick = function() {
                        window.location.href = 'desk-pulau-bawean.php'; // Ganti dengan URL yang sesuai
                    };
            
                    // JavaScript untuk mengarahkan ke halaman yang dituju untuk Kegiatan 2
                    document.getElementById('daftarButton2').onclick = function() {
                        window.location.href = 'daftar-volun.php'; // Ganti dengan URL yang sesuai
                    };
                    document.getElementById('lihatDeskripsiButton2').onclick = function() {
                        window.location.href = 'desk-tthn.php'; // Ganti dengan URL yang sesuai
                    };
            
                    // JavaScript untuk mengarahkan ke halaman yang dituju untuk Kegiatan 3
                    document.getElementById('daftarButton3').onclick = function() {
                        window.location.href = 'daftar-volun.php'; // Ganti dengan URL yang sesuai
                    };
                    document.getElementById('lihatDeskripsiButton3').onclick = function() {
                        window.location.href = 'desk-unesa-peduli-lumajang.php'; // Ganti dengan URL yang sesuai
                    };
                </script>
            </section>
            

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
                        <h4 class="text-[#5A72A0] font-bold mb-4">Company</h4>
                        <ul class="space-y-2">
                            <li><a href="home-page.php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
                            <li><a href="galang-dana.php" class="text-[#5A72A0] hover:text-gray-900">Galang Dana</a></li>
                            <li><a href="donasi-saya.php" class="text-[#5A72A0] hover:text-gray-900">Donasi Saya</a></li>
                            <li><a href="inbox.php" class="text-[#5A72A0] hover:text-gray-900">Inbox</a></li>
                            <li><a href="voluntrip.php" class="text-[#5A72A0] hover:text-gray-900">VolunTrip</a></li>
                        </ul>
                    </div>

                    <!-- Support Links -->
                    <div class="text-center lg:text-left mt-6 lg:mt-0">
                        <h4 class="text-[#5A72A0] font-bold mb-4">Support</h4>
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
    
    
