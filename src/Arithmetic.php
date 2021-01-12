<?php


namespace Src;


class Arithmetic
{
    public $error = null;

    public function add(int $a, int $b)
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b)
    {
        return $a - $b;
    }

    public function plus(int $a, int $b)
    {
        return $a * $b;
    }

    public function divide(int $a, int $b)
    {
        return $a / $b;
    }

}