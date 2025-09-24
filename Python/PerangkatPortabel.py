# File: PerangkatPortabel.py

from Elektronik import Elektronik

class PerangkatPortabel(Elektronik):
    def __init__(self, kode_produk="", nama_produk="", merek="", harga=0, tahun_produksi=0, status="",
                 garansi=0, warna="", material="",
                 kapasitas_baterai=0, berat=0, jenis_port=""):
        super().__init__(kode_produk, nama_produk, merek, harga, tahun_produksi, status, garansi, warna, material)
        self._kapasitas_baterai = kapasitas_baterai
        self._berat = berat
        self._jenis_port = jenis_port

    # Getter methods
    def get_kapasitas_baterai(self): return self._kapasitas_baterai
    def get_berat(self): return self._berat
    def get_jenis_port(self): return self._jenis_port

    # Setter methods
    def set_kapasitas_baterai(self, kapasitas): self._kapasitas_baterai = kapasitas
    def set_berat(self, berat): self._berat = berat
    def set_jenis_port(self, port): self._jenis_port = port