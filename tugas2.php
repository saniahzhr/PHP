<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Memproses Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="border border-light p-5" method="POST">

            <p class="h4 mb-4 text-center">FORM PEGAWAI</p>

            <!--Nama-->
            <label for="nama">Nama Lengkap Pegawai</label>
            <input type="text" name="nama" class="form-control mb-4" placeholder="Masukkan Nama Anda">

            <!--Agama-->
            <label for="agama">Agama</label>
            <select class="browser-default custom-select mb-4" name="agama">
                <option value="" disabled="" selected="">-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen (Katolik)</option>
                <option value="Bahasa Indonesia">Kristen (Protestan)</option>
                <option value="Bahasa Indonesia">Budha</option>
                <option value="Bahasa Indonesia">Hindu</option>
                <option value="Bahasa Indonesia">Khonghuchu</option>

            </select>
            <br />

            <!--Jabatan-->
            <p> Jabatan </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jabatan" id="jabatan">
                <label class="form-check-label" for="jabatan">
                Manajer</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jabatan" id="jabatan" checked>
                <label class="form-check-label" for="jabatan">
                Asisten</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jabatan" id="jabatan" checked>
                <label class="form-check-label" for="jabatan">
                Kabag</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jabatan" id="jabatan" checked>
                <label class="form-check-label" for="jabatan">
                Staff</label>
            </div>
            <br>

            <!--Status-->
            <p> Status </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Menikah</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">Single</label>
            </div>
            <br>

            <!--Jumlah Anak-->
            <label for="Jumlah Anak"> Jumlah anak</label>
            <input type="text" name="anak" class="form-control mb-4" placeholder="Masukkan  Jumlah Anak anda ">

            <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>
        
            
        </form>
        <?php 
        //tangkap request
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $tombol = $_POST['proses'];
        //tentukan kelulusan
        $ket = ($nilai >= 60)?"Lulus":"Gagal";
    
        //tentukan jabatan
        switch ($jabatan) {
            case 'Manajer': $gapok = '20000000'; break;
            case 'Asisten': $gapok = '15000000'; break;
            case 'Kabag': $gapok = '10000000'; break;
            case 'Staff': $gapok = '4000000'; break;
            default: $gapok = '';

        //Tunjanaagn jabatan
        

        }
            //tentukan grade nilai
            if($status== 'menikah' && $status <= 100) $grade = 'A';
            else if($nilai >= 75 && $nilai < 85) $grade = 'B';
            else if($nilai >= 60 && $nilai < 75) $grade = 'C';
            else if($nilai >= 30 && $nilai < 60) $grade = 'D';
            else if($nilai >= 0 && $nilai < 30) $grade = 'E';
            else $grade = '';
        
        if(isset($tombol)){ ?>
        <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert alert-primary p-5" role="alert">
                    Nama Pegawai: <?= $nama ?>
                    <br />Jabatan: <?= $jabatan ?>
                    <br />jumlah_anak: <?= number_format($anak, 2, ',', '.'); ?>
                    <br />Keterangan: <?= $ket ?>
                    <br />Grade: <?= $grade ?>
                    <br />Predikat: <?= $predikat ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>