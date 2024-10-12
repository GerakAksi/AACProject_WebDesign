<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerak Aksi Inbox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Pesan.js" defer></script> <!-- Link to external JS file -->
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
                <img src="img\LOGO UTAMA.png" alt="Logo" class="h-8">
                <div class="text-3xl font-bold text-[#5A72A0] ml-2">Gerak Aksi</div>
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
    <!-- Main Content -->
    <section>
             <main class="max-w-6xl mx-auto py-8 px-2">
                <h1 class="text-center text-3xl font-bold text-[#5A72A0] mb-2">#GerakAksi</h1>
                <p class="text-center text-3xl font-bold text-[#5A72A0] mb-6"> Inbox</p>

        
        <div class="bg-white shadow-md overflow-hidden">
            <!-- Tabs -->
            <div class="flex">
                <button id="riwayatBtn" class="py-3 px-10 bg-[#FEF9D9] text-[#5A72A0] font-semibold border border-[#5A72A0] focus:outline-none hover:bg-yellow-100 flex-1">
                    Riwayat
                </button>
                <button id="pesanBtn" class="py-3 px-10 bg-white text-[#5A72A0] font-semibold border border-[#5A72A0]  focus:outline-none hover:bg-yellow-100 flex-1">
                    Pesan
                </button>
            </div>

            <!-- Message List -->
            <div id="riwayatContent" class="p-4">
                <div class="space-y-4">
                    <!-- Message Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <img src="img/1 SEMBUHKAN LUNA.png" alt="Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Sembuhkan Luna, Korban Tabrak Lari hingga Patah Tulang</h3>
                            <p class="text-sm text-gray-500 mt-1">Luna korban tabrak lari, hingga patah tulang parah. Tidak ada saksi mata yang bisa mengamati pelaku atau bahkan menghentikannya...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">17 menit lalu</p>
                    </div>
                    <!-- Message Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <img src="img/1 SEMBUHKAN LUNA.png" alt="Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Jaga Satwa UNESA x Kitty Cat Food</h3>
                            <p class="text-sm text-gray-500 mt-1">Weekend nanti tepatnya tanggal 3 Desember Tim Jaga Satwa mengadakan Weekend With UrbanMiaww Vol. 2! UrbanMiaww adalah kegiatan...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">1 jam lalu</p>
                    </div>
                    <!-- Message Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <img src="img/1 RELAWAN PULAU BAWEAN.png" alt="Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Relawan Pulau Bawean</h3>
                            <p class="text-sm text-gray-500 mt-1">Halo sobat UNESA, tragedi Gempa Bawean pada bulan Maret 2024 memberikan trauma pada warga sekitarnya. Hari ini menggerakkan...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">5 jam lalu</p>
                    </div>
                    <!-- Message Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <img src="img/1 RELAWAN PULAU BAWEAN.png" alt="Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Time to Heal Nature Bumi Perkemahan Panceng Gresik</h3>
                            <p class="text-sm text-gray-500 mt-1">Time to Heal Nature atau TTHN merupakan salah satu program dari UKM Peduli Kemanusiaan, tepatnya divisi mitigasi bencana di...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">6 jam lalu</p>
                    </div>
                    <!-- Message Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <img src="img/3 RELAWAN UNESA PEDULI LUMAJANG.png" alt="Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">UNESA Peduli Lumajang</h3>
                            <p class="text-sm text-gray-500 mt-1">Peristiwa tidak terduga yakni erupsi Gunung Semeru di daerah Lumajang Jawa Timur beberapa waktu yang lalu mendapatkan perhatian...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">1 hari lalu</p>
                    </div>
                </div>
            </div>

            <div id="pesanContent" class="p-4 hidden space-y-4">
                <!-- Contoh Konten Pesan -->
                <div class="space-y-4">
                    <!-- First Message -->
                    <div class="flex items-start p-4 bg-white rounded-lg shadow-md">
                        <img src="img/1 RELAWAN PULAU BAWEAN.png" alt="Relawan" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Terima Kasih telah Mendaftar sebagai Relawan Pulau Bawean</h3>
                            <p class="text-sm text-gray-500 mt-1">SELAMAT ANDA DINYATAKAN LOLOS SEBAGAI RELAWAN! Melalui pesan ini, kami sampaikan Surat Keputusan dan beberapa ketentuan sebagai berikut: ...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">17 menit lalu</p>
                    </div>

                    <!-- Second Message -->
                    <div class="flex items-start p-4 bg-white rounded-lg shadow-md">
                        <img src="img/2 RELAWAN TIME TO HEAL.png" alt="Relawan" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Terima Kasih telah Mendaftar sebagai Relawan Time to Heal</h3>
                            <p class="text-sm text-gray-500 mt-1">SELAMAT ANDA DINYATAKAN LOLOS SEBAGAI RELAWAN! Melalui pesan ini, kami sampaikan Surat Keputusan dan beberapa ketentuan sebagai berikut: ...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">1 jam lalu</p>
                    </div>

                    <!-- Third Message -->
                    <div class="flex items-start p-4 bg-white rounded-lg shadow-md">
                        <img src="img/3 RELAWAN UNESA PEDULI LUMAJANG.png" alt="Relawan" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#5A72A0]">Terima Kasih telah Mendaftar sebagai Relawan UNESA Peduli Lumajang</h3>
                            <p class="text-sm text-gray-500 mt-1">SELAMAT ANDA DINYATAKAN LOLOS SEBAGAI RELAWAN! Melalui pesan ini, kami sampaikan Surat Keputusan dan beberapa ketentuan sebagai berikut: ...</p>
                        </div>
                        <p class="ml-auto text-sm text-gray-400">6 jam lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="text-center lg:text-left mb-8 lg:mb-0">
                    <div class="flex items-center">
                        <img src="img/LOGO UTAMA.png" alt="Gerak Aksi Logo" class="h-16 mb-4 mr-4">
                        <div>
                            <div class="text-2xl font-bold text-[#5A72A0]">Gerak Aksi</div>
                        </div>
                    </div>
                    <div class="text-2xl mt-2">
                        <h1 class="text-sm text-gray-500 mt-4">#GerakAksi Menyambung Mimpi<br> bersama Gen Z.</h1>
                    </div>
                    <div class="flex items-start space-x-4 mt-4">
                        <a href="https://www.facebook.com/profile.php?id=61566359445557&mibextid=ZbWKwL" target="_blank"><img src="img/Facebook.png" alt="facebook logo" class="h-4 md:h-5 lg:h-8"></a>
                        <a href="https://x.com/gerakaksi_unesa?t=ji-qPua7n3xWLxf3KN-usA&s=09" target="_blank"><img src="img/Twitter.png" alt="Twitter logo" class="h-4 md:h-5 lg:h-8"></a>
                        <a href="https://www.instagram.com/gerakaksi_unesa?igsh=MTB6czU4YndjNDA1MA==" target="_blank"><img src="img/Instagram.png" alt="Instagram logo" class="h-4 md:h-5 lg:h-8"></a>
                        <a href="http://www.linkedin.com/in/gerakaksiunesa" target="_blank"><img src="img/LinkedIn.png" alt="LinkedIn logo" class="h-4 md:h-5 lg:h-8"></a>
                        <a href="https://youtube.com/@gerakaksiunesa?si=k86eE8xfQMGZwJcB" target="_blank"><img src="img/YouTube.png" alt="Youtube logo" class="h-4 md:h-5 lg:h-8"></a>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row lg:space-x-16">
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
                    <div class="text-center lg:text-left">
                        <h4 class="text-[#5A72A0] font-bold mb-4">Support</h4>
                        <ul class="space-y-2">
                            <li><a href="help-center.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
                            <li><a href="contact-us.php" class="text-[#5A72A0] hover:text-gray-900">Contact Us</a></li>
                            <li><a href="privacy-policy.php" class="text-[#5A72A0] hover:text-gray-900">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 mt-12 pt-4 text-center">
                <p class="text-sm text-gray-500">&copy; 2024 Gerak Aksi UNESA | All Rights Reserved | <a href="terms-conditions.php" class="text-blue-600 hover:underline">Terms and Conditions</a> | <a href="privacy-policy.php" class="text-blue-600 hover:underline">Privacy Policy</a></p>
            </div>
        </div>
    </footer>
    <script>
    document.getElementById('riwayatBtn').addEventListener('click', function() {
        document.getElementById('riwayatContent').classList.remove('hidden');
        document.getElementById('pesanContent').classList.add('hidden');
        this.classList.add('bg-yellow-50');
        document.getElementById('pesanBtn').classList.remove('bg-yellow-50');
    });

    document.getElementById('pesanBtn').addEventListener('click', function() {
        document.getElementById('pesanContent').classList.remove('hidden');
        document.getElementById('riwayatContent').classList.add('hidden');
        this.classList.add('bg-yellow-50');
        document.getElementById('riwayatBtn').classList.remove('bg-yellow-50');
    });
</script>
</body>
</html>

