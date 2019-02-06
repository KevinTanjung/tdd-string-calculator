<?php

use App\StringCalculator;

class StringCalculatorTest extends PHPUnit_Framework_TestCase {
  public function testItIsAStringCalculator() {
    $calculator = new StringCalculator();
    $this->assertInstanceOf(StringCalculator::class, $calculator);
  }
}