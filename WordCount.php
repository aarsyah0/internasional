<?php
//membuat class WordCount sebagai class yang di test
//membuat class Wordcount yang berisi function countWord
    class Wordcount{
        //membuat function countWords yang memiliki parameter $sentence
        public function countWords($sentence){
            //membuat return untuk menghentikan eksekusi function untuk mengembalikan nilai(return)
            //ke pemanggil function
            //membuat count berfungsi untuk mengembalikan nilai jumlah dalam bentuk array
            //membuat explode sebagai pemecah string yang dapat ditentukan sendiri melalui karakter tertentu 
            return count(explode(" ",$sentence));
        }
    }
?>