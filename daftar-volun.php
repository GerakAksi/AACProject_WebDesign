<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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


<main class="flex justify-center items-center min-h-screen">
    <!-- Kontainer Utama -->
    <div class="flex flex-col items-center space-y-30"> <!-- Adjusted space-y for more vertical gap -->
        <!-- Teks Utama -->
        <div class="text-center space-y-4">
            <h1 class="text-3xl font-bold text-[#5A72A0] mb-6">
                Daftar <span class="text-[#5A72A0]">#BestieAksi</span>
            </h1>
            <p class="text-[#5A72A0]">
                Yuk, ikut berdonasi di setiap kegiatannya & berpartisipasi aktif dalam VolunTrip dengan menjadi 
                <span class="text-[#5A72A0]">#BestieAksi</span>!
            </p>
        </div>

        <!-- Formulir dan Ilustrasi -->
        <div class="flex items-center space-x-10"> <!-- Set horizontal spacing -->
            <!-- Formulir -->
            <div class="form-container bg-white p-8 rounded-lg shadow-lg space-y-4 max-w-xl"> <!-- Increased max-w for wider form -->
                <form id="bestieAksiForm" action="submit_bestieaksi.php" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-[#5A72A0]">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="dob" class="block text-sm font-medium text-[#5A72A0]">Tanggal Lahir</label>
                            <input type="date" id="dob" name="dob" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-[#5A72A0]">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-[#5A72A0]">Email Mahasiswa UNESA</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="address" class="block text-sm font-medium text-[#5A72A0]">Alamat</label>
                            <input type="text" id="address" name="address" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="nim" class="block text-sm font-medium text-[#5A72A0]">NIM</label>
                            <input type="text" id="nim" name="nim" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="col-span-2 relative">
                            <label for="ektm" class="block text-sm font-medium text-[#5A72A0] mb-2">E-KTM UNESA</label>
                            
                            <div class="relative w-full h-24 border border-[#5A72A0] rounded-md shadow-sm">
                                <!-- Hidden input file -->
                                <input type="file" id="ektm" name="ektm" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" onchange="updateFileName(this)">
                                
                                <!-- Custom label as a button -->
                                <label for="ektm" class="absolute inset-0 flex items-center justify-center bg-transparent text-[#5A72A0] cursor-pointer">
                                    <span id="fileName" class="text-center">Pilih File</span>
                                </label>
                            </div>
                        </div>

                        <script>
                            function updateFileName(input) {
                                const fileNameElement = document.getElementById('fileName');
                                
                                if (input.files && input.files[0]) {
                                    // Show the name of the file
                                    fileNameElement.textContent = input.files[0].name;
                                } else {
                                    // Reset to default text if no file is chosen
                                    fileNameElement.textContent = 'Pilih File';
                                }
                            }
                        </script>
                        
                    </div>

                    <button type="submit" class="w-full bg-[#5A72A0] text-white py-2 rounded-full font-semibold hover:bg-blue-600 mt-4">Daftar #BestieAksi</button>
                </form>
            </div>
        
            <!-- Ilustrasi -->
            <div class="flex justify-center items-center"> <!-- Center the image -->
                <div class="flex justify-center items-center h-full">
                    <img src="img/FOTO REGISTER.png" alt="Yuk jadi #BestieAksi" class="h-56">
                </div>
            </div>
        </div>
    </div>
</main>
        
<script>
    document.getElementById('bestieAksiForm').addEventListener('submit', function(e) {

        // Retrieve input values
        const name = document.getElementById('name').value;
        const dob = document.getElementById('dob').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        const address = document.getElementById('address').value;
        const nim = document.getElementById('nim').value;
        const ektm = document.getElementById('ektm').files[0];

        // Check if all fields are filled
        if (!name || !dob || !phone || !email || !address || !nim || !ektm) {
            alert('Semua kolom harus diisi!');
            return;
        }

        // Show success message
        alert('Pendaftaran berhasil!');

        // Redirect to the VolunTrip page
        window.location.href = 'voluntrip.php'; // Replace with the actual URL of your VolunTrip page
    });
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
