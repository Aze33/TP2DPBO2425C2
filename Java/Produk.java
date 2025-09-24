// File: Produk.java

public class Produk {
    private String kodeProduk;
    private String namaProduk;
    private String merek;
    private int harga;
    private int tahunProduksi;
    private String status;

    public Produk(String kodeProduk, String namaProduk, String merek, int harga, int tahunProduksi, String status) {
        this.kodeProduk = kodeProduk;
        this.namaProduk = namaProduk;
        this.merek = merek;
        this.harga = harga;
        this.tahunProduksi = tahunProduksi;
        this.status = status;
    }

    // Getter methods
    public String getKodeProduk() { return this.kodeProduk; }
    public String getNamaProduk() { return this.namaProduk; }
    public String getMerek() { return this.merek; }
    public int getHarga() { return this.harga; }
    public int getTahunProduksi() { return this.tahunProduksi; }
    public String getStatus() { return this.status; }

    // Setter methods
    public void setKodeProduk(String kodeProduk) { this.kodeProduk = kodeProduk; }
    public void setNamaProduk(String namaProduk) { this.namaProduk = namaProduk; }
    public void setMerek(String merek) { this.merek = merek; }
    public void setHarga(int harga) { this.harga = harga; }
    public void setTahunProduksi(int tahunProduksi) { this.tahunProduksi = tahunProduksi; }
    public void setStatus(String status) { this.status = status; }
}