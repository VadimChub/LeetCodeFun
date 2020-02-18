<?php
/**
 * User: vadimchub
 * Date: 2/18/20
 *
 * Runtime: 204 ms, faster than 27.18% of PHP online submissions for Longest Substring Without Repeating Characters.
 * Memory Usage: 15.1 MB, less than 33.33% of PHP online submissions for Longest Substring Without Repeating
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if (empty($s)) {
            return 0;
        }
        $lenght = strlen($s);
        $result = 1;
        for ($i=0; $i < $lenght; ++$i) {
            $string = substr($s, $i);
            $searchStr = "";
            for ($j=0; $j < $lenght-$i; ++$j) {
                if (strpos($searchStr, $string[$j]) !== false) {
                    break;
                }
                $searchStr .= $string[$j];
            }
            $currentStrLength = strlen($searchStr);
            $result = ($currentStrLength > $result) ? $currentStrLength : $result;
        }
        return $result;
    }

}