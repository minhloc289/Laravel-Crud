<div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 flex items-center">
        <img src="/assets/img/logo(2).png" alt="Merus Logo" class="w-8 h-8 mr-2">
        Merus
    </a>

    <!-- Nút Tài khoản -->
    <nav>
        <a href="{{ route('customer.login') }}" onclick="showLoginForm()" class="text-indigo-600 font-semibold hover:text-indigo-800">Tài khoản</a>
    </nav>
</div>