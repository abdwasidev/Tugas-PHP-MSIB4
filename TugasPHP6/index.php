<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 6 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 6 PHP</h1>
      <section class="card">
        <div>
          <p>
           
           Buatlah Abstract class Bentuk2D sebagai induk kelas dengan member class:<br /><br />

            - method abstract:<br />
            fungsi luasBidang();<br />
            fungsiKelilingBidang();<br />

            Buatlah class-class keturunan:<br /><br />

            - Lingkaran<br />
            variable : jari2<br />
            method : namaBidang(),luasBidang(), kelilingBidang()<br /><br />

            - PersegiPanjang<br />
            variable : panjang, lebar<br />
            method : namaBidang(),luasBidang(), kelilingBidang()<br /><br />


            - segitiga<br />
            variable : alas, tinggi<br />
            method : namaBidang(),luasBidang(), kelilingBidang()<br /><br />

            cetaklah kedalam object dan tambahkan tag table
          </p>
        </div>
      </section>
      <section class="card">
            <h3>Bangun Datar</h3><br />
        <?php

            require './view/form.php';
            require './model/ObjectBangunDatar.php';

        ?>
      </section>
        <br />
        <br />
    </div>
  </body>
</html>
