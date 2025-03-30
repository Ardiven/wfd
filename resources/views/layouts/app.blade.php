<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 bg-opacity-0">
    @if (session('success'))
        <!-- Modal -->
        <div id="success-modal" class="fixed top-5 left-1/2 transform -translate-x-1/2 p-6 rounded max-w-sm shadow-lg border border-gray-300"
            style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
            <h2 class="text-lg font-bold text-green-600">Sukses!</h2>
            <p class="text-gray-700 mt-2">{{ session('success') }}</p>
        </div>


        <!-- Script untuk menghilangkan modal -->
        <script>
            function closeModal() {
                document.getElementById('success-modal').style.display = 'none';
            }

            // Modal akan otomatis hilang setelah 3 detik
            setTimeout(closeModal, 3000);
        </script>
    @endif

    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
