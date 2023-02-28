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

    public function empty_argument_returns_0_for_empty()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("");

        $this->assertEquals(    0, $convertedString);
    }

    /**
     * @test
     */

    public function one_argument_returns_1_for_1()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("1");

        $this->assertEquals(    1, $convertedString);
    }

    /**
     * @test
     */


    public function two_arguments_returns_3_for_1_2()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("1,2");

        $this->assertEquals(    3, $convertedString);
    }


    /**
     * @test
     */

    public function many_arguments_returns_15_for_1_2_3_4_5()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("1,2,3,4,5");

        $this->assertEquals(    15, $convertedString);
    }

    /**
     * @test
     */

    public function line_jump_returns_6()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("1\n2,3");

        $this->assertEquals(    6, $convertedString);
    }

    /**
     * @test
     */

    public function different_delimiters_returns_3()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("//;\n1;2");

        $this->assertEquals(    3, $convertedString);
    }




    /**
     * @test
     */

    public function negative_number()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("-1");

        $this->assertEquals(    null, $convertedString);
    }


    /**
     * @test
     */

    public function negative_numbers()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("-1,-7,-9");

        $this->assertEquals(    null, $convertedString);
    }


    /**
     * @test
     */

    public function ignore_numbers_more_than_1000()
    {
        $stringCalculator = new StringCalculator();

        $convertedString = $stringCalculator->add("2,1001");

        $this->assertEquals(    2, $convertedString);
    }

}

