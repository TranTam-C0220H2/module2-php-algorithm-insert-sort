<?php
function insertionSort($array)
{
    for ($i = 1; $i < count($array); $i++) {
        $valueStorage = $array[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            echo $array[$i];
            if ($valueStorage < $array[$j]) {
                $array[$j + 1] = $array[$j];
            } else {
                break;
            }
        }
        $array[$j + 1] = $valueStorage;
    }
    return $array;
}

$arrayInitialization = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
var_dump(insertionSort($arrayInitialization));