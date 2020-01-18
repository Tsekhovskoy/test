<?php

$handle = fopen("php://stdin", "r");

echo 'Give me the FIZZ value: ';
$fizz = (int)fgets($handle);

echo 'Give me the BUZZ value: ';
$buzz = (int)fgets($handle);

echo 'Give me the LENGTH value: ';
$length = (int)fgets($handle);

for($i = 1; $i <= $length; $i++) {

    $count = "$i";
    $f="";
    $b="";


    if(!($i % $fizz)) {
        $count = "";
        $f = "F";
    }
    if(!($i % $buzz)) {
        $count = "";
        $b = "B";
    }


    echo "$count" . "$f" . "$b" . " ";

}

?>