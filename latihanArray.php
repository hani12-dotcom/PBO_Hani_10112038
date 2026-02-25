<?php
session_start();

function cekKelulusan($nilai){
    return ($nilai >= 70) ? "Lulus Kuis" : "Tidak Lulus Kuis";
}

// Simpan data
if(isset($_POST['simpan'])){
    $data = [
        "nama" => $_POST['nama'],
        "kelas" => $_POST['kelas'],
        "matkul" => $_POST['matkul'],
        "nilai" => $_POST['nilai']
    ];

    $_SESSION['mahasiswa'][] = $data;
}

// Reset data (bisa langsung klik tanpa isi form)
if(isset($_POST['reset'])){
    session_unset();   // hapus semua data session
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    
</head>
<body>

<h2>Latihan Array</h2>

<form method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Kelas: <input type="text" name="kelas" required><br><br>
    Mata Kuliah: <input type="text" name="matkul" required><br><br>
    Nilai: <input type="number" name="nilai" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
    <button type="submit" name="reset" formnovalidate>Reset</button>
</form>

<hr>

<?php
if(isset($_SESSION['mahasiswa'])){
    foreach($_SESSION['mahasiswa'] as $mhs){
        echo "Nama : " . $mhs['nama'] . "<br><br>";
        echo "Kelas : " . $mhs['kelas'] . "<br><br>";
        echo "Mata Kuliah : " . $mhs['matkul'] . "<br><br>";
        echo "Nilai : " . $mhs['nilai'] . "<br><br>";
        echo cekKelulusan($mhs['nilai']);
        echo "<hr>";
    }
}
?>

</body>
</html>