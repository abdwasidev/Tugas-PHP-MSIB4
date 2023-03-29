<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "Python"=>30, "MySQL"=>30,"Laravel"=>40];
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
                <div>
                    <img src="https://raw.githubusercontent.com/abdwasidev/Tugas-PHP-MSIB4/main/TugasPHP4/img/formresult.png" alt="">
                </div>
                <div>
                    <img src="https://raw.githubusercontent.com/abdwasidev/Tugas-PHP-MSIB4/main/TugasPHP4/img/kategori.png" alt="">
                </div>
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
                <input type="text" name="yourName" placeholder="Nama" required/><br />

                <!-- NIM -->
                <label for="nim">NIM</label>
                <input type="number" name="nim" placeholder="NIM"/ required><br />

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

                <!-- Email -->
                <label for="yourEmail">Email</label>
                <input type="email" name="yourEmail" placeholder="Email" required/><br />
                
                <!-- Submit -->
                <input type="submit" name="submit" placeholder="Submit"/>
            </form>
            <br />
            <div class="data-hasil">
            <?php 
            error_reporting(E_ERROR | E_PARSE);

                function getScoreSkill($setSkill){
                    // $sumScore = array_sum(array_values($setSkill)); // Hanya Mengambil Index Dari Array Bukan Value
                    foreach ($setSkill as $set) {
                        if ($set === "HTML" || $set === "CSS") {
                            $sumScore += 10;
                        } else if ($set === "Javascript" || $set === "RWD Bootstrap" || $set === "Python") {
                            $sumScore += 20;
                        } else if ($set === "PHP" || $set === "MySQL") {
                            $sumScore += 30;
                        } else if ($s == "Laravel") {
                            $sumScore += 40;
                        } else {
                            $sumScore += 0;
                        }
                    }
                    return $sumScore;
                }

                function getKategoriSkill($sumScoreValue){
                    if ($sumScoreValue >= 100 && $sumScoreValue <= 150) {
                        $getKategori = 'Sangat Baik';
                    } else if ($sumScoreValue >= 60 && $sumScoreValue <= 99) {
                        $getKategori = 'Baik';
                    } else if ($sumScoreValue >= 40 && $sumScoreValue <= 59) {
                        $getKategori = 'Cukup';
                    } else if ($sumScoreValue > 0 && $sumScoreValue <= 39) {
                        $getKategori = 'Kurang';
                    } else if ($sumScoreValue == 0) {
                        $getKategori = 'Tidak Memadai';
                    } else {
                        $getKategori = 'null';
                    }

                    return $getKategori;
                }

                if(isset($_POST['submit'])){
                    $nama = $_POST['yourName'];
                    $nim = $_POST['nim'];
                    $jenisKelamin = $_POST['jenisKelamin'];
                    $programStudi = $_POST['prodi'];
                    $skill = $_POST['skill'];
                    $domisiliMahasiswa = $_POST['domisili'];
                    $email = $_POST['yourEmail'];

                    $scoreSkill = getScoreSkill($skill);

                    $kategoriSkill = getKategoriSkill($scoreSkill);
                    
                }
                ?>
                <p>
                    <b> Nama: </b>
                    &nbsp;<span class='hasil'><?= (isset($nama) ? $nama : 'null') ?></span>
                </p>
                <p>
                    <b> NIM: </b>
                    &nbsp;<span class='hasil'><?= (isset($nim) ? $nim : 'null') ?></span>
                </p>
                <p>
                    <b> Jenis Kelamin: </b>
                    &nbsp;<span class='hasil'><?= (isset($jenisKelamin) ? $jenisKelamin : 'null') ?></span>
                </p>
                <p>
                    <b> Program Studi: </b>
                    &nbsp;<span class='hasil'><?= (isset($programStudi) ? $programStudi : 'null') ?></span>
                </p>
                <p>
                    <b> Skill: </b>
                    &nbsp;
                    <?php foreach((isset($skill) ? $skill : 'null') as $s){ ?>
                    <span class='hasil'><?= (isset($s) ? $s : 'null') ?></span>
                    <?php } ?>
                </p>
                <p>
                    <b> Score Skill: </b>
                    &nbsp;<span class='hasil'><?= (isset($scoreSkill) ? $scoreSkill : 'null') ?></span>
                </p>
                <p>
                    <b> Kategori Skill: </b>
                    &nbsp;<span class='hasil'><?= (isset($kategoriSkill) ? $kategoriSkill : 'null') ?></span>
                </p>
                <p>
                    <b> Domisili: </b>
                    &nbsp;<span class='hasil'><?= (isset($domisiliMahasiswa) ? $domisiliMahasiswa : 'null') ?></span>
                </p>
                <p>
                    <b> Email: </b>
                    &nbsp;<span class='hasil'><?= (isset($email) ? $email : 'null') ?></span>
                </p>
            </div>
            <br />
            </div>
        </div>
      </section>
    </div>
  </body>
</html>
