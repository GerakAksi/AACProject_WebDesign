<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerak Aksi - Sembuhkan Luna</title>
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

    <main class="max-w-4xl mx-auto my-4">
        <!-- Title Section -->
        <section class="relative p-8">
            <div class="flex justify-end space-x-10 items-start">
                <!-- Gambar Luna -->
                <img src="img/3 RELAWAN PULAU BAWEAN.jpg" alt="Bawean" class="w-56 h-56 object-cover rounded-lg border border-[#5A72A0]"> 
                
                <!-- Informasi Kampanye -->
                <div class="flex-1 max-w-md">
                    <h1 class="text-2xl font-bold mb-2 text-[#5A72A0]">Relawan Pulau Bawean.</h1>
                    <div class="flex items-center mb-4">
                        <img src="img/UKM PK.png" alt="Logo" class="w-8 h-8 rounded-full mr-2">
                        <div class="text-sm text-[#5A72A0]">UKM Peduli Kemanusiaan UNESA</div>
                    </div>
                    
                    <!-- Informasi Donatur dan Waktu -->
                    <div class="flex flex-col items-start space-y-2 text-[#5A72A0] mb-4">
                        <div class="flex items-center space-x-2">
                            <img src="img/LOGO DATE.png" alt="Date Icon" class="w-5 h-5">
                            <span>04 Okt - 06 Okt 2024</span>
                        </div>
                    
                        <div class="flex items-center space-x-2">
                            <img src="img/LOGO JAM.png" alt="Time Icon" class="w-5 h-5">
                            <span>10:30 - 18:00 WIB</span>
                        </div>

                        <div class="flex items-center space-x-2">
                            <img src="img/LOGO LOKASI.png" alt="lokasi Icon" class="w-5 h-5">
                            <span>UNESA Lidah Wetan</span>
                        </div>
                    </div>                    
                    
        
                    <!-- Tombol Aksi -->
                    <div class="flex space-x-4">
                        <a id="daftar-button" href="#" class="flex-1">
                            <button class="w-full px-8 py-2 bg-[#FEF9D9] text-[#5A72A0] font-semibold rounded-full border border-[#5A72A0]">Daftar</button>
                        </a>
                        <a id="bagikan-button" href="#" class="flex-1">
                            <button class="w-full px-8 py-2 bg-white text-[#5A72A0] font-semibold rounded-full border border-[#5A72A0]">Bagikan</button>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Tombol Panah -->
            <div class="absolute left-4 top-0 transform -translate-x-0">
                <a id="back-button" href="#" class="flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-lg">
                    <svg class="w-6 h-6 text-[#5A72A0]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
            </div>
        </section>
    </main>

    <section class="py-2 px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Content box with padding -->
            <div class="bg-white p-8 rounded-lg shadow-lg inline-block flex flex-col">
                <!-- Button Options for Galang Dana -->
                <div class="flex justify-center mb-4">
                    <button id="kisah-btn" onclick="showContent('kisah')" class="py-3 px-10 text-[#5A72A0] font-semibold active hover:bg-[#FEF9D9] transition duration-300 border border-[#5A72A0] flex-1">Kisah</button>
                    <button id="rinciandana-btn" onclick="showContent('S&K')" class="py-3 px-10 text-[#5A72A0] font-semibold hover:bg-[#FEF9D9] transition duration-300 border border-[#5A72A0] flex-1">Syarat&Ketentuan</button>
                </div>
    
                <div class="flex-1">
                    <!-- Kisah Section -->
                    <div id="kisah-content" style="display: block;">
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Halo sobat UNESA, Tragedi gempa Bawean pasca bulan Maret 2024 memberikan trauma pada warga sekitarnya. Hal ini menggerakkan Teman - teman relawan untuk membantu terhadap sesama. Tim SMCC dan UKM-PK dengan sigap ke titik lokasi bencana.
                        </p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Kondisi pulau Bawean saat relawan SMCC dan UKM-PK datang menunjukkan bahwa kondisi Psikologis warga masih shock dan mencekam karena khawatir ada gempa susulan. Dari hasil pendekatan bersama warga mereka masih cenderung trauma dan lebih nyaman melakukan aktivitas diluar ruangan. Menurut warga , gempa yang terjadi pada saat itu adalah gempa terbesar yang pernah terjadi. Sehingga , mereka butuh watu untuk penyesuain. Kesulitan bagi mereka adalah medis.
                        </p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Setelah adanya survei, Tim SMCC dan UKM-PK berencana melakukan beberapa upaya kepada korban bencana gempa dengan melakukan edukais konseling bersama ibu - ibu atau lansia, mengadakan fun-games untuk anak - anak, dan pemberian donasi baik uang maupun barang.
                        </p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Maka dari itu, kami dari tim SMCC dan UKM-PK membuka donasi dan relawan untuk membantu para korban bencan gempa Bawean. Hal ini ditujukan untuk memberikan tenaga serta hati untuk mengembalikan semangat serta kebahagiaan para warga sekitar pulau Bawean.
                        </p>
                    </div>
    
                    <!-- Rincian Dana Section -->
                    <div id="S&K" style="display: none;">
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Voluntrip bersama #GerakAksi menjadi wadah bagi kamu yang ingin ikut berkontribusi dalam membuat kebaikan. Kali ini Voluntrip bersama UKM Peduli Kemanusiaan UNESA menjadi relawan untuk bencana pulau bawean.
                        </p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            <strong>Perlengkapan pribadi yang harus dibawa:</strong>
                        </p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">1. Baju untuk aktivitas lapangan</p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">2. Jas hujan</p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">3. Makanan & Minuman</p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">4. Obat - obatan</p>
                        <p style="color: #5A72A0; text-indent: 0.5in; text-align: justify; margin-bottom: 1em;">
                            Dengan mengikuti kegiatan Voluntrip ini, kamu sudah ikut menjadi bagian dalam berbuat kebaikan bersama #BestiAksi untuk relawan bencana pulau Bawean. Yuk, daftar sekarang!
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Report Issue Section -->
    <section class="mt-8 mx-auto max-w-4xl">
        <div class="bg-white p-4 shadow-md rounded-md">
            <p class="text-left text-[#5A72A0]">Ada masalah dengan #BestiAksi kegiatan ini?</p>
            <button id="laporkan-btn" class="mt-4 bg-white text-red-600 px-8 py-2 rounded-full mx-auto block font-semibold border border-red-300">
                🚩 Laporkan #BestiAksi kegiatan ini!
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Footer Top - Logo and Links -->
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <!-- Left Section (Logo and Social Media) -->
                <div class="text-center lg:text-left mb-8 lg:mb-0">
                    <!-- Logo and Text -->
                    <div class="flex items-center">
                        <img src="img/LOGO UTAMA.png" alt="Gerak Aksi Logo" class="h-16 mb-4 mr-4">
                        <div>
                            <div class="text-2xl font-bold text-[#5A72A0]">Gerak Aksi</div>
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

    <script>
        function showContent(contentType) {
            const kisahContent = document.getElementById('kisah-content');
            const rinciandanaContent = document.getElementById('S&K');
            if (contentType === 'kisah') {
                kisahContent.style.display = 'block';
                rinciandanaContent.style.display = 'none';
                document.getElementById('kisah-btn').classList.add('active');
                document.getElementById('rinciandana-btn').classList.remove('active');
            } else if (contentType === 'S&K') {
                kisahContent.style.display = 'none';
                rinciandanaContent.style.display = 'block';
                document.getElementById('rinciandana-btn').classList.add('active');
                document.getElementById('kisah-btn').classList.remove('active');
            }
        }

        // Menangkap elemen tombol
        const daftarButton = document.getElementById('daftar-button');
        const bagikanButton = document.getElementById('bagikan-button');
        const backButton = document.getElementById('back-button');
        const laporkanBtn = document.getElementById('laporkan-btn');

        // URL untuk halaman pendaftaran dan halaman donasi
        const daftarUrl = 'daftar-volun.php';
        const kategoriAksiUrl = 'tampilan-volun.php';

        daftarButton.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = daftarUrl;
        });

        bagikanButton.addEventListener('click', function(event) {
            event.preventDefault();
            const socialMediaUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href);
            window.open(socialMediaUrl, '_blank');
        });

        backButton.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = kategoriAksiUrl;
        });

        laporkanBtn.addEventListener('click', function() {
            const userConfirmed = confirm('Apakah Anda yakin ingin melaporkan #BestiAksi kegiatan ini?');
            if (userConfirmed) {
                window.location.href = 'chat-support.php';
            }
        });
    </script>
</body>
</html>