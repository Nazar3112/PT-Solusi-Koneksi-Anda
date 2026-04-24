@extends('layouts.public')

@section('content')
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-white text-center">Profil Perusahaan</h1>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            @if(isset($profile) && $profile->logo)
                <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo {{ $profile->name }}" class="mx-auto h-32 w-auto mb-6">
            @endif
            <h2 class="text-3xl font-extrabold text-gray-900">{{ $profile->name ?? 'PT Solusi Koneksi Anda' }}</h2>
        </div>

        <div class="prose prose-blue prose-lg max-w-none text-gray-600">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Tentang Kami</h3>
            <p class="mb-8 leading-relaxed whitespace-pre-line">{{ $profile->description ?? '' }}</p>

            <div class="bg-blue-50 rounded-lg p-8 mb-8 border-l-4 border-blue-500 shadow-sm">
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Visi</h3>
                <p class="text-lg italic text-blue-800 whitespace-pre-line">"{{ $profile->vision ?? '' }}"</p>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                    <div class="whitespace-pre-line text-gray-700">{!! nl2br(e($profile->mission ?? '')) !!}</div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Perusahaan</h3>
                <p class="leading-relaxed whitespace-pre-line bg-gray-50 p-6 rounded-lg border border-gray-200">{{ $profile->history ?? '' }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Tim Manajemen -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900">Tim Manajemen Kami</h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Para ahli yang berdedikasi di balik kesuksesan solusi yang kami tawarkan.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-lg transition">
                <div class="w-32 h-32 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=2563eb&color=fff&size=128" alt="CEO">
                </div>
                <h3 class="text-xl font-bold text-gray-900">Budi Santoso</h3>
                <p class="text-blue-600 font-medium">Chief Executive Officer</p>
                <p class="mt-3 text-gray-500 text-sm">Lebih dari 15 tahun pengalaman di industri teknologi informasi dan manajemen korporat.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-lg transition">
                <div class="w-32 h-32 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Siti+Aisyah&background=2563eb&color=fff&size=128" alt="CTO">
                </div>
                <h3 class="text-xl font-bold text-gray-900">Siti Aisyah</h3>
                <p class="text-blue-600 font-medium">Chief Technology Officer</p>
                <p class="mt-3 text-gray-500 text-sm">Pakar arsitektur jaringan dan cybersecurity bersertifikasi internasional (CISSP, CCIE).</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-lg transition">
                <div class="w-32 h-32 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Andi+Pratama&background=2563eb&color=fff&size=128" alt="COO">
                </div>
                <h3 class="text-xl font-bold text-gray-900">Andi Pratama</h3>
                <p class="text-blue-600 font-medium">Chief Operating Officer</p>
                <p class="mt-3 text-gray-500 text-sm">Berpengalaman memimpin operasional dan memastikan pengiriman layanan terbaik ke klien.</p>
            </div>
        </div>
    </div>
</div>
@endsection
