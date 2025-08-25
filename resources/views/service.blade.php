<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service - VLAB Company</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">


    <!-- Header / Navbar -->
    <header class="bg-gradient-to-r to-[#004A99] from-[#007BFF] fixed w-full z-30 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4 md:px-8 py-3">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/icons/logo.jpg') }}" alt="Logo" class="w-12 h-12 rounded-full shadow-md" />
                <div>
                    <h1 class="text-white font-bold text-lg md:text-xl">VLAB.id</h1>
                    <p class="text-white text-xs md:text-sm">
                        a small company that will always grow
                    </p>
                </div>
            </div>

            <!-- Navbar (Desktop) -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ url('/') }}" class="text-white font-medium relative group">
                    Home
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/about') }}" class="text-white font-medium relative group">
                    About
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/service') }}" class="text-white font-medium relative group">
                    Service
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#portfolio" class="text-white font-medium relative group">
                    Portfolio
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="tel:+62123456789"
                    class="bg-[#0F1CF3] text-white text-sm font-semibold py-2 px-6 rounded-full shadow-md hover:scale-105 transition">
                    Call Us
                </a>
            </nav>
            <button id="menu-btn" class="md:hidden text-white text-3xl">☰</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-500 px-6 py-4">
            <ul class="flex flex-col space-y-4 text-white text-lg font-semibold">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ url('/service') }}" class="hover:underline">Service</a></li>
                <li><a href="#portfolio" class="hover:underline">Portfolio</a></li>
                <li>
                    <a href="tel:+62123456789"
                        class="block bg-[#0F1CF3] text-center py-2 px-4 rounded-full shadow-md hover:scale-105 transition">
                        Call Us
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Services Section -->
    <section class="pt-24 pb-16 container mx-auto px-6">
        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Tingkatkan Brand anda <br />
                dengan layanan kami
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Mengapa anda harus percaya dengan VLAB? Proyek-proyek kami telah
                digunakan di berbagai sektor, mulai dari pendidikan, logistik, retail
                hingga digital. Kami memiliki tim berkompeten, disiplin, dan dapat
                strategi terbaik yang mampu menyelesaikan proyek secara end-to-end
                dalam waktu yang singkat.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-3">Digital Marketing Service</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Tingkatkan penjualan produk
                        digital Anda dengan cepat dan
                        praktis bersama layanan
                        konsultasi kami.

                        Kami bantu Anda menjual
                        e-book, desain, atau software
                        dengan sistem yang efisien dan
                        mudah digunakan.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li>✔️ Jasa Digital marketing - SEO</li>
                        <li>✔️ Jasa menjual dagangan digital</li>
                        <li>✔️ Jasa analisis digital marketing</li>
                    </ul>
                </div>
                <button class="bg-[#0F1CF3] text-white py-2 rounded-lg hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-3">Internet of Things</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Optimalkan solusi IoT Anda
                        dengan layanan kami yang
                        cepat dan praktis. Kami bantu
                        Anda merancang,
                        mengembangkan, dan
                        menerapkan sistem IoT yang
                        efisien sesuai kebutuhan bisnis
                        Anda.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li>✔️ Pembuatan rumah cerdas</li>
                        <li>✔️ Parenting Control</li>
                        <li>✔️ Pour time</li>
                    </ul>
                </div>
                <button class="bg-[#0F1CF3] text-white py-2 rounded-lg hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-3">Website Development</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Bangun website impian Anda
                        dengan cepat dan efisien
                        bersama layanan
                        pengembangan kami. Kami
                        bantu Anda menciptakan
                        tampilan profesional,
                        fungsional, dan responsif sesuai
                        kebutuhan bisnis atau personal
                        Anda.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li>✔️ Jasa web landing</li>
                        <li>✔️ Jasa web company profile</li>
                        <li>✔️ Jasa web E-Commerce</li>
                    </ul>
                </div>
                <button class="bg-[#0F1CF3] text-white py-2 rounded-lg hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-3">Mobile Apps Development</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Wujudkan aplikasi mobile impian
                        Anda dengan layanan
                        pengembangan kami yang
                        cepat dan efisien. Kami bantu
                        Anda menciptakan aplikasi
                        Android dan iOS yang
                        fungsional, menarik, dan sesuai
                        kebutuhan bisnis.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li>✔️ Jasa apps parenting control</li>
                        <li>✔️ Jasa CRUD apps</li>
                        <li>✔️ Jasa apps E-Wallet</li>
                    </ul>
                </div>
                <button class="bg-[#0F1CF3] text-white py-2 rounded-lg hover:scale-105 transition">
                    Order
                </button>
            </div>
        </div>
    </section>

    <!-- Script -->
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        document.querySelectorAll("#mobile-menu a").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
            });
        });
    </script>
</body>

</html>
