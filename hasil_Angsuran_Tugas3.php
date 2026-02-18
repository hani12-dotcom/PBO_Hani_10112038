<?php

class Pegadaian {

    public function __construct(
        public $pinjaman,
        public $bunga,
        public $lama,
        public $telat
    ) {}

    public function total(): float|int {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    public function angsuran(): float|int {
        return $this->total() / $this->lama;
    }

    public function denda(): float|int {
        return $this->angsuran() * 0.0015 * $this->telat;
    }

    public function bayar(): float|int {
        return $this->angsuran() + $this->denda();
    }
}

if (isset($_POST['pinjaman'])) {

    $p = new Pegadaian(
        pinjaman: (float) $_POST['pinjaman'],
        bunga: (float) $_POST['bunga'],
        lama: (int) $_POST['lama'],
        telat: (int) $_POST['telat']
    );

    echo "<h3>Program Penghitung Besaran Angsuran Hutang</h3>";

    echo "Besaran Pinjaman : Rp " . number_format($p->pinjaman, 0, ',', '.') . "<br>";
    echo "Masukan besar bunga (%) : " . $p->bunga . "%<br>";
    echo "Total Pinjaman : Rp " . number_format($p->total(), 0, ',', '.') . "<br>";
    echo "Lama angsuran (bulan) : " . $p->lama . "<br>";
    echo "Besaran angsuran per bulan : Rp " . number_format($p->angsuran(), 0, ',', '.') . "<br>";
    echo "Denda : Rp " . number_format($p->denda(), 0, ',', '.') . "<br>";
    echo "<b>Total Bayar : Rp " . number_format($p->bayar(), 0, ',', '.') . "</b>";
}
?>
 