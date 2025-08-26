<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLAB.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
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

    <!-- Section Title -->
    <section class="text-center py-20"> <!-- Increased padding to avoid header overlap -->
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
            Websites That We Ever Made
        </h2>
    </section>

    <!-- Projects Grid -->
    <section class="container mx-auto px-6 pb-12">
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Project Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?laundry" alt="Web Laundry"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Web Laundry</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?canteen,food" alt="Canteen Web"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Canteen Web</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?news" alt="News Web" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">News Web</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?library,books" alt="LMS Web"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">LMS Web</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?travel" alt="Travel Web"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Travel Web</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?notebook,writing" alt="To Do List Web"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">To Do List Web</h3>
                    <a href="#"
                        class="mt-3 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Look at
                        Github</a>
                </div>
            </div>

        </div>

        <!-- Show more -->
        <div class="text-center mt-8">
            <a href="#" class="text-blue-600 font-semibold hover:underline">Show more</a>
        </div>
    </section>

</body>

</html>
