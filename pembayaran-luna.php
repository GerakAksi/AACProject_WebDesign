<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
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
                <a href="akun.saya.php">
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
                <img src="img/5 SEMBUHKAN LUNA.jpg" alt="Luna" class="w-56 h-56 object-cover rounded-lg border border-[#5A72A0]"> 
                
                <!-- Informasi Kampanye -->
                <div class="flex-1 max-w-md">
                    <h1 class="text-2xl font-bold mb-2 text-[#5A72A0]">Sembuhkan Luna, Korban Tabrak Lari hingga Patah Tulang</h1>
                    <div class="flex items-center mb-4">
                        <img src="img/1 SEMBUHKAN LUNA.png" alt="Logo" class="w-8 h-8 rounded-full mr-2">
                        <div class="text-sm text-[#5A72A0]">Jaga Satwa UNESA</div>
                    </div>
                    
                    <!-- Informasi Donatur dan Waktu -->
                    <div class="flex items-center space-x-4 text-[#5A72A0] mb-4">
                        <div class="flex items-center space-x-2">
                            <img src="img/LOGO DONATUR.png" alt="Donatur Icon" class="w-5 h-5">
                            <span>157 donatur</span>
                        </div>
        
                        <div class="flex items-center space-x-2">
                            <img src="img/LOGO WAKTU.png" alt="Time Icon" class="w-5 h-5">
                            <span>25 hari lagi</span>
                        </div>
                    </div>
                    
                    <!-- Progress Bar dan Informasi Donasi -->
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-1">
                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 14.6%;"></div>
                        </div>
                        <div class="text-sm">
                            <span class="text-green-500">Rp 2.918.500</span>
                            <span class="text-gray-200"> terkumpul dari </span>
                            <span class="text-[#5A72A0]">Rp 20.000.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute left-4 top-0 transform -translate-x-0">
                <a id="back-button" href="#" class="flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-lg">
                    <svg class="w-6 h-6 text-[#5A72A0]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
            </div>
        </section>

        <script>
            // Ganti URL di bawah dengan URL halaman kategori aksi Anda
            const kategoriAksiUrl = 'luna-donasi.php';
        
            // Menangkap elemen tombol kembali
            const backButton = document.getElementById('back-button');
        
            // Menambahkan event listener untuk menangani klik
            backButton.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah perilaku default anchor
                window.location.href = kategoriAksiUrl; // Mengarahkan ke halaman kategori aksi
            });
        </script>

    <!-- Donation Form -->
    <div class="max-w-4xl mx-auto mt-8 px-8 bg-white p-6 rounded-lg shadow-lg">
        <!-- Menambahkan bg-white, padding, dan shadow -->
        <label for="donationAmount" class="block text-xm text-[#5A72A0]">Nominal Donasi</label>
        <div class="mt-1">
            <input type="number" id="donationAmount" class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rp 5.000" readonly>
        </div>
    </div>
       
    
        <!-- Payment Methods -->
        <section class="mt-8 shadow rounded-lg p-4 bg-white">
            <!-- Konten dengan latar belakang putih -->
            <div class="bg-[#FEF9D9] p-2 rounded-full mb-4">
                <h2 class="text-xm font-semibold text-center text-[#5A72A0]">Pilih metode pembayaran</h2>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-2">
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="bankTransfer">
                    <img src="img/1 TRANSFER BANK.png" alt="Bank Transfer" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">Bank Transfer</span>
                </button>
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="bcaVirtualAccount">
                    <img src="img/2 BCA VIRTUAL ACCOUNT.png" alt="BCA Virtual Account" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">BCA Virtual Account</span>
                </button>
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="mandiriVirtualAccount">
                    <img src="img/3 MANDIRI VIRTUAL ACCOUNT.png" alt="Mandiri Virtual Account" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">Mandiri Virtual Account</span>
                </button>
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="goPay">
                    <img src="img/4 GOPAY.png" alt="GoPay" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">GoPay</span>
                </button>
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="shopeePay">
                    <img src="img/5 SHOPEE PAY.png" alt="ShopeePay" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">ShopeePay</span>
                </button>
                <button class="flex items-center justify-center py-2 px-3 border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 focus:outline-none payment-method" data-method="dana">
                    <img src="img/6 DANA.png" alt="DANA" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium">DANA</span>
                </button>
            </div>
        
        <!-- Submit Button -->
        <div class="mt-8 p-6 rounded-lg text-center max-w-4xl">
            <button id="lanjutkanPembayaran" class="w-full px-4 py-2 bg-[#5A72A0] text-white rounded-lg shadow-md hover:bg-[#4B5C7E] transition duration-150">
                Lanjut Pembayaran Donasi
            </button>
        </div>
        
        <script>
            // Menampilkan nominal donasi yang dipilih di halaman sebelumnya
            document.addEventListener('DOMContentLoaded', function() {
                // Mengambil nominal donasi dari localStorage
                const donationAmount = localStorage.getItem('donationAmount');
                
                // Jika ada nominal yang disimpan, tampilkan di input
                if (donationAmount) {
                    document.getElementById('donationAmount').value = donationAmount;
                }
        
                let selectedMethod = null;
        
                // Ambil semua tombol metode pembayaran
                const paymentButtons = document.querySelectorAll('.payment-method');
        
                // Tombol untuk melanjutkan pembayaran
                const continueButton = document.getElementById('lanjutkanPembayaran');
        
                // Daftar URL untuk redirect berdasarkan metode
                const paymentUrls = {
                    bankTransfer: 'https://example.com/bank-transfer',
                    bcaVirtualAccount: 'https://example.com/bca-va',
                    mandiriVirtualAccount: 'https://example.com/mandiri-va',
                    goPay: 'https://example.com/gopay',
                    shopeePay: 'https://example.com/shopee-pay',
                    dana: 'https://example.com/dana',
                };
        
                // Event listener untuk setiap tombol metode pembayaran
                paymentButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        // Hilangkan class aktif dari semua tombol
                        paymentButtons.forEach(btn => btn.classList.remove('bg-[#FEF9D9]'));
        
                        // Tambahkan class aktif ke tombol yang diklik
                        this.classList.add('bg-[#FEF9D9]');
        
                        // Simpan metode pembayaran yang dipilih
                        selectedMethod = this.getAttribute('data-method');
        
                        // Aktifkan tombol lanjutkan pembayaran
                        continueButton.disabled = false;
                    });
                });
        
                // Event listener untuk tombol lanjutkan pembayaran
                continueButton.addEventListener('click', function () {
                    if (selectedMethod && paymentUrls[selectedMethod]) {
                        // Redirect ke URL berdasarkan metode pembayaran
                        window.location.href = paymentUrls[selectedMethod];
                    }
                });
            });
        </script>
        
    
    

    <!-- Footer -->
    <footer class="py-8">
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
                            <h1 class="text-sm text-[#5A72A0] mt-4">
                                #GerakAksi Menyambung Mimpi<br> bersama Gen Z.
                            </h1>
                        </div>
                        
    
                        <!-- Social Media Icons -->
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
