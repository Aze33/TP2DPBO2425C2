// File: PerangkatPortabel.java

public class PerangkatPortabel extends Elektronik {
    private int kapasitasBaterai;
    private int berat;
    private String jenisPort;

    public PerangkatPortabel(String kodeProduk, String namaProduk, String merek, int harga, int tahunProduksi, String status,
                             int garansi, String warna, String material,
                             int kapasitasBaterai, int berat, String jenisPort) {
        super(kodeProduk, namaProduk, merek, harga, tahunProduksi, status, garansi, warna, material);
        this.kapasitasBaterai = kapasitasBaterai;
        this.berat = berat;
        this.jenisPort = jenisPort;
    }

    // Getter methods
    public int getKapasitasBaterai() { return this.kapasitasBaterai; }
    public int getBerat() { return this.berat; }
    public String getJenisPort() { return this.jenisPort; }

    // Setter methods
    public void setKapasitasBaterai(int kapasitas) { this.kapasitasBaterai = kapasitas; }
    public void setBerat(int berat) { this.berat = berat; }
    public void setJenisPort(String port) { this.jenisPort = port; }
}