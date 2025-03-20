<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {

        if($n <=3) return $n;

        $prev1 = 3;
        $prev2 = 2;

        $i=4;

        while($i <= $n){
            $current = $prev1 + $prev2;
            $prev2 = $prev1; 
            $prev1 = $current;
            $i++;
        }

        return $current;
    }

}
