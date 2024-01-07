<h1>Final Project: Ujian Akhir Semester</h1>

```bash
Kelompok 2      : - Wisnu Ikhwansyah Saputra  (312110305)
                  - Roswanda Nuraini          (312110328)
                  - Fabian Eka Prasetyo       (312110301)
Judul Project   : Database Checklist Kebersihan Toilet
Kelas           : TI. 22. A3
Mata Kuliah     : Pemrograman Web 1
Dosen Pengampu  : Agung Nugroho,S.Kom.,M.Kom
```

<h2>Demo Aplikasi, Domain, dan Laporan</h2>

1. Demo terlampir pada link youtube, klik disini:
   
<img src=https://download.logo.wine/logo/YouTube/YouTube-Logo.wine.png width="120px">

2. Domain aplikasi on Web Hosting, klik disini:

<img src=https://res.cloudinary.com/practicaldev/image/fetch/s--ux15-5qy--/c_imagga_scale,f_auto,fl_progressive,h_1080,q_auto,w_1080/https://dev-to-uploads.s3.amazonaws.com/i/a12tj8n6facp0kt0xb0n.jpeg width="120px">

3. Laporan PDF, klik disini:
   
[<img src=https://images.bisnis.com/posts/2021/01/14/1342816/drive.jpg width="120px">](https://drive.google.com/drive/folders/1-YAKQ6fySpLI8VmUGtiW4Cl902vjV2J9?usp=sharing)

<h2>Akses User Login</h2>

```bash
- Checklist-Kebersihan-Toilet_1 (Domain Aplikasi)

Username : admin

Password : admin

- Checklist-Kebersihan-Toilet_2

Username : admin

Password : admin
```

 <h2>Penjelasan Sistem Checklist Kebersihan Toilet</h2>
 
Sistem Checklist Kebersihan Toilet berbasis web menggunakan CodeIgniter 4 dan MySQL adalah aplikasi yang dirancang untuk  memantau dan mengelola kebersihan toilet dengan lebih efisen. Sistem ini memungkinkan pengguna untuk melakukan pencatatan dan evaluasi secara sistematis terhadap kondisi kebersihan toilet, serta melakukan tindakan perbaikan jika diperlukan. Melalui fitur checklist, sistem ini memberikan panduan berupa kriteria tertentu yang harus dinilai, seperti kebersihan kloset, wastafel, lantai, dinding, kaca, ketersediaan sabun, keberadaan bau, dan status keseluruhan toilet.. Sistem ini memanfaatkan framework PHP CodeIgniter 4 sebagai dasar pengembangan aplikasi web dan basis data MySQL sebagai tempat penyimpanan data.

Dengan sistem ini, pengguna dapat melakukan berbagai tugas penting terkait pengecekan dan pencatatan secara rutin terhadap kebersihan toilet, melaporkan temuan atau masalah terkait kebersihan atau kerusakan di toilet, memastikan bahwa setiap tugas pembersihan telah diselesaikan sesuai dengan checklist yang ditentukan, memantau dan merekam inventaris produk pembersih atau perlengkapan lainnya yang diperlukan, dan menjadwalkan kegiatan pemeliharaan atau pembersihan berdasarkan checklist yang telah ditentukan.

Proyek ini dibangun dengan tekad kuat untuk memberikan solusi yang efisien dan user-friendly dalam mengelola checklist kebersihan toilet. Kami memanfaatkan beberapa framework dan tools terkemuka untuk memastikan pengembangan yang berkualitas dan berkelanjutan.

## **Peruntukan Sistem Checklist Kebersihan Toilet**

Sistem ini lebih ditujukan untuk:

1. **Petugas Kebersihan atau Facility Management:**

   - Memungkinkan petugas kebersihan untuk secara teratur memeriksa dan mencatat kondisi kebersihan toilet.
   - Menyediakan alat untuk mencatat dan melacak perubahan atau kekurangan dalam perawatan toilet.

2. **Pengelola Fasilitas atau Administrasi Gedung:**

   - Memungkinkan pengelola gedung atau fasilitas untuk mengawasi kebersihan toilet di berbagai area dalam suatu bangunan atau kompleks.

3. **Administrator Sistem:**

   - Memberikan kontrol penuh terhadap data dan pengaturan sistem, seperti mengelola pengguna, toilet, dan kriteria checklist.

4. **Pengguna Biasa atau Pemakai Toilet:**

   - Memberikan informasi tentang kebersihan toilet kepada pengguna sehari-hari, mungkin melalui papan informasi atau aplikasi seluler.

5. **Organisasi atau Bisnis dengan Banyak Fasilitas Toilet:**
   - Berguna bagi organisasi atau bisnis yang memiliki beberapa toilet di lokasi yang berbeda untuk mengkoordinasikan dan memantau kebersihan secara efisien.

Sistem ini membantu meningkatkan kebersihan dan kenyamanan pengguna toilet, serta memastikan bahwa fasilitas ini tetap dalam kondisi yang baik. Dengan melakukan checklist secara teratur, dapat dilakukan tindakan preventif atau perbaikan yang diperlukan secara lebih efektif.

## **Fitur-Fitur Website**

Sistem Checklist Kebersihan Toilet yang dijelaskan mencakup berbagai fitur untuk mengelola dan memonitor kebersihan toilet. Berikut adalah penjelasan untuk setiap elemen sistem tersebut:

1. **Mengelola data Toilet (CRUD):**

   - CRUD (Create, Read, Update, Delete) mengacu pada operasi dasar untuk mengelola data toilet.
   - **Create:** Menambahkan data baru untuk mendaftarkan toilet baru beserta informasi terkait seperti nama toilet, lokasi, atau informasi lainnya.
   - **Read:** Melihat informasi yang sudah terdaftar mengenai toilet, seperti daftar toilet yang ada.
   - **Update:** Mengubah atau memperbarui informasi toilet yang sudah terdaftar, seperti mengganti lokasi atau status.
   - **Delete:** Menghapus data toilet yang tidak diperlukan lagi dari sistem.

2. **Daftar Toilet:**

   - Menyajikan daftar toilet yang sudah terdaftar dalam sistem.

3. **Tambah, Ubah, dan Hapus Data:**

   - Memberikan fungsionalitas tambah, ubah, dan hapus data secara spesifik untuk toilet, sehingga pengguna dapat memperbarui atau menghapus informasi toilet yang ada.

4. **Transaksi Checklist:**

   - Mencatat checklist kebersihan toilet berdasarkan beberapa kriteria tertentu.

5. **Daftar Toilet (lagi):**

   - Menyajikan daftar toilet, mungkin untuk memudahkan pengguna dalam pemilihan toilet yang akan diceklist.

6. **Checklist berdasarkan tanggal dan pengguna:**
   - Memberikan opsi untuk melakukan checklist kebersihan toilet berdasarkan tanggal dan pengguna yang melakukannya. Ini membantu untuk melacak siapa yang melakukan pemeriksaan dan kapan pemeriksaan dilakukan.

**Keterangan Checklist:**

- **Kloset, wastafel, lantai, dinding, dan kaca (1: Bersih, 2: Kotor, 3: Rusak):**
  - Memberikan opsi untuk menilai kebersihan atau kondisi komponen toilet tertentu.
- **Sabun (1: Ada, 2: Habis, 3: Hilang):**
  - Memantau ketersediaan sabun di toilet.
- **Bau (1: Ya, 2: Tidak):**
  - Menilai apakah ada bau yang tidak diinginkan di toilet.
- **Status (1: Aktif, 2: Non Aktif):**
  - Menandakan apakah toilet tersebut masih aktif atau tidak.
- **Role (1: Admin, 2: User):**
  - Membedakan antara admin yang memiliki akses penuh terhadap sistem dan pengguna biasa dengan akses terbatas.

Dengan sistem ini, pengelola atau petugas kebersihan dapat lebih mudah memantau dan memastikan bahwa toilet dalam kondisi bersih dan berfungsi dengan baik. Penggunaan checklist dengan kriteria tertentu membantu mengukur dan memperbaiki keadaan toilet secara teratur.

## Teknologi yang Digunakan

Proyek ini menggunakan sejumlah framework dan tools canggih, termasuk:

- **_Bootstrap_** : Framework CSS yang memberikan tampilan yang responsif dan estetis pada antarmuka pengguna. Memastikan pengalaman pengguna yang konsisten di berbagai perangkat.

- **_Visual Studio Code (VSC)_** : Editor kode yang powerful dan ringan, memudahkan pengembangan dengan fitur-fitur intuitif dan ekosistem ekstensi yang luas.

Dan Lainnya: Kami juga mengandalkan sejumlah tools dan teknologi terkini untuk memastikan keberlanjutan dan kehandalan proyek ini.

<h2>Usecase Diagram</h2>

> <h3>Usecase Diagram dari Aplikasi Sistem Checklist Kebersihan Toilet dengan Template Sederhana</h3>

![usecase toilet](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/d80c5e4f-d2c1-4d3c-9edd-549f5d887c36)

<h2>Penjelasan</h2>

1.1 Admin dapat melakukan login dengan cara memasukkan username dan password.

1.2 Admin dapat mengakses Checklist Toilet setelah melakukan login, admin dapat mengecekan dan mencatatan secara rutin terhadap kebersihan toilet, menemukan masalah terkait kebersihan atau kerusakan di toilet, memastikan bahwa setiap tugas pembersihan telah diselesaikan sesuai dengan checklist yang ditentukan, dapat mengubah/mengedit Data Checklist Toilet dan dapat menghapus Data Checklist Toilet yang telah di tambahkan.

1.3 Admin dapat mengakses menu Data Toilet, admin dapat melihat keterangan kode toilet dan lokasi toilet yang telah diselesaikan,  dapat mengubah data toilet, dan juga dapat menghapus data toilet yang telah di tambahkan.

1.4 Admin dapat melakukan logout, setelah melakukan logout admin akan ditampilkan kembali ke tampilan awal dari sistem Checklist Kebersihan Toilet.

> <h3>Design dari Aplikasi Sistem Checklist Kebersihan Toilet dengan Template Sederhana<h3>

1. Design Fitur Tampilan Login

![WhatsApp Image 2024-01-03 at 04 36 13(1)](https://github.com/roswanda11/toilet/assets/115516632/97c73fbd-3edb-42e4-ba95-aca2a8c470fa)

2. Design Fitur Tampilan Menu

![WhatsApp Image 2024-01-03 at 04 36 13(2)](https://github.com/roswanda11/toilet/assets/115516632/31fe7138-4b3b-4dfd-896b-d9bea893659b)

3. Design Fitur Tampilan Checklist Toilet

![WhatsApp Image 2024-01-03 at 04 36 13](https://github.com/roswanda11/toilet/assets/115516632/23341fa3-242e-4459-b56a-acfd3b8873c7)

4. Design Fitur Tampilan Tambah Data Checklist Toilet

![WhatsApp Image 2024-01-03 at 04 36 13(3)](https://github.com/roswanda11/toilet/assets/115516632/13ef8162-3c66-4ec9-8e5e-91189fa9c67b)

5. Design Fitur Tampilan Ubah Data Checklist Toilet
   
![WhatsApp Image 2024-01-03 at 04 36 12](https://github.com/roswanda11/toilet/assets/115516632/8bf2be9e-302e-47dd-aa5a-02eba77c92bd)

  
6. Design Fitur Tampilan Data Toilet

![WhatsApp Image 2024-01-03 at 04 36 13(4)](https://github.com/roswanda11/toilet/assets/115516632/e219c4a0-9d62-4e1e-ac8d-86a592d3ea11)

8. Design Fitur Tampilan Tambah Data Toilet

![WhatsApp Image 2024-01-03 at 05 00 14](https://github.com/roswanda11/toilet/assets/115516632/e3470b0c-4cb6-441f-abc0-3d180f4427cc)
