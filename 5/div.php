<?php
/*
 * Написать программу подчета суммы всех простых чисел вплоть до сотого по счету простого числа.
 * Константа - количество подсчитываемых простых чисел. Реализовать решето Эратосфена.
 * */

function isSimple($data) {
    $result = [1,2];
    $buffer = range(1,$data);
    while(current($buffer)) {
     //   reset($buffer);
     //   $buffer = array_values($buffer);
        while (current($buffer)) {
            if(current($buffer) != 2) {
                if ((current($buffer) % end($result)))  {
                    unset($buffer[current($buffer)]);
                    next($buffer);
                }

            }

        }
        print_r(($buffer));
    }
}


isSimple(100);