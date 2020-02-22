<?php
/**
 * User: vadimchub
 * Date: 2/22/20
 *
 * Runtime: 36 ms, faster than 65.71% of PHP online submissions for Median of Two Sorted Arrays.
 * Memory Usage: 15.1 MB, less than 50.00% of PHP online submissions for Median of Two Sorted Arrays.
 */

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        if (count($nums1) < count($nums2)) {
            $leftArray = $nums1;
            $rightArray = $nums2;
        } else {
            $leftArray = $nums2;
            $rightArray = $nums1;
        }

        $leftArrayLenght = count($leftArray);
        $rightArrayLenght = count($rightArray);

        $low = 0;
        $high = $leftArrayLenght;

        while ($low <= $high) {
            $partitionX = (int)(($low + $high)/2);
            $partitionY = (int)(($leftArrayLenght + $rightArrayLenght + 1)/2 - $partitionX);

            $maxLeftX = $partitionX === 0 ? -2147483648 : $leftArray[$partitionX-1];
            $minRightX = $partitionX === $leftArrayLenght ? 2147483647 : $leftArray[$partitionX];

            $maxLeftY = $partitionY === 0 ? -2147483648 : $rightArray[$partitionY-1];
            $minRightY = $partitionY === $rightArrayLenght ? 2147483647 : $rightArray[$partitionY];


            if ($maxLeftX <= $minRightY && $maxLeftY <= $minRightX) {
                if (($leftArrayLenght + $rightArrayLenght) % 2 == 0) {
                    $maxLeft = $maxLeftX >= $maxLeftY ? $maxLeftX : $maxLeftY;
                    $minRight = $minRightX <= $minRightY ? $minRightX : $minRightY;
                    return ($maxLeft + $minRight)/2;
                } else {
                    $maxLeft = $maxLeftX >= $maxLeftY ? $maxLeftX : $maxLeftY;
                    return $maxLeft;
                }
            } elseif ($maxLeftX > $minRightY) {
                $high = $partitionX - 1;
            } else {
                $low = $partitionX + 1;
            }
        }
    }
}