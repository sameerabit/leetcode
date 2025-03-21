<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $hayStackAr = str_split($haystack);
        $needleAr = str_split($needle);

        $j=0;
        $i=0;

        while($i < count($hayStackAr)){
            if($needleAr[$j] == $hayStackAr[$i]){
                $j++;
            } else {
                $i=$i-$j;
                $j=0;
            }
            if($j == count($needleAr)){
                return $i-$j+1;
            }
            $i++;
        }

        return -1;
    }
}
