<?php

namespace Deg540\PHPTestingBoilerplate;

class Fizzbuzz
{
    public function convert(int $numberToConvert): String
    {
        $isFizz = $numberToConvert % 3 == 0;
        $isBuzz = $numberToConvert % 5 == 0;
        $fizzBuzz = ($isFizz ? 'fizz' : '') . ($isBuzz ? 'buzz' : '');
        return  !empty($fizzBuzz) ? $fizzBuzz : (string)$numberToConvert;
    }

}