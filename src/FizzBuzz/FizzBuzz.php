<?php
namespace App\FizzBuzz;

class Fizzbuzz{
    public function execute($num) {  
       //modulo:devuelve el resto:
       if ($num % 15 ==0) return 'FizzBuzz';
        if ($num % 3 ==0) return 'Fizz';
        if ($num % 5 ==0) return 'Buzz';
        return $num;
    }
}