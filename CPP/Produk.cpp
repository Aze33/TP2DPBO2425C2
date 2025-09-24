// File: Produk.cpp

#include <iostream>
#include <string>

using namespace std;

class Produk {
private:
    string kodeProduk;
    string namaProduk;
    string merek;
    int harga;
    int tahunProduksi;
    string status;

public:
    Produk(string kode = "", string nama = "", string merek = "", int harga = 0, int tahun = 0, string status = "") {
        this->kodeProduk = kode;
        this->namaProduk = nama;
        this->merek = merek;
        this->harga = harga;
        this->tahunProduksi = tahun;
        this->status = status;
    }

    // Setter
    void setKodeProduk(string kode) { this->kodeProduk = kode; }
    void setNamaProduk(string nama) { this->namaProduk = nama; }
    void setMerek(string merek) { this->merek = merek; }
    void setHarga(int harga) { this->harga = harga; }
    void setTahunProduksi(int tahun) { this->tahunProduksi = tahun; }
    void setStatus(string status) { this->status = status; }

    // Getter
    string getKodeProduk() const { return this->kodeProduk; }
    string getNamaProduk() const { return this->namaProduk; }
    string getMerek() const { return this->merek; }
    int getHarga() const { return this->harga; }
    int getTahunProduksi() const { return this->tahunProduksi; }
    string getStatus() const { return this->status; }

    ~Produk() {}
};
