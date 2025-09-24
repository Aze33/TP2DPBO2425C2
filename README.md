# Janji

Saya Zahran Zaidan Saputra dengan NIM 2415429 mengerjakan TP 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Diagram
<img width="810" height="266" alt="image" src="https://github.com/user-attachments/assets/c282a304-653e-4235-915e-d0392f6d7fa5" />


# Penjelasan Desain 

Desain ini memiliki 3 Class memakai konsep multilevel inheritance:

1.Class **Produk**(ParentClass) : Ini adalah class dasar yang menyimpan atribut paling umum dari sebuah produk.

**Atribut**
* KodeProduk
* NamaProduk
* Merek
* Harga
* TahunProduksi
* Foto_Produk

2.Class **Elektronik**(Child dari Produk) : Class ini mewarisi semua sifat dari Produk dan menambahkan atribut yang lebih spesifik untuk barang elektronik.

**Atribut**
* Status
* Garansi
* Warna
* Material

3.Class **PerangkatPortabel**(Child dari Elektronik) : Class ini mewarisi semua sifat dari Elektronik (yang juga sudah memiliki sifat dari Produk) dan menambahkan atribut paling spesifik untuk perangkat portabel.

**Atribut**
* Baterai
* Berat
* JenisPort

# Flow Code

**Java, CPP, Python**

**Inisialisasi**

1.Membuat data dummy yang berjumlah lima yang kemudian disimpan ke dalam list.

2.Kelima data produk tersebut disimpan dalam sebuah wadah/penyimpanan (seperti ArrayList di Java, list di Python, atau vector di C++).

**Menu Utama**

3.Loop Utama Dimulai.

4.Pengguna akan disungguhkan dengan tiga tombol:
* Tampilkan Data (1)
* Tambah Data (2)
* Keluar (3)

5.Program menunggu pengguna memasukkan pilihan angka (1, 2, atau 3).

**Penjelasan Tiga Tombol**

<img width="314" height="113" alt="image" src="https://github.com/user-attachments/assets/b766d780-cef1-480c-b970-997a1512c551" />

**Tampilkan Data (Jika Pilihan 1)**

* Program akan membaca semua objek yang ada di dalam wadah penyimpanan.
* Setiap data dari objek akan diambil menggunakan fungsi getter.
* Semua data tersebut akan ditampilkan dalam format tabel yang rapi di layar

**Tambah Data (Jika Pilihan 1)**
* Program akan meminta input dari pengguna untuk setiap atribut produk (kode, nama, merek, dst.).
* Input tersebut akan digunakan untuk membuat objek produk baru.
* Objek yang baru dibuat ini akan dimasukkan ke dalam wadah penyimpanan data.

**Keluar (Jika Pilihan 3)**
* Perulangan (while loop) akan dihentikan.
* Program selesai dan berhenti berjalan.

**PHP**

**Inisialisasi**
* Saat halaman index.php dibuka di browser, program memuat semua file class yang dibutuhkan.
* Program langsung membuat 5 data produk awal.
* Kelima data tersebut disimpan dalam sebuah array PHP.

**Pemeriksaan Metode Pengiriman Data**
* Program tidak menggunakan while loop. Logikanya berjalan setiap kali halaman dimuat.
* Program akan memeriksa apakah ada data yang dikirim dari form dengan mengecek metode POST.

**Proses Tambah Produk (Jika Ada POST)**
* Proses ini hanya berjalan jika pengguna mengisi form dan menekan tombol submit.
* Program akan membaca semua data yang dikirim dari form melalui variabel $_POST.
* Data tersebut digunakan untuk membuat objek produk baru.
* Objek baru ini kemudian dimasukkan ke dalam array produk.

**Proses Tampilkan Produk**
* Proses ini berjalan setiap kali halaman dimuat.
* Program akan membaca semua objek yang ada di dalam array.
* Data dari setiap objek diambil menggunakan method getHeaders() dan getData().
* Semua data tersebut kemudian ditampilkan di halaman web.

# Dokumentasi Program Berhasil berjalan

**CPP**
<img width="1623" height="961" alt="image" src="https://github.com/user-attachments/assets/e2da2ec8-37ad-4dfd-8a0f-25f578ef8433" />

**Python**
<img width="1592" height="766" alt="image" src="https://github.com/user-attachments/assets/412c60e7-d037-43cf-903b-f24c903be280" />

**Java**
<img width="1765" height="866" alt="image" src="https://github.com/user-attachments/assets/f92e88c2-2491-4ef1-a49d-91e2f4052eea" />

**PHP**
<img width="1583" height="886" alt="image" src="https://github.com/user-attachments/assets/473a9e67-e6d3-4d38-a1c8-12cb462030b9" />





