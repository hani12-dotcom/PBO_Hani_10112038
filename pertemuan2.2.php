<?php

class Belanja {
    public string $namapembeli;
    public string $namabarang;
    public int $hargabarang;
    public int $jumlahbarang;
    public float $diskon;
    public static float $pajak = 0.02;
    public float $uangDibayar;

    public function subtotal(): float {
        return $this->hargabarang * $this->jumlahbarang;
    }

    public function hitungDiskon(): float {
        return $this->subtotal() * $this->diskon;
    }

    public function hitungPajak(): float {
        return ($this->subtotal() - $this->hitungDiskon()) * self::$pajak;
    }

    public function totalAkhir(): float {
        return ($this->subtotal() - $this->hitungDiskon()) + $this->hitungPajak();
    }

    public function hitungKembalian(): float {
        return $this->uangDibayar - $this->totalAkhir();
    }

    public function rupiah($angka) {
        return number_format($angka, 0, ',', '.');
    }
}


// ================= DATA PEMBELI 1 =================
$belanja1 = new Belanja();
$belanja1->namapembeli = "Hani";
$belanja1->namabarang = "Sampo";
$belanja1->hargabarang = 10000;
$belanja1->jumlahbarang = 2;
$belanja1->diskon = 0.1;
$belanja1->uangDibayar = 25000;


// ================= DATA PEMBELI 2 =================
$belanja2 = new Belanja();
$belanja2->namapembeli = "Sukma";
$belanja2->namabarang = "Facial Wash";
$belanja2->hargabarang = 30000;
$belanja2->jumlahbarang = 2;
$belanja2->diskon = 0.1;
$belanja2->uangDibayar = 70000;


echo "<pre>";

// ===== STRUK PEMBELI 1 =====
echo "================ WARUNG A ================\n";
echo "Pembeli : $belanja1->namapembeli\n";
echo "------------------------------------------\n";
echo "$belanja1->namabarang x $belanja1->jumlahbarang @ " . $belanja1->rupiah($belanja1->hargabarang) . "\n";
echo "------------------------------------------\n";
echo "SUBTOTAL   : Rp " . $belanja1->rupiah($belanja1->subtotal()) . "\n";
echo "DISKON     : Rp " . $belanja1->rupiah($belanja1->hitungDiskon()) . "\n";
echo "PAJAK 2%   : Rp " . $belanja1->rupiah($belanja1->hitungPajak()) . "\n";
echo "------------------------------------------\n";
echo "TOTAL BAYAR: Rp " . $belanja1->rupiah($belanja1->totalAkhir()) . "\n";
echo "UANG BAYAR : Rp " . $belanja1->rupiah($belanja1->uangDibayar) . "\n";
echo "KEMBALIAN  : Rp " . $belanja1->rupiah($belanja1->hitungKembalian()) . "\n";
echo "==========================================\n\n";


// ===== STRUK PEMBELI 2 =====
echo "================ WARUNG A ================\n";
echo "Pembeli : $belanja2->namapembeli\n";
echo "------------------------------------------\n";
echo "$belanja2->namabarang x $belanja2->jumlahbarang @ " . $belanja2->rupiah($belanja2->hargabarang) . "\n";
echo "------------------------------------------\n";
echo "SUBTOTAL   : Rp " . $belanja2->rupiah($belanja2->subtotal()) . "\n";
echo "DISKON     : Rp " . $belanja2->rupiah($belanja2->hitungDiskon()) . "\n";
echo "PAJAK 2%   : Rp " . $belanja2->rupiah($belanja2->hitungPajak()) . "\n";
echo "------------------------------------------\n";
echo "TOTAL BAYAR: Rp " . $belanja2->rupiah($belanja2->totalAkhir()) . "\n";
echo "UANG BAYAR : Rp " . $belanja2->rupiah($belanja2->uangDibayar) . "\n";
echo "KEMBALIAN  : Rp " . $belanja2->rupiah($belanja2->hitungKembalian()) . "\n";
echo "==========================================\n";

echo "</pre>";

?>
