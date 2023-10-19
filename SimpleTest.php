<?php

use PHPUnit\Framework\TestCase;

require_once "WordCount.php";

class SimpleTest extends TestCase {
    public function testCountWords () {
        $Wc = new WordCount();

        $TestSentence = "My Name Is Rafika";
        $WordCount = $Wc ->countWords($TestSentence);

        $this -> assertEquals(4, $WordCount);
    }
}
?>