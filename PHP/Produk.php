<?php

class Produk {
    protected $kodeProduk;
    protected $namaProduk;
    protected $merek;
    protected $harga;
    protected $tahunProduksi;
    protected $fotoProduk;

    public function __construct($kodeProduk = "", $namaProduk = "", $merek = "", $harga = 0, $tahunProduksi = "", $fotoProduk = "") {
        $this->kodeProduk = $kodeProduk;
        $this->namaProduk = $namaProduk;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->tahunProduksi = $tahunProduksi;
        $this->fotoProduk = $fotoProduk;
    }

    public function getHeaders() {
        return ["Kode Produk", "Nama Produk", "Merek", "Harga", "Tahun Produksi", "Foto Produk"];
    }

    public function getData() {
        return [
            $this->kodeProduk,
            $this->namaProduk,
            $this->merek,
            "Rp" . number_format($this->harga, 0, ',', '.'),
            $this->tahunProduksi,
            $this->fotoProduk
        ];
    }
}