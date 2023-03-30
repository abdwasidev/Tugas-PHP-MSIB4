<?php

    class Pegawai{
        protected $nip;
        public $nama;
        private $jabatan;
        private $agama;
        private $status;
        static $jml = 0;
        const PT = 'PT. HTP Indonesia';

        public function __construct($nip, $nama, $jabatan, $agama, $status){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
            self::$jml++;
        }

        public function setGajiPokok($jabatan){
            $this->jabatan = $jabatan;
            switch($jabatan){
                case 'Manager': $gajiPokok = 15000000; break;
                case 'Asisten Manager': $gajiPokok = 10000000; break;
                case 'Kepala Bagian': $gajiPokok = 7000000; break;
                case 'Staff': $gajiPokok = 5000000; break;
                default: $gajiPokok;
            }
            return $gajiPokok;
        }

        public function setTunjanganJabatan($jabatan){
            $scanGajiPokok = $this->setGajiPokok($this->jabatan);
            $tunjanganJabatan = (20 * $scanGajiPokok / 100);
            return $tunjanganJabatan;
        }

        public function setTunjanganKeluarga($jabatan, $status){
            $scanGajiPokok = $this->setGajiPokok($this->jabatan);
            $tunjanganKeluarga = (($status === 'Menikah') ? (10 * $scanGajiPokok / 100) : 0);
            return $tunjanganKeluarga;
        }

        public function setGajiKotor($jabatan, $status){
            $scanGajiPokok = $this->setGajiPokok($this->jabatan);
            $scanTunjanganJabatan = $this->setTunjanganJabatan($this->jabatan);
            $scanTunjanganKeluarga = $this->setTunjanganKeluarga($this->jabatan, $this->status);

            $GajiKotor = $scanGajiPokok + $scanTunjanganJabatan + $scanTunjanganKeluarga;

            return $GajiKotor;
        }

        public function setZakat($agama, $jabatan){
            $scanGajiKotor = $this->setGajiKotor($this->jabatan, $this->status);
            $scanGajiPokok = $this->setGajiPokok($this->jabatan);

            $tunjanganZakat = (($agama === 'Islam' && $scanGajiKotor >= 6000000 ) ? (2.5 * $scanGajiPokok / 100) : 0);

            return $tunjanganZakat;
        }

        public function setGajiBersih($jabatan, $agama, $status){
            $scanGajiKotor = $this->setGajiKotor($this->jabatan, $this->status);
            $scanZakat = $this->setZakat($this->agama, $this->jabatan);

            $GajiBersih = $scanGajiKotor - $scanZakat;

            return $GajiBersih;
        }

        public function cetak(){
        echo $displayData =  "
            <div class=\"data-hasil\">
                <p>
                    <b> NIP Pegawai: </b>
                    &nbsp;<span class='hasil'>". (isset($this->nip) ? $this->nip : 'null') ."</span>
                </p>
                <p>
                    <b> Nama: </b>
                    &nbsp;<span class='hasil'>". (isset($this->nama) ? $this->nama : 'null') ."</span>
                </p>
                <p>
                    <b> Jabatan: </b>
                    &nbsp;<span class='hasil'>". (isset($this->jabatan) ? $this->jabatan : 'null') ."</span>
                </p>
                <p>
                    <b> Agama: </b>
                    &nbsp;<span class='hasil'>". (isset($this->agama) ? $this->agama : 'null') ."</span>
                </p>
                <p>
                    <b> Status Pernikahan: </b>
                    &nbsp;<span class='hasil'>". (isset($this->status) ? $this->status : 'null') ."</span>
                </p>
                <p>
                    <b> Gaji Pokok: </b>
                    &nbsp;<span class='hasil'>Rp. ". (number_format($this->setGajiPokok($this->jabatan),0,',','.')) ."</span>
                </p>
                <p>
                    <b> Tunjangan Jabatan: </b>
                    &nbsp;<span class='hasil'>Rp. ". (number_format($this->setTunjanganJabatan($this->jabatan),0,',','.')) ."</span>
                </p>
                <p>
                    <b> Tunjangan Keluarga: </b>
                    &nbsp;<span class='hasil'>Rp. ". (number_format($this->setTunjanganKeluarga($this->jabatan, $this->status),0,',','.')) ."</span>
                </p>
                <p>
                    <b> Zakat: </b>
                    &nbsp;<span class='hasil'>Rp. ". (number_format($this->setZakat($this->agama, $this->jabatan),0,',','.')) ."</span>
                </p>
                <p>
                    <b> Gaji Bersih: </b>
                    &nbsp;<span class='hasil'>Rp. ". (number_format($this->setGajiBersih($this->jabatan, $this->agama, $this->status),0,',','.')) ."</span>
                </p>
            </div>
        <br /><br />";

        }

    }

?>