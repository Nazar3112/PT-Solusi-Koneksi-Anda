<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name ?? 'PT Solusi Koneksi Anda' }}</title>
    <meta name="description" content="{{ Str::limit($profile->description ?? 'Company Profile', 150) }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        @if(isset($profile) && $profile->logo)
                            <img class="h-10 w-auto mr-3" src="{{ asset('storage/' . $profile->logo) }}" alt="Logo">
                        @else
                            <div class="h-10 w-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">SK</div>
                        @endif
                        <span class="font-bold text-xl text-blue-900 hidden sm:block">{{ $profile->name ?? 'Company' }}</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Home</a>
                    <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Profil</a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Layanan</a>
                    <a href="{{ route('articles') }}" class="{{ request()->routeIs('articles*') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Artikel</a>
                    <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Galeri</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-600 hover:border-b-2 hover:border-blue-600 transition' }} pb-1">Kontak</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="text-gray-500 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    
                    <!-- Mobile Menu Panel -->
                    <div x-show="open" @click.away="open = false" class="absolute top-20 left-0 w-full bg-white shadow-lg border-t py-2 px-4" style="display: none;">
                        <a href="{{ route('home') }}" class="block py-2 text-gray-700">Home</a>
                        <a href="{{ route('profile') }}" class="block py-2 text-gray-700">Profil</a>
                        <a href="{{ route('services') }}" class="block py-2 text-gray-700">Layanan</a>
                        <a href="{{ route('articles') }}" class="block py-2 text-gray-700">Artikel</a>
                        <a href="{{ route('gallery') }}" class="block py-2 text-gray-700">Galeri</a>
                        <a href="{{ route('contact') }}" class="block py-2 text-gray-700">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-12 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">{{ $profile->name ?? 'Perusahaan' }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ Str::limit($profile->description ?? '', 120) }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('profile') }}" class="hover:text-white transition">Profil</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">Layanan</a></li>
                        <li><a href="{{ route('articles') }}" class="hover:text-white transition">Artikel</a></li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-white transition">Galeri</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                    @php $contact = \App\Models\Contact::first(); @endphp
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-start"><span class="mr-2">📍</span> {{ $contact->address ?? '-' }}</li>
                        <li class="flex items-center"><span class="mr-2">📞</span> {{ $contact->phone ?? '-' }}</li>
                        <li class="flex items-center"><span class="mr-2">✉️</span> {{ $contact->email ?? '-' }}</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} {{ $profile->name ?? 'Perusahaan' }}. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>
