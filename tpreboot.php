5<?php 
$titres = ['The Hitchiker\'s Guide to the Galaxy' , 'Alita : Battle Angel' , 'Robocop' , 'Avalon' , 'Tetsuo : the Iron Man' , 'Dead Snow' , 'The Tree of Life' , 'The Dark Crystal' , 'Dredd' , 'Pulp Fiction'] ;
$annees = [2005 , 2019 , 1987 , 2001 , 1989 , 2009 , 2011 , 1982 , 2012 , 1994] ;
$genres = ['Science-Fiction' , 'Science-Fiction' , 'Science-Fiction' , 'Science-Fiction' , 'Horreur' , 'Horreur' , 'Drame' , 'Familial' , 'Action' , 'Drame'] ;
$notes = ['60%' , '83%' , '62%' , '84%' , '73%' , '76%' , '56%' , '60%' , '81%' , '72%'] ;

function etoiles($notes){
    $rate=[];
    for ($i = 0; $i < count($notes); $i++) { //pour transformer notes % en étoiles
        $rate[$i] = intval ($notes[$i]) ;
        
        if ($rate[$i] <= 10) { 
            $rate[$i] = "0.5 étoile" ;
        } else if ($rate[$i] <= 20) {
            $rate[$i] = "1 étoile" ;
        } else if($rate[$i] <= 30) {
            $rate[$i] = "1.5 étoile" ;
        } else if ($rate[$i] <= 40) {
            $rate[$i] = "2 étoiles" ;
        } else if ($rate[$i] <= 50) {
            $rate[$i] = "2.5 étoiles" ;
        } else if ($rate[$i] <= 60) {
            $rate[$i] = "3 étoiles" ;
        } else if ($rate[$i] <= 70) {
            $rate[$i] = "3.5 étoiles" ;
        } else if ($rate[$i] <= 80) {
            $rate[$i] = "4 étoiles" ;
        } else if ($rate[$i] <= 90) {
            $rate[$i] = "4.5 étoiles" ;
        } else if ($rate[$i] <= 100) {
            $rate[$i] = "5 étoiles" ;
        }
    }
    return $rate;
}



function triparASC(&$tab){ //pour trier par ordre croissant
    $lastindex = count($tab) -1 ;
    for ($i=0; $i < $lastindex ; $i++) {
        for ($j=0; $j < $lastindex -$i; $j++){
            if($tab[$j] > $tab[$j+1]){
            $temporaire = $tab[$j] ;
            $tab[$j] = $tab[$j+1] ;
            $tab[$j+1] = $temporaire ;
            }
        }
    }
}  

triparASC($titres) ;
echo(implode(',' , $titres). "\r\n") ;

triparASC($annees) ;
echo(implode(',' , $annees). "\r\n") ;

triparASC($genres) ;
echo(implode(',' , $genres). "\r\n") ;

triparASC($notes) ;
$rate=etoiles($notes) ;
echo(implode(',' , $rate). "\r\n") ;



function triparDESC(&$tab){ //pour trier par ordre décroissant
    $lastindex = count($tab) -1 ;
    for ($i=0; $i < $lastindex ; $i++) {
        for ($j=0; $j < $lastindex -$i; $j++){
            if($tab[$j] < $tab[$j+1]){
            $temporaire = $tab[$j] ;
            $tab[$j] = $tab[$j+1] ;
            $tab[$j+1] = $temporaire ;
            }
        }
    }
}  

triparDESC($titres) ;
echo(implode(',' , $titres). "\r\n") ;

triparDESC($annees) ;
echo(implode(',' , $annees). "\r\n") ;

triparDESC($genres) ;
echo(implode(',' , $genres). "\r\n") ;

triparDESC($notes) ;
$rate=etoiles($notes) ;
echo(implode(',' , $rate). "\r\n") ;

?>