@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="relative bg-white overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute top-1/4 -right-24 w-96 h-96 bg-secondary-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-24 left-1/3 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="pt-16 pb-16 sm:pt-24 sm:pb-24 lg:pt-32 lg:pb-32 px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-6 border border-primary-100 shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                    </span>
                    Solusi IT Terbaik Untuk Anda
                </div>
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl font-heading">
                    <span class="block">Selamat Datang di</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-secondary-500 mt-2">{{ $profile->name ?? 'Perusahaan Kami' }}</span>
                </h1>
                <p class="mt-6 text-base text-gray-600 sm:text-lg sm:max-w-xl sm:mx-auto md:text-xl lg:mx-0 leading-relaxed">
                    Menyediakan solusi digitalisasi dan konektivitas terbaik untuk bisnis Anda agar dapat berkembang pesat di era teknologi saat ini. Kami hadir untuk mewujudkan visi digital Anda.
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start gap-4">
                    <a href="{{ route('services') }}" class="group relative w-full sm:w-auto flex items-center justify-center px-8 py-4 text-base font-semibold rounded-xl text-white bg-gray-900 hover:bg-primary-600 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 overflow-hidden">
                        <span class="relative z-10 flex items-center gap-2">
                            Lihat Layanan
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </a>
                    <a href="{{ route('contact') }}" class="mt-3 sm:mt-0 w-full sm:w-auto flex items-center justify-center px-8 py-4 text-base font-semibold rounded-xl text-gray-700 bg-white border-2 border-gray-100 hover:border-primary-100 hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            
            <div class="relative lg:h-[600px] flex items-center justify-center" data-aos="fade-left" data-aos-delay="200">
                <div class="relative w-full max-w-lg mx-auto">
                    <!-- Main Image with Glass effect decoration -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl z-10 transform transition-transform duration-500 hover:scale-[1.02]">
                        <img class="w-full h-auto object-cover" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Tech background">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/40 to-transparent"></div>
                    </div>
                    
                    <!-- Floating Tech Cards -->
                    <div class="absolute -left-8 top-1/4 bg-white/90 backdrop-blur-md p-4 rounded-xl shadow-xl z-20 animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium">Uptime</p>
                                <p class="text-sm font-bold text-gray-900">99.9%</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -right-6 bottom-1/4 bg-white/90 backdrop-blur-md p-4 rounded-xl shadow-xl z-20 animate-bounce" style="animation-duration: 4s; animation-delay: 1s;">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
                                <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-600">+</div>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">500+</p>
                                <p class="text-xs text-gray-500 font-medium">Klien Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profil Singkat -->
<div class="py-24 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-12 lg:p-16 flex flex-col justify-center">
                    <h2 class="text-sm font-bold tracking-widest text-primary-600 uppercase mb-3">Tentang Kami</h2>
                    <h3 class="text-3xl font-extrabold text-gray-900 font-heading mb-6">Mitra Strategis Untuk Pertumbuhan Digital Anda</h3>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        {{ Str::limit($profile->description ?? 'Kami adalah perusahaan IT yang berdedikasi untuk memberikan solusi terbaik bagi setiap klien kami.', 250) }}
                    </p>
                    <div>
                        <a href="{{ route('profile') }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors group">
                            Pelajari lebih lanjut tentang kami
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="relative h-64 lg:h-auto bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="Team working" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/20 to-transparent lg:block hidden"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kenapa Memilih Kami -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-sm font-bold tracking-widest text-primary-600 uppercase mb-3">Keunggulan</h2>
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl font-heading mb-4">Kenapa Memilih PT Solusi Koneksi Anda?</h3>
            <p class="text-xl text-gray-500">Keunggulan kami yang menjadikan kami mitra terpercaya bagi ratusan bisnis di berbagai sektor industri.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-gray-50 p-10 rounded-3xl text-center hover:bg-white hover:shadow-xl transition-all duration-300 group border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-2xl bg-white shadow-sm text-primary-600 mb-8 group-hover:scale-110 transition-transform duration-300 group-hover:bg-primary-50">
                    <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 font-heading">Teknologi Terkini</h3>
                <p class="text-gray-600 leading-relaxed">Kami selalu mengadopsi teknologi terbaru untuk memastikan solusi yang kami berikan relevan dan tahan masa depan.</p>
            </div>
            <div class="bg-gray-50 p-10 rounded-3xl text-center hover:bg-white hover:shadow-xl transition-all duration-300 group border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-2xl bg-white shadow-sm text-primary-600 mb-8 group-hover:scale-110 transition-transform duration-300 group-hover:bg-primary-50">
                    <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 font-heading">Tim Bersertifikasi</h3>
                <p class="text-gray-600 leading-relaxed">Didukung oleh engineer profesional yang memiliki sertifikasi global di bidang jaringan, cloud, dan keamanan siber.</p>
            </div>
            <div class="bg-gray-50 p-10 rounded-3xl text-center hover:bg-white hover:shadow-xl transition-all duration-300 group border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-2xl bg-white shadow-sm text-primary-600 mb-8 group-hover:scale-110 transition-transform duration-300 group-hover:bg-primary-50">
                    <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 font-heading">Dukungan 24/7</h3>
                <p class="text-gray-600 leading-relaxed">Layanan dukungan teknis kami siap sedia 24 jam sehari, 7 hari seminggu untuk menangani kendala teknis Anda secara responsif.</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistik Singkat -->
