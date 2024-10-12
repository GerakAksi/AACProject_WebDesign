<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerak Aksi - Galang Dana</title>
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
<body class="text-[#5A72A0]">

  <!-- Navbar -->
  <header class="bg-white shadow-sm">
    <div class="flex items-center justify-between py-4 px-8 bg-white shadow">
        <div class="flex items-center pace-2">
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

  <section class="custom-bg py-6 text-center text-[#5A72A0]">
    <h2 class="text-3xl font-bold mb-0">#GerakAksi<br>Galang Dana</h2>
    <img src="img/1 GD.png" alt="Illustration" width="170" height="170" class="mx-auto mb-0">
    <p class="text-lg mb-0 px-8 text-[#5A72A0]">Program <strong>Galang Dana</strong> dari #GerakAksi hadir untuk<br>memudahkan komunitas dan masyarakat yang ingin berkontribusi<br>dalam berbagai aksi sosial. Mulai dari bantuan di bidang pendidikan,<br> lingkungan, perlindungan hewan, hingga kemanusiaan.</p>
  </section>

        <!-- Galang Dana Mahasiswa Content (Initially visible) -->
        <section class="py-12 px-8">
          <div class="max-w-4xl mx-auto">
              <!-- Content box with padding -->
              <div class="bg-white p-8 rounded-lg shadow-lg inline-block"> 
                  <!-- Button Options for Galang Dana -->
                  <div class="flex justify-center mb-4">
                      <button id="mahasiswa-btn" onclick="showContent('mahasiswa')" class="py-3 px-10 text-[#5A72A0] font-semibold active hover:bg-yellow-200 transition duration-300 border border-[#5A72A0] flex-1">Galang Dana Mahasiswa</button>
                      <button id="umum-btn" onclick="showContent('umum')" class="py-3 px-10 text-[#5A72A0] font-semibold inactive hover:bg-yellow-200 transition duration-300 border border-[#5A72A0] flex-1">Galang Dana Umum</button>
                  </div>
      
                  <!-- Galang Dana Mahasiswa Content (Initially visible) -->
                  <div id="mahasiswa-content" style="display: block;">
                      <div class="flex justify-center mb-4">
                          <img src="img/FOTO GALANG DANA MAHASISWA.png" alt="Illustration for galang dana mahasiswa" class="w-48"> <!-- Ukuran gambar diubah -->
                      </div>
                      <div>
                          <p class="mb-4 text-[#5A72A0]">Program <strong>Galang Dana Mahasiswa</strong> ditujukan untuk membantu mahasiswa yang membutuhkan dukungan dana dalam berbagai situasi (Biaya Pendidikan, Kebutuhan Perkuliahan, atau Keperluan Mendesak Lainnya). Program ini memberi kesempatan bagi mahasiswa untuk mendapatkan bantuan langsung dari masyarakat dengan transparansi penuh.</p>
                          <ul class="list-disc list-inside mb-6 text-[#5A72A0]" style="padding-left: 1.5rem;"> <!-- Indentasi pointer -->
                              <li><strong>Syarat dan ketentuan Galang Dana Mahasiswa:</strong></li>
                              <li><strong>Mahasiswa Aktif:</strong> Terbuka bagi mahasiswa aktif Universitas Negeri Surabaya dari semua program studi yang mengalami kesulitan finansial.</li>
                              <li><strong>Tujuan penggalangan dana untuk berbagai kategori seperti:</strong>
                                  <ul class="list-disc list-inside" style="padding-left: 1.5rem;"> 
                                      <li>Biaya pendidikan (biaya semester, SPP, dll)</li>
                                      <li>Kebutuhan Perkuliahan (Laptop, Handphone, Peralatan Studi, dll)</li>
                                      <li>Kebutuhan Darurat (Kesehatan, dll)</li>
                                  </ul>
                              </li>
                              <li><strong>Dokumen Pendukung:</strong> Penggalang dana wajib menyertakan dokumen pendukung seperti Kartu Tanda Mahasiswa Universitas Negeri Surabaya (E-KTM UNESA), surat keterangan dari fakultas, atau bukti kebutuhan dana lainnya.</li>
                              <li><strong>Penggalangan dana yang transparan:</strong> Penggalangan dana harus memberikan deskripsi lengkap tentang kebutuhan dan rencana penggunaan dana, serta menyediakan laporan pasca-penggalangan dana mengenai penggunaan dana tersebut.</li>
                              <li><strong>Batas waktu penggalangan:</strong> Durasi penggalangan maksimal 30 hari dengan opsi perpanjangan jika diperlukan, setelah ditinjau oleh tim #GerakAksi.</li>
                          </ul>
                          <h4 class="mb-4">Dengan galang dana mahasiswa, #GerakAksi memberikan kesempatan bagi mahasiswa yang mengalami kendala keuangan untuk mendapatkan dukungan dari masyarakat secara mudah dan terpercaya.</h4>
                          <div class="flex justify-center mt-4">
                              <button id="mahasiswa-btn" onclick="redirectToLogin('mahasiswa')" class="px-6 py-2 bg-[#FEF9D9] text-[#5A72A0] rounded-full font-semibold">Mulai Galang Dana Mahasiswa</button>
                          </div>
                      </div>
                  </div>
      
                  <!-- Galang Dana Umum Content (Initially hidden) -->
                  <div id="umum-content" style="display:none;">
                      <div class="flex justify-center mb-4">
                          <img src="img/GALANG DANA UMUM.png" alt="Illustration for galang dana umum" class="w-48"> <!-- Ukuran gambar diubah -->
                      </div>
                      <div>
                          <p class="mb-4 text-[#5A72A0]">Program <strong>Galang Dana Umum</strong> ditujukan kepada seluruh masyarakat dalam Universitas Negeri Surabaya, mulai dari mahasiswa, organisasi/komunitas/Unit Kegiatan Mahasiswa (UKM), hingga pihak civitas akademika yang ingin menggalang dana dalam berbagai kegiatan sosial, lingkungan, kemanusiaan, perlindungan hewan, atau kegiatan lainnya. Program ini memberikan kesempatan bagi mereka yang ingin mendukung dan memajukan berbagai inisiatif positif di lingkungan kampus dan sekitarnya.</p>
                          <ul class="list-disc list-inside mb-6 text-[#5A72A0]" style="padding-left: 1.5rem;"> 
                              <li><strong>Syarat dan ketentuan Galang Dana Umum:</strong></li>
                              <li>Terbuka untuk mahasiswa, organisasi, Unit Kegiatan Mahasiswa (UKM) dan seluruh civitas akademika UNESA.</li>
                              <li><strong>Tujuan penggalangan dana untuk berbagai kategori seperti:</strong>
                                  <ul class="list-disc list-inside" style="padding-left: 1.5rem;"> 
                                      <li>Sosial</li>
                                      <li>Lingkungan</li>
                                      <li>Hewan</li>
                                      <li>Kegiatan kemanusiaan lainnya</li>
                                  </ul>
                              </li>
                              <li><strong>Penggalangan dana yang transparan:</strong> Penggalang dana wajib menyertakan dokumen pendukung seperti Kartu Tanda Mahasiswa Universitas Negeri Surabaya (E-KTM UNESA), identitas organisasi/komunitas/Unit Kegiatan Mahasiswa (UKM), atau identitas civitas akademika UNESA.</li>
                              <li><strong>Penggalangan dana yang transparan:</strong> Penggalangan dana harus memberikan deskripsi lengkap tentang kebutuhan dan rencana penggunaan dana, serta menyediakan laporan pasca-penggalangan dana mengenai penggunaan dana tersebut.</li>
                              <li><strong>Batas waktu penggalangan:</strong> Durasi penggalangan maksimal 30 hari dengan opsi perpanjangan jika diperlukan, setelah ditinjau oleh tim #GerakAksi.</li>
                          </ul>
                          <h4 class="mb-4">Dengan Galang Dana Umum, #GerakAksi memberikan solusi mudah dan aman bagi siapa saja yang ingin berkontribusi bagi masyarakat.</h4>
                          <div class="flex justify-center">
                              <button id="umum-btn" onclick="redirectToLogin('umum')" class="px-6 py-2 bg-[#FEF9D9] text-blue-900 rounded-full font-semibold">Galang Dana Umum Sekarang</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <script>
        function redirectToLogin(type) {
            // Redirect to login page first
            window.location.href = 'login.php'; 
            
            // After login, redirect to the specific fundraising page
            // This should be handled in the login process, possibly using session storage or cookies.
            localStorage.setItem('redirectAfterLogin', type);
        }
    </script>
      
      
      <!-- Additional section for Tata Cara #GerakAksi GalangDana -->
