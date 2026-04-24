@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="relative bg-blue-600 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-blue-600 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left pt-12">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Selamat Datang di</span>
                        <span class="block text-blue-200">{{ $profile->name ?? 'Perusahaan Kami' }}</span>
                    </h1>
                    <p class="mt-3 text-base text-blue-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Menyediakan solusi digitalisasi dan konektivitas terbaik untuk bisnis Anda agar dapat berkembang pesat di era teknologi saat ini.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{ route('services') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10 transition">
                                Lihat Layanan
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('contact') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 md:py-4 md:text-lg md:px-10 transition">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full opacity-50 mix-blend-multiply" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="Tech background">
    </div>
</div>

<!-- Profil Singkat -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Tentang Kami</h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                {{ Str::limit($profile->description ?? '', 200) }}
            </p>
            <div class="mt-8">
                <a href="{{ route('profile') }}" class="text-blue-600 font-semibold hover:text-blue-800 flex justify-center items-center">
                    Baca Selengkapnya
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Kenapa Memilih Kami -->
<div class="py-16 bg-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Kenapa Memilih PT Solusi Koneksi Anda?</h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">Keunggulan kami yang menjadikan kami mitra terpercaya bagi ratusan bisnis.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-sm text-center border border-blue-100 hover:shadow-lg transition">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Teknologi Terkini</h3>
                <p class="text-gray-600">Kami selalu mengadopsi teknologi terbaru untuk memastikan solusi yang kami berikan relevan dan tahan masa depan.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-sm text-center border border-blue-100 hover:shadow-lg transition">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Tim Profesional Bersertifikasi</h3>
                <p class="text-gray-600">Didukung oleh engineer yang memiliki sertifikasi global di bidang jaringan, cloud, dan keamanan siber.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-sm text-center border border-blue-100 hover:shadow-lg transition">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Dukungan 24/7</h3>
                <p class="text-gray-600">Layanan dukungan teknis kami siap sedia 24 jam sehari, 7 hari seminggu untuk menangani kendala teknis Anda.</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistik Singkat -->
<div class="bg-blue-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-extrabold text-white">9+</div>
                <div class="mt-2 text-blue-200 font-medium text-lg">Tahun Pengalaman</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-white">500+</div>
                <div class="mt-2 text-blue-200 font-medium text-lg">Klien Terhubung</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-white">50+</div>
                <div class="mt-2 text-blue-200 font-medium text-lg">Ahli Bersertifikat</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-white">99.9%</div>
                <div class="mt-2 text-blue-200 font-medium text-lg">Uptime Jaringan</div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Unggulan -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-900 mb-12">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($service->description, 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('services') }}" class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition">Lihat Semua Layanan</a>
        </div>
    </div>
</div>

<!-- Artikel Terbaru -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-900 mb-12">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition duration-300">
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                @endif
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">{{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}</div>
                    <a href="{{ route('articles.show', $article->id) }}" class="block mt-2">
                        <h3 class="text-xl font-bold text-gray-900 hover:text-blue-600 transition">{{ $article->title }}</h3>
                    </a>
                    <p class="mt-3 text-base text-gray-500">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Call To Action -->
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-4">Siap Mendorong Bisnis Anda ke Level Selanjutnya?</h2>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-8">Diskusikan kebutuhan teknologi Anda dengan tim ahli kami dan dapatkan penawaran solusi terbaik hari ini.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-full text-blue-700 bg-white hover:bg-gray-50 shadow-lg transform hover:scale-105 transition">
            Hubungi Kami Sekarang
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
</div>
@endsection
