<?php

namespace Animal;
class Animal implements AnimalInterface {
    public function nourrir(){

    }
    //class d'implementation d'une interface 
    public function getRegime(){
    }

    public $m_espece;
    public $m_nombre_de_membres;
    public $m_regime_alimentaire;
    public $m_esperence_de_vie;
    public $m_duree_de_gestation;

    function __construct() {
        $this->m_espece = 'espece';
        $this->m_nombre_de_membres = 4;
        $this->m_regime_alimentaire = 'regime_alimentaire';
        $this->m_esperence_de_vie = 50;
        $this->m_duree_de_gestation = 9;
    }
}

$giraphe = new Animal();
var_dump($giraphe);


