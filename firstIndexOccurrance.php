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

        $firstIndex = -1;

        while($i < count($hayStackAr)){
            if($needleAr[$j] == $hayStackAr[$i]){
                $j++;
            } else {
                $j=0;
            }

            $i++;
        }

        return $first;
    }
}
