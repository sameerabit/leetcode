class Solution {


    private $stackAr = [];

    private $curly = ["}","{"];

    private $square = ["]","["];

    private $bracket = [")","("];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $parenthesesAr = str_split($s);
        $i = count($parenthesesAr);
        $stackAr = [];
        if($i == 1){
            return false;
        }
        while($i >= 0){
            $parenthese = $parenthesesAr[$i];
            list($parenInAr, $paranType) = $this->detectOppositeParenthese($parenthese);
            if(count($stackAr) > 0){
                list($oppositeInStack, $oppoParanType) = $this->detectOppositeParenthese($stackAr[count($stackAr)-1]);
                
                if(($paranType == 1 && $oppoParanType == 0) && $oppositeInStack == $parenthese){
                    unset($stackAr[count($stackAr)-1]);
                    unset($parenthesesAr[$i]);
                    $stackAr = array_values($stackAr);
                    $parenthesesAr = array_values($parenthesesAr);     
                } else if(($paranType == 1 && $oppoParanType == 0) && $oppositeInStack != $parenthese){
                    return false;
                } else {
                    $stackAr[] = $parenthese;
                }
            } else {
                $stackAr[] = $parenthese;
            } 
            $i--;
        }
        return true;
    }

    function detectOppositeParenthese($parenthese) {
            if(in_array($parenthese, $this->curly)){
                $index = array_search($parenthese, $this->curly);
                return [$index == 1 ? "}" : "{" , $index];
            } elseif(in_array($parenthese, $this->square)) {
                $index = array_search($parenthese, $this->square);
                return [$index == 1 ? "]" : "[" , $index];
            } elseif(in_array($parenthese, $this->bracket)) {
                $index = array_search($parenthese, $this->bracket);
                return [$index == 1 ? ")" : "(" , $index];
            }
    }
}
