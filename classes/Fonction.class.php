<?php
class Fonction extends Formulaire {
    private $retourne;
    
    function __construct($desc, $entrees, $preconditions,$retourne) {
        parent::__construct($desc, $entrees, $preconditions);
        $this->affecteFunction($retourne);     
    }

    function affecteFunction($retourne)
    {
        $this->setRetourne($retourne);
    }
    
    public function getRetourne() {
        return $this->retourne;
    }

    public function setRetourne($retourne) {
        $this->retourne = $retourne;
    }
    


}
