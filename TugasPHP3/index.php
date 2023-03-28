<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Andi', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Ani', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Aji', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 3 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 3 PHP</h1>
      <section class="card">
        <div>
          <p>
            Tugas<br />
            1. Buat grade<br />
            2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot<br />
            3. Buat predikat dari nilai menggunakan switch case<br />
          </p>
        </div>
      </section>
      <section class="card">
        <div id="JajarGenjang">
            <h3>Nilai Mahasiswa</h3>
            <div class="scroll">
            <table width="100%">
                <thead>
                    
                    <tr>
                    <?php 
                    foreach($ar_judul as $judul){
                        ?>
                        <th><?= $judul ?></th>
                        <?php }?>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach($mahasiswa as $nilaiMahasiswa){
                        $ket = (isset($nilaiMahasiswa['nilai']) >= 60) ? 'Lulus' : 'Tidak lulus';
                        // GRADE 
                        if ($nilaiMahasiswa['nilai'] >= 85 && $nilaiMahasiswa['nilai'] <= 100) {
                            $grade = 'A';
                        } else if ($nilaiMahasiswa['nilai']>= 75 && $nilaiMahasiswa['nilai'] <= 84) {
                            $grade = 'B';
                        } else if ($nilaiMahasiswa['nilai']>= 60 && $nilaiMahasiswa['nilai'] <= 74) {
                            $grade = 'C';
                        } else if ($nilaiMahasiswa['nilai']>= 30 && $nilaiMahasiswa['nilai'] <= 59) {
                            $grade = 'D';
                        } else if ($nilaiMahasiswa['nilai']>= 0 && $nilaiMahasiswa['nilai'] <= 29) {
                            $grade = 'E';
                        } else {
                            $grade = '';
                        }
                        
                        // PREDIKAT
                        switch ($grade) {
                            case "A":
                                $predikat = "Sangat Baik";
                            break;
                            case "B":
                                $predikat = "Baik";
                            break;
                            case "C":
                                $predikat = "Cukup";
                            break;
                            case "D":
                                $predikat = "Kurang";
                            break;
                            case "E":
                                $predikat = "Sangat Kurang";
                            break;
                            default:
                                "null";
                        }
                        ?>
                        <tr>
                            <td><?= $no ?> </td>
                            <td><?= $nilaiMahasiswa['NIM'] ?></td>
                            <td><?= $nilaiMahasiswa['nama'] ?></td>
                            <td><?= $nilaiMahasiswa['nilai'] ?></td>
                            <td><?= $ket ?></td>
                            <td><?= isset($grade) ? $grade : 'null'; ?></td>
                            <td><?= isset($predikat) ? $predikat : 'null'; ?></td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>

                <?php
                    $jumlahMahasiswa = count($mahasiswa, 0);

                    $setArrayNilai = array_column($mahasiswa, 'nilai');
                    $nilaiTertinggiMahasiswa = (string) max($setArrayNilai);
                    $nilaiTerendahMahasiswa = (string) min($setArrayNilai);

                    $setMean = array_sum(array_column($mahasiswa, 'nilai'));
                    $meanNilaiMahasiswa = $setMean / $jumlahMahasiswa;
                ?>
                
                <tfoot>
                    <tr>
                        <td></td>
                        <td>Total mahasiswa: </td>
                        <td><span class="hasil"><?= isset($jumlahMahasiswa) ? $jumlahMahasiswa : 'null'; ?></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Nilai tertinggi: </td>
                        <td><span class="hasil"><?= isset($nilaiTertinggiMahasiswa) ? $nilaiTertinggiMahasiswa : 'null'; ?></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Nilai terendah: </td>
                        <td><span class="hasil"><?= isset($nilaiTerendahMahasiswa) ? $nilaiTerendahMahasiswa : 'null'; ?></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Rata-rata nilai: </td>
                        <td><span class="hasil"><?= isset($meanNilaiMahasiswa) ? $meanNilaiMahasiswa : 'null'; ?></div></td>
                    </tr>
                </tfoot>
            </table>
            <br />
            </div>
            <br />
          <br/>
        </div>
      </section>
    </div>
  </body>
</html>
