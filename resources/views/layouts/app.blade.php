<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ route('promotions.index') }}" class="text-2xl font-bold text-blue-600">
                    MyPromo
                </a>

                <!-- Navigation -->
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('promotions.index') }}" class="text-gray-700 hover:text-blue-500">Home</a></li>
                        <li><a href="{{ route('promotions.create') }}" class="text-gray-700 hover:text-blue-500">Tambah Promosi</a></li>
                        <li><a href="{{ route('promotions.edit') }}" class="text-gray-700 hover:text-blue-500">Edit</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @if (session('success'))
        <div id="success-modal" class="fixed top-10 left-1/2 transform -translate-x-1/2 p-4 rounded-lg max-w-sm shadow-lg border border-gray-300 transition-opacity duration-300 ease-in-out opacity-100"
            style="background-color: rgba(255, 255, 255, 0.85); backdrop-filter: blur(8px);">
            
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-bold text-green-600">Sukses!</h2>
                <!-- Tombol Close -->
                <button onclick="closeModal()" class="text-gray-600 hover:text-gray-800">&times;</button>
            </div>
            
            <p class="text-gray-700 mt-2">{{ session('success') }}</p>
        </div>

        <!-- Script untuk menghilangkan modal -->
        <script>
            function closeModal() {
                let modal = document.getElementById('success-modal');
                modal.style.opacity = '0'; // Efek fade out
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 300); // Tunggu animasi selesai
            }

            // Modal otomatis hilang setelah 3 detik
            setTimeout(closeModal, 3000);
        </script>
    @endif

    <!-- Container Utama -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 mt-6">
        <p class="text-gray-600">© {{ date('Y') }} MyPromo. All rights reserved.</p>
    </footer>
</body>
</html>
