<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Form Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form class="border border-light p-5" method="POST">

        <p class="h4 mb-4 text-center">Form Gaji</p>

        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Karyawan">
        </div>

        <div>
            <label for="agama">Agama</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="muslim" value="muslim">
                <label class="form-check-label" for="muslim">muslim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="nonis" value="nonis">
                <label class="form-check-label" for="nonis">non muslim</label>
            </div>
        </div>

        <div>
            <label for="jabatan">Jabatan</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" id="manager" value="manager">
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" id="asisten" value="asisten">
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" id="kabag" value="kabag">
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" id="staff" value="staff">
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>

        <div>
            <label for="status">Status</label>
            <br>
            <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="menikah" value="menikah">
                <label class="form-check-label" for="menikah">
                    Menikah
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="belum_menikah" value="belum_menikah">
                <label class="form-check-label" for="belum_menikah">
                    Belum Menikah
                </label>
            </div> -->
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belum_menikah" type="radio" name="status" value="belum_menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="belum_menikah">Belum Menikah</label>
                </div>
            </div>

            <div>
                <label for="jumblah_anak">Jumlah Anak</label>
                <input type="text" name="jumblah_anak" class="form-control mb-4" placeholder="Jumblah Anak" value="">
            </div>

            <div>
                <button class="btn btn-info btn-block my-4" name="proses" type="submit">submit</button>
            </div>

    </form>
    <?php
    // error_reporting(0);
    // $name = isset($_POST['nama']) ? $_POST['nama'] : '';
    // $name = isset($_POST['agama']) ? $_POST['Agama'] : '';
    // $name = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
    // $name = isset($_POST['status']) ? $_POST['Status'] : '';
    // $name = isset($_POST['Jumblah_anak']) ? $_POST['Jumblah Anak'] : '';
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumblah_anak = $_POST['jumblah_anak'];
    $tombol = $_POST['proses'];

    $gapok = 0;

    switch ($jabatan) {
        case 'manager':
            $gapok = 20000000;
            break;
        case 'asisten':
            $gapok = 15000000;
            break;
        case 'kabag':
            $gapok = 10000000;
            break;
        case 'staff':
            $gapok = 5000000;
            break;
        default:
            $gapok = 0;
    }

    $tunjangan_jabatan = (20 * $gapok) / 100;
    if ($status == "menikah" && $jumblah_anak <= 2) {
        $tunjangan_keluarga = (5 * $gapok) / 100;
    } elseif ($status == "menikah" && $jumblah_anak <= 5) {
        $tunjangan_keluarga = (10 * $gapok) / 100;
    } elseif ($status == "menikah" && $jumblah_anak > 5) {
        $tunjangan_keluarga = (15 * $gapok) / 100;
    } else {
        $tunjangan_keluarga = 0;
    }

    $gaji_kotor = $gapok + $tunjangan_jabatan + $tunjangan_keluarga;

    $zakat = ($agama == "muslim" && $gaji_kotor >= 6000000) ? (2.5 * $gaji_kotor) / 100 : 0;
    $take_home = $gaji_kotor - $zakat;

    if (isset($tombol)) { ?>
        <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert p-5" role="alert">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">nama</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jumblah_Anak</th>
                                <th scope="col">gapok</th>
                                <th scope="col">tunjangan_jabatan</th>
                                <th scope="col">gaji_kotor</th>
                                <th scope="col">zakat</th>
                                <th scope="col">take_home</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col"><?= $nama ?></th>
                                <th scope="col"><?= $agama ?></th>
                                <th scope="col"><?= $jabatan ?></th>
                                <th scope="col"><?= $status ?></th>
                                <th scope="col"><?= $jumblah_anak ?></th>
                                <th scope="col"><?= "Rp.".number_format($gapok) ?></th>
                                <th scope="col"><?= "Rp.".number_format($tunjangan_jabatan) ?></th>
                                <th scope="col"><?= "Rp.".number_format($gaji_kotor) ?></th>
                                <th scope="col"><?= "Rp.".number_format($zakat) ?></th>
                                <th scope="col"><?= "Rp.".number_format($take_home) ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
