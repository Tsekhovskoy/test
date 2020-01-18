<?php
/*
 * Создать массив целых чисел. Написать функцию поиска самого большого числа.
Создать массив строк. Написать функцию поиска самой длинной строки по переданному массиву.
 * */
abstract class Gen
{
    public function arrGen($quo) {
        $mass = [];
        for ($i = 0; $i <= $quo; $i++) {
            $mass[$i] = rand(0, 1000);
        }
        return $mass;
    }

    public function strGen($quo) {
        $newStr = [];
        $part = '';
        $key = implode('', array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'), [' ', ' ', ' ', '']));
        for ($i = 0; $i < $quo; $i++) {
            for ($j = 0; $j < random_int(0, 100); $j++) {
                $part .= $key[random_int(0, strlen($key) - 1)];
            }
            $newStr[$i] = $part;
        }
        shuffle($newStr);
        return $newStr;
    }

    public function maxValue($ar) {
        echo 'The biggest value of array is ' . $ar[count($ar) - 1] . "\n";
    }

    abstract function mySort(&$arr);
}

class ArrSort extends Gen {
    function mySort(&$arr) {
        $fl = 0;
        while(!$fl) {
            $f = 1;
            for($i = 0; $i < count($arr) - 1; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $f = 0;
                    list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
                }
            }
            if($f) {
                return $arr;
            }
        }
        return $arr;
        }
}

class StrSort extends Gen
{
    public function mySort(&$arr)
    {
        $fl = 0;
        while (!$fl) {
            $f = 1;
            for ($i = 0; $i < count($arr) - 1; $i++) {
                if (strlen($arr[$i]) > strlen($arr[$i + 1])) {
                    $f = 0;
                    list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
                }
            }
            if ($f) {
                return $arr;
            }
        }
        return $arr;
    }

    public function strLen($arr)
    {
        $newArr = [];
        $newpart = '';
        $part = [];
        for ($i = 0; $i < count($arr); $i++) {
            $newpart = '';
            for($j = 0; $j < strlen($arr[$i]); $j++) {
                if(($arr[$i])[$j] != " ") {
                    $newpart .= ($arr[$i])[$j];
                }
            }
            $newArr[$i] = strlen($newpart);
        }
        print_r($newArr);
    }
}

$newArrHandler = new ArrSort();
$mass = $newArrHandler->arrGen(20);
print_r($mass);
$sortMass = $newArrHandler->mySort($mass);
print_r($mass);
$newArrHandler->maxValue($sortMass);

$newStrHandler = new StrSort();
$str = $newStrHandler->strGen(15);
print_r($str);
$sortStr = $newStrHandler->mySort($str);
print_r($sortStr);
$newStrHandler->maxValue($sortStr);
$newStrHandler->strLen($sortStr);
