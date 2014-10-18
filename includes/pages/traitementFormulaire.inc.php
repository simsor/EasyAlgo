<?php


if(!empty($_POST['type']))
{
    $type=$_POST['type'];
}
switch($type)
{
    case "procedure" :
        
        
        break;
    case "fonction" :
        
        
        break;
    case "dejacode" :
        
        
        break;
    default :
        
        break;
}

function affecteRenseignBase()
{
    $decription=$_POST['definition'];
    //on récupère les entrées
    if(!empty($_POST['Entree'.$i]))
    {
        while(!empty($_POST['Entree'.$i]))
        {
            $entrees[]=$_POST['Entree'.$i];
        }
    }
    //on récupère les prè-conditions
    if(!empty($_POST['precondition'.$i]))
    {
        while(!empty($_POST['precondition'.$i]))
        {
            $preconditions[]=$_POST['precondition'.$i];
        }
    }    
}

function affecteProcedure()
{
    $i=1;
    //on récupère les sorties
    while(!empty($_POST['Sortie'.$i]))
    {
        $sortie[] = $_POST['Sortie'.$i];
    }
    $i=1;
    //on recupère les post-conditions
    while(!empty($_POST['postcondition'.$i]))
    {
        $postcondition[]=$_POST['postcondition'.$i];
    }
}
function affecteFunction()
{
    $i=1;
    //on va chercher le retourne (unique)
    while(!empty($_POST['Sortie1']))
    {
        $retourne =$_POST['Sortie1'];
    }
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