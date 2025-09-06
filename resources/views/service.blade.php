<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service - VLAB Company</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/logo.jpg') }}" class="rounded-full">
    <style>
        /* Animasi hover card 3D */
        .tilt {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tilt:hover {
            transform: rotate3d(1, 1, 0, 12deg) scale(1.03);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        /* Mobile menu animasi */
        #mobile-menu {
            transform: translateY(-100%);
            transition: transform 0.4s ease-in-out;
        }

        #mobile-menu.active {
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">


    <!-- Header / Navbar -->
    <header class="bg-gradient-to-r to-[#004A99] from-[#007BFF] fixed w-full z-30 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4 md:px-8 py-3">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/icons/logo.jpg') }}" alt="Logo"
                    class="w-12 h-12 rounded-full shadow-md" />
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
                <a href="{{ url('/portfolio') }}" class="text-white font-medium relative group">
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
    <section class="pt-28 pb-16 container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Tingkatkan Brand anda <br /> dengan layanan kami
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Mengapa anda harus percaya dengan VLAB? Proyek-proyek kami telah digunakan di berbagai sektor,
                mulai dari pendidikan, logistik, retail hingga digital. Kami memiliki tim berkompeten, disiplin,
                dan strategi terbaik untuk menyelesaikan proyek secara end-to-end dalam waktu singkat.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card -->
            <div
                class="service-card bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Digital Marketing Service</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Tingkatkan penjualan produk digital Anda dengan cepat dan praktis bersama layanan kami.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li>✔️ Jasa Digital marketing - SEO</li>
                        <li>✔️ Jasa menjual dagangan digital</li>
                        <li>✔️ Jasa analisis digital marketing</li>
                    </ul>
                </div>
                <button
                    class="bg-gradient-to-r from-blue-600 to-cyan-400 text-white py-2 rounded-lg font-semibold shadow hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 2 -->
            <div
                class="service-card bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Internet of Things</h3>
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
                <button
                    class="bg-gradient-to-r from-blue-600 to-cyan-400 text-white py-2 rounded-lg font-semibold shadow hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 3 -->
            <div
                class="service-card bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Website Development</h3>
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
                <button
                    class="bg-gradient-to-r from-blue-600 to-cyan-400 text-white py-2 rounded-lg font-semibold shadow hover:scale-105 transition">
                    Order
                </button>
            </div>

            <!-- Card 4 -->
            <div
                class="service-card bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Mobile Apps Development</h3>
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
                <button
                    class="bg-gradient-to-r from-blue-600 to-cyan-400 text-white py-2 rounded-lg font-semibold shadow hover:scale-105 transition">
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

        // Efek tilt 3D pakai mouse
        document.querySelectorAll(".service-card").forEach(card => {
            card.addEventListener("mousemove", e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = ((y - centerY) / centerY) * 20;
                const rotateY = ((x - centerX) / centerX) * -20;
                card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
            });
            card.addEventListener("mouseleave", () => {
                card.style.transform = "rotateX(0) rotateY(0) scale(1)";
            });
        });

        // Animasi fade-in saat scroll
        const cards = document.querySelectorAll(".service-card");
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    entry.target.classList.remove("opacity-0", "translate-y-6");
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => {
            card.classList.add("opacity-0", "translate-y-6", "transition-all", "duration-700");
            observer.observe(card);
        });
    </script>
</body>

</html>
