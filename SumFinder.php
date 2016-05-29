<?php

/**
 * Return largest sum of contiguous integers
 * @param array $inputArray
 * @return array
 */
function sumFinder(array $inputArray){}

/**
 * Custom array comparison method
 * @param array $a
 * @param array $b
 * @return int
 */
function compareArrays(array $a, array $b){
    $sumA = array_sum($a);
    $sumB = array_sum($b);

    if($sumA == $sumB) {
        return 0;
    }elseif($sumA > $sumB){
        return 1;
    }else{
        return -1;
    }
}