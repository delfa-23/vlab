<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VLAB Company</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

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

            <!-- Mobile Button -->
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

    <!-- About Section -->
    <section id="about" class="pt-32 pb-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6 gap-12">
            <!-- Left Image -->
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('assets/images/about.png') }}" alt="Illustration" class="w-80">
            </div>

            <!-- Right Text -->
            <div class="md:w-1/2">
                <h3 class="text-gray-600 font-bold uppercase tracking-wide mb-2">About</h3>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">VLAB COMPANY</h2>
                <p class="text-gray-600 leading-relaxed">
                    VLAB Company adalah perusahaan teknologi yang fokus pada pengembangan website, aplikasi mobile, dan
                    solusi digital modern. Kami hadir untuk membantu bisnis dan organisasi bertransformasi di era
                    digital dengan layanan yang inovatif, berkualitas, dan sesuai kebutuhan.

                    Dengan tim yang berpengalaman, kami menawarkan berbagai layanan mulai dari web & mobile development,
                    IT consulting, hingga UI/UX design. Visi kami adalah menjadi mitra teknologi terpercaya yang
                    mendorong pertumbuhan bisnis klien, sementara misi kami adalah menghadirkan solusi digital yang
                    efektif, fungsional, dan berdaya guna.
                    Bagi VLAB, keberhasilan klien adalah cerminan keberhasilan kami.
                </p>
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
