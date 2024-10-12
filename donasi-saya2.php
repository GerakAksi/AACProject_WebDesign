<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya - Gerak Aksi</title>
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
                        0px 10px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 12px;
            padding: 12px;
            max-width: 64rem;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <!-- Header -->
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

    <section class="relative text-center py-12 bg-cover">
        <h1 class="text-3xl font-bold text-[#5A72A0]">Akun Saya</h1>
    </section>

    <div class="flex justify-center items-start min-h-screen mt-[-2rem]">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl w-full flex">
            <!-- Sidebar -->
            <div class="w-1/4 border-r pr-4">
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <img src="img/1 EDIT PROFIL (1).png" alt="edit profil" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='akun-saya.php'">Edit Profil</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/2 GANTI PASSWORD.png" alt="Ganti Password" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='edit-password.php'">Ganti Password</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/3 DONASI SAYA.png" alt="Donasi Saya" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='donasi-saya2.php'">Donasi Saya</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/4 PENGGALANGAN DANA SAYA.png" alt="Penggalangan Dana Saya" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='penggalangan-dana-saya.php'">Galang Dana Saya</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/5 CREATE A MOMENT.png" alt="Create a Moment" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='create-moment.php'">Create a Moment</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/6 HELP CENTER.png" alt="Help Center" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='help-center.php'">Help Center</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/7 CHAT SUPPORT.png" alt="Chat Support" class="w-4 h-4 mr-2">
                        <button class="text-[#5A72A0]" onclick="window.location.href='chat-support.php'">Chat Support</button>
                    </li>
                    <li class="flex items-center">
                        <img src="img/8 LOGOUT.png" alt="Logout" class="w-4 h-4 mr-2">
                        <button id="logoutBtn" class="text-red-500">Logout</button>
                    </li>
                </ul>
            </div>
    
            <!-- Main Section -->
            <div class="flex flex-col items-start w-3/4 pl-6">
                <div class="mb-4">
                    <h3 class="font-semibold text-xm text-[#5A72A0]">Donasi Saya</h3>
                    <p class="font-semibold text-xs text-[#5A72A0]">Kamu bisa melihat perkembangan Donasi-mu disini</p>
                    <div class="flex justify-center items-center h-40">
                        <img src="img/LOGO PENGGALANGAN DANA.png" alt="Donasi" class="w-20 h-20">
                    </div>
                    <p class="text-xs text-[#5A72A0] text-center">Kamu belum melakukan donasi apapun</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const logoutButton = document.getElementById('logoutBtn');
        logoutButton.addEventListener('click', function () {
            const confirmation = confirm("Apakah Anda yakin untuk keluar?");
            if (confirmation) {
                alert("Anda telah keluar!");
                setTimeout(function () {
                    window.location.href = 'index.php';
                }, 2000);
            }
        });
    </script>
    
    <!-- Footer -->
    <footer class="py-2">
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

