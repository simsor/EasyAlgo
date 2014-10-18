<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['valider']))
{
    include '../../classes/Interpreteur.class.php';
    $interpreteur= new Interpreteur();
    $chaine = $_POST['chaine'];
    $chaine = explode(" ", $chaine);
    foreach($chaine as $value)
    {
        if($interpreteur->correspondance($value))
            echo "<b><u>$value</u></b> ";
        else
            echo $value; 
    }
}
?>
<form action="#" method="POST">
    <textarea cols="20" rows="20" name="chaine">
        
    </textarea>
    <input type="submit" name="valider" value="Valider">
</form>
