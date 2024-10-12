<!DOCTYPE html>
<html lang="en">

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

  <!-- Hero Section -->
  <section class="flex flex-col md:flex-row items-center justify-center py-12 px-6 max-w-6xl mx-auto"> <!-- Centered and limited max width -->
    <div class="text-center md:text-left max-w-lg space-y-4 md:pr-4"> <!-- Reduced padding -->
        <h1 class="text-3xl font-bold text-[#5A72A0]">VolunTrip bersama<br>#GerakAksi</h1>
        <p class="text-[#5A72A0]">
            Yuk, menjadi bagian dari perubahan bersama <span class="font-semibold">#BestieAksi</span> di <strong>#GerakAksi</strong> untuk berkontribusi dalam berbagai aksi sosial, pendidikan, lingkungan, kemanusiaan, dan lainnya. Bersama kita wujudkan dampak nyata dan bantu masyarakat yang membutuhkan!
        </p>
        <button id="bestieAksiButton" class="bg-[#5A72A0] text-white px-6 py-3 rounded-full mt-4">Menjadi #BestieAksi</button>
    </div>
    <div class="relative mt-8 md:mt-0">
        <img src="img/FOTO VOLUNTRIP.png" alt="Gerak Aksi" class="w-full max-w-md"> <!-- Reduced image size -->
    </div>
</section>

<script>
    document.getElementById("bestieAksiButton").addEventListener("click", function() {
        // Replace the URL below with the desired page URL
        window.location.href = "tampilan-volun.php"; // Replace with your target URL
    });
</script>

  

  <!-- Moment Section -->
  <section id="moment" class="bg-gradient-to-b from-[#FEF9D9] to-[#FEF9D9] py-8 text-center max-w-4xl mx-auto flex flex-col justify-center items-center">
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
            <img src="https://via.placeholder.com/150/4" alt="Moment Image" class="rounded-md w-1/3 mr-4" id="carouselImage">
            <div>
                <h4 class="text-lg font-bold text-[#5A72A0] mb-1 text-left" id="carouselTitle">Time to Heal Nature</h4>
                <p class="text-[#5A72A0] text-sm text-left" id="carouselDescription">Adanya program kerja Time to Heal Nature pada tanggal 11 Mei lalu, UKM Peduli Kemanusiaan mendapatkan kesempatan untuk bekerja sama dengan berbagai pihak luar dan ...</p>
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

<script>
    const carouselData = [
        {
            imgSrc: 'img/4 TIME TO HEAL NATURE.jpg',
            title: 'Time to Heal Nature',
            description: 'Adanya program kerja Time to Heal Nature pada tanggal 11 Mei lalu, UKM Peduli Kemanusiaan mendapatkan kesempatan untuk bekerja sama dengan berbagai pihak luar dan ...'
        },
        {
            imgSrc: 'img/1 TEBAR BIBIT KEBAIKAN.jpg',
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
        const imageElement = document.getElementById("carouselImage");
        const titleElement = document.getElementById("carouselTitle");
        const descriptionElement = document.getElementById("carouselDescription");

        // Update konten carousel
        imageElement.src = carouselData[currentIndex].imgSrc;
        titleElement.textContent = carouselData[currentIndex].title;
        descriptionElement.textContent = carouselData[currentIndex].description;
    }

    document.getElementById('prevButton').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselData.length) % carouselData.length;
        updateCarousel();
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselData.length;
        updateCarousel();
    });

    // Inisialisasi carousel saat halaman dimuat
    window.onload = updateCarousel;
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
            <p class="text-sm text-gray-500">&copy; 2024 Gerak Aksi UNESA | All Rights Reserved | <a href="terms-conditions.php" class="text-blue-600 hover:underline">Terms and Conditions</a> | <a href="privacy-policy" class="text-blue-600 hover:underline">Privacy Policy</a></p>
        </div>
    </div>
</footer>


</body>
</html>
