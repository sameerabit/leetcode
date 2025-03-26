<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $wordAr = str_split(trim($s));
        $count = 0;
        for($i=count($wordAr)-1;$i>=0;$i--){
            if($wordAr[$i] == " "){
                return $count;
            }
            $count++;
        }
        return $count;
    }
}
