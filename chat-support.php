<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Support - Gerak Aksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FEF9D9] font-sans">

    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="flex items-center justify-between py-4 px-8">
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

    <!-- Notifikasi Status -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <p class="text-green-600 text-center">Pesan Anda telah terkirim!</p>
    <?php endif; ?>


    <!-- Form Section -->
    <div class="max-w-lg mx-auto p-8 space-y-2">
        <h2 class="text-3xl font-bold text-center text-[#5A72A0]">Chat Support</h2>
        <p class="text-xs font-bold text-center text-[#5A72A0]">#GerakAksi menyambung asa.</p>

        <form action="send_message.php" method="POST" class="space-y-4">
            <!-- Nama dan Email -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-[#5A72A0]">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Nama anda" required class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[#5A72A0]">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-[#5A72A0]">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email anda" required class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[#5A72A0]">
                </div>
            </div>

            <!-- Nomor Telepon dan Instagram -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nomor Telepon Field -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-[#5A72A0]">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone" placeholder="+62" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[#5A72A0]">
                </div>

                <!-- Instagram Field -->
                <div>
                    <label for="instagram" class="block text-sm font-medium text-[#5A72A0]">Instagram</label>
                    <input type="text" id="instagram" name="instagram" placeholder="Instagram anda" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[#5A72A0]">
                </div>
            </div>

            <!-- Pesan -->
            <div>
                <label for="massage" class="block text-sm font-medium text-[#5A72A0]">Pesan</label>
                <textarea id="massage" name="massage" placeholder="Silahkan sampaikan pesanmu..." rows="4" class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[#5A72A0]"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-[#5A72A0] text-white font-semibold py-2.5 px-10 rounded-md hover:bg-blue-700 transition duration-300">Kirim Pesan</button>
            </div>
        </form>
    </div>

    <script>
        // Handle form submission
        document.getElementById('chatForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get input values
            const phone = document.getElementById('phone').value;
            const instagram = document.getElementById('instagram').value;

            // Phone validation: Only allow numbers
            if (!/^\d+$/.test(phone)) {
                alert('Nomor telepon hanya boleh menggunakan angka!');
                return; // Stop form submission
            }

            // Instagram validation: Must start with "@"
            if (!/^@/.test(instagram)) {
                alert('Username Instagram harus dimulai dengan @');
                return; // Stop form submission
            }

            // If all validations pass, display message and reset form
            alert('Pesan terkirim!');
document.getElementById('chatForm').reset(); // Reset the form

// Use a relative path for navigation, if on a server
window.location.href = 'home-page.php';
        });
    </script>

    <!-- Footer Section -->
    <footer class="bg-white py-12">
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

    
    
    
</body>

</html>
</body>
</html>

