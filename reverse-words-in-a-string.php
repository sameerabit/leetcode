<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $sentenceAr = str_split($s);
        $word = "";
        $newAr = [];
        for($i=0; $i<count($sentenceAr);$i++){
            $letter = $sentenceAr[$i];
            if($letter !=" "){
                $word .= $letter;
            }      
            if($letter ==" " || (count($sentenceAr)-1 == $i)){
                if(strlen($word)){
                    $newAr[] = $word;
                }
                $word = "";
            }
        }
        $reverseWord = "";
        for($x=count($newAr)-1;$x >= 0;$x--){
            $reverseWord .=  $newAr[$x];
            if($x>0){
                $reverseWord .= " ";
            }
        }

        return $reverseWord;
    }
}
