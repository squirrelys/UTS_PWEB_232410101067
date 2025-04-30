@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Reservasi</h1>
        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
            {{ count($reservasi) }} Reservasi
        </span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($reservasi as $r)
        <div class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="p-5">
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $r['nama'] }}</h3>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded">
                        Meja {{ $r['meja'] }}
                    </span>
                </div>
                
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ $r['waktu'] }}</span>
                    </div>
                    
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>2 Orang</span>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-2">
                    <button class="px-3 py-1 text-sm text-blue-600 hover:text-blue-800 transition-colors">
                        Detail
                    </button>
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                        Konfirmasi
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection