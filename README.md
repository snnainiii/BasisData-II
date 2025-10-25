# 💧 Sistem Penjualan Air Minum Isi Ulang  

## 🧩 Languages Used
<p align="left">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black&style=for-the-badge" />
  <img src="https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white&style=for-the-badge" />
  <img src="https://img.shields.io/badge/CSS-2965f1?logo=css3&logoColor=white&style=for-the-badge" />


## 🧠 Deskripsi Proyek  
Proyek ini merupakan implementasi dari **sistem penjualan air minum isi ulang** menggunakan konsep **Basis Data II**.  
Sistem ini dirancang untuk membantu proses manajemen data penjualan dan pembelian air minum dengan memanfaatkan **CDM (Conceptual Data Model)** dan **PDM (Physical Data Model)**, serta fitur **View**, **Stored Procedure**, **Trigger**, dan **Cursor** pada database.

Tujuan utama dari proyek ini adalah untuk:
- Mengoptimalkan proses **pengelolaan stok dan transaksi**.  
- Memudahkan pembuatan **laporan penjualan dan pembelian** berdasarkan tanggal.  
- Mengotomatisasi perubahan data melalui penggunaan **Trigger dan Stored Procedure**.  

---

## 🏗️ Desain Database  

### 📘 CDM (Conceptual Data Model)  
CDM menggambarkan struktur konseptual dari sistem penjualan, termasuk entitas utama seperti:
- Barang  
- Pembelian  
- Penjualan  
- Supplier  
- Pelanggan  

### 💾 PDM (Physical Data Model)  
PDM mendefinisikan hubungan fisik antar tabel beserta atribut, tipe data, dan relasi antar entitas di database MySQL.

---

## 🔍 View Database  

### 📦 View pada **Penjualan**
**Deskripsi:**  
View ini digunakan untuk menampilkan detail data penjualan per tanggal.  

**Fungsi:**  
Mempermudah pembuatan laporan jumlah penjualan setiap hari.

---

### 🛒 View pada **Pembelian**
**Deskripsi:**  
View ini digunakan untuk menampilkan detail pembelian per tanggal.  

**Fungsi:**  
Mempermudah pembuatan laporan jumlah pembelian harian.

---

## ⚙️ Stored Procedure  

### 💧 Stored Procedure pada **belid**
**Deskripsi:**  
Digunakan untuk menambahkan data baru ke tabel `belid`.  

**Fungsi:**  
Mempermudah proses *insert* otomatis tanpa perlu menulis query manual.

---

### 🧾 Stored Procedure pada **juald**
**Deskripsi:**  
Digunakan untuk menambahkan data baru ke tabel `juald`.  

**Fungsi:**  
Mengotomatisasi penambahan data transaksi penjualan.

---

## 🔄 Trigger Database  

### 🟩 Trigger `AFTER INSERT` pada **belid**
- **Deskripsi:** Aktif saat data baru dimasukkan ke tabel `belid`.  
- **Fungsi:** Menambah stok pada tabel `barang` sesuai jumlah pembelian.

---

### 🟦 Trigger `AFTER UPDATE` pada **belid**
- **Deskripsi:** Aktif saat data diubah pada tabel `belid`.  
- **Fungsi:** Memperbarui stok barang setelah ada perubahan jumlah pembelian.

---

### 🟥 Trigger `AFTER DELETE` pada **belid**
- **Deskripsi:** Aktif setelah data dihapus dari tabel `belid`.  
- **Fungsi:** Mengurangi stok barang ketika data pembelian dihapus.

---

### 🟩 Trigger `AFTER INSERT` pada **juald**
- **Deskripsi:** Aktif saat data baru dimasukkan ke tabel `juald`.  
- **Fungsi:** Mengurangi stok barang sesuai jumlah penjualan.

---

### 🟦 Trigger `AFTER UPDATE` pada **juald**
- **Deskripsi:** Aktif ketika data transaksi diperbarui.  
- **Fungsi:** Menyesuaikan stok barang dengan jumlah penjualan terbaru.

---

### 🟥 Trigger `AFTER DELETE` pada **juald**
- **Deskripsi:** Aktif setelah data dihapus dari tabel `juald`.  
- **Fungsi:** Mengembalikan stok barang setelah data penjualan dihapus.

---

## 🧭 Cursor Database  

**Deskripsi:**  
Cursor dirancang untuk membaca data baris demi baris dari tabel agar dapat dilakukan pengolahan logika tertentu secara berurutan.  

**Fungsi:**  
Digunakan untuk iterasi data dalam operasi kompleks seperti perhitungan total stok atau pembaruan harga otomatis.  

---

## 💻 Teknologi yang Digunakan
| Komponen | Teknologi |
|-----------|------------|
| Database | MySQL  |
| Tools |  phpMyAdmin |
| Bahasa Query | SQL |
| ERD Tools | Draw.io |
| Sistem | Localhost (XAMPP) |

---

## 📈 Kesimpulan
Dengan menerapkan **View**, **Stored Procedure**, **Trigger**, dan **Cursor**, sistem ini mampu:  
- Mengurangi redundansi dan kesalahan input data.  
- Mengotomatisasi proses pembaruan stok.  
- Mempermudah pembuatan laporan transaksi harian.  

Proyek ini memberikan gambaran nyata tentang bagaimana konsep-konsep **Basis Data II** dapat diterapkan untuk mengelola sistem penjualan berbasis relasional dengan efisien dan terstruktur.


### ✨ Dikerjakan untuk Tugas Akhir Mata Kuliah **Basis Data II**
