<?php
require_once('calc.php');
include_once('ComplexNumber.php');
use PHPunit\Framework\TestCase;

class CalcTest extends TestCase {
    public function testSum() {
        $num1 = new ComplexNumber(1,3);
        $num2 = new ComplexNumber(3,-5);
        $res = calc_sum($num1, $num2);
        
        $this->assertEquals(4, $res->real);
        $this->assertEquals(-2, $res->imaginary);
    }

    public function testSubtract() {
        $num1 = new ComplexNumber(1,3);
        $num2 = new ComplexNumber(3,-5);
        $res = calc_subtract($num1, $num2);
        
        $this->assertEquals(-2, $res->real);
        $this->assertEquals(8, $res->imaginary);
    }
    
    public function testMultiply() {
        $num1 = new ComplexNumber(1,3);
        $num2 = new ComplexNumber(3,-5);
        $res = calc_multiply($num1, $num2);
        
        $this->assertEquals(18, $res->real);
        $this->assertEquals(4, $res->imaginary);
    }
    
    public function testDivision() {
        $num1 = new ComplexNumber(1,3);
        $num2 = new ComplexNumber(3,-5);
        $res = calc_divide($num1, $num2);
        
        $this->assertEquals(-0.35, $res->real);
        $this->assertEquals(0.41, $res->imaginary);
    }
}