<?php

namespace test;

class User {

    public $nom = 'Gumbrell';
    public $prenom = 'Peter';

    public function __toString()
    {
        return $this->prenom;
    }
}

$user1 = new User();
$user1->nom = 'Ribeiro';
$user1->prenom = 'Julio';

$user2 = new User();
$user2->nom = 'Nitard';
$user2->prenom = 'PL';

$user3 = new User();
$user3->nom = 'Paquet';
$user3->prenom = 'Jeff';
// var_dump($user1);
// var_dump($user2);

?>

<pre><?=var_dump($user1)?></pre>
<pre><?=var_dump($user2)?></pre>
<pre><?=var_dump($user3)?></pre>
<pre><?=var_dump($user3->__toString())?></pre>
// echo User::$nom;