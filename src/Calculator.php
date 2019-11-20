<?php

namespace CalcApp;

class Calculator
{
    public function add($input)
    {
        $sum = 0;

        $input = str_replace("\n", ",", $input);

        $numbers = explode(',', $input);

        foreach ($numbers as $number) {
            $sum += (int) $number;
        }

        return $sum;
    }
}