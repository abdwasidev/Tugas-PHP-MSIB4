<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 1 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 1 PHP</h1>
      <section class="card">
        <div>
          <p>
            Buatlah form menggunakan PHP dan hitung rumus dari bangun datar
            jajar genjang
          </p>
        </div>
      </section>
      <section class="card">
        <div id="JajarGenjang">
          <h3>Jajar Genjang</h3>
          <form method="POST">
            <input type="number" name="alas" placeholder="Alas" required/><br />
            <input
              type="number"
              name="sisiMiring"
              placeholder="Sisi Miring"
              required
            /><br />
            <input type="number" name="tinggi" placeholder="Tinggi" required/><br />
            <button type="submit" name="submit">Submit</button>
          </form>
          <br />
          <?php
            if(isset($_POST['submit'])){
              $getAlas= $_POST['alas'];
              $getSisiMiring = $_POST['sisiMiring'];
              $getTinggi = $_POST['tinggi'];

              $getLuas = $getAlas * $getTinggi;
              $getKeliling = 2 * ($getAlas + $getSisiMiring);

              echo "<b>Detail</b><br/>";
              echo $getHTMLAlas = 
                "<p>".
                    "<b> Alas: </b>".
                    "&nbsp;<span class='hasil'> ". $getAlas . " cm</span>".
                "</p>";

              echo $getHTMLSisiMiring = 
                "<p>".
                    "<b> Sisi Miring: </b>".
                    "&nbsp;<span class='hasil'> ". $getSisiMiring . " cm</span>".
                "</p>";

              echo $getHTMLTinggi = 
                "<p>".
                    "<b> Tinggi: </b>".
                    "&nbsp;<span class='hasil'> ". $getTinggi . " cm</span>".
                "</p>";

              echo $getHTMLLuas = 
                "<p>".
                    "<b> Hasil Luas: </b>".
                    "&nbsp;<span class='hasil'> ". $getLuas . " cm<sup>2</sup></span>".
                "</p>";

              echo $getHTMLKeliling = 
                "<p>".
                    "<b> Hasil Keliling: </b>".
                    "&nbsp;<span class='hasil'>" . $getKeliling . " cm</span>".
                "</p>";

            }
            
          ?>
          <br/>
        </div>
      </section>
    </div>
  </body>
</html>
