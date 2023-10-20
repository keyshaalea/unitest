<?php
//file : Wordcount.php
class Wordcount {
    public function countWords($setence) {
        return count(explode(" ",$setence));
        //explode adalah fungsi php yang memiliki fungsi 
        //sebagai pemisah string yang akan menjadi array
        //return merupakan fungsi yang membuat nilai dikembalikan ke pemanggilan fungsi
        //<? php merupakan kode wajib untuk membuka program php
        //$ digunajan untuk menunjukan bahwa sedang merujuk atau mendeklarasikan sebuah variabel.
    }
}
?>