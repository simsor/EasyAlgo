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
        if(!empty($_POST['algo'])){
            //include '../../classes/Interpreteur.class.php';
            $interpreteur= new Interpreteur();
            $chaine = $_POST['algo'];
            $chaine.=" ";
            ?><pre><code><?php
            $chaineTmp="";
            for($i=0;$i<strlen($chaine);$i++){
            if(($chaine[$i]>='a' and $chaine[$i]<='z')or($chaine[$i]>='A' and $chaine[$i]<='Z')or($chaine[$i]>='�' and $chaine[$i]<='�') ){
                $chaineTmp.=$chaine[$i];
            }
            else{
                if($interpreteur->correspondance($chaineTmp))
                    echo "<b><u>$chaineTmp</u></b> ";
                else
                    echo $chaineTmp;
                $chaineTmp="";
                echo $chaine[$i];
                }
            }
            ?></code></pre>     <?php
        }
        if(!empty($_POST['code'])){
          ?><pre><code><?php
          $c=Coloration::colorier($_POST['code']);
          echo $c;
          ?></code></pre><?php
        }

        break;
    case "fonction" :
        $description = $_POST['definition'];
        $i = 1;
        //on récupère les entrées
        while (!empty($_POST['entree' . $i])) {
                $entrees[]=$_POST['entree'. $i];
                $i++;
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
        $retourne="";//on va chercher le retourne (unique)
        if(!empty($_POST['sortie1'])) {
            $retourne = $_POST['sortie1'];
            $i++;
        }
        if(!empty($description)){
            $fonction = new Fonction($description, $entrees, $preconditions, $retourne);
            $fonction->affichage();
        }
        if(!empty($_POST['algo'])){
            //include '../../classes/Interpreteur.class.php';
            $interpreteur= new Interpreteur();
            $chaine = $_POST['algo'];
            $chaine.=" ";
            ?><pre><code><?php
            $chaineTmp="";
            for($i=0;$i<strlen($chaine);$i++){
            if(($chaine[$i]>='a' and $chaine[$i]<='z')or($chaine[$i]>='A' and $chaine[$i]<='Z')or($chaine[$i]>='�' and $chaine[$i]<='�') ){
                $chaineTmp.=$chaine[$i];
            }
            else{
                if($interpreteur->correspondance($chaineTmp))
                    echo "<b><u>$chaineTmp</u></b> ";
                else
                    echo $chaineTmp;
                $chaineTmp="";
                echo $chaine[$i];
                }
            }
            ?></code></pre>     <?php
        }
        if(!empty($_POST['code'])){
          ?><pre><code><?php
          $c=Coloration::colorier($_POST['code']);
          echo $c;
          ?></code></pre><?php
        }
        break;
    case "dejacode" :
        if (!empty($_POST['cartouche']))
            $cartouche = $_POST['cartouche'];

            echo $cartouche;
            if(!empty($_POST['algo'])){
            //include '../../classes/Interpreteur.class.php';
            $interpreteur= new Interpreteur();
            $chaine = $_POST['algo'];
            $chaine.=" ";
            ?><pre><code><?php
            $chaineTmp="";
            for($i=0;$i<strlen($chaine);$i++){
            if(($chaine[$i]>='a' and $chaine[$i]<='z')or($chaine[$i]>='A' and $chaine[$i]<='Z')or($chaine[$i]>='�' and $chaine[$i]<='�') ){
                $chaineTmp.=$chaine[$i];
            }
            else{
                if($interpreteur->correspondance($chaineTmp))
                    echo "<b><u>$chaineTmp</u></b> ";
                else
                    echo $chaineTmp;
                $chaineTmp="";
                echo $chaine[$i];
                }
            }
            ?></code></pre>     <?php
        }
        if(!empty($_POST['code'])){
          ?><pre><code><?php
          $c=Coloration::colorier($_POST['code']);
          echo $c;
          ?></code></pre><?php
        }
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