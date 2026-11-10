# LAPORAN PRAKTIKUM 7 PEMROGRAMAN WEB

Nama : Rizky Opras Fernanda\
NIM : 312510101\
Kelas : I252A\
Program Studi : Teknik Informatika\
Mata Kuliah : Pemrograman Web

## Langkah-Langkah Praktikum

### Persiapan Visual Studio Code dan Browser

Pertama, membuka aplikasi Visual Studio Code sebagai text editor dan
browser untuk melihat hasil dari halaman HTML.

Kemudian dibuat folder kerja didalam htdocts pada xampp dengan nama
lab7_php.

![Screenshot 1](media/ss/1.png)

Selanjutnya buat index.php.

![Screenshot 2](media/ss/2.png)

Buka Folder dalam url browser dengna mengetikan localhost/lab7_php/

![Screenshot 3](media/ss/3.png)

### Latihan 1 --- Menjalankan PHP

Mengisi index.php.

![Screenshot 4](media/ss/4.png)

Hasilnya :

Muncul header "Belajar PHP" beserta waktu server saat diakses.

![Screenshot 5](media/ss/5.png)

### Latihan 2 --- Variabel, operator, dan percabangan

![Screenshot 6](media/ss/6.png)

Hasilnya :

Program untuk menghitung nilai akhir, jika nilai akhir \>= 85
mendapatkan nilai A, nilai akhir \>= 75 mendapatkan nilai B, dan \>=60
mendapatkan nilai C dan dibawahnya akan mendapat nilai D.

![Screenshot 7](media/ss/7.png)

### Latihan 3 --- Perulangan dan array

![Screenshot 8](media/ss/8.png)

Hasilnya :

![Screenshot 9](media/ss/9.png)

### Latihan 4 --- Membuat function

Buat function tambahan untuk menghitung luas persegi panjang atau
menentukan kelulusan berdasarkan nilai.

![Screenshot 10](media/ss/10.png)

Hasilnya :

![Screenshot 11](media/ss/11.png)

### Latihan 5 --- Memproses form dengan GET

![Screenshot 12](media/ss/12.png)

Hasilnya :

Akan muncul sebuah form input, dan hasil outputnya berasal dari input
yang diasukan.

![Screenshot 13](media/ss/13.png)

### Latihan 6 --- Memproses form dengan POST

![Screenshot 14](media/ss/14.png)

Hasilnya :

Muncul sebuah form.

- Jika diisi lengkap

![Screenshot 15](media/ss/15.png)

- Jika salah satu kosong akan muncul allert

![Screenshot 16](media/ss/16.png)

- Ketika dimasukan tag html hasilnya tidak berefek ke output

![Screenshot 17](media/ss/17.png)

### Latihan 7 --- Pengolahan data sederhana

Buat form untuk memasukkan nama barang, harga, dan jumlah. PHP
menghitung subtotal dan menampilkan ringkasan transaksi.

![Screenshot 18](media/ss/18.png)

Hasilnya :

![Screenshot 19](media/ss/19.png)

- Input Desimal :

![Screenshot 20](media/ss/20.png)

Hasilnya :

![Screenshot 21](media/ss/21.png)

Subtotal dibulatkan menjadi bilangan bulat.

- Jumlah nol :

![Screenshot 22](media/ss/22.png)

Muncul allert jumlah lebih besar atau sama dengan 1.

- Jumlah negative

![Screenshot 23](media/ss/23.png)

Muncul allert jumlah lebih besar atau sama dengan 1.

- Data tidak sesuai

Jika menginputkan huruf ke dalam kolom harga dan jumlah input tidak akan
mau.

### Mini Project --- Aplikasi Formulir Data Mahasiswa

![Screenshot 24](media/ss/24.png)

Hasilnya :

![Screenshot 25](media/ss/25.png)

- Ketika data valid

![Screenshot 26](media/ss/26.png)

- Ketika terjadi kesalahan

![Screenshot 27](media/ss/27.png)

## Eksperimen Mandiri

### 1. Tambahkan perhitungan nilai rata-rata dari tiga komponen nilai.

![Screenshot 28](media/ss/28.png)

Hasilnya :

![Screenshot 29](media/ss/29.png)

### 2. Ubah contoh GET agar dapat mencari nama dari array data sederhana.

![Screenshot 30](media/ss/30.png)

Hasilnya :

![Screenshot 31](media/ss/31.png)

Jika nama yang dicari tidak ada dalam array maka akan munucl allert nama
tidak ditemukan.

### 3. Buat function untuk mengubah format harga menjadi Rupiah.

![Screenshot 32](media/ss/32.png)

Hasilnya :

![Screenshot 33](media/ss/33.png)

### 4. Tambahkan validasi agar NIM hanya berisi angka dan panjangnya sesuai ketentuan yang Anda tetapkan.

![Screenshot 34](media/ss/34.png)

Hasilnya :

![Screenshot 35](media/ss/35.png)

Jumlah NIM harus sesuai dengan batas yang telah ditentukan, disini saya
membatasi jumlahnya 9 karakter.

### 5. Tambahkan tombol reset pada form dan jelaskan perbedaannya dengan pemrosesan ulang di server.

![Screenshot 36](media/ss/36.png)

Hasilnya :

Perbedaannya :

- Reset: Menghapus atau mengembalikan isi form ke kondisi awal secara
  langsung di browser tanpa mengirim data ke server.
- Pemrosesan ulang server: Mengirim kembali data ke server untuk
  diproses menggunakan PHP, termasuk menjalankan validasi.

## Pertanyaan Evaluasi

1.  **Apa perbedaan pemrosesan client-side dan server-side?**\
    Client-side diproses di browser pengguna, sedangkan server-side
    diproses di server.

2.  **Mengapa file PHP harus dijalankan melalui web server?**\
    Karena PHP membutuhkan web server seperti Apache untuk menjalankan
    kode PHP dan menampilkan hasilnya di browser.

3.  **Apa fungsi tanda \$ pada variabel PHP?**\
    Tanda \$ digunakan untuk menandai atau membuat variabel dalam PHP.

4.  **Apa perbedaan metode GET dan POST?**\
    GET mengirim data melalui URL, sedangkan POST mengirim data melalui
    request body sehingga tidak terlihat langsung di URL.

5.  **Mengapa input pengguna perlu divalidasi di sisi server?**\
    Untuk memastikan data yang dikirim sesuai aturan dan mencegah data
    yang tidak valid masuk ke sistem.

6.  **Apa fungsi htmlspecialchars() ketika menampilkan data dari
    form?**\
    Untuk mengamankan tampilan data dengan mengubah karakter khusus HTML
    agar tidak dijalankan sebagai kode HTML atau script.

7.  **Apa manfaat penggunaan function dalam program PHP?**\
    Agar kode lebih rapi, mudah digunakan kembali, dan tidak perlu
    menulis kode yang sama berulang kali.
