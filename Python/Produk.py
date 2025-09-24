# File: Produk.py

class Produk:
    def __init__(self, kode_produk="", nama_produk="", merek="", harga=0, tahun_produksi=0, status=""):
        self._kode_produk = kode_produk
        self._nama_produk = nama_produk
        self._merek = merek
        self._harga = harga
        self._tahun_produksi = tahun_produksi
        self._status = status

    # Getter methods
    def get_kode_produk(self): return self._kode_produk
    def get_nama_produk(self): return self._nama_produk
    def get_merek(self): return self._merek
    def get_harga(self): return self._harga
    def get_tahun_produksi(self): return self._tahun_produksi
    def get_status(self): return self._status

    # Setter methods
    def set_kode_produk(self, kode): self._kode_produk = kode
    def set_nama_produk(self, nama): self._nama_produk = nama
    def set_merek(self, merek): self._merek = merek
    def set_harga(self, harga): self._harga = harga
    def set_tahun_produksi(self, tahun): self._tahun_produksi = tahun
    def set_status(self, status): self._status = status