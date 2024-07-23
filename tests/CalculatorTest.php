<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiply(): void {
        $firstValue = 5;
        $secondValue = 3;
        $expectedResult = 15;

        $calculator = new Calculator();
        $product = $calculator->multiplication($firstValue, $secondValue);

        $this->assertSame($expectedResult, $product,"La méthode multiply() ne fonctionne plus :-(");
    }

    public function testIsEven(): void {
        $number = 6;
        $expectedTrueResult = true;

        $calculator = new Calculator();
        $isEven = $calculator->isEven($number);

        $this->assertTrue($isEven, $expectedTrueResult, "La méthode isEvent() ne fonctionne plus :-(");

    }
}