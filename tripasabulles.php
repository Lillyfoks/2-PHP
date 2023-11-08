<?php

$Tableau = [10,50,20,40,15,30,17,32,21,23,12] ;
$longueur=count($Tableau);



for ($i = 0 ; $i < $longueur ; $i++) {
    for ($j = $i+1 ; $j < $longueur ; $j++) {
        if ($Tableau[$j] < $Tableau[$i]) {
        $Echange = $Tableau[$i] ;
        $Tableau[$i] = $Tableau[$j] ;
        $Tableau[$j] = $Echange ;
    }
}
}
print_r($Tableau) ;
?>