<?php
// une variable est un espace de stockage pour un résultat
$var = 'Jean';
$Var = 'Paul';
echo "$var, $Var";         // affiche "Jean, Paul"
echo ("</br>"); // Saut de ligne

//$4site = 'pas encore';     // invalide : commence par un nombre

$_4site = 'pas encore';    // valide : commence par un souligné
$täyte = 'mansikka';    // valide : 'ä' est ASCII (étendu) 228.
$_entier = 1024;
echo $_entier;
echo ("</br>"); // Saut de ligne

$_decimal = 10.24;
echo $_decimal;

?>