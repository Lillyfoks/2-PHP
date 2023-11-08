<?php
$tvaleurs =  [50,20,10,5,2,1] ;
$prix = 50 ;
$paiement = 125 ;
$reste = ($paiement - $prix) ;
$nombrebillet = 0 ;
$deduit = 1 ;

// l'objectif est de vérifier chaque cellule du tableau et de retirer le montant de la cellule au montant de $reste
// Ici, le $i indique la cellule du tableau
// j'ai utilisé la fonction var_dump($tvaleurs); pour identifier la taille de mon tableau


for ($i = 0 ; $i < 5 ; $i++) {
    if ($reste >= $i) ;
$deduit = ($reste % $tvaleurs[$i]) ; 
$reste = ($deduit * $tvaleurs[$i]) ; 
}
echo ($reste) ;
?>

// pour compiler monnayeur1 et monnayeur 2, possibilité de rajouter if avec gettype (voir doc php) 