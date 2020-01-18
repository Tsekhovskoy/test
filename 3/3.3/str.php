<?php

/*
 * Пользуясь имеющимися наработками написать функцию, которая из исходных данных одной строки
 * получает результаты fizzbuzz. Другая функция должна прочесть из файла множество строк вида "3 5 18",
 * т.е. исходных данных для fizzbuzz, и записать в другой файл полученные при помощи первой функции результаты
 * по каждой строке.
 * */

function open($path1, $path2) {
    $f = file("$path1");
    foreach ($f as $value) {
        $ff = fopen("$path2", 'a+');
        $str = fb($value);
        fwrite($ff, $str);
        fclose($ff);
    }
}

function fb($str) {
    $new_Data = explode(' ', $str);
    $fizz   = (int)$new_Data[0];
    $buzz   = (int)$new_Data[1];
    $length = (int)$new_Data[2];
    $result = '';



    for ($i = 1; $i < $length; $i++) {
        $I = $i;
        $f = "";
        $b = "";

        if(!($i % $fizz)) {
            $I = '';
            $f = "F";
        }

        if(!($i % $buzz)) {
            $I = '';
            $b = "B";
        }

        $result .= $I . $f . $b . ' ';
    }

    return $result . "\n";
}

open('text.txt', 'out.txt');


