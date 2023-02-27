<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(String $numbers): int
    {
        if(strlen($numbers )== 1){
            echo int($numbers);
            return int($numbers);
        }
        elseif (strlen($numbers)==2){
            $splitedNumbers = explode(",",$numbers);
            return (int($splitedNumbers[0]) + int($splitedNumbers[1]));
        }
        return 0;
    }
}