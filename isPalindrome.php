class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $num = $x;
        $balance = 0;
        $total = 0;
        while($x > 0){
            $balance = $x % 10;
            $x = ($x-$balance)/10;
            $total = ($total*10) + $balance;
        }
        return $num == $total;
    }
}
