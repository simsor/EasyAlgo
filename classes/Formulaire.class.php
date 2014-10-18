<?php
class Formulaire {
    private $description;
    private $entrees;
    private $preconditions;
    
    function __construct($desc,$entrees,$preconditions) {
        $this->affecteFormulaire($desc,$entrees,$preconditions);
    }
    function affecteFormulaire($desc="",$entrees=array(),$preconditions=array())
    {
        $this->setDescription($desc);
        $this->setEntrees($entrees);
        $this->setPreconditions($preconditions);
    }
    //getters
    public function getDescription() {
        return $this->description;
    }

    public function getEntrees() {
        return $this->entrees;
    }

    public function getPreconditions() {
        return $this->preconditions;
    }

    //setters
    public function setDescription($description) {
        $this->description = $description;
    }

    public function setEntrees($entrees) {
        $this->entrees = $entrees;
    }

    public function setPreconditions($preconditions) {
        $this->preconditions = $preconditions;
    }
    
    
}
