<?php

require_once 'Elektronik.php';

class PerangkatPortabel extends Elektronik {
    private $kapasitasBaterai;
    private $berat;
    private $jenisPort;

    public function __construct($kodeProduk = "", $namaProduk = "", $merek = "", $harga = 0, $tahunProduksi = "", $fotoProduk = "", $garansi = "", $warna = "", $material = "", $kapasitasBaterai = "", $berat = "", $jenisPort = "") {
        parent::__construct($kodeProduk, $namaProduk, $merek, $harga, $tahunProduksi, $fotoProduk, $garansi, $warna, $material);
        $this->kapasitasBaterai = $kapasitasBaterai;
        $this->berat = $berat;
        $this->jenisPort = $jenisPort;
    }

    public function getHeaders() {
        return array_merge(parent::getHeaders(), ["Kapasitas Baterai", "Berat", "Jenis Port"]);
    }

    public function getData() {
        return array_merge(parent::getData(), [$this->kapasitasBaterai, $this->berat, $this->jenisPort]);
    }
}