<?php


if(!empty($_POST['type']))
{
    $type=$_POST['type'];
}

switch($type)
{
    case "procedure" :
		$description=$_POST['definition'];
		$i=1;
		//on récupère les entrées
		if(!empty($_POST['Entree'.$i]))
		{
   			while(!empty($_POST['Entree'.$i]))
    		{
           		$entrees[]=$_POST['Entree'.$i];
				$i++;
     		}
		}
		$i=1;
		//on récupère les prè-conditions
		if(!empty($_POST['precondition'.$i]))
		{
   			while(!empty($_POST['precondition'.$i]))
   			{
          		$preconditions[]=$_POST['precondition'.$i];
				$i++;
    		}
		}
		
		$i=1;
    	//on récupère les sorties
    	while(!empty($_POST['Sortie'.$i]))
    	{
        	$sortie[] = $_POST['Sortie'.$i];
			$i++;
    	}
		
    	$i=1;
    	//on recupère les post-conditions
    	while(!empty($_POST['postcondition'.$i]))
    	{
        	$postcondition[]=$_POST['postcondition'.$i];
			$i++;
    	}
		$procedure = new Procedure($description, $entrees, $preconditions, $sortie, $postcondition);
		
        break;
    case "fonction" :
		$description=$_POST['definition'];
		$i=1;
		//on récupère les entrées
		if(!empty($_POST['Entree'.$i]))
		{
    		while(!empty($_POST['Entree'.$i]))
    		{
           		$entrees[]=$_POST['Entree'.$i];
				$i++;
     		}
		}
		$i=1;
		//on récupère les prè-conditions
		if(!empty($_POST['precondition'.$i]))
		{
  			while(!empty($_POST['precondition'.$i]))
   			{
          		$preconditions[]=$_POST['precondition'.$i];
				$i++;
    		}
		}
		
		$i=1;
    	//on va chercher le retourne (unique)
    	while(!empty($_POST['Sortie1']))
    	{
        	$retourne =$_POST['Sortie1'];
			$i++;
    	}
		$fonction = new Fonction($description, $entrees, $preconditions, $retourne);
        
        break;
    case "dejacode" :
	    if(!empty($_POST['cartouche']))
    		$cartouche = $_POST['cartouche'];
		
		echo $cartouche;
        break;
    default :
        echo "Erreur type formulaire ! \n";
        break;
}

if(!empty($_POST['cartouche']))
    $cartouche = $_POST['cartouche'];
if(!empty($_POST['algo']))
    $algo= $_POST['algo'];

if(!empty($_POST['code']))
    $code= $_POST['code'];

if(!empty($_POST['language']))
    $langage= $_POST['language'];

if(!empty($_POST['numerotation']))
    $numerotation= $_POST['numerotation'];


?>