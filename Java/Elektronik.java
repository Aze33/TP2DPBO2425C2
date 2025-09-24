// File: Elektronik.java

public class Elektronik extends Produk {
    private int garansi;
    private String warna;
    private String material;

    public Elektronik(String kodeProduk, String namaProduk, String merek, int harga, int tahunProduksi, String status,
                      int garansi, String warna, String material) {
        super(kodeProduk, namaProduk, merek, harga, tahunProduksi, status);
        this.garansi = garansi;
        this.warna = warna;
        this.material = material;
    }

    // Getter methods
    public int getGaransi() { return this.garansi; }
    public String getWarna() { return this.warna; }
    public String getMaterial() { return this.material; }

    // Setter methods
    public void setGaransi(int garansi) { this.garansi = garansi; }
    public void setWarna(String warna) { this.warna = warna; }
    public void setMaterial(String material) { this.material = material; }
}