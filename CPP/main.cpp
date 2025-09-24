// File: main.cpp

#include <iostream>
#include <vector>
#include <iomanip>
#include <limits>
#include "PerangkatPortabel.cpp"

using namespace std;

// --- FUNGSI FINAL UNTUK TAMPILAN TABEL GRID ---
void tampilkanData(const vector<PerangkatPortabel>& daftarPerangkat) {
    // Menentukan lebar setiap kolom
    const int wKode = 8;
    const int wNama = 20;
    const int wMerek = 13;
    const int wHarga = 12;
    const int wTahun = 6;
    const int wStatus = 8;
    const int wGaransi = 9;
    const int wWarna = 12;
    const int wMaterial = 15;
    const int wBaterai = 10;
    const int wBerat = 10;
    const int wPort = 15;

    // Membuat garis pemisah tabel secara dinamis
    string separator = "+";
    separator += string(wKode + 2, '-') + "+";
    separator += string(wNama + 2, '-') + "+";
    separator += string(wMerek + 2, '-') + "+";
    separator += string(wHarga + 2, '-') + "+";
    separator += string(wTahun + 2, '-') + "+";
    separator += string(wStatus + 2, '-') + "+";
    separator += string(wGaransi + 2, '-') + "+";
    separator += string(wWarna + 2, '-') + "+";
    separator += string(wMaterial + 2, '-') + "+";
    separator += string(wBaterai + 2, '-') + "+";
    separator += string(wBerat + 2, '-') + "+";
    separator += string(wPort + 2, '-') + "+";
    
    cout << "\n" << separator << endl;
    
    // Header Tabel
    cout << "| " << left << setw(wKode) << "Kode" << " | "
         << setw(wNama) << "Nama Produk" << " | "
         << setw(wMerek) << "Merek" << " | "
         << setw(wHarga) << "Harga" << " | "
         << setw(wTahun) << "Tahun" << " | "
         << setw(wStatus) << "Status" << " | "
         << setw(wGaransi) << "Garansi" << " | "
         << setw(wWarna) << "Warna" << " | "
         << setw(wMaterial) << "Material" << " | "
         << setw(wBaterai) << "Baterai" << " | "
         << setw(wBerat) << "Berat" << " | "
         << setw(wPort) << "Jenis Port" << " |" << endl;
    cout << separator << endl;

    if (daftarPerangkat.empty()) {
        cout << "| " << left << setw(separator.length() - 4) << "Data masih kosong." << " |" << endl;
    } else {
        // Isi Tabel
        for (const auto& device : daftarPerangkat) {
            cout << "| " << left << setw(wKode) << device.getKodeProduk() << " | "
                 << setw(wNama) << device.getNamaProduk() << " | "
                 << setw(wMerek) << device.getMerek() << " | "
                 << setw(wHarga) << device.getHarga() << " | "
                 << setw(wTahun) << device.getTahunProduksi() << " | "
                 << setw(wStatus) << device.getStatus() << " | "
                 << setw(wGaransi) << (to_string(device.getGaransi()) + " bln") << " | "
                 << setw(wWarna) << device.getWarna() << " | "
                 << setw(wMaterial) << device.getMaterial() << " | "
                 << setw(wBaterai) << (to_string(device.getKapasitasBaterai()) + "mAh") << " | "
                 << setw(wBerat) << (to_string(device.getBerat()) + " gr") << " | "
                 << setw(wPort) << device.getJenisPort() << " |" << endl;
        }
    }
    cout << separator << endl;
}

int main() {
    vector<PerangkatPortabel> daftarPerangkat;

    // 5 Objek awal
    daftarPerangkat.push_back(PerangkatPortabel("SP001", "Galaxy S25", "Samsung", 20000000, 2025, "Baru", 12, "Titanium", "Aluminium", 5000, 180, "USB-C"));
    daftarPerangkat.push_back(PerangkatPortabel("LP001", "MacBook Pro M4", "Apple", 45000000, 2025, "Baru", 12, "Silver", "Aluminium", 8000, 1500, "Thunderbolt"));
    daftarPerangkat.push_back(PerangkatPortabel("TB001", "iPad Pro", "Apple", 22000000, 2024, "Baru", 12, "Gray", "Aluminium", 7500, 600, "USB-C"));
    daftarPerangkat.push_back(PerangkatPortabel("HP002", "XPS 15", "Dell", 30000000, 2024, "Baru", 24, "Black", "Carbon Fiber", 7000, 1800, "USB-C"));
    daftarPerangkat.push_back(PerangkatPortabel("SP003", "Pixel 10", "Google", 15000000, 2025, "Baru", 12, "White", "Glass", 4500, 190, "USB-C"));

    int pilihan = 0;
    do {
        cout << "\n=== MENU TOKO ELEKTRONIK ===" << endl;
        cout << "1. Tampilkan Data" << endl;
        cout << "2. Tambah Data" << endl;
        cout << "3. Keluar" << endl;
        cout << "============================" << endl;
        cout << "Masukkan pilihan Anda (1/2/3): ";
        cin >> pilihan;

        switch (pilihan) {
            case 1:
                tampilkanData(daftarPerangkat);
                cout << "Tekan Enter untuk kembali ke menu...";
                cin.ignore(numeric_limits<streamsize>::max(), '\n');
                cin.get();
                break;
            case 2: {
                cout << "\n--- Tambah Data Baru ---" << endl;
                string kode, nama, merek, status, warna, material, port;
                int harga, tahun, garansi, baterai, berat;

                cout << "Kode Produk: "; cin >> kode;
                cout << "Nama Produk: "; cin.ignore(); getline(cin, nama);
                cout << "Merek: "; getline(cin, merek);
                cout << "Harga: "; cin >> harga;
                cout << "Tahun Produksi: "; cin >> tahun;
                cout << "Status (Baru/Bekas): "; cin >> status;
                cout << "Garansi (Bulan): "; cin >> garansi;
                cout << "Warna: "; cin >> warna;
                cout << "Material: "; cin >> material;
                cout << "Kapasitas Baterai (mAh): "; cin >> baterai;
                cout << "Berat (gram): "; cin >> berat;
                cout << "Jenis Port: "; cin >> port;

                daftarPerangkat.push_back(PerangkatPortabel(kode, nama, merek, harga, tahun, status, garansi, warna, material, baterai, berat, port));
                cout << "\nData berhasil ditambahkan!" << endl;
                tampilkanData(daftarPerangkat);
                cout << "Tekan Enter untuk kembali ke menu...";
                cin.ignore(numeric_limits<streamsize>::max(), '\n');
                cin.get();
                break;
            }
            case 3:
                cout << "\nProgram Selesai." << endl;
                break;
            default:
                cout << "\nPilihan tidak valid." << endl;
                cout << "Tekan Enter untuk kembali ke menu...";
                cin.ignore(numeric_limits<streamsize>::max(), '\n');
                cin.get();
                break;
        }

    } while (pilihan != 3);

    return 0;

}
