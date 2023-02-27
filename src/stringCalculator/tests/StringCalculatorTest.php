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

        $convertedString = $stringCalculator->add("");

        $this->assertEquals(    0, $convertedString);
    }

    /**
     * @test
     */

    public function returns_1_for_1()
    {
        $stringCalculator2 = new StringCalculator();

        $convertedString2 = $stringCalculator2->add("1");

        $this->assertEquals(    1, $convertedString2);
    }
}
