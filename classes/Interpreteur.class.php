<?php
class Interpreteur {
    
   private $tableauAlgo = array("Début",
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
    "De",
    "A",
    "Retourne",
    "Si",
    "Alors",
    "Sinon",
    "FinSi",
    "Nouveau",
    "Programme",
    "Caractere",
    "Chaine",
    "FinFaire",
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
    "Tant Que",
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
