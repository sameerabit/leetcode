class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $mags = str_split($magazine);
        $ransomNoteAr = str_split($ransomNote);
        $i = 0;
        while($i < count($mags)) {
            $letter = $mags[$i];
            for ($j = 0; $j < count($ransomNoteAr); $j++) {
                if ($ransomNoteAr[$j] === $letter) {
                    unset($ransomNoteAr[$j]);
                    $ransomNoteAr = array_values($ransomNoteAr);
                    break;
                }
            }
            $i++;
        }
       if(count($ransomNoteAr) == 0){
        return true;
       }
        return false;
    }
}
