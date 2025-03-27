<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {

        $k = 0;
        $foundCount = 0;

        if($s == ""){
            return true;
        }

        for($i=0;$i<strlen($s);$i++){
            for($j=$k;$j<strlen($t);$j++){
                if($s[$i] == $t[$j]){
                    $j++;
                    $foundCount++;
                    $k=$j;
                    break;
                }
            }
            if($foundCount == strlen($s)){
                return true;
            }
        }
        return false;

    }
}
