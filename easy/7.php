<?php
/**
 * User: vadimchub
 * Date: 2/17/20
 *
 * Runtime: 4 ms, faster than 92.23% of PHP online submissions for Reverse Integer.
 * Memory Usage: 14.8 MB, less than 70.00% of PHP online submissions for Reverse Integer.
 */

/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {

    $intMax = 2147483647;
    $intMin = -2147483648;
    $reversed = 0;

    while ($x != 0) {
        $pop = (int)$x%10;
        $x = (int)$x/10;
        if ($x != 0) {
            $reversed = $reversed * 10 + $pop;
        }
    }

    if ($reversed > $intMax || $reversed < $intMin) {
        $reversed = 0;
    }

    return (int)$reversed;

}