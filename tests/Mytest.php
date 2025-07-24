<?php
use PHPUnit\Framework\TestCase;
require_once 'C:/ospanel/domains/room.management.local/tests/TestCase.php';

class Mytest extends TestCase{
    protected $calc;
    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }
    public function testOne()
    {
        $this->assertEquals(1,1);
        $this->assertEquals(5,5);
        $this->assertNotEquals(1,2);
        $this->assertNull(null);
        $this->assertNotNull(0);
        $this->assertGreaterThan(5,7);
        $this->assertLessThan(7,2);
    }
    public function testTwo(){
        $calc = new Calculator();
        $this->assertEquals(10, $calc->sum(5,5));
        $this->assertEquals(5, $calc->sum(0,5));
        $this->assertEquals(-8, $calc->sum(-5,-3));

    }
    public function testThree(){
        $calc = new Calculator();
        $this->assertEquals(1, $calc->div(5,5));
        $this->assertEquals(0, $calc->div(0,5));
        $this->assertFalse($calc->div(5,0));
    }
}