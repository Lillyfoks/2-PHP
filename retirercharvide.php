<?php
$Monsieur = 'Monsieur ' ;
$Sir = strlen($Monsieur)-1 ;
$TMonsieur = str_split($Monsieur) ;
$saloperie = ('') ;


if ($TMonsieur[8] = ' ') {
    for ($i = 0 ; $i < 8 ; $i++) {
        $saloperie[$i] = $Monsieur[$i] ;
    }
}
echo $saloperie
?>