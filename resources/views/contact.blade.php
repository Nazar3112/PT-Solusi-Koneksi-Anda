@extends('layouts.public')

@section('content')
<!-- Page Header -->
<div class="relative bg-gray-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 to-gray-900 z-0"></div>
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-4">Hubungi Kami</h1>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto leading-relaxed">Kami siap membantu dan berkolaborasi untuk mewujudkan visi digital Anda.</p>
    </div>
</div>

<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <!-- Contact Info -->
                <div class="p-10 lg:p-16 bg-gray-900 text-white lg:col-span-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-16 -mr-16 w-64 h-64 bg-primary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
                    <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-64 h-64 bg-secondary-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
                    
                    <div class="relative z-10">
                        <h2 class="text-3xl font-extrabold mb-6 font-heading tracking-tight">Informasi Kontak</h2>
                        <p class="text-gray-400 mb-12 text-lg leading-relaxed">Silakan hubungi kami melalui saluran berikut atau kunjungi kantor kami untuk diskusi lebih lanjut.</p>
                        
                        <div class="space-y-10">
                            <div class="flex items-start group">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-2xl bg-white/10 backdrop-blur-sm text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-semibold text-white mb-2 font-heading tracking-wide">Alamat Kantor</h3>
                                    <p class="text-gray-400 leading-relaxed">{{ $contact->address ?? 'Alamat Belum Diatur' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start group">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-2xl bg-white/10 backdrop-blur-sm text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-semibold text-white mb-2 font-heading tracking-wide">Telepon</h3>
                                    <p class="text-gray-400 leading-relaxed">{{ $contact->phone ?? 'Telepon Belum Diatur' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start group">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-2xl bg-white/10 backdrop-blur-sm text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-semibold text-white mb-2 font-heading tracking-wide">Email</h3>
                                    <p class="text-gray-400 leading-relaxed">{{ $contact->email ?? 'Email Belum Diatur' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="p-10 lg:p-16 lg:col-span-3">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-8 font-heading">Kirim Pesan</h2>
                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan berhasil terkirim! (Ini adalah form demonstrasi)');" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow bg-gray-50 hover:bg-white focus:bg-white" placeholder="Nama Anda" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                                <input type="email" name="email" id="email" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow bg-gray-50 hover:bg-white focus:bg-white" placeholder="email@contoh.com" required>
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subjek Pesan</label>
                            <input type="text" name="subject" id="subject" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow bg-gray-50 hover:bg-white focus:bg-white" placeholder="Subjek pertanyaan Anda" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan Anda</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow bg-gray-50 hover:bg-white focus:bg-white resize-none" placeholder="Tuliskan detail pesan Anda di sini..." required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-white bg-primary-600 hover:bg-primary-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 w-full sm:w-auto">
                                Kirim Pesan Sekarang
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Google Maps -->
            <div class="h-96 w-full relative bg-gray-200 flex items-center justify-center border-t border-gray-100">
                @if(isset($contact) && $contact->map_embed)
                    <div class="absolute inset-0 w-full h-full [&>iframe]:w-full [&>iframe]:h-full [&>iframe]:border-0 filter grayscale hover:grayscale-0 transition-all duration-500">
                        {!! $contact->map_embed !!}
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center text-gray-500">
                        <svg class="w-12 h-12 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        <p class="font-medium">Peta Belum Diatur</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
