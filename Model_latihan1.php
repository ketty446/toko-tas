<?php
class Model_latihan1 extends CI_Model
{
    //membuat variabel untuk menampung nilai
    public $nilai, $nilai2, $hasil;
    //method pemjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai + $this->nilai2;
        return $this->hasil;
    }
}