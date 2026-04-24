@extends('layouts.public')

@section('content')
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-white text-center">Artikel & Informasi Terkini</h1>
        <p class="mt-4 text-xl text-blue-100 text-center max-w-3xl mx-auto">Berita terbaru dan wawasan menarik dari kami</p>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($articles as $article)
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-xl transition duration-300 flex flex-col">
                <div class="relative h-48">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="absolute inset-0 w-full h-full object-cover">
                    @else
                        <div class="absolute inset-0 bg-gray-100 flex items-center justify-center text-gray-400">No Image</div>
                    @endif
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex items-center text-sm text-blue-600 mb-3">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
                    </div>
                    <a href="{{ route('articles.show', $article->id) }}" class="block mb-3">
                        <h3 class="text-xl font-bold text-gray-900 hover:text-blue-600 transition">{{ $article->title }}</h3>
                    </a>
                    <p class="text-gray-600 mb-4 flex-grow">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-xl text-gray-500">Belum ada artikel.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-12">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
