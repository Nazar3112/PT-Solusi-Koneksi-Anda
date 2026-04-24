<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h3 class="text-2xl font-bold mb-4">Selamat Datang di Admin Panel</h3>
                    <p class="mb-8">Gunakan menu di atas untuk mengelola konten website Company Profile.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class="bg-blue-100 p-6 rounded-lg shadow">
                            <h4 class="text-lg font-bold text-blue-800">Total Layanan</h4>
                            <p class="text-3xl font-extrabold text-blue-600 mt-2">{{ $servicesCount }}</p>
                        </div>
                        <div class="bg-green-100 p-6 rounded-lg shadow">
                            <h4 class="text-lg font-bold text-green-800">Total Artikel</h4>
                            <p class="text-3xl font-extrabold text-green-600 mt-2">{{ $articlesCount }}</p>
                        </div>
                        <div class="bg-yellow-100 p-6 rounded-lg shadow">
                            <h4 class="text-lg font-bold text-yellow-800">Total Galeri</h4>
                            <p class="text-3xl font-extrabold text-yellow-600 mt-2">{{ $galleriesCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
