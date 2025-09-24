// File: Elektronik.cpp

#include "Produk.cpp"

class Elektronik : public Produk {
private:
    int garansi;
    string warna;
    string material;

public:
    Elektronik(string kode = "", string nama = "", string merek = "", int harga = 0, int tahun = 0, string status = "",
               int garansi = 0, string warna = "", string material = "")
        : Produk(kode, nama, merek, harga, tahun, status) {
        this->garansi = garansi;
        this->warna = warna;
        this->material = material;
    }

    // Setter
    void setGaransi(int garansi) { this->garansi = garansi; }
    void setWarna(string warna) { this->warna = warna; }
    void setMaterial(string material) { this->material = material; }
    
    // Getter
    int getGaransi() const { return this->garansi; }
    string getWarna() const { return this->warna; }
    string getMaterial() const { return this->material; }
    
    ~Elektronik() {}
};
