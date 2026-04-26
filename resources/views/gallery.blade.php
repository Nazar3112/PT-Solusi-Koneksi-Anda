@extends('layouts.public')

@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 to-gray-900 z-0"></div>
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-4">Galeri Kegiatan</h1>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto leading-relaxed">Dokumentasi momen-momen penting dan aktivitas perusahaan kami.</p>
    </div>
</div>

<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($galleries as $index => $gallery)
            <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 bg-gray-100 cursor-pointer border border-gray-100" x-data="{ open: false }" data-aos="zoom-in" data-aos-delay="{{ ($index % 4) * 100 }}">
                <div class="aspect-w-1 aspect-h-1" @click="open = true">
                    @if($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    @else
                        <div class="w-full h-72 flex items-center justify-center text-gray-400 bg-gray-50">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none">
                    <p class="text-white font-bold text-lg font-heading tracking-wide">{{ $gallery->title }}</p>
                    <div class="w-8 h-1 bg-primary-500 mt-2 rounded-full"></div>
                </div>
                
                <!-- Modal -->
                <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/95 backdrop-blur-sm px-4" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="relative max-w-5xl w-full" @click.away="open = false">
                        <button @click="open = false" class="absolute -top-12 right-0 text-white/70 hover:text-white transition-colors focus:outline-none bg-white/10 rounded-full p-2 hover:bg-white/20 backdrop-blur-md">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="w-full h-auto max-h-[80vh] object-contain rounded-lg shadow-2xl">
                        <div class="text-white text-center mt-6 text-2xl font-bold font-heading tracking-wide">{{ $gallery->title }}</div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-24 bg-gray-50 rounded-3xl border border-dashed border-gray-300">
                <svg class="mx-auto h-20 w-20 text-gray-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <h3 class="text-2xl font-bold text-gray-900 font-heading">Belum Ada Foto</h3>
                <p class="mt-3 text-lg text-gray-500">Dokumentasi galeri belum ditambahkan ke dalam sistem.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-16 flex justify-center">
            {{ $galleries->links() }}
        </div>
    </div>
</div>
@endsection
