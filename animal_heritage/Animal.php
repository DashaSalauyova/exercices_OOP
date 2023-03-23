<?php

namespace Terrarium;

require_once('Espece.php');
use Terrarium\Espece;

class Animal extends Espece {
    private $nom;
   
    public function __construct(){
        $this->nom = 'cobra';
        $this->nombre_de_membres = 0;
        $this->regime_alimentaire = "1 souris par jour";
    }
        
    public function setName(string $p_nom){
        $this->nom = $p_nom;
    }

    public function getName(){
        return $this->nom;
    }

    public function getInfo(){
        echo 'fiche animale : ';
    }

    public function toString(){
        return $this->nom;
    }
}

$serpent1 = new Animal();
$serpent1->getInfo();
var_dump($serpent1);

$serpent2 = new Animal();
$serpent2->getInfo();
$serpent2->setName('viper');
$serpent2->setRegimeAlimentaire("18 taons par jour");
var_export($serpent2);

echo Espece::$nom_zoo;

//faire un tableau d'objets
$animals[] = array();
$animals[0] = new Animal();
$animals[0]->setName('lezard');

$animals[1] = new Animal;
$animals[1]->setName('crocodile');

$animals[2] = new Animal;
$animals[2]->setName('crapeau');

?>

<pre><?php print_r($animals[0]); ?></pre>

<pre><?php print_r($animals[1]); ?></pre>

<pre><?php print_r($animals[2]); ?></pre>

<pre><?php print_r($animals[2]-> __toString()); ?></pre>
