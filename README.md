# Dokumentasi Ujian Kompetensi & Project README
**Company Profile - PT Solusi Koneksi Anda**

Dokumen ini berisi penjelasan teoritis terkait pengembangan perangkat lunak dan panduan mengenai *source code* project aplikasi Company Profile ini yang dipersiapkan untuk *repository* GitHub.

---

## Bagian I: Penerapan Konsep Pengembangan Perangkat Lunak Pada Project Ini

**1. Tahapan Pembuatan Halaman Aplikasi dari Sisi Kenyamanan Pengguna (UX/UI)**
Pada project PT Solusi Koneksi Anda, tahapan desain difokuskan pada kemudahan pengunjung (calon klien) dalam mencari informasi. Halaman Home, Layanan, dan Profil dirancang dengan navigasi *sticky* di bagian atas, penggunaan hierarki warna korporat (biru), dan alur informasi yang terstruktur (mulai dari Hero Banner, Keunggulan, hingga Layanan) agar pengunjung langsung memahami solusi IT yang ditawarkan perusahaan.

**2. Tujuan Implementasi Perancangan Tampilan**
Tujuan implementasi antarmuka pada website ini adalah untuk membangun kredibilitas dan profesionalisme PT Solusi Koneksi Anda. Tampilan dirancang bersih (*clean design*), informatif, dan responsif (nyaman dibuka di *smartphone* maupun desktop). Elemen visual seperti efek *hover* pada galeri dan *embed* Google Maps pada halaman kontak bertujuan untuk memberikan kenyamanan dan mempercepat interaksi calon klien.

**3. Jenis Bahasa Perancangan Tampilan**
Website company profile ini dibangun menggunakan kerangka **HTML** yang di-generate melalui *Blade Templating Engine* bawaan Laravel. Untuk menata tata letaknya, project ini sangat bergantung pada **Tailwind CSS** (disematkan via CDN) sebagai kerangka *styling*, serta menggunakan **Alpine.js** untuk menghidupkan interaktivitas *frontend* seperti menu *dropdown* pada tampilan *mobile* dan *modal popup* gambar pada halaman Galeri.

**4. Analisis Peletakan Kode Bahasa Perancangan Tampilan (CSS)**
Alih-alih menggunakan file CSS eksternal terpisah yang berisi ribuan baris, project ini menggunakan pendekatan *Utility-first CSS* (Tailwind). Peletakan kode *styling* dilakukan langsung secara *inline* pada atribut `class=""` di elemen HTML (contoh: `<div class="bg-blue-600 text-white font-bold">`). Hal ini memudahkan pelacakan desain secara langsung pada file `home.blade.php` atau `contact.blade.php` tanpa perlu berpindah-pindah file.

**5. Pemahaman Penggunaan Variable**
Dalam project ini, variabel sangat krusial untuk membuat website menjadi dinamis. Sebagai contoh, di `PageController.php`, terdapat variabel `$services` dan `$articles` yang berfungsi untuk menampung data layanan dan berita yang diambil dari database SQLite. Variabel tersebut kemudian dioper (*passing*) ke antarmuka Blade, sehingga tampilan selalu ter-*update* saat admin mengubah data.

**6. Kode Pemberian Komentar dalam Program**
Pemberian komentar dapat dilihat dengan jelas pada file `routes/web.php` (contoh: `// Frontend Routes` dan `// Admin Routes`). Pada file Blade (HTML), komentar diposisikan menggunakan sintaks `<!-- Header -->` atau `<!-- Layanan Unggulan -->`.

**7. Analisis Pendeklarasian Variable dalam penulisan kode PHP**
Deklarasi variabel dalam project ini menggunakan tanda dollar (`$`). Contohnya terlihat di file `DatabaseSeeder.php`, di mana data awal (dummy data) diinisialisasi melalui variabel `$services = [...]`. Variabel di Laravel (PHP) bersifat dinamis sehingga bisa menyimpan tipe data *string* hingga *Collection* (objek array kompleks dari Eloquent ORM).

**8. Manfaat dan Tujuan Adanya Komentar dalam Kode**
Komentar yang disematkan dalam file *routes* dan *view* project ini sangat berguna untuk memetakan arsitektur aplikasi. Pembagian komentar "Admin Routes" dan "Frontend Routes" mencegah programmer lain yang kelak memelihara (*maintain*) website ini agar tidak salah meletakkan rute baru, yang mana dapat berpotensi membahayakan keamanan jika rute publik tak sengaja masuk ke grup rute yang dilindungi (*auth*).

**9 & 14. Manfaat Penggunaan Library dalam Pengembangan**
Pembuatan aplikasi ini menjadi sangat efisien berkat pemanfaatan *library* dan *framework*. Penggunaan **Laravel** mempercepat penulisan logika ORM dan keamanan. *Library* **Laravel Breeze** secara instan menyediakan sistem *Login* dan keamanan sesi untuk Admin Panel tanpa perlu membangun otentikasi dari nol. Sementara **Tailwind CSS** memungkinkan pembentukan UI modern secara instan, sehingga standar Ujikom dapat terpenuhi dengan cepat.

**10. Manfaat Efisiensi dalam Kode Sumber**
Untuk mencegah beban server (terutama pada file SQLite), efisiensi kueri database diterapkan di controller. Pada halaman Home (`PageController@home`), pengambilan data dibatasi dengan perintah `->take(3)`. Selain itu, pada halaman Artikel dan Galeri, data tidak dimuat sekaligus melainkan diefisienkan menggunakan teknik paginasi (`->paginate(9)`), sehingga loading *website* tetap ringan meskipun perusahaan mengunggah ratusan artikel.

