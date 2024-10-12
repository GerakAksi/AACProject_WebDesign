<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<!-- Hero Section -->
<section class="relative text-center py-8 bg-cover">
        <h1 class="text-[#5A72A0]">YUK IKUTI KEGIATANNYA DAN AMBIL PERAN</h1>
        <h2 class="text-3xl font-bold text-[#5A72A0] mt-2">#Gerak Aksi<br>Menyambung Mimpi<br> bersama Gen Z</h2>
        <p class="text-[#5A72A0] mt-2">
            Salurkan donasimu melalui event yang sedang berlangsung, dan saksikan <br>
            SATU KEBAIKANMU menorehkan SATU SENYUMAN pada masyarakat.
        </p>
    </div>

    <!-- Input search -->
    <div class="mt-8 relative z-10">
        <div class="relative max-w-md mx-auto">
            <input type="text" id="searchInput" placeholder="Cari Donasi" class="w-full py-3 px-4 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
            <button onclick="searchDonation()" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-[#FEF9D9] px-4 py-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m2.35-4.65a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
        </div>
    </div>
    
    <script>
        function searchDonation() {
            const query = document.getElementById('searchInput').value.toLowerCase();
    
            if (query.includes("pendidikan")) {
                window.location.href = "gap-no.php"; // Ganti dengan URL halaman donasi pendidikan
            } else if (query.includes("sosial")) {
                window.location.href = "gas-no.php"; // Ganti dengan URL halaman donasi kesehatan
            } else if (query.includes("hewan")) {
                window.location.href = "gah-no.php"; // Ganti dengan URL halaman donasi bencana
            } else if (query.includes("lingkungan")){
                window.location.href ="gal-no.php";
            } else if(query.includes("kemanusiaan")){
                window.location.href ="gak-no.php"
            }else {
                alert('Kategori donasi tidak ditemukan!'); // Pesan jika kategori tidak sesuai
            }
        }
    </script>
    

    

    <!-- Kategori Gerak Aksi -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="bg-white custom-shadow shadow-lg rounded-lg p-12 mx-auto max-w-4xl">
                <h2 class="text-2xl font-bold text-[#5A72A0] mb-6">Kategori Gerak Aksi</h2>
                <div class="flex items-center justify-between space-x-4">
                
                    <div class="flex space-x-12 justify-center gap-6">
                        <div class="text-center">
                            <!-- Lingkaran sebagai kontainer gambar -->
                            <a href="gas-no.php" class="block w-16 h-16 bg-yellow-100 rounded-full mx-auto overflow-hidden relative">
                                <img src="img/1 KEGIATAN SOSIAL.png" alt="logo" class="w-full h-full object-cover object-center">
                            </a>
                            <!-- Deskripsi di bawah lingkaran -->
                            <p class="mt-2 text-[#5A72A0]">Kegiatan Sosial</p>
                        </div>
                        
                        <div class="text-center">
                            <a href="gap-no.php" class="block w-16 h-16 bg-yellow-100 rounded-full mx-auto overflow-hidden relative">
                                <img src="img/2 BANTUAN PENDIDIKAN.png" alt="logo" class="w-full h-full object-cover object-center">
                            </a>
                            <!-- Deskripsi di bawah lingkaran -->
                            <p class="mt-2 text-[#5A72A0]">Bantuan Pendidikan</p>
                        </div>

                        <div class="text-center">
                            <a href="gal-no.php" class="block w-16 h-16 bg-yellow-100 rounded-full mx-auto overflow-hidden relative">
                                <img src="img/3 LINGKUNGAN.png" alt="logo" class="w-full h-full object-cover object-center">
                            </a>
                            <!-- Deskripsi di bawah lingkaran -->
                            <p class="mt-2 text-[#5A72A0]">Lingkungan</p>
                        </div>

                        <div class="text-center">
                            <a href="gah-no.php" class="block w-16 h-16 bg-yellow-100 rounded-full mx-auto overflow-hidden relative">
                                <img src="img/4 HEWAN.png" alt="logo" class="w-full h-full object-cover object-center">
                            </a>
                            <!-- Deskripsi di bawah lingkaran -->
                            <p class="mt-2 text-[#5A72A0]">Hewan</p>
                        </div>

                        <div class="text-center">
                            <a href="gak-no.php" class="block w-16 h-16 bg-yellow-100 rounded-full mx-auto overflow-hidden relative">
                                <img src="img/5 KEMANUSIAAN.png" alt="logo" class="w-full h-full object-cover object-center">
                            </a>
                            <!-- Deskripsi di bawah lingkaran -->
                            <p class="mt-2 text-[#5A72A0]">Kemanusiaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-8">
        <!-- Wrapper untuk bg kuning mencakup seluruh elemen -->
        <div class="bg-[#FEF9D9] shadow-lg rounded-lg py-8 px-12 max-w-4xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-[#5A72A0]">#GerakAksi Mendesak</h2>
                <a id="viewMoreButton" href="#" class="text-[#5A72A0] bg-white px-4 py-2 rounded-full shadow-lg hover:bg-yellow-200">Lihat lainnya</a>
            </div>
    
            <!-- Grid untuk konten tanpa bg putih -->
            <div class="grid grid-cols-3 gap-6">
                <!-- Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/1 TEBAR BIBIT KEBAIKAN.jpg" alt="Event 4" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">Tebar Bibit Kebaikan bersama UNESA</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-1" class="bg-green-500 h-2.5 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p id="donation-amount-1" class="text-sm text-gray-600 mb-2 text-left">Rp 500,000 terkumpul dari Rp 5,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate-button" data-campaign-id="1">Donasi</button>
                </div>
    
                <!-- Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/2 JAGA SATWA UNESA.jpg" alt="Event 2" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">Jaga Satwa UNESA, Peduli Hewan</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-2" class="bg-green-500 h-2.5 rounded-full" style="width: 12%;"></div>
                    </div>
                    <p id="donation-amount-2" class="text-sm text-gray-600 mb-2 text-left">Rp 1,200,000 terkumpul dari Rp 10,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate-button" data-campaign-id="2">Donasi</button>
                </div>
    
                <!-- Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/3 RELAWAN PULAU BAWEAN.jpg" alt="Event 3" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">Relawan Kebencanaan Pulau Bawean</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-3" class="bg-green-500 h-2.5 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p id="donation-amount-3" class="text-sm text-gray-600 mb-2 text-left">Rp 500,000 terkumpul dari Rp 5,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate donate-button" data-campaign-id="3">Donasi</button>
                </div>
    
                <!-- Item 4 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/4 TIME TO HEAL NATURE.jpg" alt="Event 4" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">Time to Heal Nature bersama UNESA</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-4" class="bg-green-500 h-2.5 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p  id="donation-amount-4" class="text-sm text-gray-600 mb-2 text-left">Rp 1.500,000 terkumpul dari Rp 5,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate-button" data-campaign-id="4">Donasi</button>
                </div>
    
                <!-- Item 5 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/5 SEMBUHKAN LUNA.jpg" alt="Event 5" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">Sembuhkan Luna Kucing UNESA</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-5" class="bg-green-500 h-2.5 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p id="donation-amount-5" class="text-sm text-gray-600 mb-2 text-left">Rp 400,000 terkumpul dari Rp 5,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate-button" data-campaign-id="5">Donasi</button>
                </div>
    
                <!-- Item 6 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="img/6 UNESA PEDULI LUMAJANG.jpg" alt="Event 6" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <p class="font-semibold text-[#5A72A0] text-left">UNESA Bergerak Peduli Lumajang</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 my-2">
                        <div id="progress-bar-6" class="bg-green-500 h-2.5 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p  id="donation-amount-6"  class="text-sm text-gray-600 mb-2 text-left">Rp 500,000 terkumpul dari Rp 5,000,000</p>
                    <button class="bg-[#FEF9D9] text-gray-800 px-4 py-2 mt-4 rounded-full w-full donate-button" data-campaign-id="6">Donasi</button>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="container mx-auto py-8 text-center">
        <!-- Tombol GerakAksi -->
        <div class="max-w-4xl mx-auto mb-8">
            <button id="donasiButton" class="w-full max-w-sm border border-[#5A72A0] text-[#5A72A0] px-8 py-4 rounded-lg hover:bg-[#5A72A0] hover:text-white transition">
                #GerakAksi Donasi
            </button>
            <button id="galangDanaButton" class="w-full max-w-sm border border-[#5A72A0] text-[#5A72A0] px-8 py-4 rounded-lg hover:bg-[#5A72A0] hover:text-white transition">
                #GerakAksi Galang Dana
            </button>
        </div>
        
        <script>
            // Menambahkan event listener untuk tombol Donasi
            document.getElementById('donasiButton').addEventListener('click', function() {
                window.location.href = 'login.php'; // Ganti dengan URL tujuan
            });
        
            // Menambahkan event listener untuk tombol Galang Dana
            document.getElementById('galangDanaButton').addEventListener('click', function() {
                window.location.href = 'login.php'; // Ganti dengan URL tujuan
            });
        </script>
        
    

    <!-- Pencapaian GerakAksi -->
    <h2 class="text-2xl font-bold text-[#5A72A0] mb-4">About #GerakAksi</h2>
    <div class="flex justify-center items-center gap-4 mb-8 max-w-4xl mx-auto">
        <img src="img/LOGO UTAMA.png" alt="GerakAksi Image" class="rounded-lg max-w-[150px] border">
        <div class="text-left">
            <h3 class="text-[#5A72A0] text-lg font-bold">#GerakAksi</h3>
            <p class="text-[#5A72A0]">Gerak Aksi adalah sebuah wadah dalam penyaluran bantuan dari masyarakat untuk memudahkan dalam proses penggalangan dana, sehingga lebih banyak orang yang dapat berpartisipasi untuk membantu masyarakat yang membutuhkan.</p>
        </div>
    </div>
    
    
    <div class="max-w-screen-lg mx-auto p-8">
  
        <!-- Achievement Section -->
        <section id="achievements" class="text-center mb-12">
          <h2 class="text-2xl font-bold text-[#5A72A0] mb-8">Pencapaian #GerakAksi</h2>
          <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <!-- Achievement Card 1 -->
            <div class="bg-white shadow-md p-6 rounded-lg border border-[#5A72A0]">
              <p class="text-4xl font-bold text-[#5A72A0]">182</p>
              <p class="text-xl font-semibold text-[#5A72A0]">Lokasi</p>
              <p class="text-[#5A72A0] mt-2">Sudah banyak lokasi yang terbantu dengan donasi dari masyarakat</p>
            </div>
            
            <!-- Achievement Card 2 -->
            <div class="bg-white shadow-md p-6 rounded-lg border border-[#5A72A0]">
              <p class="text-4xl font-bold text-[#5A72A0]">32M</p>
              <p class="text-xl font-semibold text-[#5A72A0]">Donasi Uang</p>
              <p class="text-[#5A72A0] mt-2">Donasi uang yang sudah terkumpul dari berbagai kegiatan #GerakAksi</p>
            </div>
            
            <!-- Achievement Card 3 -->
            <div class="bg-white shadow-md p-6 rounded-lg border border-[#5A72A0]">
              <p class="text-4xl font-bold text-[#5A72A0]">60.000+</p>
              <p class="text-xl font-semibold text-[#5A72A0]">Partisispasi</p>
              <p class="text-[#5A72A0] mt-2">Sudah lebih dari 60.000 orang yang berpartisipasi dalam kegiatan #GerakAksi</p>
            </div>
      
            <!-- Achievement Card 4 -->
            <div class="bg-white shadow-md p-6 rounded-lg border border-[#5A72A0]">
              <p class="text-4xl font-bold text-[#5A72A0]">357</p>
              <p class="text-xl font-semibold text-[#5A72A0]">#BestiAksi</p>
              <p class="text-[#5A72A0] mt-2">Banyak dari masyarakat yang menjadi bagian dalam VolunTrip #TemanAksi.</p>
            </div>
            
          </div>
        </section>

        <section id="moment" class="w-full bg-gradient-to-b from-[#FEF9D9] to-[#FEF9D9] py-8 text-center mb-8">
            <h3 class="text-2xl font-bold text-[#5A72A0] mb-4">Moment</h3>
            
            <!-- Carousel-like structure -->
            <div class="flex justify-center items-center space-x-8">
                <!-- Tombol sebelumnya dengan id yang spesifik -->
                <button id="prevButton" class="text-[#5A72A0] hover:text-blue-400 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <!-- Box carousel -->
                <div class="max-w-md mx-auto flex items-center">
                    <img src="https://via.placeholder.com/150/4" alt="Moment Image" class="rounded-md w-1/3 mr-4">
                    <div>
                        <h4 class="text-lg font-bold text-[#5A72A0] mb-1 text-left">Time to Heal Nature</h4>
                        <p class="text-[#5A72A0] text-sm text-left">Adanya program kerja Time to Heal Nature pada tanggal 11 Mei lalu, UKM Peduli Kemanusiaan mendapatkan kesempatan untuk bekerja sama dengan berbagai pihak luar dan ...</p>
                    </div>
                </div>
                
                <!-- Tombol berikutnya dengan id yang spesifik -->
                <button id="nextButton" class="text-[#5A72A0] hover:text-blue-400 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>        
                       
        
    <!-- Our Partners -->
    <section class="py-10">
        <div class="container mx-auto">
            <!-- Larger font for "Our Partners" -->
            <h3 class="text-2xl font-bold text-center mb-4 text-[#5A72A0]">Our Partners</h3>
            
            <div class="flex justify-center items-center space-x-4">
    
                <!-- Partner logos and text -->
                <div class="flex flex-wrap justify-center gap-8 py-8">
                    <div class="text-center">
                        <img src="img/SMCUU.png" alt="SMCUU UNESA logo" class="h-20 lg:h-24 mx-auto">
                        <h1 class="text-lg  text-[#5A72A0] mt-2">SMCUU UNESA</h1>
                    </div>
    
                    <div class="text-center">
                        <img src="img/BEM.png" alt="BEM UNESA logo" class="h-20 lg:h-24 mx-auto">
                        <h1 class="text-lg  text-[#5A72A0] mt-2">BEM UNESA</h1>
                    </div>
    
                    <div class="text-center">
                        <img src="img/UNESA.png" alt="UNESA logo" class="h-20 lg:h-24 mx-auto">
                        <h1 class="text-lg  text-[#5A72A0] mt-2">UNESA</h1>
                    </div>
    
                    <div class="text-center">
                        <img src="img/BEM FT.png" alt="BEM FT logo" class="h-20 lg:h-24 mx-auto">
                        <h1 class="text-lg  text-[#5A72A0] mt-2">BEM FT</h1>
                    </div>
    
                    <div class="text-center">
                        <img src="img/UKM PK.png" alt="PEDULI KEMANUSIAAN logo" class="h-20 lg:h-24 mx-auto">
                        <h1 class="text-lg  text-[#5A72A0] mt-2">UKM PEDULI<br>KEMANUSIAAN</h1>
                    </div>
                </div>
            </div>
        </div>
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
                            <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
                            <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Chat Support</a></li>
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
    <script>
        // Carousel Script
        const carouselData = [
            {
                imgSrc: 'img/4 TIME TO HEAL NATURE.jpg',
                title: 'Time to Heal Nature',
                description: 'Adanya program kerja Time to Heal Nature pada tanggal 11 Mei lalu, UKM Peduli Kemanusiaan mendapatkan kesempatan untuk bekerja sama dengan berbagai pihak luar dan ...'
            },
            {
                imgSrc: 'img/6 UNESA PEDULI LUMAJANG.jpg',
                title: 'Save the Earth Campaign',
                description: 'Acara ini adalah bagian dari kampanye global untuk menyelamatkan bumi yang dilakukan pada tanggal 12 Juni, yang melibatkan ribuan peserta dari seluruh penjuru negeri...'
            },
            {
                imgSrc: 'img/2 JAGA SATWA UNESA.jpg',
                title: 'Green Environment Movement',
                description: 'Pada acara Green Environment Movement, banyak relawan yang ikut serta dalam kegiatan penanaman pohon dan edukasi lingkungan kepada masyarakat sekitar...'
            }
        ];
        
        let currentIndex = 0;
    
        function updateCarousel() {
            const imageElement = document.querySelector("#moment img");
            const titleElement = document.querySelector("#moment h4");
            const descriptionElement = document.querySelector("#moment p");
    
            // Update konten carousel
            imageElement.src = carouselData[currentIndex].imgSrc;
            titleElement.textContent = carouselData[currentIndex].title;
            descriptionElement.textContent = carouselData[currentIndex].description;
        }
    
        document.querySelector('#prevButton').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + carouselData.length) % carouselData.length;
            updateCarousel();
        });
    
        document.querySelector('#nextButton').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % carouselData.length;
            updateCarousel();
        });
    
        // Inisialisasi carousel saat halaman dimuat
        window.onload = updateCarousel;
    
        // Donation Script
        const campaigns = [
            { id: 1, current: 500000, target: 5000000 },
            { id: 2, current: 1200000, target: 10000000 },
            { id: 3, current: 500000, target: 5000000 },
            { id: 4, current: 1500000, target: 5000000 },
            { id: 5, current: 400000, target: 5000000 },
            { id: 6, current: 500000, target: 5000000 }
        ];
    
        function redirectToDonation(campaignId) {
            const loginUrl = "/login?campaign=" + campaignId;
            window.location.href = loginUrl;
        }
    
        function updateProgressBar(campaignId, donationAmount) {
            const campaign = campaigns.find(c => c.id === campaignId);
            if (campaign) {
                campaign.current += donationAmount;
    
                const percentage = Math.min((campaign.current / campaign.target) * 100, 100);
    
                const progressBar = document.getElementById(`progress-bar-${campaignId}`);
                progressBar.style.width = percentage + '%';
    
                const amountElement = document.getElementById(`donation-amount-${campaignId}`);
                amountElement.textContent = `Rp ${campaign.current.toLocaleString()} terkumpul dari Rp ${campaign.target.toLocaleString()}`;
            }
        }
    
    
        // Menambahkan event listener untuk tombol 'Lihat lainnya'
        document.getElementById('viewMoreButton').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default tautan
    
            if (hasUpdates) {
                // Jika ada pembaruan, arahkan ke halaman lain
                window.location.href = '/halaman-baru'; // Ganti dengan URL tujuan
            } else {
                // Jika tidak ada pembaruan, tampilkan pop-up pemberitahuan
                alert('Tidak ada pembaruan selanjutnya saat ini.');
            }
        });
    </script>
    
        

</body>
</html>