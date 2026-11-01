
<?php
$nama = "Lidya Maitara";
$npm = "2507071028";

$nilaiTugas = 80;
$nilaiUTS = 75;
$nilaiUAS = 90;

function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
}

function tentukanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 85) {
        return "A";
    } elseif ($nilaiAkhir >= 75) {
        return "B";
    } elseif ($nilaiAkhir >= 65) {
        return "C";
    } elseif ($nilaiAkhir >= 50) {
        return "D";
    } else {
        return "E";
    }
}

function tentukanStatus($nilaiAkhir) {
    if ($nilaiAkhir >= 65) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

$nilaiAkhir = hitungNilaiAkhir($nilaiTugas, $nilaiUTS, $nilaiUAS);
$grade = tentukanGrade($nilaiAkhir);
$status = tentukanStatus($nilaiAkhir);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penghitung Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf3ff;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .container {
            background: white;
            width: 400px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2563a6;
        }

        p {
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .hasil {
            background: #eaf3ff;
            padding: 12px;
            border-radius: 8px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <p>Nama: <?= $nama ?></p>
    <p>NPM: <?= $npm ?></p>
    <p>Nilai Tugas: <?= $nilaiTugas ?></p>
    <p>Nilai UTS: <?= $nilaiUTS ?></p>
    <p>Nilai UAS: <?= $nilaiUAS ?></p>

    <div class="hasil">
        <h3>Hasil Perhitungan</h3>
        <p>Nilai Akhir: <?= number_format($nilaiAkhir, 2, ',', '.') ?></p>
        <p>Grade: <?= $grade ?></p>
        <p>Status: <?= $status ?></p>
    </div>
</div>

</body>
</html>
