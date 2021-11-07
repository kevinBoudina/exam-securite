<?php

//Connexion à la base de donnée PhpMyAdmin

$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "mini-projet";
$conn = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$conn) {
    echo "Connexion non établie.";
    exit;
}

?>
