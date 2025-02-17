<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Penjualan')</title>
    @vite('resources/css/app.css') <!-- Pastikan ini sesuai dengan konfigurasi Vite Anda jika Anda menggunakan Laravel Vite -->
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Konten Utama -->
        <div class="flex-1 p-6 overflow-auto">
            @yield('content')
        </div>
    </div>
s

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-8">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; {{ date('Y') }} Aplikasi Penjualan. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
