class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $buyUnit = 0;
        $maxProfit = 0;
        $profitAr = [];
        $arrL = count($prices);
        for($i=0;$i<= $arrL;$i++){
            $buyUnit = $prices[$i];
            for($j=$i+1;$j<$arrL && ($prices[$j] > $buyUnit);$j++){
                $profit = $prices[$j] - $buyUnit;
                if($profit > $maxProfit){
                    $maxProfit = $profit;
                }   
            }
        }
        return $maxProfit;
    }

}
