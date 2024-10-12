<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <section class="relative text-center py-12 bg-cover">
        <h1 class="text-3xl font-bold text-[#5A72A0]">Akun Saya</h1>
    </section>
    
    <div class="flex justify-center items-center min-h-screen mt-[-2rem]"> <!-- Added negative margin-top -->
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl w-full">
            <div class="flex justify-between">
                <!-- Sidebar -->
                <div class="w-1/4 border-r pr-4">
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <img src="img/1 EDIT PROFIL (1).png" alt="Ganti Password" class="w-4 h-4 mr-2"> 
                            <button class="text-[#5A72A0]" onclick="window.location.href='akun-saya.php'">Edit Profil</button>
                        </li>
                        <li class="flex items-center">
                            <img src="img/2 GANTI PASSWORD.png" alt="Ganti Password" class="w-4 h-4 mr-2"> 
                            <button class="text-[#5A72A0]" onclick="window.location.href='edit-password.php'">Ganti Password</button>
                        </li>
                        <li class="flex items-center">
                            <img src="img/3 DONASI SAYA.png" alt="Donasi Saya" class="w-4 h-4 mr-2"> 
                            <button class="text-[#5A72A0]" onclick="window.location.href='donasi-saya.php'">Donasi Saya</button>
                        </li>
                        <li class="flex items-center">
                            <img src="img/4 PENGGALANGAN DANA SAYA.png" alt="Penggalangan Dana Saya" class="w-4 h-4 mr-2"> 
                            <button class="text-[#5A72A0]" onclick="window.location.href='galang-dana.php'">Galang Dana Saya</button>
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
                
                <script>
                    // Get the logout button
                    const logoutButton = document.getElementById('logoutBtn');
                
                    // Add click event listener to the logout button
                    logoutButton.addEventListener('click', function() {
                        // Show confirmation dialog
                        const confirmation = confirm("Apakah Anda yakin untuk keluar?");
                        
                        // If user confirms logout
                        if (confirmation) {
                            // Show alert for a brief moment before redirecting
                            alert("Anda telah keluar!");
                
                            // Set a delay before redirecting (e.g., 2000 milliseconds = 2 seconds)
                            setTimeout(function() {
                                // Redirect to the logout page or perform logout operation
                                window.location.href = 'index.php'; // Ganti dengan URL yang sesuai
                            }, 2000); // Adjust the time as needed
                        }
                    });
                </script>
                
                

                <!-- Edit Profile Section -->
                <div class="w-3/4 pl-6">
                    <h2 class="text-[#5A72A0] font-semibold mb-4">Edit Profil</h2>
                    <p class="text-[#5A72A0] mb-6">Isilah data profil Anda dengan benar!</p>
                    
                    <div class="flex justify-between">
                        <!-- Form Section -->
                        <div class="w-2/3">
                            <form action="editing.php" method="POST" enctype="multipart/form-data" id="profileForm">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-[#5A72A0]">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                
                                    <div>
                                        <label for="dob" class="block text-sm font-medium text-[#5A72A0]">Tanggal Lahir</label>
                                        <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-[#5A72A0]">Nomor Handphone</label>
                                        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                
                                    <div>
                                        <label for="address" class="block text-sm font-medium text-[#5A72A0]">Alamat</label>
                                        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>" class="mt-1 block w-full px-3 py-2 border border-[#5A72A0] rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                
                        <!-- Gender Section -->
                        <div class="col-span-2">
                            <span class="text-sm font-medium text-[#5A72A0]">Jenis Kelamin</span>
                            <div class="mt-1 flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="Laki-Laki" <?php if(isset($gender) && $gender == 'Laki-Laki') echo 'checked'; ?> class="form-radio text-[#5A72A0]">
                                    <span class="ml-2">Laki-Laki</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="Perempuan" <?php if(isset($gender) && $gender == 'Perempuan') echo 'checked'; ?> class="form-radio text-[#5A72A0]">
                                    <span class="ml-2">Perempuan</span>
                                </label>
                            </div>
                            </div>
                
                                    <!-- Upload KTP Section -->
                                    <div class="col-span-2">
                                        <label class="block text-sm font-medium text-[#5A72A0]">Upload KTP</label>
                                        <div class="mt-1 flex items-center justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v24a4 4 0 004 4h24a4 4 0 004-4V20L28 8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-[#5A72A0]">
                                                    <label for="ktp-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-[#5A72A0] hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 flex items-center justify-center h-12 px-10">
                                                        <span>Upload Foto KTP!</span>
                                                        <input id="ktp-upload" name="ktp-upload" type="file" class="sr-only">
                                                    </label>                                                    
                                                </div>
                                                <p class=" text-center text-[#5A72A0]">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="flex justify-end mt-4">
                                    <button type="submit" id="saveChangesBtn" class="px-4 py-2 bg-[#FEF9D9] text-[#5A72A0] rounded-md hover:bg-yellow-100 border border-[#5A72A0] flex-1">Simpan Perubahan</button>
                                </div>
                            </form>
                
                            <!-- Display updated information -->
                            <div id="result" class="mt-6"></div>
                        </div>
                
                        <!-- Profile Image Section -->
                        <div class="flex flex-col items-center">
                            <img id="profileImage" src="img/profile.png" alt="Foto Profil" class="rounded-full w-24 h-24 object-cover mb-4">
                            
                            <input type="file" id="profile_image" name="profile_image" accept="image/*" class="hidden">
                            
                            <button id="editProfileBtn" class="px-3 py-1 bg-[#FEF9D9] text-[#5A72A0] text-sm font-medium rounded-md hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#5A72A0]">
                                Edit Profil
                            </button>
                        </div>
                        
                        <script>
                            // Get the elements
                            const editProfileBtn = document.getElementById('editProfileBtn');
                            const profileUpload = document.getElementById('profile_image');
                            const profileImage = document.getElementById('profileImage');
                        
                            // Add click event to the Edit Profil button
                            editProfileBtn.addEventListener('click', function() {
                                profileUpload.click(); // Trigger the file input click
                            });
                        
                            // Add change event to the file input
                            profileUpload.addEventListener('change', function(event) {
                                const profileImageFile = event.target.files[0]; // Get the selected file
                                if (profileImageFile) {
                                    const reader = new FileReader(); // Create a FileReader
                                    reader.onload = function(e) {
                                        profileImage.src = e.target.result; // Set the new image as the profile image
                                    };
                                    reader.readAsDataURL(profileImageFile); // Read the file as a data URL

                                }
                            });
                        </script>
                        
                    </div>
                </div>
                
                <script>
                    // Function to initialize the form with empty values
                    function initializeForm() {
                        document.getElementById('name').value = '';
                        document.getElementById('dob').value = '';
                        document.getElementById('phone').value = '';
                        document.getElementById('address').value = '';
                        
                        // Resetting gender options
                        const genderInputs = document.querySelectorAll('input[name="gender"]');
                        genderInputs.forEach(input => {
                            input.checked = false; // Uncheck all gender radio buttons
                        });
                        genderInputs[1].checked = true; // Default to 'Perempuan'
                    }
                
                    // Handle KTP upload
                    document.getElementById('ktp-upload').addEventListener('change', function(event) {
                        const fileName = event.target.files[0] ? event.target.files[0].name : 'No file chosen';
                        alert(`KTP Uploaded: ${fileName}`);
                    });
                
                    // Handle form submission
                    document.querySelector('#profileForm').addEventListener('submit', function(event) {
                        
                
                        // Get form values
                        const name = document.getElementById('name').value;
                        const dob = document.getElementById('dob').value;
                        const phone = document.getElementById('phone').value;
                        const address = document.getElementById('address').value;
                        const gender = document.querySelector('input[name="gender"]:checked')?.value;
                
                        // Validation: Check if any field is empty
                        if (!name || !dob || !phone || !address || !gender || !ktp-upload) {
                            alert("Semua field harus diisi!");
                            return; // Exit the function if any field is empty
                        }
                
                        // Display the values on the page
                        const resultDiv = document.getElementById('result');
                        resultDiv.innerHTML = `
                            <h3 class="font-semibold">Informasi Profil:</h3>
                            <p>Nama: ${name}</p>
                            <p>Tanggal Lahir: ${dob}</p>
                            <p>Nomor Handphone: ${phone}</p>
                            <p>Alamat: ${address}</p>
                            <p>Jenis Kelamin: ${gender}</p>
                        `;
                
                        // Optional: Clear form after submission
                        // initializeForm();
                    });
                
                    // Run the initialization function on page load
                    window.onload = initializeForm;
                </script>
                
            </div>
        </div>
    </div>

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
                <p class="text-sm text-gray-500">&copy; 2024 Gerak Aksi UNESA | All Rights Reserved | <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a> | <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    </body>
</html>

