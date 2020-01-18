<?php
/*
 *Попробовать реализовать fizzbuzz задачу с чтением из файла результата, но без циклов,
 * заменяя циклы на функцию array_map. Для этого придется изучить вопросы замыканий в php...
 * */

function fileWork($input, $output) {
    $handler = file($input);
    $result = '';

    $newData = array_filter(
        $handler, function($data) {
            return $data != "\n";
    }
    );
    array_map(
        function($data) use ($output, &$result) {
            $buffer     = explode(" ", $data);
            $fizz       = (int)$buffer[0];
            $buzz       = (int)$buffer[1];
            $length     = (int)$buffer[2];
            $result .= fb($fizz, $buzz, $length) . "\n";

        },
    $newData);
    $wr = fopen($output, 'w');
    fwrite($wr, $result);
    fclose($wr);

}

function fb($fizz, $buzz, $length)
{
    $buffer = range(1, $length);
    $result = '';
    array_map(
        function($data) use ($fizz, $buzz, &$result){


                $count = "$data";
                $f = "";
                $b = "";


                if (!($data % $fizz)) {
                    $count = "";
                    $f = "F";
                }
                if (!($data % $buzz)) {
                    $count = "";
                    $b = "B";
                }


                $result .= "$count" . "$f" . "$b" . " ";

        },
        $buffer
    );
    return $result;
}

fileWork("text.txt", "out.txt");