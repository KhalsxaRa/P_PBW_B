#### Nama : Khalissa Raihanah Azhari
###   npm : 4523210122
---- 
## Tujuan
Untuk mempelajari cara melakukan cloning repository dari GitHub dan mengunggah hasilnya (push) ke repository pribadi. Selain itu, dilakukan juga proses menjalankan project menggunakan Laragon terminal untuk memastikan aplikasi dapat berjalan.

---
## Langkah - langkah Cloning
1. Cloning repository :
   - repository pribadi mahasiswa
     `https://github.com/KhalsxaRa/P_PBW-B`   
     - repository dosen
     `https://github.com/adiwp/smpmentari.git`
2. Mahasiswa melakukan cloning repository dosen dengan perintah
   ```bash
   git clone `https://github.com/adiwp/smpmentari.git`
3. Setelah proses selesai, folder bernama smpmentari otomatis muncul di direktori lokal.

---
## Langkah - langkah push ke repository pribadi
1. Semua file dari folder `smpmentari` disalin ke folder repository pribadi mahasiswa.
1.1 cek repo github yg terhubung
 git remote -v
 dari github desktop saya buat repository :
 P_PBW-B sehingga memiliki link path : C:\...\Download\P_PBW-B

2. untuk memasukkan folder ke repo P_PBW-B Buka Git Bash di folder repo pribadi, lalu jalankan:
   ```bash
   git add praktikum5
   git commit -m "Menyalin file dari repo dosen"
   git pull
   git push 
   

---
## Langkah - langkah menjalankan projek dengan terminal laragon
1. Masuk ke folder projek:
   ```bash
   E:\...\prakprogweb\praktikum5\2025\smpmentari
2. Jalankan perintah untuk menginstal composer:
   ```bash
   composer install
3. Lanjutkan dengan instalasi frontend menggunakan npm:
   ```bash
   npm install
4. Duplikat file environment contoh menjadi file utama dengan:
   ```bash
   cp .env.example .env
5. Buat key aplikasi Laravel menggunakan:
   ```bash
   php artisan key:generate
6. Buka folder `database` melalui terminal, lalu buat database kosong dengan:
   ```bash
   touch database/database.sqlite
7. Kembali ke folder utama projek dan jalankan migrasi database:
   ```bash
   php artisan migrate
8. ntuk menjalankan mode pengembangan, menggunakan:
   ```bash
   npm run dev
9. Apabila ingin membuat versi build, jalankan:
   ```bash
   npm run build
10. Jalankan server Laravel agar project bisa diakses melalui browser:
    ```bash
    php artisan serve

---
## SS hasil running
1. Menu utama / Home:
  ![alt text](<Screenshot 2025-10-17 110906-2.png>)
2. Menu buku tamu:

![alt text](<Screenshot 2025-10-17 112053-2.png>)
---
## Kesimpulan
Dari percobaan ini, saya jadi paham cara melakukan cloning repository dari GitHub, memindahkan file ke repository pribadi, dan menjalankan project Laravel lewat terminal Laragon. Awalnya sempat ada sedikit kendala saat proses running, tapi setelah mengikuti langkah-langkah dengan benar, project akhirnya bisa berjalan lancar di browser. Secara keseluruhan, percobaan ini membantu saya lebih paham alur kerja Git dan cara menjalankan aplikasi Laravel dari awal sampai bisa diakses.
