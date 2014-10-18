<?php

function __autoload($class){
    $rep="classes/";
    return $rep.$class.".class.php";
}
?>