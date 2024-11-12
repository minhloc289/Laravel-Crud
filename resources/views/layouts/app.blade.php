<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merus</title>
    <link rel="shortcut icon" href="/assets/img/logo(2).png">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Liên kết CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }}">

    <!-- Liên kết JavaScript -->
    <script src="{{ asset('assets/js/customizeJS.js') }}" defer></script>
    
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <header class="bg-white shadow">
        @include('Components.header')
    </header>

    <!-- Nội dung chính -->
    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 py-4 text-center">
        @include('Components.footer')
    </footer>
</body>
</html>
