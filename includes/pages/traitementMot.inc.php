<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../classes/Interpreteur.class.php';
$interpreteur= new Interpreteur();
$chaine = "Procédure nomtruc Avec faire";
$chaine = explode(" ", $chaine);
foreach($chaine as $value)
{
    if($interpreteur->correspondance($value))
        echo "<b><u>$value</u></b>";
    echo "<br>"; 
}
