//path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
//Butuh Framework phpunit
<?php

use PHPUnit\Framework\TestCase;

//class yang mau di TestCase
require_once "wordcount.php";
use Wordcount;
//use Wordcount; digunakan untuk mengimpor namespace Wordcount. Ini berarti ingin menggunakan kelas atau fungsi yang terdapat dalam namespace Wordcount di dalam file wordcount.php.
// mendefinisikan namespace yang sesuai di dalam file wordcount.php
// memakai kelass yang ada di wordcount
//class untuk run testing
class SimpleTest extends TestCase {
    // extends merupakan salah satu cara menggunakan fitur OOP yang ada di php
    public function testCountWords()
    {
   $wc = new wordcount();

    $TestSetence = "My Name is Joko"; //4 kata
    $wordcount = $wc->countWords($TestSetence);
    $this->assertEquals(4, $wordcount);

}
}
?>