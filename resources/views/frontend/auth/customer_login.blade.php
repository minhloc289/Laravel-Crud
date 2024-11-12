@extends('layouts.app')

@section('content')
<!-- Form Đăng Nhập Overlay -->
<div id="login-overlay" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"> <!-- Hiển thị overlay mặc định -->
    <div id="login-form" class="flex flex-col h-auto w-[400px] max-w-md px-6 py-4 bg-white shadow-lg rounded-lg opacity-0 transform scale-90 transition-all duration-500" onclick="event.stopPropagation();"> <!-- Dừng sự kiện khi nhấp vào trong form -->
        <div class="sm:mx-auto sm:w-full text-center mb-6">
            <img class="mx-auto h-16 w-auto" src="/assets/img/logo(2).png" alt="Your Company">
            <h2 class="mt-2 text-xl font-extrabold tracking-tight text-gray-800">Sign in to your account</h2>
            <p class="text-gray-500 mt-2">Don't have an account? <a href="{{ route('customer.sign_up') }}" class="text-blue-600 font-semibold hover:text-blue-500">Sign Up →</a></p>
        </div>

        <div class="sm:mx-auto sm:w-full">
            <form class="space-y-4" action="#" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <input id="email" name="email" type="email" required class="block w-full rounded-md border border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600 sm:text-sm" placeholder="your@email.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <input id="password" name="password" type="password" required class="block w-full rounded-md border border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600 sm:text-sm" placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-500">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-black px-4 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
