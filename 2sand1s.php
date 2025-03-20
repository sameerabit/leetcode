//tried
class Solution {


    private $permutations = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $tCount = ($n-$n%2)/2;
        $this->find2sand1s($tCount, $n);
        var_dump($this->permutations);
        return count($this->permutations);
    }


    function find2sand1s($tCount, $n){
        $i = 1;
        $factors = [];
        $total = 0;
        while($i <= $tCount){
            $total+=2;
            $factors[] = 2;
            $i++;
        }

        while($total < $n){
            $total+=1;
            $factors[] = 1;
        }

        $this->permutations[] = $factors;

        if($tCount > 0){  
            var_dump($tCount);
            $this->find2sand1s($tCount-1, $n);
        }
    }
