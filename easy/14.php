<?php
/**
 * User: vadimchub
 * Date: 2/17/20
 *
 * Runtime: 12 ms, faster than 41.32% of PHP online submissions for Longest Common Prefix.
 * Memory Usage: 14.9 MB, less than 60.00% of PHP online submissions for Longest Common Prefix
 */

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $prefix = "";
        if (!empty($strs)) {
            $firstWord = $strs[0];
            $length = strlen($firstWord);
            $position = $length;
            foreach ($strs as $word) {
                $wordLength = strlen($word);
                $maxForWord = 0;
                for ($i=1; $i <= $position; ++$i) {
                    if ($i <= $wordLength) {
                        if (substr($firstWord, 0, $i) === substr($word, 0, $i)) {
                            $maxForWord = $i;
                        }
                    }
                }
                $position = $position > $maxForWord ? $maxForWord : $position;
            }
            $prefix = substr($firstWord,0,$position);
        }
        return $prefix;
    }
}