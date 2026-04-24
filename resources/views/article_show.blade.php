@extends('layouts.public')

@section('content')
<div class="bg-gray-100 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            @if($article->image)
                <div class="relative h-64 sm:h-80 md:h-96">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="absolute inset-0 w-full h-full object-cover">
                </div>
            @endif
            
            <div class="p-8 sm:p-12">
                <div class="flex items-center text-sm text-blue-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    {{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}
                </div>
                
                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-8">{{ $article->title }}</h1>
                
                <div class="prose prose-blue prose-lg max-w-none text-gray-700">
                    {!! nl2br(e($article->content)) !!}
                </div>
                
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <a href="{{ route('articles') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Kembali ke Daftar Artikel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
