<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas PHP 2 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas 2 PHP</h1>
      <section class="card">
        <div>
          <p>
            
            Diketahui sebuah perusahaan ingin memasukan rincian gaji ke pegawai dengan
            menggunakan form proses PHP, dengan rincian sebagai berikut : <br /><br />
            1. Tentukan gaji pokok (switch case)
            <br />
            Jika Manager = 20jt, Asisten = 15jt, Kabag = 10jt, Staff = 4jt
            <br /><br />
            2. Tentukan tunjangan jabatan = 20% dari gaji pokok
            <br />
            3. Tentukan tunjangan keluarga (if multi kondisi):
            <br />
            Jika sudah menikah dan anak maksimal 2 = 5% dari gapok
            <br />
            Jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
            <br />
            Selain itu belum dapat tunjangan keluarga
            <br /><br />
            4. Tentukan gaji kotor
            <br />
            5. Tentukan zakat_profesi (ternary)
            <br />
            Jika ia muslim dan gaji kotor minimal 6 juta, ada zakat = 2.5% dari gaji kotor.
            Selain itu tidak ada zakat
            <br /><br />
            6. Tentukan take home pay
            <br />

            Masukan sourcode ke github dan copas link ke LMS<br />

          </p>
        </div>
      </section>
      <section class="card">
        <div>
          <h3>Take Home Pay</h3>
          <form method="POST">
            <label for="yourName">Nama</label>
            <input type="text" name="yourName" placeholder="Nama"/><br />
            <label for="gajiPokok">Gaji Pokok</label>
            <select id="pilihJabatan" class="jabatan" name="pilihJabatan" placeholder="Jabatan" required>
                <option>Pilih Jabatan ...</option>
                <option value="Manager">Manager (20 Juta)</option>
                <option value="Asisten Manager">Asisten Manager (15 Juta)</option>
                <option value="Kepala Bagian">Kepala Bagian (10 Juta)</option>
                <option value="Staff">Staff (4 Juta)</option></select
            ><br />
            <label for="tunjanganJabatan">Persentase Tunjangan Jabatan</label>
            <input type="number" name="tunjanganJabatan" placeholder="Default 20% Gaji Pokok"/><br />
            <label for="statusPernikahan">Status Pernikahan dan Tunjangan Keluarga</label>
            <select id="statusPernikahan" name="statusPernikahan" class="status" placeholder="Status Pernikahan" required>
                <option value="null">Apakah anda sudah menikah? </option>
                <option value="Menikah">Iya, saya sudah menikah</option>
                <option value="Single">Tidak, saya masih single</option>
            ><br />
            <input type="number" name="banyakAnak" placeholder="Jumlah anak anda"/><br />
            <label for="gajiKotor">Gaji Kotor</label>
            <input type="number" name="gajiKotor" placeholder="Gaji Pokok + Tunjangan Jabatan + Tunjangan Keluarga" readonly/><br />
            <label for="zakatProfesi">Zakat  Profesi</label>
            <select id="zakatProfesi" class="zakat-profesi" name="zakatProfesi" placeholder="zakatProfesi" required>
                <option value="null">Apakah anda muslim? </option>
                <option value="Yes">Iya, saya muslim</option>
                <option value="No">Tidak, saya bukan muslim</option>
            ><br />
            <input type="submit" name="submit" placeholder="Submit"/>
          </form>
          <br />
          <?php
            if(isset($_POST['submit'])){
                $getNama = $_POST['yourName'];
                $getGajiPokok= (isset($_POST['pilihJabatan']) ? $_POST['pilihJabatan'] : null);
                $getTunjanganJabatan = $_POST['tunjanganJabatan'];
                $getStatusPernikahan = (isset($_POST['statusPernikahan']) ? $_POST['statusPernikahan']: null);
                $getTunjanganKeluarga = $_POST['banyakAnak'];
                $getZakatProfesi = (isset($_POST['zakatProfesi']) ? $_POST['zakatProfesi'] : null);

                $setGajiPokok = 0;
                $setTunjanganKeluarga = 0;

                switch($getGajiPokok){
                    case "Manager":
                        $setGajiPokok = 20000000;
                    break;
                    case "Asisten Manager":
                        $setGajiPokok = 15000000;
                    break;
                    case "Kepala Bagian":
                        $setGajiPokok = 10000000;
                    break;
                    case "Staff":
                        $setGajiPokok = 4000000;
                    break;
                    default:
                        echo "Anda Salah Input Jabatan<br/>";
                }

                $setPersentaseTunjanganJabatan = $getTunjanganJabatan != '' ? $getTunjanganJabatan : 20;
                
                $setTunjanganJabatan = $setPersentaseTunjanganJabatan * $setGajiPokok / 100;

                if($getStatusPernikahan == "Menikah"){
                    if($getTunjanganKeluarga > 0 || $getTunjanganKeluarga == 2){
                        $setTunjanganKeluarga = 5 * $setGajiPokok / 100;
                    } else if ($getTunjanganKeluarga > 2 || $getTunjanganKeluarga == 5){
                        $setTunjanganKeluarga = 10 * $setGajiPokok / 100;
                    } else {
                        $setTunjanganKeluarga = 0;
                        echo "Anda Salah Input Tunjangan Keluarga<br/>";
                    }
                }

                $setGajiKotor = $setGajiPokok + $setTunjanganJabatan + $setTunjanganKeluarga;

                $setZakatProfesi = $getZakatProfesi == "Yes" ? (2.5 * $setGajiKotor / 100 ) : 0;

                $setTakeHomePay = $setGajiKotor - $setZakatProfesi;

                echo "<b>Detail</b><br/>";
                echo $getHTMLNama = 
                    "<p>".
                        "<b> Nama: </b>".
                        "&nbsp;<span class='hasil'>". $getNama . "</span>".
                    "</p><br/>";
                echo $getHTMLJabatan = 
                    "<p>".
                        "<b> Jabatan: </b>".
                        "&nbsp;<span class='hasil'>". $getGajiPokok . "</span>".
                    "</p><br/>";
                echo $getHTMLGajiPokok = 
                    "<p>".
                        "<b> Gaji Pokok: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setGajiPokok,2,',','.') . "</span>".
                    "</p><br/>";
                echo $getHTMLPersentaseTunjanganJabatan = 
                    "<p>".
                        "<b> Persentase Tunjangan Jabatan: </b>".
                        "&nbsp;<span class='hasil'>". $setPersentaseTunjanganJabatan . "%</span>".
                    "</p><br/>";
                echo $getHTMLTunjanganJabatan = 
                    "<p>".
                        "<b> Tunjangan Jabatan: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setTunjanganJabatan,2,',','.') . "</span>".
                    "</p><br/>";
                echo $getHTMLStatusPernikahan = 
                    "<p>".
                        "<b> Status Pernikahan: </b>".
                        "&nbsp;<span class='hasil'>". $getStatusPernikahan . "</span>".
                    "</p><br/>";
                echo $getHTMLTunjanganKeluarga = 
                    "<p>".
                        "<b> Tunjangan Keluarga: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setTunjanganKeluarga,2,',','.') . "</span>".
                    "</p><br/>";
                echo $getHTMLGajiKotor = 
                    "<p>".
                        "<b> Gaji Kotor: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setGajiKotor,2,',','.') . "</span>".
                    "</p><br/>";
                echo $getHTMLZakatProfesi = 
                    "<p>".
                        "<b> Zakat Profesi: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setZakatProfesi,2,',','.') . "</span>".
                    "</p><br/>";
                echo $getHTMLTakeHomePay = 
                    "<p>".
                        "<b> Take Home Pay: </b>".
                        "&nbsp;<span class='hasil'>Rp. ". number_format($setTakeHomePay,2,',','.') . "</span>".
                    "</p>";

            }
            
          ?>
          <br/>
        </div>
      </section>
    </div>
  </body>
</html>
