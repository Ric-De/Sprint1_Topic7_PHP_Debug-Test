<?php

namespace Code\Tests\Exercise2;

use Code\Exercise2\sp1_t7_Lv1_Ex2;
use PHPUnit\Framework\TestCase;

class sp1_t7_Lv1_Ex2Test extends TestCase {

    public function testFirstDivision() {
        $this->assertEquals("First Division", sp1_t7_Lv1_Ex2(60));
        $this->assertEquals("First Division", sp1_t7_Lv1_Ex2(100));
    }

    public function testSecondDivision() {
        $this->assertEquals("Second Division", sp1_t7_Lv1_Ex2(59));
        $this->assertEquals("Second Division", sp1_t7_Lv1_Ex2(45));
    }

    public function testThirdDivision() {
        $this->assertEquals("Third Division", sp1_t7_Lv1_Ex2(44));
        $this->assertEquals("Third Division", sp1_t7_Lv1_Ex2(33));
    }

    public function testFail() {
        $this->assertEquals("Fail", sp1_t7_Lv1_Ex2(32));
        $this->assertEquals("Fail", sp1_t7_Lv1_Ex2(0));
        $this->assertEquals("Fail", sp1_t7_Lv1_Ex2(-5));
    }
}


?>