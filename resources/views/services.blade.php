@extends('layouts.public')

@section('content')
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-white text-center">Layanan & Produk Kami</h1>
        <p class="mt-4 text-xl text-blue-100 text-center max-w-3xl mx-auto">Solusi inovatif untuk memenuhi kebutuhan bisnis Anda</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($services as $service)
            <div class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300 border border-gray-100">
                <div class="relative h-56">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="absolute inset-0 w-full h-full object-cover">
                    @else
                        <div class="absolute inset-0 bg-blue-100 flex items-center justify-center text-blue-500 font-medium">No Image</div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">{{ $service->title }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed">{{ $service->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-xl text-gray-500">Belum ada layanan yang ditambahkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
