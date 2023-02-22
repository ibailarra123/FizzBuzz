<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Fizzbuzz;
use PHPUnit\Framework\TestCase;

final class FizzbuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returns_3_for_fizz()
    {
        $fizzbuzz = new Fizzbuzz();//Declarar

        $convertedNumber = $fizzbuzz->convert(3);//Hacer algo con la delaración

        $this->assertEquals('fizz', $convertedNumber);//Validar
    }

    /**
     * @test
     */

    public function returns_5_for_buzz()
    {
        $fizzbuzz = new Fizzbuzz();

        $convertedNumber = $fizzbuzz->convert(5);

        $this->assertEquals('buzz', $convertedNumber);
    }

    /**
     * @test
     */

    public function returns_15_for_fizzbuzz()
    {
        $fizzbuzz = new Fizzbuzz();

        $convertedNumber = $fizzbuzz->convert(15);

        $this->assertEquals('fizzbuzz', $convertedNumber);
    }
}