<div class="relative bg-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%222%22%20cy%3D%222%22%20r%3D%222%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fsvg%3E')] bg-[length:30px_30px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 text-center border-y border-gray-800 py-12">
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="text-5xl font-extrabold text-white font-heading mb-2"><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-secondary-400">9</span>+</div>
                <div class="text-gray-400 font-medium tracking-wide uppercase text-sm">Tahun Pengalaman</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-extrabold text-white font-heading mb-2"><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-secondary-400">500</span>+</div>
                <div class="text-gray-400 font-medium tracking-wide uppercase text-sm">Klien Terhubung</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-extrabold text-white font-heading mb-2"><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-secondary-400">50</span>+</div>
                <div class="text-gray-400 font-medium tracking-wide uppercase text-sm">Ahli Bersertifikat</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-extrabold text-white font-heading mb-2"><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-secondary-400">99.9</span>%</div>
                <div class="text-gray-400 font-medium tracking-wide uppercase text-sm">Uptime Jaringan</div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Unggulan -->
<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16" data-aos="fade-up">
            <div class="max-w-2xl">
                <h2 class="text-sm font-bold tracking-widest text-primary-600 uppercase mb-3">Layanan Kami</h2>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl font-heading">Solusi Komprehensif Untuk Bisnis Anda</h3>
            </div>
            <a href="{{ route('services') }}" class="hidden md:inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors group">
                Lihat Semua Layanan
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services->take(3) as $index => $service)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl overflow-hidden group transition-all duration-300 border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="relative overflow-hidden h-56">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center text-gray-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 font-heading group-hover:text-primary-600 transition-colors">{{ $service->title }}</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-grow leading-relaxed">{{ Str::limit($service->description, 120) }}</p>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-primary-600 group-hover:text-primary-700">
                        Pelajari lebih lanjut
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-10 text-center md:hidden">
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-base font-medium rounded-xl text-gray-700 bg-white hover:bg-gray-50 transition shadow-sm">
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</div>

<!-- Artikel Terbaru -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-sm font-bold tracking-widest text-primary-600 uppercase mb-3">Wawasan & Berita</h2>
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl font-heading">Artikel Terbaru Kami</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($articles->take(3) as $index => $article)
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="relative h-48 overflow-hidden">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-semibold text-primary-600 shadow-sm">
                            {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
                        </span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <a href="{{ route('articles.show', $article->id) }}" class="block mt-2 flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors font-heading mb-3 line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-sm text-gray-500 line-clamp-3 leading-relaxed">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                    </a>
                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <a href="{{ route('articles.show', $article->id) }}" class="text-sm font-semibold text-gray-900 group-hover:text-primary-600 transition-colors inline-flex items-center">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center">
            <a href="{{ route('articles') }}" class="inline-flex items-center font-semibold text-primary-600 hover:text-primary-700 transition-colors">
                Lihat semua artikel
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</div>

<!-- Call To Action -->
<div class="relative py-20 overflow-hidden">
    <!-- Gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-600 to-indigo-900 z-0"></div>
    
    <!-- Decorative patterns -->
    <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M20%2020.5V18H0v-2h20v-2H0v-2h20v-2H0V8h20V6H0V4h20V2H0V0h22v20h2V0h2v20h2V0h2v20h2V0h2v20h2V0h2v20h2v2H20v-1.5zM0%2020h2v20H0V20zm4%200h2v20H4V20zm4%200h2v20H8V20zm4%200h2v20h-2V20zm4%200h2v20h-2V20zm4%204h20v2H20v-2zm0%204h20v2H20v-2zm0%204h20v2H20v-2zm0%204h20v2H20v-2z%22%20fill%3D%22%23ffffff%22%20fill-opacity%3D%221%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E')] z-0"></div>
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-white opacity-10 blur-3xl z-0"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-in">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl font-heading mb-6 tracking-tight">Siap Mendorong Bisnis Anda ke Level Selanjutnya?</h2>
        <p class="text-xl text-primary-100 mb-10 leading-relaxed">Diskusikan kebutuhan teknologi Anda dengan tim ahli kami dan dapatkan penawaran solusi terbaik hari ini.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-primary-700 bg-white hover:bg-gray-50 shadow-xl hover:shadow-2xl transform transition-all duration-300 hover:-translate-y-1">
                Hubungi Kami Sekarang
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-white bg-transparent border-2 border-white/30 hover:bg-white/10 transition-all duration-300">
                Eksplorasi Layanan
            </a>
        </div>
    </div>
</div>
@endsection
