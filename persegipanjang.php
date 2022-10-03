<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D{
    //member1 variabel
    public $panjang;
    public $lebar;

    //member2 constructor
    public function  __construct($namaBidang,$luasBidang,$kelilingBidang){
        parent::__construct($luasBidang,$kelilingBidang);
        $this->panjang = $panjang;
        $this->lebar = $lebar;

      
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>Jari-Jari: '.$this->panjang;
        echo '<br/>Jari-Jari: '.$this->lebar;
        echo '<hr/>'; 
    }
}