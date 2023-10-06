<?php

namespace Code\Tests\Exercise2;

use Code\Exercise2\GradeVerifier;
use PHPUnit\Framework\TestCase;

class sp1_t7_Lv1_Ex2Test extends TestCase {

    public function testFirstDivision() {
        $this->assertEquals("First Division", GradeVerifier::grade(60));
        $this->assertEquals("First Division", GradeVerifier::grade(100));
    }

    public function testSecondDivision() {
        $this->assertEquals("Second Division", GradeVerifier::grade(59));
        $this->assertEquals("Second Division", GradeVerifier::grade(45));
    }

    public function testThirdDivision() {
        $this->assertEquals("Third Division", GradeVerifier::grade(44));
        $this->assertEquals("Third Division", GradeVerifier::grade(33));
    }

    public function testFail() {
        $this->assertEquals("Fail", GradeVerifier::grade(32));
        $this->assertEquals("Fail", GradeVerifier::grade(0));
        $this->assertEquals("Fail", GradeVerifier::grade(-5));
    }
}


?>