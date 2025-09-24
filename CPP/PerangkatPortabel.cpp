// File: PerangkatPortabel.cpp

#include "Elektronik.cpp"

class PerangkatPortabel : public Elektronik {
private:
    int kapasitasBaterai;
    int berat;
    string jenisPort;

public:
    PerangkatPortabel(string kode = "", string nama = "", string merek = "", int harga = 0, int tahun = 0, string status = "",
                      int garansi = 0, string warna = "", string material = "",
                      int kapasitasBaterai = 0, int berat = 0, string jenisPort = "")
        : Elektronik(kode, nama, merek, harga, tahun, status, garansi, warna, material) {
        this->kapasitasBaterai = kapasitasBaterai;
        this->berat = berat;
        this->jenisPort = jenisPort;
    }

    // Setter
    void setKapasitasBaterai(int kapasitas) { this->kapasitasBaterai = kapasitas; }
    void setBerat(int berat) { this->berat = berat; }
    void setJenisPort(string port) { this->jenisPort = port; }
    
    // Getter
    int getKapasitasBaterai() const { return this->kapasitasBaterai; }
    int getBerat() const { return this->berat; }
    string getJenisPort() const { return this->jenisPort; }
    
    ~PerangkatPortabel() {}
};