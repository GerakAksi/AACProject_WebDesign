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

    <!-- Main Section -->
    <section class="relative text-center py-6 bg-cover bg-center-bottom">
        <div class="relative z-10">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-[#5A72A0]">#GerakAksi</h2>
                <p class="text-2xl font-semibold text-[#5A72A0] mt-2">Donasi Saya</p>

                <div class="flex justify-center space-x-8 mt-8">
                    <button id="selectDonation" class="flex items-center space-x-2 px-6 py-3 bg-white text-red-500 rounded-full font-semibold hover:bg-[#FEF9D9]">
                        <img src="img/LOGO DONASI.png" alt="Icon Donasi" class="h-8 w-8">
                        <span>3 Kali Donasi</span>
                    </button>
                    <button id="selectVolunTrip" class="flex items-center space-x-2 px-6 py-3 bg-white text-[#5A72A0] rounded-full font-semibold hover:bg-[#FEF9D9]">
                        <img src="img/LOGO VOLUNTRIP.png" alt="Icon VolunTrip" class="h-8 w-8">
                        <span>3 Kali VolunTrip</span>
                    </button>
                </div>
                
                
                

                <!-- Calendar -->
                <div class="mt-12 inline-block bg-yellow-100 rounded-lg p-6">
                    <div class="flex justify-between mb-4">
                        <button id="prevMonth" class="text-[#5A72A0]">&lt;</button>
                        <h3 id="monthYear" class="text-xl font-bold text-[#5A72A0]"></h3>
                        <button id="nextMonth" class="text-[#5A72A0]">&gt;</button>
                    </div>
                    <table id="calendarTable" class="w-full text-center">
                        <thead>
                            <tr>
                                <th class="p-2 text-[#5A72A0]">Minggu</th>
                                <th class="p-2 text-[#5A72A0]">Senin</th>
                                <th class="p-2 text-[#5A72A0]">Selasa</th>
                                <th class="p-2 text-[#5A72A0]">Rabu</th>
                                <th class="p-2 text-[#5A72A0]">Kamis</th>
                                <th class="p-2 text-[#5A72A0]">Jumat</th>
                                <th class="p-2 text-[#5A72A0]">Sabtu</th>
                            </tr>
                        </thead>                        
                        <tbody id="calendarBody">
                            <!-- Tanggal akan diisi otomatis dengan JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Footer Top - Logo and Links -->
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <!-- Left Section (Logo and Social Media) -->
                <div class="text-center lg:text-left mb-8 lg:mb-0">
                    <div class="flex items-center">
                        <img src="img/LOGO UTAMA.png" alt="Gerak Aksi Logo" class="h-16 mb-4 mr-4"> <!-- Placeholder logo -->
                        <div>
                            <div class="text-2xl font-bold text-[#5A72A0]">Gerak Aksi</div>
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
                            <img src="img/Facebook.png" alt="facebook logo" class="h-8"> <!-- Placeholder social icon -->
                        </a>
                        <a href="https://x.com/gerakaksi_unesa?t=ji-qPua7n3xWLxf3KN-usA&s=09" target="_blank">
                            <img src="img/Twitter.png" alt="Twitter logo" class="h-8"> <!-- Placeholder social icon -->
                        </a>
                        <a href="https://www.instagram.com/gerakaksi_unesa?igsh=MTB6czU4YndjNDA1MA==" target="_blank">
                            <img src="img/Instagram.png" alt="Instagram logo" class="h-8"> <!-- Placeholder social icon -->
                        </a>
                        <a href="http://www.linkedin.com/in/gerakaksiunesa" target="_blank">
                            <img src="img/LinkedIn.png" alt="LinkedIn logo" class="h-8"> <!-- Placeholder social icon -->
                        </a>
                        <a href="https://youtube.com/@gerakaksiunesa?si=k86eE8xfQMGZwJcB" target="_blank">
                            <img src="img/YouTube.png" alt="Youtube logo" class="h-8"> <!-- Placeholder social icon -->
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

    <script>
        // kalender.js
        
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        let today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();
        
        const monthYear = document.getElementById("monthYear");
        const calendarBody = document.getElementById("calendarBody");
        
        // Dummy data from backend (this should ideally come from an API)
        const donationDates = [5, 7, 9]; // Example dates for donation (red)
        const voluntripDates = [2, 4, 8]; // Example dates for voluntrip (blue)
        
        function generateCalendar(month, year) {
            calendarBody.innerHTML = "";
            const firstDay = (new Date(year, month)).getDay();
            const daysInMonth = 32 - new Date(year, month, 32).getDate();
        
            let date = 1;
            for (let i = 0; i < 6; i++) { // 6 weeks (maximum display)
                let row = document.createElement("tr");
        
                for (let j = 0; j < 7; j++) {
                    let cell = document.createElement("td");
                    if (i === 0 && j < firstDay) {
                        cell.innerHTML = "";
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        cell.innerHTML = date;
        
                        // Highlight today's date
                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                            cell.classList.add("bg-green-500", "text-white", "rounded");
                        }
        
                        // Highlight donation dates
                        if (donationDates.includes(date)) {
                            cell.classList.add("bg-red-500", "text-white", "rounded");
                        }
        
                        // Highlight voluntrip dates
                        if (voluntripDates.includes(date)) {
                            cell.classList.add("bg-blue-500", "text-white", "rounded");
                        }
        
                        row.appendChild(cell);
                        date++;
                    }
                }
                calendarBody.appendChild(row);
            }
            monthYear.innerHTML = monthNames[month] + " " + year;
        }
        
        // Event listeners for selection buttons
        document.getElementById("selectDonation").addEventListener("click", function() {
            const selected = donationDates.filter(date => date <= 31); // Adjust if needed
            if (selected.length > 0) {
                alert("Tanggal Donasi yang tersimpan: " + selected.join(", "));
            } else {
                alert("Tidak ada tanggal Donasi pada bulan ini.");
            }
        });
        
        document.getElementById("selectVolunTrip").addEventListener("click", function() {
            const selected = voluntripDates.filter(date => date <= 31); // Adjust if needed
            if (selected.length > 0) {
                alert("Tanggal VolunTrip yang tersimpan: " + selected.join(", "));
            } else {
                alert("Tidak ada tanggal VolunTrip pada bulan ini.");
            }
        });
        
        // Previous and Next Month Buttons
        document.getElementById("prevMonth").addEventListener("click", function() {
            currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
            generateCalendar(currentMonth, currentYear);
        });
        
        document.getElementById("nextMonth").addEventListener("click", function() {
            currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
            currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
            generateCalendar(currentMonth, currentYear);
        });
        
        // Initialize the calendar
        generateCalendar(currentMonth, currentYear);
        
        </script>
        
</body>
</html>
