<?php
//$array = [0,1,3,4,7,9];
$array = [9,5,0,1,7,4,3,2];

//function sort_ar(&$arr) {
//        $iter = count($arr) - 1;
//        $m = 0;
//        for($i = 1; $i < count($arr); $i++) {
//            $f = 0;
//            for($j = 0; $j < $iter; $j++) {
//                if ($arr[$j] > $arr[$j + 1]) {
//                    $f = 1;
//                    $m++;
//                    list($arr[$j], $arr[$j + 1]) = array($arr[$j + 1], $arr[$j]);
//                }
//            }
//            $iter--;
//            if(!$f) {
//                echo $m;
//                return $arr;
//            }
//        }
//        return $arr;
//}
function sort_ar(&$arr) {
    $m = $n = $k = 0;
    $fl = 0;

    while(!$fl) {
        $f = 1;
        $n++;
        for($i = 0; $i < count($arr) - 1; $i++) {
            $m++;
            if ($arr[$i] > $arr[$i + 1]) {
                $f = 0;
                $k++;
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
            }

        }
        if($f) {
            echo $n . "\n";
            echo $m . "\n";
            echo $k . "\n";
            return $arr;
        }
    }
    echo $n . "\n";
    echo $m . "\n";
    echo $k . "\n";
    return $arr;
}
print_r($array);
sort_ar($array);
print_r($array);