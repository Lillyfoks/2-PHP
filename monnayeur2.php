<?php
$tvaleur =  [0.50,0.20,0.10,0.05,0.02,0.01] ;
$prix = 3.50 ;
$paiement = 5 ;
$reste = ($paiement - $prix) ;
$nombrebillet = 0 ;
$deduit = 1 ;

//var_dump($tvaleur) ;

for ($i = 0 ; $i < 5 ; $i++) {
    if ($reste >= $i) ;
$deduit = fmod($reste , $tvaleur[$i]) ;
$reste = ($deduit) ; 
}
echo ($reste) ;
?>

// pour compiler monnayeur1 et monnayeur 2, possibilité de rajouter if avec gettype (voir doc php) 