<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if(!$root){
            return 0;
        }
        return $this->traverse($root);
    }

    function traverse($node){
        if($node->left){
            $leftDepth = $this->traverse($node->left);
        }
        if($node->right){
            $rightDepth = $this->traverse($node->right);  
        }
        return 1 + max($leftDepth, $rightDepth);
    }
}
