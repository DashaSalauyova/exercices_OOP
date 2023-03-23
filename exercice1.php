<?php

$objet1 = [
    'prenom' =>'Dasha',
    'adresse' => 'Morgelas'
];

$objet2 = [
    'prenom' =>'PL',
    'adresse' => 'St-Germain'
];

echo $objet1['prenom'] . ' est arrivée presque sans retard de ' .  $objet1['adresse'] . '<br>';
echo $objet2['prenom'] . ' est arrivé plus tard de' .  $objet2['adresse'];



if(3 == 4){
    echo(3 == 4);
} else {
     echo 'false';
}

//retour à la ligne. en mode console, \n saut de ligne. br pour html