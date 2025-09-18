# 🏥 Aplikasi QR Antrian Rumah Sakit

Aplikasi berbasis web untuk mengelola **nomor antrian pasien** dengan **QR Code**.  
Pasien dapat memilih poli, mengambil nomor antrian, dan mendapatkan QR Code yang bisa dipindai untuk validasi.

---

## 🚀 Fitur Utama
- Ambil nomor antrian per **poli** (Umum, Gigi, Anak, dll)
- Generate **QR Code** otomatis untuk setiap nomor antrian
- Tampilan web modern dengan **Navbar + Container**
- Laporan daftar pasien & nomor antrian
- Database MySQL terhubung ke PHP

---

## 📂 Struktur Folder
qr_antrian/
│── config.php # Konfigurasi database
│── index.php # Halaman utama (ambil nomor antrian)
│── generate_qr.php # Proses generate nomor + QR
│── scan.php # Halaman scan QR (opsional)
│── laporan.php # Laporan daftar antrian
│── header.php # Navbar & pembuka HTML
│── footer.php # Footer & penutup HTML
│
│── assets/
│ ├── css/
│ │ └── style.css # File CSS utama
│ ├── qr/ # Folder hasil generate QR
│ └── qrlib.php # Library QR Code

---

## 🛠️ Instalasi & Setup

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/qr_antrian.git
