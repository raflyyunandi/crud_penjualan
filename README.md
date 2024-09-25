# CodeIgniter 4 Application Starter
Mengakses CRUD

Index Data Barang 
Akses URL http://localhost:8080/barang

Edit Data Barang:

Akses URL http://localhost:8080/barang.
Klik link Edit pada salah satu data barang.
Lakukan perubahan pada form edit.
Klik Update, pastikan data terupdate di daftar barang.
Hapus Data Barang:

Akses URL http://localhost:8080/barang.
Klik link Hapus pada salah satu data barang.
Konfirmasi penghapusan.
Pastikan data terhapus dari daftar barang.
Edit Data Transaksi:

Akses URL http://localhost:8080/transaksi.
Klik link Edit pada salah satu data transaksi.
Lakukan perubahan pada form edit.
Klik Update, pastikan data terupdate di daftar transaksi.
Hapus Data Transaksi:

Akses URL http://localhost:8080/transaksi.
Klik link Hapus pada salah satu data transaksi.
Konfirmasi penghapusan.
Pastikan data terhapus dari daftar transaksi.

Index Data Transaksi 
Akses URL http://localhost:8080/transaksi
Selebihnya sama dengan barang

Mengakses API

GET /api/barang → Mengambil semua data barang
GET /api/barang/(:num) → Mengambil data barang berdasarkan id
POST /api/barang → Menambahkan data barang baru
PUT /api/barang/(:num) → Memperbarui data barang berdasarkan id
DELETE /api/barang/(:num) → Menghapus data barang berdasarkan id

GET /api/transaksi - Mendapatkan semua data transaksi
GET /api/transaksi/{id} - Mendapatkan data transaksi berdasarkan ID
POST /api/transaksi - Menambahkan transaksi baru
PUT/PATCH /api/transaksi/{id} - Mengupdate transaksi berdasarkan ID
DELETE /api/transaksi/{id} - Menghapus transaksi berdasarkan ID
