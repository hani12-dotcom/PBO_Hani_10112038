<?php

class Belanja {

    public $namapembeli;
    public $namabarang;
    public $hargabarang;
    public $jumlahbarang;
    public $totalbarang;
    public $diskon;
    public static $pajak = 0.02;

    public function __construct($namapembeli, $namabarang, $hargabarang, $jumlahbarang, $diskon) {
        $this->namapembeli = $namapembeli;
        $this->namabarang = $namabarang;
        $this->hargabarang = $hargabarang;
        $this->jumlahbarang = $jumlahbarang;
        $this->diskon = $diskon;
    }

    public function totalharga(): float {
        $subtotal = $this->hargabarang * $this->jumlahbarang;
        return $subtotal;
    }

}

$belanja1 = new Belanja("Hani", "Sampo", 10000, 2, 0.1);
$belanja2 = new Belanja("Sukma", "Facial Wash", 30000, 2, 0.1);

echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namapembeli . "\n";
echo "Nama Barang: " . $belanja1->namabarang . "\n";
echo "Harga Barang: " . $belanja1->hargabarang . "\n";
echo "Jumlah Barang: " . $belanja1->jumlahbarang . "\n";
echo "Diskon: " . $belanja1->diskon . "\n";
echo "Subtotal Rp " . $belanja1->totalharga() . "\n\n";

echo "Nama Pembeli: " . $belanja2->namapembeli . "\n";
echo "Nama Barang: " . $belanja2->namabarang . "\n";
echo "Harga Barang: " . $belanja2->hargabarang . "\n";
echo "Jumlah Barang: " . $belanja2->jumlahbarang . "\n";
echo "Diskon: " . $belanja2->diskon . "\n";
echo "Subtotal Rp " . $belanja2->totalharga() . "\n";
echo "</pre>";

?>
