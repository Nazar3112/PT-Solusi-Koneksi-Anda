@extends('layouts.public')

@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 to-gray-900 z-0"></div>
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-4">Profil Perusahaan</h1>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto leading-relaxed">Mengenal lebih dekat siapa kami, visi, dan misi yang mendorong kami.</p>
    </div>
</div>

<div class="py-24 bg-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            @if(isset($profile) && $profile->logo)
                <div class="inline-block p-4 bg-white rounded-3xl shadow-xl mb-8 border border-gray-100 transform -rotate-2 hover:rotate-0 transition-transform duration-300">
                    <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo {{ $profile->name }}" class="mx-auto h-32 w-auto object-contain">
                </div>
            @endif
            <h2 class="text-4xl font-extrabold text-gray-900 font-heading tracking-tight">{{ $profile->name ?? 'PT Solusi Koneksi Anda' }}</h2>
            <div class="w-24 h-1.5 bg-primary-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="space-y-16 text-gray-600 text-lg">
            <div data-aos="fade-up" class="bg-gray-50 p-10 rounded-3xl border border-gray-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-primary-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50 group-hover:bg-primary-200 transition-colors"></div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6 font-heading flex items-center">
                    <svg class="w-8 h-8 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Tentang Kami
                </h3>
                <p class="leading-relaxed whitespace-pre-line relative z-10">{{ $profile->description ?? '' }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-gradient-to-br from-primary-600 to-primary-800 rounded-3xl p-10 shadow-lg text-white relative overflow-hidden transform hover:-translate-y-1 transition-transform">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-10 -mt-10"></div>
                    <h3 class="text-2xl font-bold mb-4 font-heading flex items-center">
                        <svg class="w-8 h-8 mr-3 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Visi
                    </h3>
                    <p class="text-xl font-medium leading-relaxed italic text-primary-50 relative z-10">"{{ $profile->vision ?? '' }}"</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-3xl p-10 border-2 border-primary-100 shadow-sm hover:border-primary-300 transition-colors">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-heading flex items-center">
                        <svg class="w-8 h-8 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"></path></svg>
                        Misi
                    </h3>
                    <div class="leading-relaxed text-gray-600 prose prose-blue">{!! nl2br(e($profile->mission ?? '')) !!}</div>
                </div>
            </div>

            <div data-aos="fade-up" class="relative pl-8 md:pl-0">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 font-heading flex items-center">
                    <svg class="w-8 h-8 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Sejarah Perusahaan
                </h3>
                <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-sm relative z-10">
                    <div class="absolute -left-4 top-10 w-8 h-8 bg-primary-100 rounded-full border-4 border-white shadow-sm flex items-center justify-center md:hidden">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                    </div>
                    <p class="leading-relaxed whitespace-pre-line text-gray-600">{{ $profile->history ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tim Manajemen -->
<div class="py-24 bg-gray-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-primary-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 translate-x-1/3 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-secondary-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -translate-x-1/3 translate-y-1/3"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-extrabold text-gray-900 font-heading tracking-tight">Tim Manajemen</h2>
            <div class="w-24 h-1.5 bg-primary-500 mx-auto mt-6 rounded-full mb-6"></div>
            <p class="max-w-2xl text-xl text-gray-500 mx-auto leading-relaxed">Para ahli yang berdedikasi di balik kesuksesan solusi inovatif yang kami tawarkan.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-40 h-40 mx-auto mb-6">
                    <div class="absolute inset-0 bg-primary-100 rounded-full transform group-hover:scale-105 transition-transform duration-300"></div>
                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=2563eb&color=fff&size=200" alt="CEO" class="relative w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 font-heading">Budi Santoso</h3>
                <p class="text-primary-600 font-bold mb-4 tracking-wide text-sm uppercase">Chief Executive Officer</p>
                <p class="text-gray-500 leading-relaxed">Lebih dari 15 tahun pengalaman di industri teknologi informasi dan manajemen korporat.</p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-40 h-40 mx-auto mb-6">
                    <div class="absolute inset-0 bg-primary-100 rounded-full transform group-hover:scale-105 transition-transform duration-300"></div>
                    <img src="https://ui-avatars.com/api/?name=Siti+Aisyah&background=2563eb&color=fff&size=200" alt="CTO" class="relative w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 font-heading">Siti Aisyah</h3>
                <p class="text-primary-600 font-bold mb-4 tracking-wide text-sm uppercase">Chief Technology Officer</p>
                <p class="text-gray-500 leading-relaxed">Pakar arsitektur jaringan dan cybersecurity bersertifikasi internasional (CISSP, CCIE).</p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="relative w-40 h-40 mx-auto mb-6">
                    <div class="absolute inset-0 bg-primary-100 rounded-full transform group-hover:scale-105 transition-transform duration-300"></div>
                    <img src="https://ui-avatars.com/api/?name=Andi+Pratama&background=2563eb&color=fff&size=200" alt="COO" class="relative w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 font-heading">Andi Pratama</h3>
                <p class="text-primary-600 font-bold mb-4 tracking-wide text-sm uppercase">Chief Operating Officer</p>
                <p class="text-gray-500 leading-relaxed">Berpengalaman memimpin operasional dan memastikan pengiriman layanan terbaik ke klien.</p>
            </div>
        </div>
    </div>
</div>
@endsection
