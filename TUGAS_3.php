<?php

//array scalar (1 dimensi)
$m1 = ['nim'=>'0620408327','nama'=>'Saniah','nilai'=>90];
$m2 = ['nim'=>'0620408328','nama'=>'Nisa','nilai'=>90];
$m3 = ['nim'=>'0620408329','nama'=>'Manda','nilai'=>87];
$m4 = ['nim'=>'0620408330','nama'=>'Taniya','nilai'=>89];
$m5 = ['nim'=>'0620408331','nama'=>'Tino','nilai'=>60];
$m6 = ['nim'=>'0620408332','nama'=>'Nurman','nilai'=>45];
$m7 = ['nim'=>'0620408332','nama'=>'Pipo','nilai'=>55];
$m8 = ['nim'=>'0620408332','nama'=>'Kasino','nilai'=>75];
$m9 = ['nim'=>'0620408332','nama'=>'Jhon','nilai'=>66];
$m10 = ['nim'=>'0620408332','nama'=>'Bhen','nilai'=>35];

$ar_judul = ['No','Nim','Nama','Nilai','Keterangan',
'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$nim = ['nim'];
$nama = ['nama'];
$mahasiswa = count($mahasiswa);
$data_nilai = array_column($mahasiswa,'nilai');
$nilai_tertinggi = max($data_nilai);
$nilai_terendah = min($data_nilai);
$total= array_sum($data_nilai);
$rata2 = $total/ $mahasiswa;

//ternary
$keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";

//keterangan
$hasil_akhir = [
    'Jumlah Nilai'=>$jumlah_nilai,
    'Jumlah Mahasiswa'=>$jml_mahasiswa,
    'Jml Nilai Tertinggi'=>$max_nilai,
    'Jml Nilai Terendah'=>$min_nilai,
    'Rata2'=>$rata2
];

//Grade
if($nilai >= 85 && $nilai <= 100) $grade="A";
else if($nilai>= 75 && $nilai <= 85) $grade="B";
else if($nilai>= 60 && $nilai <= 75) $grade="C";
else if($nilai>= 30 && $$nilai <= 60) $grade="D"; 
else if($nilai>= 0 && $nilai <= 30) $grade="E";
else $grade = "";

//Predikat
switch ($grade) {
    case 'A':
        $predikat='Memuaskan';
        break;
    case 'B':
        $predikat='Bagus';
        break;
    case 'C':
        $predikat='Cukup';
        break;
    case 'D':
        $predikat='Kurang';
        break;
    case 'E':
        $predikat='Buruk';
        break;

    default:
        $predikat='';
        break;
}
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nama Mahasiswa </h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $m){
                    $nilai = $mahasiswa['nilai'];
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['kelas'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($hasil_akhir as $hsl => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $hsl ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>