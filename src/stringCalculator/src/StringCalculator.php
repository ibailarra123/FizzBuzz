<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    function add(string $string): int|null
    {
        $delimiters = [';', "\n", '//', ',', '*', '[', ']'];
        $newStr = str_replace($delimiters, $delimiters[0], $string);
        $lista = explode($delimiters[0], $newStr);
        $suma = 0;
        for ($i = 0; $i < sizeof($lista); $i++) {
            if ((int)($lista[$i]) < 0) {
                return null;
                throw new Exception("negativos no soportados".$lista);

            } elseif ((int)($lista[$i]) > 1000) {
                $suma = $suma - (int)($lista[$i]);
            }
            $suma = $suma + (int)($lista[$i]);
        }
        return $suma;
    }
}