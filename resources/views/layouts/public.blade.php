<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name ?? 'PT Solusi Koneksi Anda' }}</title>
    <meta name="description" content="{{ Str::limit($profile->description ?? 'Company Profile', 150) }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1', // Indigo 500
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        secondary: {
                            500: '#06b6d4', // Cyan 500
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #c7d2fe; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #818cf8; 
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen antialiased selection:bg-primary-500 selection:text-white">

    <!-- Navigation -->
    <nav class="glass-nav fixed w-full top-0 z-50 transition-all duration-300" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center transition-all duration-300" :class="scrolled ? 'h-16' : 'h-20'">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3 group">
                        @if(isset($profile) && $profile->logo)
                            <img class="h-10 w-auto group-hover:scale-105 transition-transform duration-300" src="{{ asset('storage/' . $profile->logo) }}" alt="Logo">
                        @else
                            <div class="h-10 w-10 bg-gradient-to-br from-primary-600 to-secondary-500 rounded-xl shadow-lg flex items-center justify-center text-white font-bold text-xl group-hover:scale-105 transition-transform duration-300">SK</div>
                        @endif
                        <span class="font-heading font-bold text-xl text-gray-900 hidden sm:block tracking-tight">{{ $profile->name ?? 'Company' }}</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    @php
                        $navLinks = [
                            ['route' => 'home', 'label' => 'Home'],
                            ['route' => 'profile', 'label' => 'Profil'],
                            ['route' => 'services', 'label' => 'Layanan'],
                            ['route' => 'articles', 'label' => 'Artikel'],
                            ['route' => 'gallery', 'label' => 'Galeri'],
                        ];
                    @endphp
                    
                    @foreach($navLinks as $link)
                        <a href="{{ route($link['route']) }}" 
                           class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 {{ request()->routeIs($link['route'].'*') ? 'text-primary-600 bg-primary-50' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-100' }}">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                    
                    <a href="{{ route('contact') }}" 
                       class="ml-4 px-5 py-2.5 rounded-full text-sm font-medium text-white bg-gray-900 hover:bg-primary-600 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                        Hubungi Kami
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="open = !open" type="button" class="text-gray-600 hover:text-primary-600 focus:outline-none p-2 rounded-lg bg-gray-100">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" x-show="!open"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" x-show="open" style="display: none;"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Panel -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             @click.away="open = false" 
             class="md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-gray-100" style="display: none;">
            <div class="px-4 pt-2 pb-6 space-y-1">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}" class="block px-4 py-3 rounded-xl {{ request()->routeIs($link['route'].'*') ? 'bg-primary-50 text-primary-600 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">{{ $link['label'] }}</a>
                @endforeach
                <a href="{{ route('contact') }}" class="block mt-4 px-4 py-3 text-center rounded-xl bg-gray-900 text-white font-medium hover:bg-primary-600 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Modern Footer -->
    <footer class="bg-gray-900 text-white relative overflow-hidden mt-20">
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500 to-transparent opacity-50"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-2">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                        @if(isset($profile) && $profile->logo)
                            <img class="h-10 w-auto bg-white rounded p-1" src="{{ asset('storage/' . $profile->logo) }}" alt="Logo">
                        @else
                            <div class="h-10 w-10 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-xl flex items-center justify-center text-white font-bold text-xl">SK</div>
                        @endif
                        <span class="font-heading font-bold text-2xl tracking-tight text-white">{{ $profile->name ?? 'Perusahaan' }}</span>
                    </a>
                    <p class="text-gray-400 text-base leading-relaxed max-w-md">{{ Str::limit($profile->description ?? 'Deskripsi perusahaan.', 180) }}</p>
                </div>
                
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-6 text-white tracking-wide">Eksplorasi</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-primary-400 transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('profile') }}" class="hover:text-primary-400 transition-colors duration-200">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary-400 transition-colors duration-200">Layanan</a></li>
                        <li><a href="{{ route('articles') }}" class="hover:text-primary-400 transition-colors duration-200">Artikel</a></li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-primary-400 transition-colors duration-200">Galeri</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-6 text-white tracking-wide">Hubungi Kami</h3>
                    @php $contact = \App\Models\Contact::first(); @endphp
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-sm">{{ $contact->address ?? '-' }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span class="text-sm">{{ $contact->phone ?? '-' }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span class="text-sm">{{ $contact->email ?? '-' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; {{ date('Y') }} <span class="text-gray-400 font-medium">{{ $profile->name ?? 'Perusahaan' }}</span>. All rights reserved.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors"><span class="sr-only">Facebook</span><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg></a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors"><span class="sr-only">Instagram</span><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/></svg></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS Initialization -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
            });
        });
    </script>
</body>
</html>
