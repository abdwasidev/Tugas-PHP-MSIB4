<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "lainnya"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 4 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 4 PHP</h1>
      <section class="card">
        <div>
          <p>
            Buatlah Tampilan Form seperti dibawah ini<br />
            1. Hitung skor skill<br />
            2. Tentukan ketegori skill dengan fungsi<br /><br />
            <div class="image">
                <img src="./img/formresult.png" alt="">
                <img src="./img/kategori.png" alt="">
            </div>
          </p>
        </div>
      </section>
      <section class="card">
        <div id="JajarGenjang">
            <h3>Data Mahasiswa</h3><br />
            <form method="POST">
                <!-- NAMA -->
                <label for="yourName">Nama</label>
                <input type="text" name="yourName" placeholder="Nama"/><br />

                <!-- NIM -->
                <label for="nim">NIM</label>
                <input type="number" name="nim" placeholder="NIM"/><br />

                <!-- Jenis Kelamin -->
                <label for="jenisKelamin">Jenis Kelamin</label>
                <div class="radio">
                    <label>
                        <div class="radio-button">
                            <div class="radio-wrap">
                                <input type="radio" name="jenisKelamin" value="Laki-laki" />
                                <p>&nbsp;&nbsp;Laki-Laki</p>
                            </div>
                        </div>
                    </label>
                    <label>
                        <div class="radio-button">
                            <div class="radio-wrap">
                                <input type="radio" name="jenisKelamin" value="Perempuan" />
                                <p>&nbsp;&nbsp;Perempuan</p>
                            </div>
                        </div>
                    </label>
                </div><br />

                <!-- Jenis Kelamin -->
                <label for="programStudi">Program Studi</label>
                <select id="prodi" class="prodi" name="prodi" placeholder="Program Studi" required>
                    <option>Pilih Program Studi ...</option>
                    <?php 
                        foreach($ar_prodi as $prodi => $v){
                    ?>
                        <option value="<?= $prodi ?>"><?= $v ?></option>
                    <?php 
                        } 
                    ?>
                </select><br />
                
                <!-- Jenis Kelamin -->
                <label for="skillProgramming">Skill Programming</label>
                <div class="radio">
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <label>
                        <div class="radio-button">
                            <div class="radio-wrap">
                                <input type="checkbox" name="skill[]" value="<?= $skill ?>" />
                                <p>&nbsp;&nbsp;<?= $skill ?></p>
                            </div>
                        </div>
                    </label>
                    <?php } ?>
                </div><br />
                
                <!-- Domisili -->
                <label for="domisili">Domisili</label>
                <select id="domisili" class="prodi" name="domisili" placeholder="Domisili" required>
                    <option>Pilih Domisili ...</option>
                    <?php 
                         foreach($domisili as $d){
                    ?>
                        <option value="<?= $d ?>"><?= $d ?></option>
                    <?php 
                        } 
                    ?>
                </select><br />

                <!-- NAMA -->
                <label for="yourEmail">Nama</label>
                <input type="email" name="yourEmail" placeholder="Email"/><br />
                
                <!-- Submit -->
                <input type="submit" name="submit" placeholder="Submit"/>
            </form>
            <br />
            <?php 

                if(isset($_POST['submit'])){
                    $nama = $_POST['yourName'];
                    $nim = $_POST['nim'];
                    $jenisKelamin = $_POST['jenisKelamin'];
                    $prodi = $_POST['prodi'];
                    $skill = $_POST['skill'];
                    $domisili = $_POST['domisili'];
                    $email = $_POST['yourEmail'];
                }
                ?>
                Nama : <?= $nama ?><br>
                NIM : <?= $nim ?><br>
                Jenis Kelamin <?= $jenisKelamin ?><br>
                Program Studi : <?= $prodi ?><br>
                Skill : 
                <?php 
                foreach($skill as $s){ ?>
                <?= $s ?> ,
                <?php } ?>
                <br>Domisili : <?= $domisili ?>
                <br>Email : <?= $email ?>
            <br /><br />
            </div>
        </div>
      </section>
    </div>
  </body>
</html>
