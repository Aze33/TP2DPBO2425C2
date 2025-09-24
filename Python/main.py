# File: main.py

# --- JANJI ---
# Saya, [Isi Nama Lengkap Anda] dengan NIM [Isi NIM Anda], 
# mengerjakan soal TP2 untuk keberkahanNya maka saya tidak
# melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

from PerangkatPortabel import PerangkatPortabel

def tampilkan_data(daftar_perangkat):
    # Definisi lebar kolom agar sesuai dengan C++
    w_kode = 8
    w_nama = 20
    w_merek = 13
    w_harga = 12
    w_tahun = 6
    w_status = 8
    w_garansi = 9
    w_warna = 12
    w_material = 15
    w_baterai = 10
    w_berat = 10
    w_port = 15

    # Membuat garis pemisah secara dinamis
    separator = (f"+{'-' * (w_kode + 2)}+{'-' * (w_nama + 2)}+{'-' * (w_merek + 2)}+"
                 f"{'-' * (w_harga + 2)}+{'-' * (w_tahun + 2)}+{'-' * (w_status + 2)}+"
                 f"{'-' * (w_garansi + 2)}+{'-' * (w_warna + 2)}+{'-' * (w_material + 2)}+"
                 f"{'-' * (w_baterai + 2)}+{'-' * (w_berat + 2)}+{'-' * (w_port + 2)}+")

    print(f"\n{separator}")
    # Header Tabel
    print(f"| {'Kode':<{w_kode}} | {'Nama Produk':<{w_nama}} | {'Merek':<{w_merek}} | "
          f"{'Harga':<{w_harga}} | {'Tahun':<{w_tahun}} | {'Status':<{w_status}} | "
          f"{'Garansi':<{w_garansi}} | {'Warna':<{w_warna}} | {'Material':<{w_material}} | "
          f"{'Baterai':<{w_baterai}} | {'Berat':<{w_berat}} | {'Jenis Port':<{w_port}} |")
    print(separator)

    # Data
    if not daftar_perangkat:
        print(f"| {'Data masih kosong.':<{len(separator) - 4}} |")
    else:
        for device in daftar_perangkat:
            garansi_str = f"{device.get_garansi()} bln"
            baterai_str = f"{device.get_kapasitas_baterai()}mAh"
            berat_str = f"{device.get_berat()} gr"
            print(f"| {device.get_kode_produk():<{w_kode}} | {device.get_nama_produk():<{w_nama}} | "
                  f"{device.get_merek():<{w_merek}} | {device.get_harga():<{w_harga}} | "
                  f"{device.get_tahun_produksi():<{w_tahun}} | {device.get_status():<{w_status}} | "
                  f"{garansi_str:<{w_garansi}} | {device.get_warna():<{w_warna}} | "
                  f"{device.get_material():<{w_material}} | {baterai_str:<{w_baterai}} | "
                  f"{berat_str:<{w_berat}} | {device.get_jenis_port():<{w_port}} |")
    
    print(separator)


def main():
    daftar_perangkat = []

    # 5 Objek awal (hardcode)
    daftar_perangkat.append(PerangkatPortabel("SP001", "Galaxy S25", "Samsung", 20000000, 2025, "Baru", 12, "Titanium", "Aluminium", 5000, 180, "USB-C"))
    daftar_perangkat.append(PerangkatPortabel("LP001", "MacBook Pro M4", "Apple", 45000000, 2025, "Baru", 12, "Silver", "Aluminium", 8000, 1500, "Thunderbolt"))
    daftar_perangkat.append(PerangkatPortabel("TB001", "iPad Pro", "Apple", 22000000, 2024, "Baru", 12, "Gray", "Aluminium", 7500, 600, "USB-C"))
    daftar_perangkat.append(PerangkatPortabel("HP002", "XPS 15", "Dell", 30000000, 2024, "Baru", 24, "Black", "Carbon Fiber", 7000, 1800, "USB-C"))
    daftar_perangkat.append(PerangkatPortabel("SP003", "Pixel 10", "Google", 15000000, 2025, "Baru", 12, "White", "Glass", 4500, 190, "USB-C"))

    while True:
        print("\n=== MENU TOKO ELEKTRONIK ===")
        print("1. Tampilkan Data")
        print("2. Tambah Data")
        print("3. Keluar")
        print("============================")
        
        pilihan = input("Masukkan pilihan Anda (1/2/3): ")

        if pilihan == '1':
            tampilkan_data(daftar_perangkat)
            input("\nTekan Enter untuk kembali ke menu...")
        elif pilihan == '2':
            print("\n--- Tambah Data Baru ---")
            kode = input("Kode Produk: ")
            nama = input("Nama Produk: ")
            merek = input("Merek: ")
            harga = int(input("Harga: "))
            tahun = int(input("Tahun Produksi: "))
            status = input("Status (Baru/Bekas): ")
            garansi = int(input("Garansi (Bulan): "))
            warna = input("Warna: ")
            material = input("Material: ")
            baterai = int(input("Kapasitas Baterai (mAh): "))
            berat = int(input("Berat (gram): "))
            port = input("Jenis Port: ")

            perangkat_baru = PerangkatPortabel(kode, nama, merek, harga, tahun, status, garansi, warna, material, baterai, berat, port)
            daftar_perangkat.append(perangkat_baru)
            
            print("\nData berhasil ditambahkan!")
            tampilkan_data(daftar_perangkat)
            input("\nTekan Enter untuk kembali ke menu...")
        elif pilihan == '3':
            print("\nProgram Selesai.")
            break
        else:
            print("\nPilihan tidak valid.")
            input("\nTekan Enter untuk kembali ke menu...")

if __name__ == "__main__":
    main()