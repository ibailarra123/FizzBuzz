<?php

declare(strict_types=1);


namespace Deg540\StringCalculatorPHP\Test;


use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{

    /**
     * @test
     */

    public function returns_0_for_empty()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add('');

        $this->assertEquals(    0, $convertedString);
    }
}