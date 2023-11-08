<?php

$i = 0 ;
$M1 = ['c','a','c','h','e'] ;
$M2 = ['c','a','c','h','e'];
$tartampion = true ;

if (count($M1) == count($M2)) { //Si longueur M1 est la même que longueur M2
    while ($tartampion == true && $i < count($M1)) { // Tant que booléen est vrai et que l'index i est inférieur à la longueur de M1
        if ($M1[$i] != $M2[$i]) { // Si Mot1 à l'index i et égal à Mot2 au même index
            $tartampion = false ; // Alors booléen devient faux
        } 
        $i++ ; // j'incrémente i pour passer à la case suivante    
        }
   
if ($tartampion == false) { // Si booléen est faux
    echo ("les deux tableaux sont inégaux") ; // j'affiche "tableaux inégaux"
    } else {
        echo ("les deux tableaux sont égaux") ;
    }
}         
?>