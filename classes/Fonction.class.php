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
    function affichage()
    {
            $str= "///////////////////////////////////////////////////////////////////////////////////////<br/>";
            $str.= "//".$this->getDescription();
            $array=$this->getEntrees();
            $str.="<br/>//Entrees :  ";
            foreach($array as $entree) { 
                $str.="<br/>//&nbsp&nbsp&nbsp&nbsp-".$entree;
            }
            $str.="//Retourne : ".$this->getRetourne();
            $array= $this->getPreconditions();
            $str.="<br/>//Preconditions :  ";
            foreach($array as $precond) { 
                 $str.="<br/>//&nbsp&nbsp&nbsp&nbsp-".$precond;
            }
            $str.="<br/>///////////////////////////////////////////////////////////////////////////////////////<br/>";
            echo $str;
    }


}