**11. Kode Perintah Menampilkan Data Setelah Proses Simpan**
Saat Administrator perusahaan menambahkan data Layanan atau Artikel baru di *backend*, `ServiceController@store` menggunakan sintaks *return redirect* bawaan Laravel:
```php
return redirect()->route('admin.services.index')->with('success', 'Data berhasil ditambahkan!');
```
Kode ini mengembalikan layar ke halaman tabel (`index`) sekaligus menyertakan *Flash Session* berisi pesan sukses yang langsung di-render pada UI admin.

**12. Jenis Kondisi dalam Logika Pemrograman**
Penerapan *If Condition* sangat masif digunakan dalam sistem *templating* Blade project ini. Salah satu penerapannya adalah pemeriksaan kondisi gambar. Terdapat blok `@if($service->image)` pada tampilan layanan; jika admin mengunggah gambar saat membuat layanan, maka tag `<img>` akan ditampilkan, namun jika tidak (kondisi `@else`), sistem akan merender kotak kosong (*placeholder*) bertuliskan "No Image" agar layout tidak rusak (*broken*).

**13. Analisis Elemen Array**
Penggunaan Array banyak digunakan dalam project ini, terutama *Multidimensional Associative Array*. Pada proses integrasi data awal (Seeder), daftar layanan PT Solusi Koneksi Anda dideklarasikan dalam format array multi-dimensi `['title' => 'Managed IT Services', 'desc' => '...']`. Struktur pasangan indeks (*key*) dan nilai (*value*) ini memudahkan proses iterasi (perulangan) otomatis ke dalam database saat perintah migrasi dieksekusi.

**15. Keuntungan Penggunaan Class Unit Reuse**
Dalam project ini, konsep *reusability* (penggunaan ulang) diterapkan pada sistem *layouting* antarmuka. Kita menggunakan file induk `resources/views/layouts/public.blade.php` yang berisi elemen repetitif seperti Navigasi (Header) dan Footer. Halaman spesifik seperti Kontak atau Profil hanya memanggil struktur tersebut menggunakan sintaks `@extends('layouts.public')`. Hal ini menghemat ribuan baris kode HTML dan sangat memudahkan pemeliharaan: jika ada perubahan nomor telepon di *Footer*, kita hanya perlu mengubah satu file induk saja.

---

## Bagian II: Penjelasan Project - PT Solusi Koneksi Anda

### Deskripsi Proyek
Proyek ini adalah sistem **Company Profile Dinamis** untuk PT Solusi Koneksi Anda. Aplikasi ini dibangun guna mempublikasikan informasi mengenai perusahaan, sejarah, layanan yang ditawarkan, publikasi artikel/berita terkini, dokumentasi galeri, dan kontak perusahaan. Website ini dilengkapi dengan *Content Management System* (Admin Panel) sehingga administrator dapat memperbarui konten website tanpa perlu menyentuh kode program.

### Teknologi yang Digunakan
- **Framework Utama**: Laravel v12.x (PHP 8.2+)
- **Database**: SQLite (Ringan, mudah didistribusikan, dan *zero-configuration* yang sangat cocok untuk keperluan Uji Kompetensi lokal).
- **Styling Frontend**: Tailwind CSS (melalui CDN untuk memastikan portabilitas tanpa memerlukan Node.js/NPM lokal).
- **Interaktivitas Frontend**: Alpine.js.
- **Sistem Autentikasi**: Laravel Breeze (Blade).

### Fitur Utama
1. **Frontend (Publik Area)**:
   - **Beranda (Home)**: Menampilkan banner, nilai perusahaan, statistik singkat, dan daftar sorotan layanan & artikel.
   - **Profil Perusahaan**: Menampilkan sejarah, Visi, Misi, dan susunan Tim Manajemen.
   - **Layanan / Produk**: Menampilkan grid layanan yang ditawarkan perusahaan.
   - **Artikel Terkini**: Menampilkan daftar berita atau blog yang terpaginasi beserta halaman baca detailnya.
   - **Galeri Kegiatan**: Menampilkan foto-foto dokumentasi dengan efek interaktif.
   - **Kontak Kami**: Menampilkan info alamat, telepon, form pesan, dan *embed* Google Maps.

2. **Backend (Admin Panel)**:
   - **Dashboard**: Melacak jumlah data metrik (total layanan, artikel, galeri).
   - **Manajemen Profil & Kontak**: Form pengubah data statis (Sejarah, Visi, Misi, Alamat, dll).
   - **CRUD Data**: Fitur Tambah, Baca, Ubah, Hapus untuk modul **Layanan**, **Artikel**, dan **Galeri**.
   - **Upload Gambar**: Integrasi dengan `Storage Link` bawaan Laravel untuk sistem penyimpanan gambar yang rapi.

### Cara Menjalankan Proyek (Setup Guide)
1. **Clone/Download** *repository* ini ke komputer lokal Anda.
2. Buka terminal di direktori *root* aplikasi.
3. Jalankan server bawaan Laravel:
   ```bash
   php artisan serve
   ```
4. Buka Browser Anda:
   - **Website Publik**: `http://localhost:8000`
   - **Login Admin**: `http://localhost:8000/login`
5. **Kredensial Admin Default**:
   - **Email**: `admin@edukasi4id.com`
   - **Password**: `password`

> **Catatan Ujikom**: Aplikasi ini didesain sepenuhnya *portable* dengan basis *database* SQLite. Tidak diperlukan konfigurasi MySQL atau XAMPP server tambahan. Semua aset gambar (Storage Link) dan dependensi esensial telah digabungkan agar dapat beroperasi pada saat demonstrasi berlangsung.
