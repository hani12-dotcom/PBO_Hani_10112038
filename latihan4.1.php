<?php

//ini adalah function sekumpulan kode yang dibuat untuk melakukan suatu tugas tertentu dan bisa dipanggil kembali saat dibutuhkan.//
function formatRupiah($angka): string {
    //return type adalah tipe data yang akan dikembalikan oleh sebuah function atau method//
    return "Rp " . number_format($angka, 0, ',', '.');
}

//ini adalah class blueprint (cetakan) untuk membuat objek.//
class Belanja {
    //ini adalah property (variabel yang berada di dalam class dan digunakan untuk menyimpan data.)//
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    //ini adalah method hitung subtotal (function yang berada di dalam class dan digunakan untuk melakukan suatu proses terhadap data dalam class tersebut)//
    public function hitungSubtotal(): int {
        //$this adalah keyword yang digunakan untuk mengakses property atau method dalam class itu sendiri//
        return $this->hargaBarang * $this->jumlahBeli;
}

    public function hitungTotalDenganDiskon(int $persenDiskon): float {
    $subtotal = $this->hitungSubtotal();
    $diskon = ($persenDiskon / 100) * $subtotal;
    return $subtotal - $diskon;
}

}

$data = [
    'namaPembeli' => 'Hani',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12
];

//intansi objek belanja dari Class Belanja//
$belanja = new Belanja();
$belanja->namaPembeli = $data['namaPembeli'];
$belanja->namaBarang = $data['namaBarang'];
$belanja->hargaBarang = $data['hargaBarang'];
$belanja->jumlahBeli = $data['jumlahBeli'];

//output//
echo "<h2> STRUK BELANJA WARUNG A </h2>";
echo "Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "Subtotal " . formatRupiah( $belanja->hitungSubtotal()) . "<br>";
echo "Total (Diskon 10%) " . formatRupiah( $belanja->hitungTotalDenganDiskon(10)) . "<br>";
echo "<b>Total Bayar : " . formatRupiah($total) . "</br>"

?>