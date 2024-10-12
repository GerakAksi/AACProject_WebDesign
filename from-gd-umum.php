<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerak Aksi - Galang Dana Mahasiswa</title>
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
<section class="custom-bg py-6 text-center text-[#5A72A0] space-x-">
    <h2 class="text-3xl font-bold mb-0">#GerakAksi<br>Galang Dana Mahasiswa</h2>
    <img src="img/FOTO GALANG DANA MAHASISWA.png" alt="Illustration" width="170" height="170" class="mx-auto mb-0">
    <p class="text-xm mb-0 px-8 text-[#5A72A0]">Program <strong>Galang Dana Mahasiswa</strong> ditujukan untuk membantu mahasiswa<br>yang membutuhkan dukungan dana dalam berbagai situasi (Biaya<br>Pendidikan, Kebutuhan Perkuliahan, atau keperluan mendesak lainnya)<br>Program ini memberi kesempatan bagi mahasiswa untuk mendapatkan<br>bantuan langsung dari masyarakat dengan transparasi penuh</p>
  </section>

  <!-- Form Section -->
  <section class="p-10 max-w-4xl mx-auto mt-4">
    <h3 class="text-2xl font-semibold mb-6 text-[#5A72A0] text-center">Form Pengajuan Galang Dana Mahasiswa</h3>
   <!-- Mulai Form -->
   <form action="submit-gd-umum.php" method="POST" enctype="multipart/form-data">
    <!-- Question 1 -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
        <label class="block mb-2 text-[#5A72A0] font-semibold">1. Siapa yang Membutuhkan Dukungan Dana?</label>
        <div class="flex flex-col space-y-4 ml-6"> <!-- Menambahkan margin kiri (ml-6) -->
          <label class="flex items-center">
            <input type="radio" name="siapa" class="form-radio text-[#5A72A0]" value="saya-sendiri" aria-label="Saya sendiri">
            <span class="ml-2 text-[#5A72A0] text-xm">Saya sendiri</span>
          </label>
          <label class="flex items-center">
            <input type="radio" name="siapa" class="form-radio text-[#5A72A0]" value="orang-lain">
            <span class="ml-2 text-[#5A72A0] text-xm">Orang lain</span>
          </label>
        </div>
      </div>
      
      
    <!-- Email Input -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="email" class="block mb-2 text-[#5A72A0] font-semibold">2. Masukkan Email Anda</label>
      <p class="text-xs text-[#5A72A0] ml-4">Seluruh Notifikasi akan dikirim melalui email ini</p>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-16 w-full max-w-4xl">
          <input 
            type="email"
            name="email" 
            id="email" 
            placeholder="Masukkan Email Anda" 
            class="w-full h-full px-4 py-2 border-none rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm"
            required 
          >
        </div>
      </div>
      <p id="errorMsg" class="text-red-500 text-xs mt-2 hidden"></p> <!-- Pesan error -->
    </div>
    
    <script>
      document.getElementById('submitBtn').addEventListener('click', function() {
        const emailInput = document.getElementById('email');
        const errorMsg = document.getElementById('errorMsg');
        
        // Menghapus pesan error sebelumnya
        errorMsg.classList.add('hidden');
    
        const email = emailInput.value;
    
        // Validasi email
        if (!email.includes('@')) {
          errorMsg.textContent = 'Email tidak valid. Harap masukkan alamat email yang benar.';
          errorMsg.classList.remove('hidden');
          return;
        }
    
        // Simpan email ke backend
        fetch('/api/save-email', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ email: email }),
        })
        .then(response => {
          if (response.ok) {
            // Tindakan setelah berhasil menyimpan email
            alert('Email berhasil disimpan!');
            emailInput.value = ''; // Reset input email setelah berhasil
          } else {
            // Menangani kesalahan
            errorMsg.textContent = 'Gagal menyimpan email. Silakan coba lagi.';
            errorMsg.classList.remove('hidden');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          errorMsg.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
          errorMsg.classList.remove('hidden');
        });
      });
    </script>
   

    <!-- File Upload -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label class="block mb-2 text-[#5A72A0] font-semibold">3. Upload Dokumen Pendukung</label>
      <p class="text-xs text-[#5A72A0] ml-4">Dokumen pendukung seperti Kartu tanda Mahasiswa Universitas Negeri Surabaya (E-KTM UNESA), Surat keterangan dari Fakultas, atau bukti kebutuhan dana lainnya.</p>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-24 w-full max-w-4xl"> <!-- Menambahkan height dan width -->
          <input type="file" id="upload" name="dokumen_pendukung" class="hidden" onchange="handleFileUpload()"> <!-- Memicu perubahan ketika file dipilih -->
          <label for="upload" id="uploadLabel" class="bg-white text-xs text-[#5A72A0] rounded-md px-4 py-2 cursor-pointer flex items-center justify-center w-full h-full"> <!-- Memastikan teks tetap kecil -->
            Upload Dokumen
          </label>
        </div>
      </div>
    </div>  
    
    <script>
      function handleFileUpload() {
        const fileInput = document.getElementById('upload');
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Tidak ada file yang dipilih';
        document.getElementById('uploadLabel').textContent = fileName; // Mengubah teks label menjadi nama file
      }
    </script>
    
    


    <!-- Tujuan Penggalangan Dana -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label class="block mb-2 text-[#5A72A0] font-semibold">4. Tujuan Penggalangan Dana</label>
      <div class="flex flex-col space-y-4 ml-6">
        <label class="flex items-center">
          <input type="radio" name="tujuan" class="form-radio text-blue-600">
          <span class="ml-2 text-[#5A72A0] text-xm">Kegiatan Sosial</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="tujuan" class="form-radio text-blue-600">
          <span class="ml-2 text-[#5A72A0] text-xm">Lingkungan</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="tujuan" class="form-radio text-blue-600">
          <span class="ml-2 text-[#5A72A0] text-xm">Hewan</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="tujuan" class="form-radio text-blue-600">
          <span class="ml-2 text-[#5A72A0] text-xm">Kemanusiaan</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="durasi" class="form-radio text-blue-600" value="other" onclick="toggleInput()">
          <span class="ml-2 text-[#5A72A0] text-sm">Lainnya</span>
        </label>
        <input 
          type="text" 
          id="customDuration"
          name="tujuan_lain" 
          placeholder="Masukan tema/kategori Galang Dana" 
          class="w-full h-full px-4 py-2 border border-[#5A72A0] rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm" 
          disabled 
        >
      </div>
    </div>

    <!-- Perkiraan Biaya -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="biaya" class="block mb-2 text-[#5A72A0] font-semibold">5. Tentukan Perkiraan Biaya Galang Dana</label>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-16 w-full max-w-4xl">
          <input 
            type="text" 
            id="biaya"
            name="pekiraan_biaya" 
            placeholder="Masukkan perkiraan biaya galang dana" 
            class="w-full h-full px-4 py-2 border-none rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm" 
            oninput="onlyNumbers(event)" <!-- Menambahkan oninput untuk memanggil fungsi -->

        </div>
      </div>
    </div>
    
    <script>
      function onlyNumbers(event) {
        // Mengambil nilai dari input
        const value = event.target.value;
    
        // Menggunakan regex untuk hanya mengambil angka
        const numericValue = value.replace(/[^0-9]/g, '');
    
        // Memperbarui nilai input hanya dengan angka
        event.target.value = numericValue;
      }
    </script>
    
    

    <!-- Masa Penggalangan Dana -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label class="block mb-2 text-[#5A72A0] font-semibold">6. Tentukan Masa Penggalangan Dana</label>
      <div class="flex flex-col space-y-2 ml-6">
        <label class="flex items-center">
          <input type="radio" name="masa" class="form-radio text-blue-600" value="30" onclick="toggleInput()">
          <span class="ml-2 text-[#5A72A0] text-sm">30 hari</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="masa" class="form-radio text-blue-600" value="60" onclick="toggleInput()">
          <span class="ml-2 text-[#5A72A0] text-sm">60 hari</span>
        </label>
        <label class="flex items-center">
          <input type="radio" name="masa" class="form-radio text-blue-600" value="other" onclick="toggleInput()">
          <span class="ml-2 text-[#5A72A0] text-sm">Lainnya</span>
        </label>
        <input 
          type="text" 
          id="customDuration"
          name="masa_lain" 
          placeholder="Masukkan jumlah hari atau rentang tanggal" 
          class="w-full h-full px-4 py-2 border border-[#5A72A0] rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm" 
          disabled 
        >
      </div>
    </div>
    
    <script>
      function toggleInput() {
        // Mengambil elemen input untuk durasi khusus
        const customInput = document.getElementById('customDuration');
    
        // Mendapatkan semua radio button dengan nama 'durasi'
        const radios = document.getElementsByName('durasi');
    
        // Memeriksa apakah radio button "Lainnya" terpilih
        let isOtherSelected = false;
        for (const radio of radios) {
          if (radio.value === "other" && radio.checked) {
            isOtherSelected = true;
            break;
          }
        }
    
        // Mengaktifkan atau menonaktifkan input berdasarkan pilihan
        customInput.disabled = !isOtherSelected;
      }
    </script>
    

    <!-- Judul Galang Dana -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="judul" class="block mb-2 text-[#5A72A0] font-semibold">7. Beri Judul untuk Galang Dana Ini</label>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-16 w-full max-w-4xl">
          <input 
            type="text" 
            id="judul"
            name="judul" 
            placeholder="Contoh: Sambutkan Luna, Korban Tabrak Lari hingga Patah Tulang" 
            class="w-full h-full px-4 py-2 border-none rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm" 
          >
        </div>
      </div>
    </div>
    

    <!-- Upload Foto -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="foto" class="block mb-2 text-[#5A72A0] font-semibold">8. Upload Foto untuk Cover Galang Dana</label>
      <p class="text-xs text-[#5A72A0] ml-4">Pilih foto yang menggambarkan situasi/kebutuhan untuk galang dana ini.</p>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-24 w-full max-w-4xl">
          <input type="file" name="foto_cover" id="foto" class="hidden" onchange="handleFileUpload()"> <!-- Memicu perubahan ketika file dipilih -->
          <label for="foto" id="fotolabel" class="bg-white text-xs text-[#5A72A0] rounded-md px-4 py-2 cursor-pointer flex items-center justify-center w-full h-full">
            Upload Foto
          </label>
        </div>
      </div>
    </div>

    <script>
      function handleFileUpload() {
        const fileInput = document.getElementById('foto');
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Tidak ada file yang dipilih';
        document.getElementById('fotolabel').textContent = fileName; // Mengubah teks label menjadi nama file
      }
    </script>
    

    <!-- Detail Kondisi Galang Dana -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="detail" class="block mb-2 text-[#5A72A0] font-semibold">9. Ceritakan secara Detail tentang Kondisi Galang Dana Ini</label>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-24 w-full max-w-4xl"> <!-- Menambahkan height dan width -->
          <textarea id="detail" name="detail" placeholder="Jelaskan tujuan, alasan, dan hal lainnya yang menggambarkan kondisi galang dana ini" 
            class="w-full h-full px-4 py-2 border-none rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm"></textarea>
        </div>
      </div>
    </div>
    

    <!-- Rincian Dana -->
    <div class="mb-6 bg-[#FEF9D9] p-4 rounded-md">
      <label for="rincian" class="block mb-2 text-[#5A72A0] font-semibold">10. Jelaskan & Kategorikan Rincian Galang Dana</label>
      <div class="ml-4">
        <div class="flex justify-center bg-white border border-[#5A72A0] rounded-md h-32 w-full max-w-4xl"> <!-- Menyesuaikan tinggi dan lebar -->
          <textarea id="rincian" name="rincian" placeholder="Contoh: Luna, korban patah tulang harus dibawa ke rumah sakit untuk menjalankan pemeriksaan & operasi. Biaya pengobatan yang diperlukan diantaranya: Jasa Periksa Dokter: Rp 1.500.000" class="w-full h-full px-4 py-2 border-none rounded-md text-[#5A72A0] placeholder:text-xs focus:outline-none focus:ring-0 focus:border-transparent text-sm"></textarea>
        </div>
      </div>
    </div>
    

    <!-- Submit Button -->
    <div class="text-center">
      <button id="submitButton" class="bg-[#FEF9D9] hover:bg-yellow-100 text-[#5A72A0] font-bold py-2 px-4 rounded-full w-full max-w-4xl">Submit</button>
    </div>
    
    <script>
      document.getElementById('submitButton').addEventListener('click', function() {
        // Simulasi pengambilan data dari form
        const data = {
          // Contoh data, sesuaikan dengan data yang ingin dikirim
          email: document.getElementById('email').value,
          biaya: document.getElementById('biaya').value,
          judul: document.getElementById('judul').value,
          rincian: document.getElementById('rincian').value,
          // Tambahkan data lain sesuai kebutuhan
        };
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
                    <h4 class="text-[#5A72A0] font-bold mb-4">Menu</h4>
                    <ul>
                        <li><a href="home-page,php" class="text-[#5A72A0] hover:text-gray-900">Home</a></li>
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

