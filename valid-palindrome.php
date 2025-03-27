<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $word = "";
        for($i=0;$i<strlen($s);$i++){
            if(ctype_alpha($s[$i]) || is_numeric($s[$i])){
                $word .= strtolower($s[$i]);
            }
        }

        if($word == "" || strlen($word) == 1){
            return true;
        }

        $j = 0;
        $wordLen = strlen($word);
        while($word[$j] == $word[$wordLen-1]){
            if(intval(strlen($word)/2) == ($j+1)){
                return true;
            }
            $j++;
            $wordLen--;
        }
        return false;
    }
}
