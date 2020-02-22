<?php
/**
 * User: vadimchub
 * Date: 2/17/20
 *
 * Runtime: 36 ms, faster than 44.10% of PHP online submissions for Palindrome Number.
 * Memory Usage: 15 MB, less than 100.00% of PHP online submissions for Palindrome Number.
 */

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = (string)$x;
        $inputStrLen = strlen($x);
        $reversed = '';
        for ($i = $inputStrLen-1; $i >= 0; $i--) {
            $reversed .= $x[$i];
        }

        return ($x === $reversed);
    }
}