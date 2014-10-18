<?php
class Interpreteur {
    
   private $tableauAlgo = array(  	
   	"Début",
    "Fin",
    "Avec",
    "Procédure",
    "Fonction",
    "Entier",
    "Réel",
    "Pointeur",
    "Faire",
    "Pour",
    "TantQue",
    "Tant Que",
    "De",
    "A",
    "Retourne",
    "Si",
    "Alors",
    "Sinon",
    "FinSi",
    "Fin Si",
    "Nouveau",
    "Programme",
    "Caractère",
    "FinFaire",
    "Fin Faire",
    "Selon",
    "Cas",
    "Défaut",
    "Adresse",
    "Detruire",
    "Contenu",
    "Module",
    "Afficher",
    "Saisir",
    "Ou",
    "Et",
    "Chaîne",
    "Booléen",
    "Utilise",
    "à"
);
    function __construct() {
        
    }
    function compare($mot1, $mot2)
    {
        if(strcmp(strtolower($mot1), strtolower(utf8_decode($mot2))) == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function correspondance($mot)
    {
        $retrouve = false;
        foreach ($this->tableauAlgo as $value)
        {
             $retrouve =$this->compare($mot, $value);
             if($retrouve==true)
                 break;
        }
        return $retrouve;
    }
    
}
