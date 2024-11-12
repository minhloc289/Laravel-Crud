@extends('layouts.app')

@section('content')
<!-- Section Form Đăng Ký -->
<div id="register-overlay" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"> <!-- Lớp overlay cố định -->
    <div class="register-form-container w-[520px] h-[560px] bg-white rounded-lg shadow md:mt-0 xl:p-0"> <!-- Khung cố định kích thước với w-[520px] và h-[560px] -->
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                Create an account
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{route('sign_up')}}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" placeholder="name@company.com" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required="">
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required="">

                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-black" required="">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500">I accept the <a class="font-medium text-blue-600 hover:underline" href="#">Terms and Conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="w-full text-white bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create an account</button>
                <p class="text-sm font-light text-gray-500">
                    Already have an account? <a href="{{ route('customer.login') }}" class="font-medium text-blue-600 hover:underline">Login here</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection