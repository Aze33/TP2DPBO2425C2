# File: Elektronik.py

from Produk import Produk

class Elektronik(Produk):
    def __init__(self, kode_produk="", nama_produk="", merek="", harga=0, tahun_produksi=0, status="",
                 garansi=0, warna="", material=""):
        super().__init__(kode_produk, nama_produk, merek, harga, tahun_produksi, status)
        self._garansi = garansi
        self._warna = warna
        self._material = material

    # Getter methods
    def get_garansi(self): return self._garansi
    def get_warna(self): return self._warna
    def get_material(self): return self._material

    # Setter methods
    def set_garansi(self, garansi): self._garansi = garansi
    def set_warna(self, warna): self._warna = warna
    def set_material(self, material): self._material = material