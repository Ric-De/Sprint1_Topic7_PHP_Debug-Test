<?php

namespace Code\Tests\Exercise1;

use Code\Exercise1\sp1_t7_Lv1_Ex1;
use PHPUnit\Framework\TestCase;

class sp1_t7_Lv1_Ex1Test extends TestCase{

    //Careful with the name of the function!!! "test" should be in lower case!!!

    public function testIsEvenShouldReturnTrue(): void {
        $evenChecker = new sp1_t7_Lv1_Ex1(2);
        $this->assertTrue($evenChecker->isEven());

        $oddChecker = new sp1_t7_Lv1_Ex1(3);
        $this->assertFalse($oddChecker->isEven());
}

public function testIsPositiveShouldReturnFalse(): void {
    $positiveChecker = new sp1_t7_Lv1_Ex1(1);
    $this->assertTrue($positiveChecker->isPositive());

    $negativeChecker = new sp1_t7_Lv1_Ex1(-1);
    $this->assertFalse($negativeChecker->isPositive());

    $zeroChecker = new sp1_t7_Lv1_Ex1(0);
    $this->assertFalse($zeroChecker->isPositive());
    
}
}
?>