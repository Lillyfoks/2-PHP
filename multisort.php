<?php 
$titres = ['The Hitchiker\'s Guide to the Galaxy' , 'Alita : Battle Angel' , 'Robocop' , 'Avalon' , 'Tetsuo : the Iron Man' , 'Dead Snow' , 'The Tree of Life' , 'The Dark Crystal' , 'Dredd' , 'Pulp Fiction'] ;
$annees = [2005 , 2019 , 1987 , 2001 , 1989 , 2009 , 2011 , 1982 , 2012 , 1994] ;
$genres = ['Science-Fiction' , 'Science-Fiction' , 'Science-Fiction' , 'Science-Fiction' , 'Horreur' , 'Horreur' , 'Drame' , 'Familial' , 'Action' , 'Drame'] ;
$notes = ['60%' , '83%' , '62%' , '84%' , '73%' , '76%' , '56%' , '60%' , '81%' , '72%'] ;

// Pour le moment on se concentre uniquement sur $annees et $notes


array_multisort($titres , $annees , $genres , $notes);

print_r($titres[4] . "\r\n")  ;
print_r($annees[4] . "\r\n")  ;
print_r($genres[4] . "\r\n")  ;
print_r($notes[4] . "\r\n")  ;
?>