<section class="py-12 px-8">
  <div class="max-w-4xl mx-auto">
      <!-- Content box with white background and steps -->
      <div class="p-8 max-w-3xl mx-auto">
          <h2 class="text-center text-2xl font-bold text-[#5A72A0] mb-8">Tata Cara #GerakAksi GalangDana</h2>
          
          <!-- Step 1 -->
          <div class="bg-[#FEF9D9] p-6 mb-4 rounded-lg shadow-md border border-[#5A72A0]">
              <h3 class="text-lg font-bold text-[#5A72A0] mb-2">1. Pilih Kategori Galang Dana</h3>
              <p class="text-[#5A72A0]">
                  Program Galang Dana di #GerakAksi sendiri ada 2 kategori lho, <strong>Galang Dana Mahasiswa</strong> dan <strong> Dana Umum</strong>.
                  Silahkan pilih kategori galang dana yang paling sesuai dengan kebutuhan kamu dan mulailah bergerak bersama untuk mewujudkan perubahan!
              </p>
          </div>
          
          <!-- Step 2 -->
          <div class="bg-[#FEF9D9] p-6 mb-4 rounded-lg shadow-md border border-[#5A72A0]">
              <h3 class="text-lg font-bold text-[#5A72A0] mb-2">2. Isi Formulir Pengajuan Galang Dana</h3>
              <p class="text-[#5A72A0]">
                  Isi formulir pengajuan galang dana sesuai dengan kategori yang kamu pilih secara lengkap dan sesuai instruksi yaa!
              </p>
          </div>

          <!-- Step 3 -->
          <div class="bg-[#FEF9D9] p-6 mb-4 rounded-lg shadow-md border border-[#5A72A0]">
              <h3 class="text-lg font-bold text-[#5A72A0] mb-2">3. Verifikasi Identitas Galang Dana</h3>
              <p class="text-[#5A72A0]">
                  Lakukan verifikasi identitas dan kebutuhan dokumen lainnya untuk kelengkapan data pengajuan. 
                  Tenang aja gaiss, seluruh data yang diberikan, dijaga kerahasiaannya secara penuh oleh tim #GerakAksi!
              </p>
          </div>

          <!-- Step 4 -->
          <div class="bg-[#FEF9D9] p-6 mb-4 rounded-lg shadow-md border border-[#5A72A0]">
              <h3 class="text-lg font-bold text-[#5A72A0] mb-2">4. Tunggu Persetujuan Pengajuan Galang Dana</h3>
              <p class="text-[#5A72A0]">
                  Setelah semua step dilakukan, tunggu persetujuan pengajuan galang dana dari tim #GerakAksi yaa gaiss.
                  Hal ini dilakukan untuk kelengkapan data pengajuan dan kepastian kebutuhan penggalangan dana agar tidak disalahgunakan.
              </p>
          </div>
      </div>
  </div>
