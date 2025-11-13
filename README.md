# Lab7Web

NAMA:  SYAFIRA LUTHFI AZZAHRA

NIM: 312410353

KELAS: TI.24.A.4

MATA KULIAH: PEMROGRAMAN WEB

## Dasar PHP

Kode ini berfungsi untuk menampilkan teks dari PHP ke halaman web. Struktur HTML-nya membuat tampilan dasar halaman dengan judul “Belajar PHP Dasar”, sementara bagian PHP di dalam tag `<?php ... ?>` menjalankan perintah `echo` untuk menampilkan kalimat “Hello World”. Saat dijalankan melalui server XAMPP, browser hanya menampilkan hasil eksekusinya, bukan kode PHP-nya, karena PHP diproses di sisi server dan dikirim ke browser dalam bentuk HTML.

<img width="954" height="493" alt="Cuplikan layar 2025-11-13 202303" src="https://github.com/user-attachments/assets/b7bc8bd4-4de5-4adf-8b2a-8c45205859ba" />

## Variabel PHP

Kode ini memperkenalkan konsep variabel dalam PHP. Variabel ditandai dengan tanda dolar (`$`) di awal nama, misalnya `$nim` dan `$nama`. Masing-masing variabel menyimpan nilai teks, yaitu NIM dan nama mahasiswa. Untuk menampilkan nilai tersebut di halaman web digunakan perintah `echo`. Tanda titik (`.`) berfungsi untuk menggabungkan teks dengan isi variabel. Tag `<br>` adalah elemen HTML untuk membuat baris baru di hasil tampilan. Jadi saat dijalankan, browser akan menampilkan dua baris: satu untuk NIM dan satu lagi untuk nama. Intinya, kode ini menunjukkan cara menyimpan data di variabel dan menampilkannya di halaman web.

<img width="955" height="469" alt="Cuplikan layar 2025-11-13 203647" src="https://github.com/user-attachments/assets/04b49762-32e2-41d3-9449-ff5f6ae1fa13" />

# Form Input

Kode ini digunakan untuk membuat form input sederhana dengan PHP. Bagian atas adalah form HTML yang berisi kolom teks untuk mengisi nama dan tombol Kirim. Atribut `method="post"` menentukan bahwa data dikirim ke server menggunakan metode POST, bukan GET. Setelah tombol diklik, PHP akan membaca data yang dikirim melalui variabel global `$_POST`, tepatnya `$_POST['nama']`, yang berisi nilai dari input pengguna. Kondisi `if ($_SERVER["REQUEST_METHOD"] == "POST")` digunakan untuk memastikan bahwa kode di dalamnya hanya dijalankan setelah form disubmit. Setelah data diterima, program menampilkan teks “Selamat Datang, [nama yang dimasukkan]”. Intinya, kode ini menjelaskan bagaimana cara PHP menerima input dari pengguna lewat form HTML dan menampilkannya kembali ke browser.

<img width="956" height="362" alt="Cuplikan layar 2025-11-13 203831" src="https://github.com/user-attachments/assets/0ef60449-d807-4eb9-80ba-2562c2f1bc90" />

## Operator

Kode ini menjelaskan cara menggunakan operator aritmatika di PHP. Variabel `$gaji` menyimpan nilai gaji pokok, dan `$pajak` berisi persentase pajak 10%. Perhitungan gaji bersih dilakukan dengan mengurangi gaji pokok dikalikan pajak, lalu hasilnya disimpan dalam `$gaji_bersih`. Fungsi `number_format()` digunakan untuk memformat angka agar tampil dengan tanda titik sebagai pemisah ribuan, seperti format uang di Indonesia. Setiap baris `echo` digunakan untuk menampilkan nilai gaji, pajak, dan gaji bersih ke halaman web. Jadi hasil akhirnya akan menampilkan tiga baris: gaji sebelum pajak, jumlah pajak, dan gaji bersih. Intinya, kode ini menunjukkan cara melakukan perhitungan matematis dan menampilkan hasil dalam format rupiah.

<img width="957" height="408" alt="Cuplikan layar 2025-11-13 204459" src="https://github.com/user-attachments/assets/8321f44b-7f53-479d-8ab0-c9b5e55dcdf9" />

## Kondisi

Kode ini menampilkan contoh penggunaan dua jenis struktur kondisi di PHP, yaitu `if-elseif-else` dan `switch`. Pertama, variabel `$nama_hari` menyimpan nama hari saat ini dengan fungsi `date("l")`, misalnya “Sunday” atau “Monday”. Di bagian pertama, program menggunakan `if` untuk memeriksa nilai `$nama_hari`. Kalau hari ini “Sunday”, maka muncul teks “Sekarang hari Minggu”; kalau “Monday”, muncul “Sekarang hari Senin”; dan kalau “Tuesday”, muncul “Sekarang hari Selasa”. Jika tidak cocok dengan tiga itu, program menampilkan “Sekarang bukan Minggu, Senin, atau Selasa”. Setelah itu, ada garis pemisah (`<hr>`) dan contoh kedua dengan struktur `switch`. Fungsinya sama, tapi penulisannya lebih ringkas untuk banyak pilihan. `switch` membandingkan `$nama_hari` dengan beberapa kemungkinan: kalau nilainya “Sunday”, tampil “Hari ini Minggu”; kalau “Monday”, tampil “Hari ini Senin”; kalau “Tuesday”, tampil “Hari ini Selasa”; dan kalau tidak ada yang cocok, bagian `default` akan dijalankan dengan hasil “Hari ini hari lain”.

