<?php
class pegawai{
    //member1 variabel
    protected $nip;
    public $nama,$agama,$tunjab, $tunkel,$zakat,$status,$gapok;
   

    //variabel konstanta & static di dlm class
    static $jml = 0;
    const PEGAWAI = 'Pegawai Sanz';
    
    //member2 konstruktor
    public function __construct($no, $pegawai, $jabatan,$agama,$status){
        $this->nip = $no;
        $this->nama = $pegawai;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    
    //tentukan jabatan
   public function jabatan ($gapok){
        $this->$jabatan = $jabatan; 
            switch ($jabatan) {
                case 'Manajer': $gapok = '15000000'; break;
                case 'Asisten': $gapok = '10000000'; break;
                case 'Kabag': $gapok = '7000000'; break;
                case 'Staff': $gapok = '4000000'; break;
                default: $gapok = '';
            }
    }

    //rumus
   public function tunjab ($tunjab) {
        $tunjab = 0.2 * $this->gapok();
        return $tunjab;
    }

   public function tunkel ($tunkel) {
        $tunkel = 0.1 * $this->gapok();
        return $tunkel;
    }

    private function zakat ($zakat){
        $zakat = ($agama == "muslim" && $gapok >= 6000000) ? (2.5 * $gaji_kotor) / 100 : 0;
        return $zakat;
    }
    
    
    //mencetak
    public function mencetak(){
        echo '<b><u>'.self::PEGAWAI.'</u></b>'; 
        echo '<br/>No. Induk Pegawai: '.$this->nip;
        echo '<br/>Nama Pegawai: '.$this->nama;
        echo '<br/>Agama'.$this->agama;
        echo '<br/>Status'.$this->status;
        echo '<br/>Gaji Pokok'.$this->gapok;
        echo '<br/>Tunjangan Jabatan'.$this->tunjab;
        echo '<br/>Tunjangan Kesehatan'.$this->tunkel;
        echo '<br/>Zakat'.$this->zakat;
        echo '<hr/>';
    }
}