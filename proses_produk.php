<?php

class Produk {
    public $nama;
    public $harga;

    // Method untuk menentukan status harga
    public function statusHarga() {
        if ($this->harga > 100000) {
            return "Produk Mahal";
        } else {
            return "Produk Terjangkau";
        }
    }
}

// Cek dulu apakah data dikirim
if (isset($_POST['nama']) && isset($_POST['harga'])) {

    $produk1 = new Produk();

    $produk1->nama  = htmlspecialchars($_POST['nama']);
    $produk1->harga = htmlspecialchars($_POST['harga']);

    echo "<h2>Data Produk Warung AA Keonho</h2>";
    echo "Nama Produk : " . $produk1->nama . "<br>";
    echo "Harga : Rp " . $produk1->harga . "<br>";

    echo "Status Harga Produk : " . $produk1->statusHarga();

} 

?>
