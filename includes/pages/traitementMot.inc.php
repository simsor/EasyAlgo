<?php
w
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
    ?><pre><code><?php
    $chaineTmp="";
    for($i=0;$i<strlen($chaine);$i++)
    {
        if(($chaine[$i]>='a' and $chaine[$i]<='z')or($chaine[$i]>='A' and $chaine[$i]<='Z')or($chaine[$i]>='à' and $chaine[$i]<='ü') )
        {
            $chaineTmp.=$chaine[$i];
        }
        else
        {
            if($interpreteur->correspondance($chaineTmp))
                echo "<b><u>$chaineTmp</u></b> ";
            else
                echo $chaineTmp;
            $chaineTmp="";
            echo $chaine[$i];
        }
    }
    ?></code></pre>     <?php
    /*foreach($chaine as $value)
    {
        if($interpreteur->correspondance($value))
            echo "<b><u>$value</u></b> ";
        else
            echo $value;
    }*/
}
?>
<form action="#" method="POST">
    <textarea cols="20" rows="20" name="chaine">
        
    </textarea>
    <input type="submit" name="valider" value="Valider">
</form>
