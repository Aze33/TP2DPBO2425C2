<?php

require_once 'Produk.php';

class Elektronik extends Produk {
    protected $garansi;
    protected $warna;
    protected $material;

    public function __construct($kodeProduk = "", $namaProduk = "", $merek = "", $harga = 0, $tahunProduksi = "", $fotoProduk = "", $garansi = "", $warna = "", $material = "") {
        parent::__construct($kodeProduk, $namaProduk, $merek, $harga, $tahunProduksi, $fotoProduk);
        $this->garansi = $garansi;
        $this->warna = $warna;
        $this->material = $material;
    }

    public function getHeaders() {
        return array_merge(parent::getHeaders(), ["Garansi", "Warna", "Material"]);
    }

    public function getData() {
        return array_merge(parent::getData(), [$this->garansi, $this->warna, $this->material]);
    }
}