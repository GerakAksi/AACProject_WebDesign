<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerak Aksi - Login</title>
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
        <div class="flex items-center space-2">
            <img src="img/LOGO UTAMA.png" alt="Logo" class="h-8">
            <div class="text-2xl font-bold text-[#5A72A0] ml-2">Gerak Aksi</div>
        </div>
        <nav class="flex items-center space-x-8 text-lg text-[#5A72A0]">
            <a href="index.php" class="nav-link">Home</a>
            <a href="gd.php" class="nav-link">Galang Dana</a>
            <a href="login.php" class="nav-link">Donasi Saya</a>
            <a href="login.php" class="nav-link">Inbox</a>
            <a href="vn.php" class="nav-link">VolunTrip</a>
            <a href="login.php" class="border border-[#5A72A0] px-4 py-2 rounded-full text-[#5A72A0] mr-2 hover:bg-yellow-100">Login</a>
            <a href="register.php" class="bg-[#FEF9D9] text-[#5A72A0] px-4 py-2 rounded-full hover:bg-yellow-100">Get Started</a>
        </nav>
    </div>
</header>

  <!-- Login Section -->
  <section class="relative text-center py-4 bg-cover bg-center-bottom">
  
  <div class="relative z-10 mt-8">
    <section class="flex-1 flex flex-col justify-center items-center">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-semibold text-[#5A72A0]">Login</h2>
        <p class="text-sm text-[#5A72A0] mt-2">#GerakAksi Menyambung Mimpi bersama Gen Z.</p>
      </div>

      <!-- Pesan kesalahan -->
      <?php if (isset($_SESSION['error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline"><?= $_SESSION['error'] ?></span>
                    </div>
                    <?php unset($_SESSION['error']); // Hapus pesan setelah ditampilkan ?>
                <?php endif; ?>

      <div class="w-full max-w-sm">
        <div class="bg-white p-8 rounded-lg shadow-lg"> <!-- Added shadow-lg -->
          <form action="in.php" method="POST">

            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-[#5A72A0] mb-1 text-left">Email</label>
              <input type="email" id="email"  name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-[#1c3d5a] focus:outline-none" aria-label="Email">
            </div>
            <div class="mb-6">
              <label for="password" class="block text-sm font-medium text-[#5A72A0] mb-1 text-left">Password</label>
              <input type="password" id="password"  name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-[#1c3d5a] focus:outline-none" aria-label="Password">
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full bg-[#1c3d5a] text-white py-2 rounded-lg hover:bg-[#153048] shadow-lg transition">Login</button>
          </form>

          <!-- "atau" text in between buttons -->
          <div class="flex items-center justify-center mt-4">
            <span class="text-sm text-[#5A72A0]">atau</span>
          </div>

          <!-- Register Button -->
          <div class="mt-4">
            <a href="register.php" class="block border border-[#5A72A0] bg-white text-[#5A72A0] py-2 rounded-lg text-center hover:bg-[#153048] hover:text-white shadow-lg transition">
              Register
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

  <!-- Footer -->
  <footer class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <div class="text-center lg:text-left mb-8 lg:mb-0">
          <div class="flex items-center">
            <img src="img/LOGO UTAMA.png" alt="Gerak Aksi Logo" class="h-16 mb-4 mr-4">
            <div class="text-2xl font-bold text-[#5A72A0]">Gerak Aksi</div>
          </div>
          <div class="text-2xl mt-2">
            <h1 class="text-sm text-gray-500 mt-4">#GerakAksi Menyambung Mimpi<br> bersama Gen Z.</h1>
          </div>
          <div class="flex items-start space-x-4 mt-4">
            <a href="https://www.facebook.com/profile.php?id=61566359445557&mibextid=ZbWKwL" target="_blank">
              <img src="img/Facebook.png" alt="Facebook logo" class="h-4 md:h-5 lg:h-8">
            </a>
            <a href="https://www.twitter.com/gerakaksi_unesa?t=ji-qPua7n3xWLxf3KN-usA&s=09" target="_blank">
              <img src="img/Twitter.png" alt="Twitter logo" class="h-4 md:h-5 lg:h-8">
            </a>
            <a href="https://www.instagram.com/gerakaksi_unesa?igsh=MTB6czU4YndjNDA1MA==" target="_blank">
              <img src="img/Instagram.png" alt="Instagram logo" class="h-4 md:h-5 lg:h-8">
            </a>
            <a href="https://www.linkedin.com/in/gerakaksiunesa" target="_blank">
              <img src="img/LinkedIn.png" alt="LinkedIn logo" class="h-4 md:h-5 lg:h-8">
            </a>
            <a href="https://www.youtube.com/@gerakaksiunesa?si=k86eE8xfQMGZwJcB" target="_blank">
              <img src="img/YouTube.png" alt="YouTube logo" class="h-4 md:h-5 lg:h-8">
            </a>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-16">
          <div class="text-center lg:text-left">
            <h4 class="text-[#5A72A0] font-bold mb-4">Company</h4>
            <ul class="space-y-2">
              <li><a href="index.php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
              <li><a href="gd.php" class="text-[#5A72A0] hover:text-gray-900">Galang Dana</a></li>
              <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Donasi Saya</a></li>
              <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Inbox</a></li>
              <li><a href="vn.php" class="text-[#5A72A0] hover:text-gray-900">VolunTrip</a></li>
            </ul>
          </div>

          <div class="text-center lg:text-left mt-6 lg:mt-0">
            <h4 class="text-[#5A72A0] font-bold mb-4">Support</h4>
            <ul class="space-y-2">
              <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
              <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Chat Support</a></li>
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
  window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
      alert('Email atau Password Anda Salah. Silahkan Coba Login Kembali.');
    }
  };
</script>

</body>
</html>