<img width="955" height="505" alt="Cuplikan layar 2025-11-13 204922" src="https://github.com/user-attachments/assets/2effb0a9-a7c1-4e0f-9307-9db48fda3203" />

## Perulangan

### **1. For**

Kode ini menampilkan dua contoh penggunaan perulangan for dalam PHP. Pada bagian pertama, perintah `for ($i = 1; $i <= 10; $i++)` digunakan untuk membuat perulangan dari angka 1 sampai 10. Variabel `$i` diinisialisasi dengan nilai 1, kemudian setiap kali perulangan dijalankan, `$i` bertambah satu (`$i++`) hingga mencapai nilai 10. Setiap pengulangan akan menampilkan teks “Perulangan ke-[angka]”, sehingga hasilnya muncul dari “Perulangan ke-1” sampai “Perulangan ke-10”. Setelah itu, program menampilkan garis pemisah (`<hr>`) dan melanjutkan ke perulangan kedua. Di bagian ini, `for ($i = 10; $i >= 1; $i--)` melakukan hal yang sama, tetapi arah perulangannya terbalik. Variabel `$i` dimulai dari 10 dan setiap kali perulangan dijalankan, nilainya berkurang satu (`$i--`) sampai mencapai 1. Akibatnya, hasilnya ditampilkan dari “Perulangan ke-10” menurun hingga “Perulangan ke-1”.

<img width="957" height="729" alt="Cuplikan layar 2025-11-13 205520" src="https://github.com/user-attachments/assets/0d238201-ff13-4df7-a9b1-b5a2a8bea505" />

### **2. While**

Kode ini menampilkan contoh penggunaan perulangan while di PHP untuk menampilkan angka dari 1 sampai 10. Variabel `$i` diinisialisasi terlebih dahulu dengan nilai 1 sebelum perulangan dimulai. Struktur `while ($i <= 10)` berarti selama nilai `$i` masih kurang dari atau sama dengan 10, perintah di dalam blok `while` akan dijalankan terus-menerus. Di dalam perulangan, baris `echo "Perulangan ke-$i<br>";` menampilkan teks dengan nilai `$i` saat itu, lalu `$i++` berfungsi untuk menambah nilai `$i` satu per satu agar perulangan bisa berhenti setelah mencapai angka 10. Jika `$i` tidak ditambah, maka kondisi `$i <= 10` akan selalu benar dan menyebabkan loop tak berujung.

<img width="954" height="516" alt="Cuplikan layar 2025-11-13 205600" src="https://github.com/user-attachments/assets/b40f8a54-e8b6-4ce2-9098-50d266f15615" />

### **3. Do While**

Kode ini menampilkan contoh penggunaan perulangan do...while di PHP untuk menampilkan angka dari 1 sampai 10. Variabel `$i` diawali dengan nilai 1, kemudian blok `do { ... } while ($i <= 10);` akan menjalankan perintah di dalam `{}` terlebih dahulu sebelum memeriksa kondisi. Pada bagian `echo "Perulangan ke-$i<br>";`, program menampilkan teks sesuai nilai `$i` saat itu. Setelah itu, `$i++` menambah nilai `$i` satu per satu. Setelah satu kali proses selesai, kondisi `($i <= 10)` baru diperiksa. Jika kondisi masih benar, perulangan dijalankan lagi; kalau salah, program berhenti.

<img width="959" height="491" alt="Cuplikan layar 2025-11-13 205626" src="https://github.com/user-attachments/assets/ef6f6238-ed08-458a-95fe-cda5339de017" />

# TUGAS LAB7WEB

Kode ini membuat program PHP yang menampilkan form untuk mengisi data diri, lalu menampilkan hasilnya setelah tombol diklik. Form tersebut memiliki tiga input: nama, tanggal lahir, dan pekerjaan. Setelah pengguna mengisi dan menekan tombol kirim, data dikirim ke server menggunakan metode POST. Nilai dari setiap input disimpan ke dalam variabel `$nama`, `$tanggal_lahir`, dan `$pekerjaan`. Bagian PHP di bawah form menghitung umur secara otomatis dengan memanfaatkan kelas `DateTime`. Nilai tanggal lahir diubah menjadi objek waktu, lalu dibandingkan dengan tanggal hari ini menggunakan `$hari_ini->diff($lahir)->y` untuk mendapatkan selisih tahunnya. Hasilnya disimpan ke variabel `$umur`. Kemudian digunakan struktur `switch` untuk menentukan gaji berdasarkan pekerjaan yang dipilih. Setiap pekerjaan punya nilai gaji berbeda, misalnya Pengacara Rp12.000.000, Dokter Rp10.000.000, Detektif Rp9.000.000, Chef Rp7.000.000, dan Jurnalis Rp8.000.000. Jika tidak ada yang cocok, gaji akan bernilai 0. Setelah semua proses selesai, hasilnya ditampilkan di halaman web dengan format yang lebih rapi. Fungsi `date('d-m-Y', strtotime($tanggal_lahir))` digunakan untuk menampilkan tanggal lahir dalam format Indonesia, dan `number_format()` membuat angka gaji tampil seperti format rupiah. Output akhir menampilkan nama, tanggal lahir, umur, pekerjaan, serta gaji yang sesuai dengan pilihan pengguna.

<img width="955" height="627" alt="Cuplikan layar 2025-11-13 210208" src="https://github.com/user-attachments/assets/b0063ccd-5333-431c-8c2f-530a482fa3e4" />

<img width="957" height="706" alt="Cuplikan layar 2025-11-13 210241" src="https://github.com/user-attachments/assets/ce045b88-2611-417d-bcc7-518fbaa2ee30" />

