<?php

class Belanja {
    public string $namapembeli;
    public string $namabarang;
    public int $hargabarang;
    public int $jumlahbarang;
    public float $diskon; // contoh: 0.1 = 10%

    public function subtotal(): float {
        return $this->hargabarang * $this->jumlahbarang;
    }

    public function rupiah($angka) {
        return number_format($angka, 0, ',', '.');
    }
}


// ================= DATA =================
$belanja = new Belanja();
$belanja->namapembeli = "Hani";   // <-- diganti
$belanja->namabarang = "Sampo";
$belanja->hargabarang = 9000;
$belanja->jumlahbarang = 2;
$belanja->diskon = 0.1; // 10%

// ================= OUTPUT =================
echo "<pre>";
echo "Nama Pembeli : $belanja->namapembeli\n";
echo "Nama Barang  : $belanja->namabarang\n";
echo "Harga Barang : Rp " . $belanja->rupiah($belanja->hargabarang) . "\n";
echo "Jumlah       : $belanja->jumlahbarang\n";
echo "Diskon       : " . ($belanja->diskon * 100) . "%\n";
echo "--------------------------------------------------\n";
echo "Subtotal     : Rp " . $belanja->rupiah($belanja->subtotal()) . "\n";
echo "</pre>";

?>
