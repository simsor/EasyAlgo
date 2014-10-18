<?php

class Procedure extends Formulaire {
    private $sortie;
    private $postcondition;
    
    function __construct($desc, $entrees, $preconditions,$sortie, $postcondition) {
        parent::__construct($desc, $entrees, $preconditions);
        $this->affecteProcedure($sortie, $postcondition);
    }
   
    function affecteProcedure($sortie,$postcondition)
    {
        $this->setSortie($sortie);
        $this->setPostcondition($postcondition);
    }
    
    public function getSortie() {
        return $this->sortie;
    }

    public function getPostcondition() {
        return $this->postcondition;
    }

    public function setSortie($sortie) {
        $this->sortie = $sortie;
    }

    public function setPostcondition($postcondition) {
        $this->postcondition = $postcondition;
    }

    function affichage()
    {
            $str= $this->getDescription();
            $str.= $this->getEntrees();
            $str.= $this->getSortie();
            $this->getPreconditions();
            $this->getPostcondition();
    }
}
