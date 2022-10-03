<?php
class Bentuk2D{
    //member1 variabel
    public $luasbidang;
    public $kelilingbidang;
    //member2 constructor
    public function  __construct($luadbidang,$kelilingbidang){
        $this->luasbidang = $luadbidang;
        $this->kelilingbidang = $kelilingbidang;
    }
    public function mencetak(){
        echo 'Luas Bidang: '.$this->luad$luadbidang;
        echo '<br/>Keliling Bidang: '.$this->keli$kelilingbidang; 
    }
}