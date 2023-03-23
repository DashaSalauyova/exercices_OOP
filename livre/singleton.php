<?php

class Livre {
    private static $livreUnique = null;
    private $m_titre;
    private function __construct(){
    }

    public static function getInstance() {
        //si le livre n'existe pas, creer le livre
        if(Self::$livreUnique == null){
            Self::$livreUnique = new Livre();
        }else{

        }
        return Self::$livreUnique;
    }

    //mettre un titre
    public function setTitre($p_titre){
        $this->m_titre = $p_titre;
    }
    //recuperer le titre
    public function getTitre(){
        return $this->m_titre;
    }

}

$livre1 = Livre::getInstance();
$livre1->setTitre("Harry");
echo $livre1->getTitre() . '<br>';

$livre2 = Livre::getInstance();
$livre2->setTitre("singleton");
$livre2->getTitre();