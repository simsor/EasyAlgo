<?php

class Procedure extends Formulaire {
    private $sortie;
    private $postcondition=array();
    
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
        print_r($this->getPreconditions());
        $str= $this->getDescription()."<br>";
        $str.="Entrée(s):  ";
        foreach($this->getEntrees() as $entree)
        {
            $str.=$entree."<br>";
        }
        $str.="Sortie(s): ";
        foreach($this->getSortie() as $sortie)
        {
            $str.=$sortie."<br>";
        }
        $str.="Prè-condition(s): ";
        foreach($this->getPreconditions() as $condition)
        {
            $str.=$condition."<br>";
        }
        $str.="Post-condition(s): ";
        foreach($this->getPostcondition() as $condition)
        {
            $str.=$condition."<br>";
        }
        echo $str;
        
    }
}
