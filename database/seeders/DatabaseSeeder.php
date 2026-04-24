<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CompanyProfile;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Edukasi4id',
            'email' => 'admin@edukasi4id.com',
            'password' => Hash::make('password'),
        ]);

        CompanyProfile::create([
            'name' => 'PT Solusi Koneksi Anda',
            'description' => 'PT Solusi Koneksi Anda adalah perusahaan penyedia infrastruktur jaringan dan solusi teknologi informasi terkemuka di Indonesia. Sejak didirikan pada tahun 2015, kami berkomitmen untuk menghubungkan bisnis dengan teknologi terbaru demi mencapai efisiensi dan pertumbuhan optimal. Dengan tim ahli bersertifikasi internasional, kami menghadirkan layanan end-to-end mulai dari perancangan infrastruktur hingga implementasi cloud dan cybersecurity tingkat lanjut. Kami percaya bahwa konektivitas yang handal adalah kunci kesuksesan bisnis di era digital.',
            'vision' => 'Menjadi penyedia solusi koneksi dan digitalisasi terbaik serta terpercaya di Asia Tenggara dengan inovasi tiada henti.',
            'mission' => '1. Menyediakan layanan infrastruktur teknologi yang andal, aman, dan berskala tinggi.<br>2. Memberikan layanan dukungan teknis 24/7 dengan respons cepat dan tepat.<br>3. Mendorong transformasi digital klien melalui adopsi teknologi mutakhir seperti AI, IoT, dan Cloud Computing.<br>4. Berinvestasi secara berkesinambungan dalam pengembangan sumber daya manusia lokal.',
            'history' => "2015: PT Solusi Koneksi Anda didirikan di Jakarta, berfokus pada penyediaan perangkat keras jaringan.\n2018: Ekspansi layanan ke ranah Cloud Migration dan Managed IT Services.\n2020: Meraih penghargaan 'Best IT Infrastructure Partner' di tingkat nasional.\n2022: Membuka kantor cabang di 5 kota besar di Indonesia, termasuk Bogor.\n2024: Meluncurkan solusi Cybersecurity terintegrasi untuk enterprise."
        ]);

        Contact::create([
            'address' => 'Jl. Raya Pajajaran No. 88 F Kota Bogor 16153',
            'phone' => '+62 251 123456 / +62 811 1234 5678',
            'email' => 'info@solusikoneksi.co.id',
            'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.385412883446!2d106.80482811477123!3d-6.598918295228185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c36399a9a3%3A0x6b1fb00c40e53a35!2sJl.%20Raya%20Pajajaran%20No.88%2C%20Bantarjati%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016153!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'
        ]);

        // Seed Services
        $services = [
            ['title' => 'Managed IT Services', 'desc' => 'Dukungan teknis komprehensif, pemeliharaan sistem, dan monitoring 24/7 untuk memastikan operasional bisnis Anda berjalan tanpa hambatan teknis.'],
            ['title' => 'Cloud Solutions', 'desc' => 'Migrasi dan manajemen cloud menggunakan AWS, Google Cloud, atau Azure. Kami membantu Anda mengoptimalkan biaya dan meningkatkan skalabilitas.'],
            ['title' => 'Cybersecurity', 'desc' => 'Perlindungan maksimal untuk data dan aset digital Anda dari ancaman siber dengan implementasi firewall mutakhir, penetration testing, dan audit keamanan.'],
            ['title' => 'Network Infrastructure', 'desc' => 'Perancangan dan implementasi infrastruktur jaringan (LAN/WAN) skala enterprise dengan performa tinggi dan ketersediaan 99.9%.'],
            ['title' => 'Custom Software Development', 'desc' => 'Pembuatan aplikasi web dan mobile kustom yang dirancang khusus untuk memenuhi kebutuhan bisnis unik Anda dengan standar kualitas tinggi.'],
            ['title' => 'IT Consulting', 'desc' => 'Konsultasi strategis untuk membantu Anda merencanakan transformasi digital dan memilih teknologi yang tepat sasaran.'],
        ];

        foreach ($services as $srv) {
            Service::create([
                'title' => $srv['title'],
                'description' => $srv['desc'] . ' Layanan ini dilengkapi dengan Service Level Agreement (SLA) untuk menjamin kepuasan Anda. Tim kami akan bekerja berdampingan dengan staf Anda untuk memastikan implementasi yang sukses.',
            ]);
        }

        // Seed Articles
        for ($i = 1; $i <= 12; $i++) {
            Article::create([
                'title' => 'Tren Teknologi Digital Tahun 2024: Apa yang Harus Disiapkan Bisnis Anda? Bagian ' . $i,
                'content' => 'Dalam lanskap bisnis modern yang bergerak cepat, transformasi digital bukan lagi sekadar pilihan melainkan keharusan untuk bertahan. Di tahun 2024 ini, kita melihat pergeseran besar menuju otomatisasi cerdas, adopsi hybrid cloud, dan peningkatan fokus pada keamanan siber.<br><br><b>Pentingnya Cloud Computing</b><br>Banyak perusahaan yang telah merasakan manfaat dari sistem cloud. Tidak hanya soal penyimpanan, tetapi komputasi awan memungkinkan tim untuk berkolaborasi secara real-time dari mana saja. Pastikan infrastruktur jaringan Anda siap menopang traffic data yang semakin besar.<br><br><b>Menghadapi Ancaman Siber Baru</b><br>Dengan semakin terhubungnya perangkat kita (IoT), celah keamanan juga semakin terbuka. Sangat penting bagi bisnis skala apapun untuk mulai melakukan audit keamanan jaringan internal mereka.',
                'published_at' => Carbon::now()->subDays(rand(1, 100)),
            ]);
        }

        // Seed Gallery
        for ($i = 1; $i <= 10; $i++) {
            Gallery::create([
                'title' => 'Dokumentasi Kegiatan dan Implementasi Klien ' . $i,
                'image' => '' // We will keep it blank so it shows "No Image" gracefully or we can add fake images later, but leaving blank is fine for now
            ]);
        }
    }
}
