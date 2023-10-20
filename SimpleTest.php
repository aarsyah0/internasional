<?php
// Membuat class SimpleTest untuk menguji fungsi atau metode tertentu dalam program
// Menggunakan PHPUnit framework untuk melakukan pengujian
use PHPUnit\Framework\TestCase;

// Mengimport file WordCount.php yang berisi kelas WordCount
require_once "WordCount.php";

// Membuat kelas uji yang mengextends TestCase
class SimpleTest extends TestCase{
    // Fungsi pengujian untuk menghitung jumlah kata
    public function testCountWords(){
        // Membuat objek baru dari kelas WordCount menggunakan $Wc sebagai variable
        $Wc = new WordCount();
        // Membuat kalimat uji
        $TestSentence = "My name is Arsa";
        // Menghitung jumlah kata menggunakan metode countWords dari kelas WordCount
        $WordCount = $Wc->countWords($TestSentence);
        // Memeriksa apakah jumlah kata yang dihitung sesuai dengan harapan (4 kata)
        $this->assertEquals(4,$WordCount);
    }
}
?>