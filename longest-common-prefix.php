<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        $firstWord = $strs[0];
        $firstWordLen = strlen($firstWord);
        $prefix = "";

        for($i=0;$i<$firstWordLen;$i++){
            if(count($strs) > 1){
                $trueCount = 0;
                for($j=1;$j<=count($strs)-1;$j++){
                    $checkWord = $prefix.$firstWord[$i];
                    $isContain = $this->findPrefixes($checkWord, $strs[$j]);
                    if($isContain){
                        $trueCount++;
                    } else {
                        return $prefix;
                    }
                }
                if($trueCount == count($strs)-1){
                    $prefix .= $firstWord[$i];
                }
            } else {
                return $firstWord;
            }
        }

        return $prefix;
    }

    function findPrefixes($needle, $word){
        if(str_starts_with($word,$needle)){
            return true;
        }
        return false;
    }

}