</section>

      

  <!-- Footer -->
  <footer class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
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
                        <li><a href="index.php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
                        <li><a href="gd.php" class="text-[#5A72A0] hover:text-gray-900">Galang Dana</a></li>
                        <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Donasi Saya</a></li>
                        <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Inbox</a></li>
                        <li><a href="vn.php" class="text-[#5A72A0] hover:text-gray-900">VolunTrip</a></li>
                    </ul>
                </div>
                <div class="text-center lg:text-left">
                    <h4 class="text-[#5A72A0] font-bold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="login.php" class="text-[#5A72A0] hover:text-gray-900">Help Center</a></li>
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
    function showContent(type) {
      var mahasiswaContent = document.getElementById('mahasiswa-content');
      var umumContent = document.getElementById('umum-content');
      var mahasiswaBtn = document.getElementById('mahasiswa-btn');
      var umumBtn = document.getElementById('umum-btn');

      if (type === 'mahasiswa') {
        mahasiswaContent.style.display = 'block';
        umumContent.style.display = 'none';
        mahasiswaBtn.classList.add('active');
        umumBtn.classList.remove('active');
      } else if (type === 'umum') {
        mahasiswaContent.style.display = 'none';
        umumContent.style.display = 'block';
        mahasiswaBtn.classList.remove('active');
        umumBtn.classList.add('active');
      }
    }
  </script>

</body>
</html>
