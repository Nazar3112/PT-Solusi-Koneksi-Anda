@extends('layouts.public')

@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 to-gray-900 z-0"></div>
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-4">Wawasan & Berita</h1>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto leading-relaxed">Berita terbaru, wawasan industri, dan informasi terkini dari tim ahli kami.</p>
    </div>
</div>

<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($articles as $index => $article)
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="relative h-56 overflow-hidden">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-xs font-bold text-primary-600 shadow-sm uppercase tracking-wide">
                            {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
                        </span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <a href="{{ route('articles.show', $article->id) }}" class="block mt-2 flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors font-heading mb-4 line-clamp-2 leading-snug">{{ $article->title }}</h3>
                        <p class="text-base text-gray-500 line-clamp-3 leading-relaxed">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                    </a>
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('articles.show', $article->id) }}" class="text-sm font-semibold text-gray-900 group-hover:text-primary-600 transition-colors inline-flex items-center">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20 bg-gray-50 rounded-2xl border border-dashed border-gray-300">
                <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <h3 class="text-lg font-medium text-gray-900 font-heading">Belum Ada Artikel</h3>
                <p class="mt-2 text-gray-500">Artikel dan berita belum dipublikasikan.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-16 flex justify-center">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
