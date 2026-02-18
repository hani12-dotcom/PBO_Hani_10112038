<?php
class Kendaraan {
    public $jumlahRoda;
    public $warna;
    public $bahanBakar;
    public $harga;
    public $merek;
    public $konsumsiBBM; 
    public $tahunPembuatan; 

    // Method Status Harga
    public function statusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    // Method Status BBM
    public function statusBBM() {
        if ($this->konsumsiBBM >= 20) {
            return "Irit";
        } else {
            return "Boros";
        }
    }

    // Method Harga Bekas (turun 10% dari harga awal)
    public function hargaBekas() {
        return $this->harga * 0.9;
    }
}

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->harga = 20000000;
$objekKendaraan1->bahanBakar = "Bensin";
$objekKendaraan1->konsumsiBBM = 35;
$objekKendaraan1->tahunPembuatan = 2022;

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 250000000;
$objekKendaraan2->bahanBakar = "Bensin";
$objekKendaraan2->konsumsiBBM = 15;
$objekKendaraan2->tahunPembuatan = 2021;

// Output Kendaraan 1

echo "Merek: " . $objekKendaraan1->merek . "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan1->tahunPembuatan . "<br>";
echo "Harga Baru: Rp " . number_format($objekKendaraan1->harga,0,",",".") . "<br>";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan1->statusBBM() . "<br>";
echo "Harga Bekas: Rp " . number_format($objekKendaraan1->hargaBekas(),0,",",".") . "<br>";
echo "<hr style='width:200px; margin:15px 0;'>";

// Output Kendaraan 2

echo "Merek: " . $objekKendaraan2->merek . "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan2->tahunPembuatan . "<br>";
echo "Harga Baru: Rp " . number_format($objekKendaraan2->harga,0,",",".") . "<br>";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan2->statusBBM() . "<br>";
echo "Harga Bekas: Rp " . number_format($objekKendaraan2->hargaBekas(),0,",",".") . "<br>";
?>
