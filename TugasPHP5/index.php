<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 5 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 5 PHP</h1>
      <section class="card">
        <div>
          <p>
           Lengkapi file Pegawai. php sebagai berikut:<br /><br />

          setTunjab = 20% dari Gaji Pokok<br />
          setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)<br />
          setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt<br />
          mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih <br /><br />


          Buatlah objPegawai dengan data:<br />

          5 instance object pegawai<br />
          cetaklah semua struktur gaji pegawai
          </p>
        </div>
      </section>
      <section class="card">
        <!-- <div> -->
            <h3>Data Pegawai</h3><br />
        <!-- </div> -->
        <?php

            require './model/objectPegawai.php';

        ?>
      </section>
        <br />
        <br />
    </div>
  </body>
</html>
