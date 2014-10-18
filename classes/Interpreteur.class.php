<?php
class Interpreteur {
    
   private $tableauAlgo = array(  	
   	// A
   	"A",
   	"à",
   	"Adresse",
   	"Afficher",
   	"Alors",
   	"Avec",
   	
	//B
	"Booleen",
	"Booléen",
	
	//C
	"Caractere",
	"Caractère",
	"Cas",
	"Chaine",
	"Chaîne",
	"Contenu",
   	
   	//D
   	"De",
   	"Debut",
   	"Début",
   	"Defaut",
   	"Défaut",
   	"Detruire",
    "Détruire",
    
	//E
	"Entier",
	"Et",
	
	//F
	"Faire",
    "Fin",
    "FinFaire",
    "Fin Faire",
    "FinSi",
    "Fin Si",
   	"Fonction",
   	
	//M
   	"Module",
   	
	//N
	"Nouveau",
	
	//O
	"Ou",
	
	//P
	"Pointeur",
	"Pour",  
    "Procedure",
    "Procédure",
    "Programme",
    
	//R
	"Reel",
    "Réel",
	"Retourne",
	
	//S
	"Saisir",
	"Selon",
    "Si", 
    "Sinon",
    
    
     //T
    "TantQue",
    "Tant Que",
    
    //U
    "Utilise",
    
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
