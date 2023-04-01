<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Tugas PHP - HomePage</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas PHP</h1>
      <section class="task">
        <section class="card">
          <p>
            Buatlah form menggunakan PHP dan hitung rumus dari bangun datar
            jajar genjang
          </p>
          <a href="TugasPHP1"><button>Demo Tugas PHP 1</button></a>
        </section>
        <section class="card">
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

          </p>
          <a href="TugasPHP2"><button>Demo Tugas PHP 2</button></a>
        </section>
        <section class="card">
          <p>
            Tugas<br />
            1. Buat grade<br />
            2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot<br />
            3. Buat predikat dari nilai menggunakan switch case<br />

          </p>
          <a href="TugasPHP3"><button>Demo Tugas PHP 3</button></a>
        </section>
        <section class="card">
          <p>
            Buatlah Tampilan Form seperti dibawah ini<br />
            1. Hitung skor skill<br />
            2. Tentukan ketegori skill dengan fungsi<br />
          </p>
          <a href="TugasPHP4"><button>Demo Tugas PHP 4</button></a>
        </section>
        <section class="card">
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
          <a href="TugasPHP5"><button>Demo Tugas PHP 5</button></a>
        </section>
        <section class="card">
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
          <a href="TugasPHP6"><button>Demo Tugas PHP 5</button></a>
        </section>
      </section>
    </div>
  </body>
</html>
