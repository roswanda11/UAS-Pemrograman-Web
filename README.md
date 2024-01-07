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

## **Daftar Isi**

- **[Demo Aplikasi, Domain, dan Laporan](#demo-aplikasi-domain-dan-laporan)**<br>
- **[Akses User Login](#akses-user-login)**<br>
- **[Penjelasan Sistem Checklist Kebersihan Toilet](#penjelasan-sistem-checklist-kebersihan-toilet)**<br>
- **[Peruntukan Sistem Checklist Kebersihan Toilet](#peruntukan-sistem-checklist-kebersihan-toilet)**<br>
- **[Fitur-Fitur Website](#fitur-fitur-website)**<br>
- **[Teknologi yang Digunakan](teknologi-yang-digunakan)**
- **[Usecase Diagram](#usecase-diagram)**<br>
- **[Wireframe Sistem Checklist Kebersihan Toilet](#wireframe-sistem-checklist-kebersihan-toilet)**<br>
- **[Design Sistem Checklist Kebersihan Toilet](#design-sistem-checklist-kebersihan-toilet)**<br>
 
<h2>Demo Aplikasi, Domain, dan Laporan</h2>

1. Demo terlampir pada link youtube, klik pada logo di bawah ini:
   
<img src=https://download.logo.wine/logo/YouTube/YouTube-Logo.wine.png width="120px">

2. Domain aplikasi on Web Hosting, klik pada logo di bawah ini:

[<img src=https://res.cloudinary.com/practicaldev/image/fetch/s--ux15-5qy--/c_imagga_scale,f_auto,fl_progressive,h_1080,q_auto,w_1080/https://dev-to-uploads.s3.amazonaws.com/i/a12tj8n6facp0kt0xb0n.jpeg width="120px">](https://checklistoilet.000webhostapp.com/)

3. Laporan PDF, klik pada logo di bawah ini:
   
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
 
Sistem Checklist Kebersihan Toilet berbasis web menggunakan CodeIgniter 4 dan MySQL adalah aplikasi yang dirancang untuk  memantau dan mengelola kebersihan toilet dengan lebih efisen. Sistem ini memungkinkan pengguna untuk melakukan pencatatan dan evaluasi secara sistematis terhadap kondisi kebersihan toilet, serta melakukan tindakan perbaikan jika diperlukan. Melalui fitur checklist, sistem ini memberikan panduan berupa kriteria tertentu yang harus dinilai, seperti kebersihan kloset, wastafel, lantai, dinding, kaca, ketersediaan sabun, keberadaan bau, dan status keseluruhan toilet. Sistem ini memanfaatkan framework PHP CodeIgniter 4 sebagai dasar pengembangan aplikasi web dan basis data MySQL sebagai tempat penyimpanan data.

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

# <h2>Wireframe Sistem Checklist Kebersihan Toilet<h2>

> <h3>Wireframe dari Website Sistem Checklist Kebersihan Toilet dengan Template Sederhana<h3>

1. Wireframe Tampilan Login

![wireframe login roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/fef1da2e-ce4f-44ff-a20e-587db420b221)

2. Wireframe Tampilan Sign Up

![wireframe signup roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/3b8493c3-596c-482d-a021-a5fa810882ea)

3. Wireframe Tampilan Menu

![wireframe menu roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/9ea13344-0dde-4456-98af-176ac2e4261c)

4. Wireframe Tampilan Checklist Toilet

![wireframe checklist roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/9c4d6fbd-c041-49d8-99c3-73b89dbc0adf)

5. Wireframe Tampilan Tambah Data Checklist Toilet
   
![wireframe tambahdata roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/c8e21a58-8950-463d-a529-5d61886ecfd2)

6. Wireframe Tampilan Ubah Data Checklist Toilet
   
![wireframe ubahdata roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/ff805c98-7caf-4fbe-8093-fa66c9f5f1ee)

7. Wireframe Tampilan Data Toilet

![wireframe datatoilet roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/0e745bc2-fb4c-4d69-8c41-1adb5832b4bf)

8. Wireframe Tampilan Tambah Data Toilet
   
![wireframe tambahdata roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/f2b75084-7ada-40c0-8bc8-e185176b888b)

# <h2>Design Sistem Checklist Kebersihan Toilet<h2>

> <h3>Design dari Website Sistem Checklist Kebersihan Toilet dengan Template Sederhana<h3>

1. Design Fitur Tampilan Login

![Tampilan Login roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/b9111dc8-72ac-448d-a9e9-b4c3243d3024)

2. Design Fitur Tampilan Sign Up

![Tampilan TambahAkun roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/a6e114a9-9441-472a-a6fe-6e2807a78ba1)

3. Design Fitur Tampilan Menu
   
![Tampilan Menu roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/486fda65-870c-4fe3-bdeb-e6d7484c8c4b)

4. Design Fitur Tampilan Checklist Toilet
   
![Tampilan Cheklist roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/9bd4df99-8b08-47ee-b4a7-e4b2bd975e21)

5. Design Fitur Tampilan Tambah Data Checklist Toilet
   
![Tampilan TambahData Cheklist roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/3c969fbc-4db1-4db7-a6e4-bf81905c853c)

6. Design Fitur Tampilan Ubah Data Checklist Toilet

![Tambilan UbahData Cheklist roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/4e713a36-4846-4caa-a6a2-74ac641cf547)

7. Design Fitur Tampilan Data Toilet
   
![Tampilan Data Toilet roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/32feb8c9-2cab-4d90-9bbe-513adb3c2820)

8. Design Fitur Tampilan Tambah Data Toilet
   
![Tampilan Tambah DataToilet roswanda11](https://github.com/roswanda11/UAS-Pemrograman-Web/assets/115516632/c8cd9576-5627-49f6-b9c3-64ad572a6467)
