<?php
/*
 * Написать программу cчета суммы всех простых чисел вплоть до сотого по счету простого числа.
 * Константа - количество подсчитываемых простых чисел.
 * */

function findComplex($number) {

    if ($number==2)
        return true;
    if ($number%2==0)
        return false;
    $i=3;
    $max_factor = (int)sqrt($number);
    while ($i<=$max_factor){
        if ($number%$i == 0) {
            return false;
        }
        $i+=2;
    }
    return true;

}

function isComplex($data) {
    $result = [];
    $i = 0;
    while(count($result) < $data) {
        $i++;
            if (findComplex($i) == true) {
                $result[] = $i;
            }
    }
    print_r("Array with $data simple numbers: \n");
    print_r($result);
    print_r("\n Sum of $data elements of simple array is " . array_sum($result));
}


isComplex(100);