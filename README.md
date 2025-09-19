# 🏥 Aplikasi QR Antrian Rumah Sakit

Aplikasi berbasis web untuk mengelola **nomor antrian pasien** dengan **QR Code**.  
Pasien dapat memilih poli, mengambil nomor antrian, dan mendapatkan QR Code yang bisa dipindai untuk validasi.

---

## 🚀 Fitur Utama
- Ambil nomor antrian per poli (Umum, Gigi, Anak, dll)
- Generate QR Code otomatis untuk setiap nomor antrian
- Halaman admin untuk mengelola antrian
- Laporan daftar pasien dan nomor antrian
- Tampilan web modern dengan Navbar dan Container
- Database MySQL terhubung ke PHP

---

## 📂 Struktur Folder
qr_antrian/
├── assets/ # File gambar dan aset lainnya
├── sgl/ # File SQL dan database
├── index.php # Halaman utama
├── register.php # Halaman pendaftaran pasien
├── checkin.php # Halaman check-in pasien
├── call_next.php # Halaman untuk memanggil pasien berikutnya
├── admin.php # Halaman admin
├── config.php # Konfigurasi database
├── header.php # Header tampilan web
├── footer.php # Footer tampilan web
└── README.md # Dokumentasi proyek

---


## 🚀 Cara Menjalankan Aplikasi

1. Clone repositori:

```bash
git clone https://github.com/andinineo/qr_antrian.git

Impor file sgl/qr_antrian.sql ke MySQL.

Sesuaikan konfigurasi database di config.php:
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'qr_antrian';


