<?php

$entrees = array();
$preconditions = array();
$sortie = array();
$postcondition = array();

if (!empty($_POST['type'])) {
    $type = $_POST['type'];
}

switch ($type) {
    case "procedure" :
        $description = $_POST['definition'];
        $i = 1;
        //on récupère les entrées
        if (!empty($_POST['entree' . $i])) {
            while (!empty($_POST['entree' . $i])) {
                $entrees[] = $_POST['entree' . $i];
                $i++;
            }
        }
        $i = 1;
        //on récupère les prè-conditions
        if (!empty($_POST['precondition'.$i])) {
            while (!empty($_POST['precondition'.$i])) {
                $preconditions[] = $_POST['precondition'.$i];
                $i++;
            }
        }

        $i = 1;
        //on récupère les sorties
        while (!empty($_POST['sortie' . $i])) {
            $sortie[] = $_POST['sortie' . $i];
            $i++;
        }

        $i = 1;
        //on recupère les post-conditions
        while (!empty($_POST['postcondition' . $i])) {
            $postcondition[] = $_POST['postcondition' . $i];
            $i++;
        }
        $procedure = new Procedure($description, $entrees, $preconditions, $sortie, $postcondition);
        $procedure->affichage();

        break;
    case "fonction" :
        $description = $_POST['definition'];
        $i = 1;
        //on récupère les entrées
        if (!empty($_POST['Entree' . $i])) {
            while (!empty($_POST['Entree' . $i])) {
                $entrees[] = $_POST['Entree' . $i];
                $i++;
            }
        }
        $i = 1;
        //on récupère les prè-conditions
        if (!empty($_POST['precondition' . $i])) {
            while (!empty($_POST['precondition' . $i])) {
                $preconditions[] = $_POST['precondition' . $i];
                $i++;
            }
        }

        $i = 1;
        //on va chercher le retourne (unique)
        while (!empty($_POST['sortie1'])) {
            $retourne = $_POST['sortie1'];
            $i++;
        }
        $fonction = new Fonction($description, $entrees, $preconditions, $retourne);
        $fonction->affichage();

        break;
    case "dejacode" :
        if (!empty($_POST['cartouche']))
            $cartouche = $_POST['cartouche'];

        echo $cartouche;
        break;
    default :
        echo "Erreur type formulaire ! \n";
        break;
}

if (!empty($_POST['cartouche']))
    $cartouche = $_POST['cartouche'];
if (!empty($_POST['algo']))
    $algo = $_POST['algo'];

if (!empty($_POST['code']))
    $code = $_POST['code'];

if (!empty($_POST['language']))
    $langage = $_POST['language'];

if (!empty($_POST['numerotation']))
    $numerotation = $_POST['numerotation'];
?>