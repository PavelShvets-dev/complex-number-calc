<?php
include_once('ComplexNumber.php');

function calc_sum(...$nums) {
    $result = new ComplexNumber(0, 0);
    foreach($nums as $index=>$num) {
        $result->set_real($index > 0 ? $result->real + $num->real : $num->real);
        $result->set_imaginary($index > 0 ? $result->imaginary + $num->imaginary : $num->imaginary);
    }
    return $result;
}
function calc_subtract(...$nums) {
    $result = new ComplexNumber(0, 0);
    foreach($nums as $index=>$num) {
        $result->set_real($index > 0 ? $result->real - $num->real : $num->real);
        $result->set_imaginary($index > 0 ? $result->imaginary - $num->imaginary : $num->imaginary);
    }
    return $result;
}
function calc_multiply(...$nums) {
    $result = new ComplexNumber(0, 0);
    foreach($nums as $index=>$num) {
        $real = ($index > 0 ? $result->real * $num->real : $num->real) 
        + ($index > 0 ? $result->imaginary * $num->imaginary * -1 : 0);

        $imaginary = ($index > 0 ? $result->real * $num->imaginary : $num->imaginary)
            + ($index > 0 ? $result->imaginary * $num->real : 0);

        $result->set_real($real);
        $result->set_imaginary($imaginary);
    }
    return $result;
}
function calc_divide(...$nums) {
    $result = new ComplexNumber(0, 0);
    foreach($nums as $index=>$num) {
        $divider = $index > 0 ?
            $num->real * $num->real + $num->imaginary * $num->imaginary
        : 1;

        if ($divider == 0) {
            throw new InvalidArgumentException('Invalid operation - division by zero');
        }

        $real = $index > 0 ? 
            ($result->real * $num->real + $result->imaginary * $num->imaginary) / $divider
        : $num->real;
        
        $imaginary = $index > 0 ? 
            ($num->real * $result->imaginary - $result->real * $num->imaginary) / $divider
        : $num->imaginary;

        $result->set_real(round($real,2));
        $result->set_imaginary(round($imaginary,2));
    }
    return $result;
}