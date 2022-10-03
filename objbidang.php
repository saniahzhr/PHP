<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$bdg = ["no", "nama bidang", "keterangan", "luas bidang", "keliling bidang"];

$no = 1;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Form Rumus-Rumus</h1>
    <table class="table table-dark table-center table-striped-columns">
        <thead>
            <tr>
                <?php
                foreach ($bdg as $bd) {
                ?>
                    <th><?= $bd ?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $b1 = new Lingkaran(14);
                $b2 = new Persegi(9, 3);
                $b3 = new Segitiga(28, 29, 31);

                $BTK = [$b1, $b2, $b3];

                foreach ($BTK as $BK) {

                ?>
                    <td><?= $no++ ?></td>
                    <td><?= $BK->NB() ?></td>
                    <td><?= $BK->keterangan() ?></td>
                    <td><?= $BK->RumusLB() ?></td>
                    <td><?= $BK->RumusKB() ?></td>
            </tr>
        <?php
                } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5" class="text-center">HASIL</th>
            </tr>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>