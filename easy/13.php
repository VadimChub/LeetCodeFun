<?php
/**
 * Created by PhpStorm.
 * User: vadimchub
 * Date: 2/4/19
 * Time: 10:10 AM
 *
 * Result was 40ms faster than 100% of PHP online submissions
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $cost = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $len = strlen($s);
        $result = 0;
        for($i = $len-1; $i >= 0; --$i){
            if($i == 0){
                $result += $cost[$s[$i]];
                continue;
            }
            if($cost[$s[$i]] > $cost[$s[$i-1]]){
                $result += $cost[$s[$i]] - $cost[$s[$i-1]];
                $i--;
            } else {
                if($cost[$s[$i-1]] > $cost[$s[$i-2]]){
                    $result += $cost[$s[$i]];
                    continue;
                }
                $result += $cost[$s[$i]] + $cost[$s[$i-1]];
                $i--;
            }
        }
        return $result;
    }
}