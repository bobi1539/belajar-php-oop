<?php 

function helloWorld() {
    echo "Hello World!";
}

function sumTwoNumbers($num1, $num2) {
    echo $num1 + $num2;
}

function fizzBuzz($num) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz";
    } else if ($num % 3 == 0) {
        echo "Fizz";
    } else if ($num % 5 == 0) {
        echo "Buzz";
    } else {
        echo $num;
    }
}

function isPrime($num) {
    if ($num == 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
