<?php

/*
 * Функцией прочесть из файла все строки. Другой функцией померять длину каждой строки.
 * Третьей функцией записать в совершенно другой файл только те строки, которые длиннее средней длины по файлу.
 * */
function open($path) {
    $f = file("$path");
    $file;
    for($i=0; $i<count($f); $i++) {
        if($f[$i] != "\n") {
            $file[] = $f[$i];
        }
    }
    return $file;
}

function mess($str) {
    return (int)strlen($str);
}

function write($path, $str) {
    $ff = fopen("$path", 'a+');
    fwrite($ff, $str);
    fclose($ff);
}

$newFile = open('text.txt');
$length = 0;

foreach ($newFile as $value) {
    $length += (int)strlen($value);
}

$middle = (int)($length / count($newFile));

for($i = 0; $i < count($newFile); $i++) {
    $l = mess($newFile[$i]);
    if($l >= $middle) {
        write('out.txt', $l . ' ' . $middle . ' ' . $newFile[$i]);
    }

}

