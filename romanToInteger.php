class Solution {


    private $romanMapper = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $l=0;
        $r=1;

        $sAr = str_split($s);
        $total = 0;

        while(count($sAr) > $l) {
            $num = 0;
            $lNum = $this->romanMapper[$sAr[$l]];

            $rNum = 0;
            $rNum = $this->romanMapper[$sAr[$r]];
        
           
            if(
            ($sAr[$l] == "I" && $sAr[$r] == "V") 
            || ($sAr[$l] == "I" && $sAr[$r] == "X")
            || ($sAr[$l] == "X" && $sAr[$r] == "L")
            || ($sAr[$l] == "X" && $sAr[$r] == "C") 
            || ($sAr[$l] == "C" && $sAr[$r] == "D")
            || ($sAr[$l] == "C" && $sAr[$r] == "M")
            ){
                $num = $rNum - $lNum;
                $l = $l+2;
                $r = $r+2;
            } else {
                $num += $lNum;
                 $l++;
                 $r++;
            }

            $total = $total + $num;

           
        }

        return $total;
    }


}
