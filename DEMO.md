# Skenario Demo Aplikasi Perpustakaan

Dokumen ini berisi urutan demonstrasi aplikasi Perpustakaan untuk persiapan UAS.

## 1. Persiapan Demo

Sebelum demo dimulai:

1. Pastikan database sudah terisi dan aplikasi dapat dijalankan.
2. Jalankan server utama pada port `8000`.
3. Jalankan internal API pada port `8011` di terminal lain.
4. Siapkan akun untuk login.
5. Siapkan Postman dan request API yang akan ditunjukkan.

## 2. Urutan Demonstrasi

### Langkah 1 — Login

1. Buka aplikasi melalui `http://127.0.0.1:8000`.
2. Masukkan email/username dan password akun yang telah disiapkan.
3. Tunjukkan bahwa pengguna berhasil masuk ke aplikasi.

### Langkah 2 — Menampilkan Dashboard

1. Setelah login, akan terbuka halaman Dashboard.
2. Disini akan terlihat data-data tentang buku, anggota, dan peminjaman.

### Langkah 3 — Menambahkan Kategori

1. Buka menu Kategori pada navigasi di atas.
2. Klik tombol "Tambah Kategori".
3. Isi nama kategori dan deskripsi.
4. Pastikan data kategori sudah benar, lalu klik tombol "Simpan".

### Langkah 4 — Menambahkan Buku

1. Buka menu Buku pada navigasi di atas.
2. Klik tombol "Tambah Buku".
3. Isi data buku sesuai form.
4. Pastikan data buku sudah benar, lalu klik tombol "Simpan".

### Langkah 5 — Menambahkan Anggota

1. Buka menu Anggota pada navigasi di atas.
2. Klik tombol "Tambah Anggota".
3. Isi data anggota sesuai form.
4. Pastikan data anggota sudah benar, lalu klik tombol "Simpan".

### Langkah 6 — Membuat Peminjaman

1. Buka menu Peminjaman pada navigasi di atas.
2. Klik tombol "Tambah Peminjaman".
3. Isikan nama anggota, tanggal pinjam dan kembalinya, serta buku yang akan dipinjam.
4. Simpan transaksi.

### Langkah 7 — Melihat Daftar Peminjaman Aktif

1. Buka daftar peminjaman.
2. Akan terpampang list peminjaman yang sudah pernah dilakukan beserta dengan status pengembalian.

### Langkah 8 — Memproses Pengembalian

1. Pilih salah satu transaksi peminjaman yang masih aktif pada halaman Peminjaman.
2. Edit peminjaman.
3. Ubah status pengembalian pada form, lalu klik tombol "Perbarui".

### Langkah 9 — Menampilkan Laporan

1. Buka menu Laporan pada navigasi di atas.
2. Akan muncul list laporan peminjaman.

### Langkah 10 — Demo API Menggunakan Postman

1. Buka Postman.
2. Siapkan request ke base URL API: `http://127.0.0.1:8000/api`.
3. Kirim request sesuai keinginan (bisa mencoba API /books, /members, /loans, dan /stats).

> Catatan: Gunakan endpoint dan payload yang benar-benar tersedia pada project. Siapkan request Postman terlebih dahulu agar demo berjalan lancar.

## 3. Penutup

Akhiri demonstrasi dengan memastikan alur utama aplikasi telah ditunjukkan, mulai dari pengelolaan data kategori, buku, dan anggota hingga transaksi peminjaman, pengembalian, laporan, serta API.
