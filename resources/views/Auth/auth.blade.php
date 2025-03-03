@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('img/logokaltara.png') }}" alt="Logo Kaltara" class="h-20">
        </div>
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-4">Admin Login</h2>

        {{-- Tampilkan pesan error --}}
        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('username')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center text-gray-700">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember me
                </label>
                <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Sign in
            </button>
        </form>
    </div>
</div>
@endsection
