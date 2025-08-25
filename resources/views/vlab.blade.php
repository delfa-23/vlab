<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vlab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background: #007bff;
            border-radius: 4px;
        }

        .scrollbar::-webkit-scrollbar-thumb:hover {
            background: #0056b3;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        html {
            scroll-behavior: smooth;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }

        .marquee:hover {
            animation-play-state: paused;
        }

        .scroll-box::-webkit-scrollbar {
            width: 6px;
        }

        .scroll-box::-webkit-scrollbar-thumb {
            background-color: #60a5fa;
            border-radius: 9999px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: #60a5fa #f1f5f9;
            /* thumb color track color */
        }

        /* Chrome, Edge, and Safari */
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            /* slate-100 */
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #60a5fa;
            /* blue-400 */
            border-radius: 10px;
            border: 2px solid #f1f5f9;
            /* slate-100 */
        }

        .scroll-text::-webkit-scrollbar-thumb {
            background-color: #d1d5db;
            border-radius: 9999px;
        }

        .scroll-text {
            max-height: 150px;
            /* teks di desktop bisa discroll */
            overflow-y: auto;
        }

        /* Di HP teks full, foto otomatis pindah ke atas */
        @media (max-width: 768px) {
            .scroll-text {
                max-height: none !important;
                overflow-y: visible !important;
            }
        }
    </style>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ["Poppins", "sans-serif"],
                        lato: ["Lato", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>

<body class="font-poppins">
    <!-- HEADER -->
    <header class="bg-gradient-to-r from-[#004A99] to-[#007BFF] fixed w-full z-30 shadow-lg">
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

    <!-- HERO -->
    <section class="pt-40 lg:pt-48 pb-20 relative">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center gap-12 px-6 md:px-12">
            <!-- Text -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-4xl lg:text-5xl font-bold text-black leading-snug">
                    Web & Mobile Solutions<br />
                    <span class="text-black">Engineered to Perform</span>
                </h2>
                <p class="text-xl mt-4 mb-8 font-semibold">
                    Design. Develop. Deliver.
                </p>
                <a href="#"
                    class="inline-flex items-center gap-3 bg-[#128C7E] text-white font-lato py-4 px-8 rounded-xl shadow-lg transform duration-300 hover:scale-105 hover:bg-[#19ad9c]">
                    <img src="{{ asset('assets/icons/Vector.svg') }}" alt="WhatsApp" class="w-5 h-5" />
                    Apa lagi yang ditunggu? pesan sekarang!
                </a>
            </div>

            <!-- Image -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <img id="animatedImage" src="{{ asset('assets/images/home.jpg') }}" alt="User Designing"
                    class="rounded-lg max-w-full h-auto" />
            </div>
        </div>
    </section>

    <!-- BANNER -->
    <section class="bg-gradient-to-r from-[#007BFF] to-[#004A99] py-10">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-white text-xl md:text-2xl font-semibold leading-relaxed">
                Transformasikan bisnis Anda di era digital bersama
                <span class="font-bold text-[#1C58F7]">vlab.id</span><br />
                partner terpercaya untuk pembuatan aplikasi dan website.
            </h2>
        </div>
    </section>

    <section id="services" class="relative py-16 overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid gap-12">

                <!-- Digital Marketing -->
                <div class="flex flex-col md:flex-row items-center gap-8 transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/images/marketing.png') }}" alt="Digital Marketing"
                        class="w-40 h-40 object-contain mx-auto md:mx-0 transform hover:scale-105 duration-300" />
                    <div>
                        <h3 class="text-xl font-bold text-black mb-3">Digital Marketing</h3>
                        <p class="text-black leading-relaxed text-sm md:text-base">
                            Strategi pemasaran digital yang tepat dapat meningkatkan penjualan sekaligus membangun citra
                            merek yang kuat.
                            Dengan memanfaatkan media sosial, SEO, iklan berbayar, dan konten berkualitas, bisnis dapat
                            menjangkau audiens luas,
                            memperkuat kepercayaan pelanggan, serta mendorong pertumbuhan jangka panjang.
                        </p>
                    </div>
                </div>

                <!-- Internet of Things (IoT) -->
                <div
                    class="flex flex-col md:flex-row-reverse items-center gap-8 transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/images/ai.png') }}" alt="IoT"
                        class="w-40 h-40 object-contain mx-auto md:mx-0 transform hover:scale-105 duration-300" />
                    <div>
                        <h3 class="text-xl font-bold text-black mb-3">Internet of Things (IoT)</h3>
                        <p class="text-black leading-relaxed text-sm md:text-base">
                            IoT (Internet of Things) membantu menghubungkan berbagai perangkat dan sistem melalui
                            internet,
                            sehingga memungkinkan pemantauan, pengendalian, dan pertukaran data secara real-time.
                            Dengan teknologi ini, bisnis dapat meningkatkan efisiensi, otomatisasi, dan pengambilan
                            keputusan berbasis data.
                        </p>
                    </div>
                </div>

                <!-- Apps Mobile -->
                <div class="flex flex-col md:flex-row items-center gap-8 transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/images/app.png') }}" alt="Apps Mobile"
                        class="w-40 h-40 object-contain mx-auto md:mx-0 transform hover:scale-105 duration-300" />
                    <div>
                        <h3 class="text-xl font-bold text-black mb-3">Apps Mobile</h3>
                        <p class="text-black leading-relaxed text-sm md:text-base">
                            App mobile development membantu menciptakan aplikasi yang responsif, cepat, dan mudah
                            digunakan di berbagai perangkat.
                            Dengan desain antarmuka yang intuitif dan pengalaman pengguna optimal, pelanggan dapat
                            mengakses layanan kapan saja
                            dan di mana saja, sehingga meningkatkan kenyamanan, loyalitas, dan kepuasan mereka.
                        </p>
                    </div>
                </div>

                <!-- Website Development -->
                <div
                    class="flex flex-col md:flex-row-reverse items-center gap-8 transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/images/web.png') }}" alt="Website Development"
                        class="w-40 h-40 object-contain mx-auto md:mx-0 transform hover:scale-105 duration-300" />
                    <div>
                        <h3 class="text-xl font-bold text-black mb-3">Website Development</h3>
                        <p class="text-black leading-relaxed text-sm md:text-base">
                            Desain responsif memastikan website tetap nyaman diakses di berbagai perangkat, baik
                            smartphone, tablet, maupun komputer.
                            Dengan tampilan yang menyesuaikan secara otomatis, perusahaan dapat mendapatkan pengalaman
                            optimal dan brand terlihat profesional.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="portfolio" class="relative py-16">


        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <!-- Header Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Galeri
                </h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <!-- Gallery Container -->
            <div class="relative">
                <!-- Scrollable Gallery -->
                <div id="gallery" class="overflow-x-auto scrollbar pb-8 scroll-smooth">
                    <div class="flex space-x-6 min-w-max">
                        <!-- Gallery Item 1 -->
                        <div class="flex-shrink-0 w-80 ">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img src="{{ asset('assets/images/woho.png') }}" alt="Team Photo 1"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>

                        <!-- Gallery Item 2 -->
                        <div class="flex-shrink-0 w-80">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300  ">
                                <img src="{{ asset('assets/images/woho.png') }}" alt="Team Photo 2"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>

                        <!-- Gallery Item 3 -->
                        <div class="flex-shrink-0 w-80">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img src="{{ asset('assets/images/wehe.jpg') }}" alt="Team Photo 3"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>

                        <!-- Gallery Item 4 -->
                        <div class="flex-shrink-0 w-80">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img src="{{ asset('assets/images/woho.png') }}" alt="Team Photo 4"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>

                        <!-- Gallery Item 5 -->
                        <div class="flex-shrink-0 w-80">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img src="{{ asset('assets/images/wehe.jpg') }}" alt="Team Photo 5"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>

                        <!-- Gallery Item 6 -->
                        <div class="flex-shrink-0 w-80">
                            <div
                                class="bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img src="{{ asset('assets/images/wehe.jpg') }}" alt="Team Photo 6"
                                    class="w-full h-auto object-cover transform hover:scale-105 duration-300 hover:shadow-lg" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scroll Controls -->
                <div class="flex justify-between items-center mt-6 ">
                    <button id="scroll-left"
                        class="bg-blue-600 text-white p-2 hidden lg:block rounded-full hover:bg-blue-700 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class=" space-x-2 hidden lg:flex">
                        <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    </div>
                    <button id="scroll-right"
                        class="bg-blue-600 text-white p-2 hidden lg:block rounded-full hover:bg-blue-700 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gradient-to-r from-[#007BFF] via-[#004A99] to-[#004A99] py-10">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-white text-xl md:text-2xl font-semibold leading-relaxed">
                Ingin punya aplikasi mobile atau website yang memukau?
                <br />
                Percayakan pada VLab, partner teknologi terpercaya Anda."
            </h2>
        </div>
    </section>
    <section class="max-w-6xl mx-auto px-4">
        <div class="container mx-auto px-4 py-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Our Team
                </h2>
                <div class="w-32 h-1 bg-blue-600 mx-auto rounded-full mb-2"></div>
                <p class="text-gray-600 text-sm md:text-base">
                    Meet our talented team members
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card 1 - Syelly -->
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50  border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/muhammad.png') }}" alt="Syelly"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-[#0900FF] font-bold text-xl">Muhammad</h2>
                        <p class="text-[#0800FF] text-sm mb-3 font-extralight font-poppins">social media Specialist</p>
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p class="mb-2">
                                Sebagai Social Media Specialist, saya merancang strategi konten kreatif untuk
                                meningkatkan engagement dan brand awareness. Terampil mengelola berbagai platform media
                                sosial, menganalisis performa, serta beradaptasi dengan tren digital terbaru. Fokus saya
                                adalah menciptakan konten yang relevan dan menarik bagi target audiens, serta
                                menghadirkan ide segar demi pertumbuhan brand.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Muhammad -->
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tl from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/isa.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top" />
                    </div>
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-[#0900FF] font-bold text-xl">Muhammad Isa Daud</h2>
                        <p class="text-[#0800FF] text-sm mb-3">Social Media Specialist</p>
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Sebagai Social Media Specialist, saya bertanggung jawab mengelola, mengembangkan, dan
                                mengoptimalkan konten di berbagai platform media sosial untuk membangun brand awareness
                                dan meningkatkan engagement audiens. Fokus saya adalah menciptakan konten kreatif,
                                relevan, dan konsisten yang mampu menarik perhatian target audiens. Selalu berinovasi
                                dan mengikuti tren terbaru untuk memastikan performa media sosial tetap optimal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Hafidz -->
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/ha.png') }}" alt="Hafidz"
                            class="team-img w-full h-full object-cover object-top" />
                    </div>
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-[#0900FF] font-bold text-xl">Hafidz Alauddin Shidiq</h2>
                        <p class="text-[#0800FF] text-sm mb-3">UI/UX Designer</p>
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Saya merancang antarmuka web yang responsif dan menarik, dengan keahlian dalam
                                menyesuaikan web berdasar psikologi dan pengalaman pengguna. Fokus saya adalah merancang
                                desain yang bersih, intuitif, dan sesuai kebutuhan klien. Selalu terbuka untuk teknologi
                                baru demi hasil yang optimal dan pengalaman pengguna yang berkesan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - Yassir -->
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tl from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/yassir.png') }}" alt="Yassir"
                            class="team-img w-full h-full object-cover object-top" />
                    </div>
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-[#0900FF] font-bold text-xl">M.Yassir Rajwa</h2>
                        <p class="text-[#0800FF] text-sm mb-3">UI/UX Designer</p>
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Saya merancang antarmuka web yang responsif dan menarik, dengan keahlian dalam
                                menyesuaikan web berdasar psikologi dan pengalaman pengguna. Fokus saya adalah merancang
                                desain yang bersih, intuitif, dan sesuai kebutuhan klien. Selalu terbuka untuk teknologi
                                baru demi hasil yang optimal dan pengalaman pengguna yang berkesan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 - Qai -->
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/qai.png') }}" alt="Qai"
                            class="team-img w-full h-full object-cover object-top" />
                    </div>
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-[#0900FF] font-bold text-xl">M.Qaishar Dwi Syahputra</h2>
                        <p class="text-[#0800FF] text-sm mb-3">UI/UX Designer</p>
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Bertanggung jawab untuk merancang antarmuka pengguna yang intuitif, menarik, dan mudah
                                digunakan, serta memastikan pengalaman pengguna berjalan lancar di seluruh platform.
                                Menganalisis kebutuhan pengguna, membuat wireframe, prototipe, dan mockup visual, lalu
                                bekerja sama dengan tim pengembang untuk mengimplementasikan desain tersebut. Memastikan
                                desain selaras dengan identitas merek dan memenuhi standar usability.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tl from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5]
transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/alby.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">Alby Nizam Pradana</h2>
                        <p class="text-blue-500 text-sm mb-3">Frontend Developer</p>

                        <!-- Teks -->
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Sebagai seorang Front-End Developer, saya memiliki keahlian dalam membangun tampilan
                                website yang responsif, modern, dan user-friendly menggunakan HTML, CSS, JavaScript,
                                Tailwind CSS, dan Laravel. Saya fokus pada menciptakan pengalaman pengguna yang nyaman
                                dengan desain yang rapi dan interaktif, serta memastikan performa website tetap optimal.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5]
transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/mais.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">M.Adzkiya Ikhwan A</h2>
                        <p class="text-blue-500 text-sm mb-3">Frontend Developer</p>

                        <!-- Teks -->
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Sebagai Front-End Developer, saya mengembangkan antarmuka web yang responsif dan menarik
                                untuk meningkatkan pengalaman pengguna. Terampil dalam HTML, CSS, JavaScript, Tailwind
                                dan Laravel. Fokus saya adalah menciptakan desain yang bersih, fungsional, dan sesuai
                                kebutuhan klien. Selalu terbuka untuk belajar teknologi baru demi hasil yang lebih
                                optimal.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tl from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5]
transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/abdul.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">Abdullah</h2>
                        <p class="text-blue-500 text-sm mb-3">Backend Developer</p>

                        <!-- Teks -->
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Sebagai Backend Developer, saya mengerjakan pada design system yang baik dan berfokus
                                pada scalability, performance, database design dan security. Saya flexible dengan
                                berbagai ekosistem bahasa pemograman.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5] transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/del.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">M.Delfa Tamerawan</h2>
                        <p class="text-blue-500 text-sm mb-3">Backend Developer</p>

                        <!-- Teks -->
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Backend Developer yang bertanggung jawab membangun, mengembangkan, dan memelihara sistem
                                server-side, API, serta database untuk mendukung performa dan keamanan aplikasi. Fokus
                                pada efisiensi, skalabilitas, dan integrasi yang andal.
                        </div>
                    </div>
                </div>
                <div
                    class="team-card flex flex-col items-center bg-gradient-to-tl from-[#1B57F5]/80 to-white/50 border border-black shadow-[#1B57F5]
transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 rounded-2xl p-6 shadow-md md:flex-row md:items-start">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/faw.png') }}" alt="Muhammad"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">M.Fawwaz Alfitra</h2>
                        <p class="text-blue-500 text-sm mb-3">Backend Developer</p>

                        <!-- Teks -->
                        <div class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar">
                            <p>
                                Sebagai Backend Developer, saya mengembangkan sistem dan API yang andal untuk mendukung
                                aplikasi web. Terampil dalam PHP, Python, Node.js, dan framework seperti Laravel atau
                                Express. Fokus saya adalah menciptakan logika bisnis, keamanan, dan manajemen data yang
                                efisien sesuai kebutuhan klien.
                        </div>
                    </div>
                </div>
                <div
                    class="team-card col-span-full flex flex-col items-center bg-gradient-to-tr from-[#1B57F5]/80 to-white/50
   transform hover:scale-105 hover:shadow-lg hover:shadow-[#1B57F5] duration-300 border border-black shadow-[#1B57F5] rounded-2xl p-6 shadow-md md:flex-row md:items-start justify-center mx-auto w-full md:w-2/3">
                    <!-- Foto -->
                    <div class="flex-shrink-0 w-40 h-40 md:w-48 md:h-60 mb-4 md:mb-0 mx-auto md:mx-0">
                        <img src="{{ asset('assets/images/fai.png') }}" alt="Ahmad Fairuz"
                            class="team-img w-full h-full object-cover object-top " />
                    </div>

                    <!-- Konten -->
                    <div class="md:ml-6 flex flex-col text-center md:text-left w-full">
                        <h2 class="text-blue-700 font-bold text-xl">Ahmad Fairuz .P</h2>
                        <p class="text-blue-500 text-sm mb-3">Backend Developer</p>

                        <!-- Teks -->
                        <div
                            class="text-gray-700 text-sm md:text-base overflow-y-auto custom-scrollbar max-h-32 md:max-h-40 pr-2">
                            <p>
                                Sebagai Back-End Developer, saya membantu membuat sistem supaya aplikasi dapat berjalan
                                dengan baik dan lancar. Terampil menggunakan Laravel sebagai framework utama saya
                                membuat website yang terintegrasi dengan baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-5xl mx-auto px-6 py-12 min-h-screen">
        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 leading-snug">
                Butuh Bantuan Buat Website Murah?<br />
                <span class="text-blue-600">Landing page murah – jasa web design</span>
            </h2>
        </div>

        <!-- Konten tampil penuh -->
        <div class="space-y-6 text-gray-700 text-base md:text-lg leading-relaxed">
            <p>
                <span class="font-semibold text-blue-600">vlab.id</span> adalah solusi tepat bagi Anda yang ingin
                mengembangkan bisnis online dengan layanan jasa pembuatan website e-commerce yang profesional dan
                terpercaya.
                Dengan pengalaman yang mumpuni, tim kami siap membantu Anda menciptakan platform jual beli yang
                menarik
                dan mudah digunakan,
                sehingga dapat meningkatkan penjualan Anda secara signifikan. Selain itu, kami juga menawarkan jasa
                pembuatan landing page
                yang dirancang khusus untuk menarik perhatian pengunjung dan mengonversi mereka menjadi pelanggan
                setia.
            </p>

            <p>
                Jika Anda mencari jasa landing page murah tanpa mengorbankan kualitas,
                <span class="font-semibold text-blue-600">vlab.id</span> adalah pilihan yang tepat.
                Kami memahami pentingnya memiliki landing page yang efektif untuk kampanye pemasaran Anda.
                Dengan desain yang menarik dan strategi yang tepat, landing page Anda akan menjadi alat yang
                ampuh untuk mencapai tujuan bisnis Anda.
            </p>

            <p class="font-semibold text-center text-gray-800">
                Bergabunglah bersama vlab.id dan rasakan perbedaan dalam pengembangan online Anda!
            </p>

            <p class="text-center text-sm md:text-base text-gray-600">
                Silakan hubungi Admin kami untuk membicarakan rencana pembuatan website atau aplikasi mobile
                di layanan dan infrastruktur yang kami kelola.
            </p>
        </div>
    </section>
    <section class="relative bg-white py-16" id="testimonial">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Title -->
            <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-10">
                Testimonial
            </h2>

            <!-- Wrapper -->
            <div class="relative">
                <!-- Tombol kiri -->
                <button id="scrollLeft"
                    class="hidden lg:block absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 p-3 rounded-full shadow-md hover:bg-gray-100 hover:scale-110 transition z-10">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Container scroll -->
                <div id="scrollContainer"
                    class="flex space-x-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth px-12 custom-scrollbar">

                    <!-- Card 1 -->
                    <div class="min-w-[300px] md:min-w-[400px] bg-white shadow-lg rounded-2xl p-6 snap-start">
                        <div class="flex items-center space-x-4">
                            <img src="https://i.pravatar.cc/100?img=1" class="w-14 h-14 rounded-full" />
                            <div>
                                <h3 class="font-semibold text-gray-800">JOE SANDERS</h3>
                                <p class="text-sm text-gray-500">2 days ago</p>
                            </div>
                        </div>
                        <div class="mt-3 flex text-yellow-400">★★★★☆</div>
                        <p class="mt-3 text-gray-600 text-sm">
                            Lorem ipsum dolor sit amet consectetur. Vel vitae ullamcorper posuere semper diam.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="min-w-[300px] md:min-w-[400px] bg-white shadow-lg rounded-2xl p-6 snap-start">
                        <div class="flex items-center space-x-4">
                            <img src="https://i.pravatar.cc/100?img=2" class="w-14 h-14 rounded-full" />
                            <div>
                                <h3 class="font-semibold text-gray-800">ANNA DOE</h3>
                                <p class="text-sm text-gray-500">5 days ago</p>
                            </div>
                        </div>
                        <div class="mt-3 flex text-yellow-400">★★★★★</div>
                        <p class="mt-3 text-gray-600 text-sm">
                            Pellentesque habitant morbi tristique senectus et netus. Nunc vel risus commodo.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="min-w-[300px] md:min-w-[400px] bg-white shadow-lg rounded-2xl p-6 snap-start">
                        <div class="flex items-center space-x-4">
                            <img src="https://i.pravatar.cc/100?img=3" class="w-14 h-14 rounded-full" />
                            <div>
                                <h3 class="font-semibold text-gray-800">MARK SMITH</h3>
                                <p class="text-sm text-gray-500">1 week ago</p>
                            </div>
                        </div>
                        <div class="mt-3 flex text-yellow-400">★★★☆☆</div>
                        <p class="mt-3 text-gray-600 text-sm">
                            Quisque in aliquam nunc, ac volutpat erat. Donec consequat tristique massa vel.
                        </p>
                    </div>

                </div>

                <!-- Tombol kanan -->
                <button id="scrollRight"
                    class="hidden lg:block absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 p-3 rounded-full shadow-md hover:bg-gray-100 hover:scale-110 transition z-10">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section id="paket" class="bg-[#007BFF] py-16 px-6 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Paket Website</h2>
            <p class="text-lg text-gray-100 mb-12">
                Jasa buat website disesuaikan dengan kebutuhan anda
            </p>

            <!-- Cards pakai gambar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="overflow-hidden rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="{{ asset('assets/images/1.png') }}" alt="Paket 1" class="w-full h-full object-cover">
                </div>

                <!-- Card 2 -->
                <div class="overflow-hidden rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="{{ asset('assets/images/2.png') }}" alt="Paket 2" class="w-full h-full object-cover">
                </div>

                <!-- Card 3 -->
                <div class="overflow-hidden rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="{{ asset('assets/images/3.png') }}" alt="Paket 3" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Tombol WhatsApp -->
            <div class="mt-12">
                <button id="waBtn"
                    class="bg-[#128C7E]  text-white px-7 py-5 rounded-lg shadow-lg flex items-center justify-center mx-auto gap-2">
                    <img src="{{ asset('assets/icons/Vector.svg') }}" alt="">
                    <span>Apa lagi yang ditunggu? pesan sekarang!</span>
                </button>
            </div>
        </div>
    </section>
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-800">

            <!-- Kolom 1 -->
            <div>
                <h3 class="text-lg font-bold mb-3">TEFA SMK</h3>
                <p class="text-sm leading-relaxed">
                    V Lab adalah perusahaan teknologi yang menghadirkan solusi inovatif untuk membantu bisnis dan
                    individu
                    beradaptasi di era digital, dengan fokus pada kualitas, kecepatan, dan inovasi.
                </p>
            </div>

            <!-- Kolom 2 -->
            <div>
                <h3 class="text-lg font-bold mb-3 flex items-center gap-2">
                    <span>CONTACT</span>
                </h3>
                <p class="text-sm">0812-3456-7890</p>
                <p class="text-sm mt-2">
                    📌SMK-IT As-Syifa Boarding School, KP. Kumpay RT/RW 06/02 Desa Kumpay, Kecamatan Jalancagak,
                    Kabupaten Subang, Provinsi Jawa Barat 41281
                </p>
                <p class="text-sm mt-2">💳vistalab1@gmail.com</p>
            </div>

            <!-- Kolom 3 -->
            <div>
                <h3 class="text-lg font-bold mb-3">Follow us</h3>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-6 h-6">
                        <img src="{{ asset('assets/icons/ig.svg') }}" alt="Instagram" class="w-full h-full">
                    </a>
                    <a href="#" class="w-6 h-6">
                        <img src="{{ asset('assets/icons/tt.svg') }}" alt="TikTok" class="w-full h-full">
                    </a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="bg-[#007BFF] text-white text-center text-sm py-4">
            © 2025 SMK TEFA Assyifa – Mendidik dengan hati, membimbing dengan teknologi.
        </div>
    </footer>

    <!-- JavaScript (tombol WhatsApp) -->
    <script>
        document.getElementById("waBtn").addEventListener("click", function() {
            window.open("https://wa.me/6281234567890?text=Halo%20saya%20mau%20pesan%20paket%20website", "_blank");
        });
    </script>
    <!-- SCRIPT -->
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
        const serviceCards = document.querySelectorAll(".service-card");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-0", "translate-y-10");
                        entry.target.classList.add("opacity-100", "translate-y-0");
                        observer.unobserve(entry.target); // hanya animasi sekali
                    }
                });
            }, {
                threshold: 0.2
            }
        );

        serviceCards.forEach((card) => {
            observer.observe(card);
        });
        // Add smooth scroll behavior
        document.addEventListener("DOMContentLoaded", function() {
            // Animate gallery items on scroll
            const galleryItems = document.querySelectorAll(".flex-shrink-0");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("animate-fade-in-up");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                }
            );

            galleryItems.forEach((item) => {
                observer.observe(item);
            });

            // Add scroll event listener for the gallery
            const scrollContainer = document.querySelector(".overflow-x-auto");
            const scrollButtons = document.querySelectorAll(
                ".overflow-x-auto + .flex > button"
            );

            scrollButtons[0].addEventListener("click", () => {
                scrollContainer.scrollLeft -= 300;
            });

            scrollButtons[1].addEventListener("click", () => {
                scrollContainer.scrollLeft += 300;
            });

            // Auto-scroll functionality
            let autoScrollInterval;
            const startAutoScroll = () => {
                autoScrollInterval = setInterval(() => {
                    scrollContainer.scrollLeft += 1;
                    if (
                        scrollContainer.scrollLeft >=
                        scrollContainer.scrollWidth - scrollContainer.clientWidth
                    ) {
                        clearInterval(autoScrollInterval);
                    }
                }, 50);
            };

            // Start auto-scroll after a delay
            setTimeout(startAutoScroll, 3000);

            // Stop auto-scroll when user interacts
            scrollContainer.addEventListener("mouseenter", () => {
                clearInterval(autoScrollInterval);
            });

            scrollContainer.addEventListener("mouseleave", () => {
                setTimeout(startAutoScroll, 1000);
            });
        });
        const reveals = document.querySelectorAll(".reveal");

        window.addEventListener("scroll", () => {
            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const revealTop = reveals[i].getBoundingClientRect().top;
                const revealPoint = 100;

                if (revealTop < windowHeight - revealPoint) {
                    reveals[i].classList.add("opacity-100");
                }
            }
        });

        // JavaScript untuk mengatur tinggi teks berdasarkan perangkat
        function adjustTextHeight() {
            const texts = document.querySelectorAll(".text-gray-700");

            if (window.innerWidth < 768) {
                // Pada mobile, hapus max-height dan biarkan teks mengalir natural
                texts.forEach((text) => {
                    text.classList.remove("scrollable-text");
                    text.style.maxHeight = "none";
                });
            } else {
                // Pada desktop, batasi tinggi teks dan tambahkan scroll jika perlu
                texts.forEach((text) => {
                    text.classList.add("scrollable-text");
                    text.style.maxHeight = "160px";
                });
            }
        }

        // Panggil fungsi saat halaman dimuat dan di-resize
        window.addEventListener("load", adjustTextHeight);
        window.addEventListener("resize", adjustTextHeight);

        const gallery = document.getElementById("gallery");
        document.getElementById("scroll-left").addEventListener("click", () => {
            gallery.scrollBy({
                left: -300,
                behavior: "smooth"
            });
        });
        document.getElementById("scroll-right").addEventListener("click", () => {
            gallery.scrollBy({
                left: 300,
                behavior: "smooth"
            });
        });
        const scrollContainer = document.getElementById('scrollContainer');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');

        scrollLeft.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -350,
                behavior: 'smooth'
            }); // geser kiri
        });

        scrollRight.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 350,
                behavior: 'smooth'
            }); // geser kanan
        });
        document.getElementById("waBtn").addEventListener("click", function() {
            window.open("https://wa.me/6281234567890?text=Halo%20saya%20mau%20pesan%20paket%20website", "_blank");
        });

        const img = document.getElementById("animatedImage");

        let angle = 0;
        let floating = true;

        function floatAnimation() {
            if (floating) {
                angle += 0.03;
                const x = Math.sin(angle) * 5; // geser kiri kanan
                const y = Math.cos(angle) * 3; // geser atas bawah
                const scale = 1.02 + Math.sin(angle / 2) * 0.02; // zoom in/out halus
                img.style.transform = `translate(${x}px, ${y}px) scale(${scale})`;
            }
            requestAnimationFrame(floatAnimation);
        }

        floatAnimation();

        img.addEventListener("mousemove", (e) => {
            floating = false;
            const rect = img.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const midX = rect.width / 2;
            const midY = rect.height / 2;

            img.style.transition = "transform 0.3s ease";

            if (x < midX && y < midY) {
                // kiri atas
                img.style.transform = "rotate(-6deg) scale(1.1)";
            } else if (x > midX && y < midY) {
                // kanan atas
                img.style.transform = "rotate(6deg) scale(1.1)";
            } else if (x < midX && y > midY) {
                // kiri bawah
                img.style.transform = "translate(20px, -15px) scale(1.08)";
            } else {
                // kanan bawah
                img.style.transform = "translate(-20px, -15px) scale(1.08)";
            }
        });

        img.addEventListener("mouseleave", () => {
            floating = true; // balik ke animasi idle
            img.style.transition = "transform 0.6s ease";
        });
    </script>
</body>

</html>
