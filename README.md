# Perpustakaan Laravel

Sistem Manajemen Perpustakaan sederhana yang dibangun menggunakan framework Laravel 12.

## Fitur Utama

- **Autentikasi Pengguna**: Sistem registrasi dan login untuk anggota/admin.
- **Manajemen Buku**: Pengelolaan data buku (sedang dalam pengembangan).
- **Dashboard**: Tampilan ringkasan informasi perpustakaan.

## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (SQLite/MySQL/PostgreSQL)

## Instalasi

1. **Clone repositori:**
   ```bash
   git clone https://github.com/username/perpustakaan-laravel.git
   cd perpustakaan-laravel
   ```

2. **Setup Proyek:**
   Proyek ini menyertakan skrip otomatis untuk instalasi dependensi, penyalinan `.env`, pembuatan kunci aplikasi, dan migrasi database:
   ```bash
   composer run setup
   ```

   *Atau secara manual:*
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   npm install
   npm run build
   ```

3. **Konfigurasi Database:**
   Sesuaikan pengaturan database di file `.env` jika Anda tidak menggunakan konfigurasi default.

## Menjalankan Aplikasi

Jalankan server pengembangan Laravel:
```bash
php artisan serve
```

Dan jalankan Vite untuk aset frontend:
```bash
npm run dev
```

Akses aplikasi di: [http://localhost:8000](http://localhost:8000)

## Struktur Folder Penting

- `app/Models/`: Model database (contoh: Buku, User).
- `app/Http/Controllers/`: Logika bisnis aplikasi.
- `resources/views/`: Template tampilan (Blade).
- `routes/web.php`: Definisi rute aplikasi.

## Lisensi

Proyek ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
