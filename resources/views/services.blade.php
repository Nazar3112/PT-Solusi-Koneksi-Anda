@extends('layouts.public')

@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 to-gray-900 z-0"></div>
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-4">Layanan & Produk Kami</h1>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto leading-relaxed">Solusi inovatif dan komprehensif untuk memenuhi setiap kebutuhan bisnis Anda di era digital.</p>
    </div>
</div>

<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($services as $index => $service)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl overflow-hidden group transition-all duration-300 border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="relative overflow-hidden h-64">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center text-gray-400">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <div class="w-12 h-1 bg-primary-500 mb-4 transform origin-left group-hover:scale-x-150 transition-transform duration-300"></div>
                        <h3 class="text-2xl font-bold text-white font-heading">{{ $service->title }}</h3>
                    </div>
                </div>
                <div class="p-8 flex-grow">
                    <p class="text-gray-600 leading-relaxed">{{ $service->description }}</p>
                </div>
                <div class="px-8 pb-8">
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-semibold text-primary-600 group-hover:text-primary-700">
                        Diskusikan layanan ini
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20 bg-white rounded-2xl border border-dashed border-gray-300">
                <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <h3 class="text-lg font-medium text-gray-900 font-heading">Belum Ada Layanan</h3>
                <p class="mt-2 text-gray-500">Daftar layanan dan produk belum ditambahkan ke dalam sistem.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
