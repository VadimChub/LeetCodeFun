<?php
/**
 * Created by PhpStorm.
 * User: vadimchub
 * Date: 2/3/19
 * Time: 12:20 AM
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        if($l1 != null || $l2 != null){
            if($l1->next == null && $l2->next != null){
                $l1->next = new ListNode(null);
            }
            if($l2->next == null && $l1->next != null){
                $l2->next = new ListNode(null);
            }
            if(($l1->val + $l2->val) >= 10){
                $l1->val = ($l1->val + $l2->val) - 10;
                $l1->next->val += 1;
            } else {
                $l1->val = $l1->val + $l2->val;
            }
            $this->addTwoNumbers($l1->next, $l2->next);
        }
        return $l1;
    }
}