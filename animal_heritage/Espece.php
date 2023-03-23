<?php


namespace Terrarium;

require_once('Animal.php');

class Espece {
    protected $nombre_de_membres;
    protected $regime_alimentaire;
    public static $nom_zoo = "JuraParc";

    public function setRegimeAlimentaire($p_regime_alimentaire){
        $this->regime_alimentaire = $p_regime_alimentaire;
    }

    public function getRegimeAlimentaire(){
        return $this->regime_alimentaire;
    }
}