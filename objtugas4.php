<?php
require 'tugas4.php';
//ciptakan object
$siti = new pegawai('001','Siti','Kabag','Islam','Belum Menikah');
$jhon = new pegawai('002','Jhon','Manager','Kristen Katholik','Menikah');
$antonio = new pegawai('003','Antoni0','Asisten Manajer','Kristen Protestan','Belum Menikah');
$davinci = new pegawai('004','Davinci','Staff','Hindu','Menikah');


echo '<h3 align="center">'.pegawai::PEGAWAI.'</h3>';
$siti->mencetak();
$jhon->mencetak();
$antonio->mencetak();
$davinci->mencetak();
echo 'Jumlah Pegawai: '.pegawai::$jml;