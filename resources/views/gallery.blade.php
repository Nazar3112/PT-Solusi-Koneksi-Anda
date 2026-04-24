@extends('layouts.public')

@section('content')
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-white text-center">Galeri Kegiatan</h1>
        <p class="mt-4 text-xl text-blue-100 text-center max-w-3xl mx-auto">Dokumentasi momen-momen penting perusahaan</p>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($galleries as $gallery)
            <div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 bg-gray-100 cursor-pointer" x-data="{ open: false }">
                <div class="aspect-w-1 aspect-h-1" @click="open = true">
                    @if($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-64 flex items-center justify-center text-gray-400">No Image</div>
                    @endif
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-300 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 pointer-events-none">
                    <p class="text-white font-semibold text-lg truncate">{{ $gallery->title }}</p>
                </div>
                
                <!-- Modal -->
                <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 px-4" style="display: none;">
                    <div class="relative max-w-4xl w-full" @click.away="open = false">
                        <button @click="open = false" class="absolute -top-10 right-0 text-white hover:text-gray-300 focus:outline-none">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="w-full h-auto max-h-[80vh] object-contain rounded">
                        <div class="text-white text-center mt-4 text-xl font-medium">{{ $gallery->title }}</div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-xl text-gray-500">Belum ada foto di galeri.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-12">
            {{ $galleries->links() }}
        </div>
    </div>
</div>
@endsection
