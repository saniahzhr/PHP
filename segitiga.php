<?php
require_once 'Bentuk2D.php';
class segitiga extends Bentuk2D{
    //member1 variabel
    public $jari2;

    //member2 constructor
    public function  __construct($namaBidang,$luasBidang,$kelilingBidang){
        parent::__construct($luasBidang,$kelilingBidang);
        $this->jari2 = $jari2;
      
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>Jari-Jari: '.$this->jari2;
        echo '<hr/>'; 
    }
}