<?php
$tvaleurs =  [50,20,10,5,2,1] ;
$tquantite = [0,4,0,1,10,12] ;
$prix = 50 ;
$paiement = 125 ;
$reste = ($paiement - $prix) ; // 75
$nombrebillet = 0 ;

// Ici, nous devons mettre une limite max de nombre de billets pour chaque cellule
// l'objectif est de savoir combien de billet de Xcellule ont été utilisés pour que $reste = 0
// Ici, le $i indique la cellule du tableau
// j'ai utilisé la fonction var_dump($tvaleurs); pour identifier la taille de mon tableau

// Si mon reste dû est supérieur au montant de mon billet de 50 ET que je dispose d'au moins 1 billet de 50
// Alors, je dois déduire un billet de 50 a mon reste et noter que j'utilise 1 billet
// Sinon, je vérifie pour les billets de 20/10/5/... 

for ($i = 0 ; $i < 5 ; $i++) {
    if ($reste >= $tvaleurs[$i] && $tquantite[$i] > 0 && $tquantite[$i] >= intdiv($reste , $tvaleurs[$i])) { // à l'étape suivante, je dois stocker dans ma valeur $nombre billet la quantité de billets utilisée
        $nombrebillet = intdiv($reste , $tvaleurs[$i]) ;
        $reste = ($reste - ($nombrebillet * $tvaleurs[$i])) ;
            } else if ($tquantite[$i] > 0 && $reste >= $tvaleurs[$i]) {
                $nombrebillet = $tquantite[$i] ;
                $reste = ($reste - $nombrebillet * $tvaleurs[$i]) ;
                        } else {   
            $nombrebillet = 0 ;
                        }
    echo ("quantité : $nombrebillet billet(s)/pièce(s) de $tvaleurs[$i] \r\n") ;
                    }
     

  
?>
