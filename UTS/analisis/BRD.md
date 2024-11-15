# Dokumen Persyaratan bisnis (Business Requirements Document)

### Proyek: Sistem Data Guru

## 1. Tujuan Proyek
- Aplikasi ini bertujuan untuk memudahkan admin untuk mengelola data guru

## 2. Peran Pengguna dan Izin
### Siswa
- Melihat data guru

### Admin
- Mengelola data guru: menambah, mengubah, menghapus data informasi guru secara lengkap

## 3. Persyaratan Fungsional
### Sistem Login
- akses berdasarkan Peran: Siswa dan admin memiliki hak akses berbeda

### Pengaturan dan tampilan data guru
- Siswa : hanya dapat melihat data guru
- Admin : dapat mengelola data guru (Input, Update, Delete)

## 4. Persyaratan Non-Fungsional
- Kegunaan: Antar Muka yang sudah User Friendly
- Keamanan: Hanya admin yang dapat mengelola data guru

## 5. Model, Migrasi, Seeder, dan Resource yang perlu dibuat
### Model: Guru
- Model: `Guru`, Menyimpan data Guru

### Migration
- Atribut: `id`, `name`, `pelajaran`, `created_at`, `updated_at`.
### Seeder
- Seeder: `GuruSeeder`, Untuk mengisi data guru awal untuk pengujian
### Resource
- Endpoint API untuk data guru, agar dapat diakses oleh siswa dan admin
