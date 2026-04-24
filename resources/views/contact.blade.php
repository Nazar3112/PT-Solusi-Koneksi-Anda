@extends('layouts.public')

@section('content')
<div class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-white text-center">Hubungi Kami</h1>
        <p class="mt-4 text-xl text-blue-100 text-center max-w-3xl mx-auto">Kami siap membantu dan berkolaborasi dengan Anda</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Contact Info -->
                <div class="p-10 lg:p-16 bg-blue-700 text-white">
                    <h2 class="text-3xl font-extrabold mb-8">Informasi Kontak</h2>
                    <p class="text-blue-100 mb-12 text-lg">Silakan hubungi kami melalui saluran berikut atau kunjungi kantor kami.</p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6 text-lg">
                                <h3 class="font-bold text-white mb-1">Alamat</h3>
                                <p class="text-blue-100">{{ $contact->address ?? 'Alamat Belum Diatur' }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6 text-lg">
                                <h3 class="font-bold text-white mb-1">Telepon</h3>
                                <p class="text-blue-100">{{ $contact->phone ?? 'Telepon Belum Diatur' }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6 text-lg">
                                <h3 class="font-bold text-white mb-1">Email</h3>
                                <p class="text-blue-100">{{ $contact->email ?? 'Email Belum Diatur' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form (Dummy) -->
                <div class="p-10 lg:p-16 bg-white">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Kirim Pesan</h2>
                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan berhasil terkirim! (Ini adalah form demonstrasi)');">
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md" placeholder="Nama Anda" required>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input type="email" name="email" id="email" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md" placeholder="email@contoh.com" required>
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                                <div class="mt-1">
                                    <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md" placeholder="Subjek Pesan" required>
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Google Maps -->
            <div class="h-96 w-full relative bg-gray-200 flex items-center justify-center border-t border-gray-200">
                @if(isset($contact) && $contact->map_embed)
                    <div class="absolute inset-0 w-full h-full [&>iframe]:w-full [&>iframe]:h-full">
                        {!! $contact->map_embed !!}
                    </div>
                @else
                    <div class="text-gray-500">Peta Belum Diatur</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
