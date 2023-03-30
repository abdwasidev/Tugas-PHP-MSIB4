<?php 

    require 'Pegawai.php';

    $pegawai1 = new Pegawai('1809837362','Andi','Manager','Islam','Menikah');
    $pegawai2 = new Pegawai('1902343224','Kurnia','Asisten Manager','Islam','Belum Menikah');
    $pegawai3 = new Pegawai('1801232143','Irawan','Kepala Bagian','Kristen Katolik','Menikah');
    $pegawai4 = new Pegawai('2009972323','Gita','Staff','Islam','Menikah');
    $pegawai5 = new Pegawai('2100871238','Hermawan','Staff','Hindu','Belum Menikah');
    $pegawai6 = new Pegawai('1706712113','Dinda','Manager','Buddha','Menikah');


    $ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6];

    foreach($ar_pegawai as $pegawai){
        $pegawai->cetak();
    }

?>