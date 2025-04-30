@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-xl shadow-lg transition-all duration-300 hover:shadow-2xl">
        <div class="flex justify-center">
            <div class="h-20 w-20 bg-indigo-100 rounded-full flex items-center justify-center animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
            </div>
        </div>

        <div class="text-center space-y-2">
            <h1 class="text-3xl font-bold text-gray-800">Selamat Datang!</h1>
            <p class="text-xl text-indigo-600 font-medium animate-pulse">
                {{ $username }}
                <span class="inline-block ml-2">👋</span>
            </p>
            <p class="text-gray-500">Book meja KeyRestaurant di hari bahagiamu</p>
        </div>

        <div class="flex flex-col space-y-4 pt-6">
            <a href="{{ route('pengelolaan') }}" class="flex-1 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-center">
            Daftar Reservasi
            </a>
            <a href="/profile" class="flex-1 px-4 text-center py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Profil Saya
            </a>
        </div>
    </div>
</div>
@endsection