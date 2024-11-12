@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800">Welcome to Merus</h1>
    <p class="mt-4 text-gray-600">Your reliable platform for all your needs.</p>
    <a href="{{ route('customer.login') }}" class="mt-6 inline-block bg-indigo-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-indigo-700">
        Get Started
    </a>
</div>


@endsection
