<?php

use CalcApp\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $output = $calculator->add('');

        $this->assertEquals(0, $output);

        $output = $calculator->add('sdfsdsd');

        $this->assertEquals(0, $output);

        $output = $calculator->add('123');
        $this->assertEquals(123, $output);

        $output = $calculator->add('123,123');
        $this->assertEquals(246, $output);

        $output = $calculator->add("2,2\n2");
        $this->assertEquals(6, $output);

        $output = $calculator->add('1,1,1,1,,1,1');
        $this->assertEquals(6, $output);

        $output = $calculator->add("1\n1");
        $this->assertEquals(2, $output);
    }
}