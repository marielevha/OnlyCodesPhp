<?php
//Une constante est un objet dont l'état reste inchangé durant toute l'exécution d'un programme.
//On ne peut jamais modifier sa valeur et celle-ci doit donc être précisée lors de la définition de l'objet.

// Déclaration d'une constante : Méthode 1
define("CONSTANT_1", "Bonjour le monde.");
echo CONSTANT_1; // affiche "Bonjour le monde."
echo ("</br>"); // Saut de ligne

// Déclaration d'une constante : Méthode 2
const CONSTANT_2 = 'Bonjour le monde !';
echo CONSTANT_2;  // affiche "Bonjour le monde."
echo ("</br>"); // Saut de ligne

// Expression scalaire
const ANOTHER_CONST = CONSTANT.'; Aurevoir le monde !';
echo ANOTHER_CONST;  // affiche "Bonjour le monde. Aurevoir le monde !"
echo ("</br>"); // Saut de ligne

// Tableaux constant : Méthode 1
define('ANIMALS_1', array('Chien', 'Chat', 'Oiseaux'));
echo ANIMALS_1[0]; // affiche "Chien"
echo ("</br>"); // Saut de ligne

// Tableaux constant : Méthode 2
const ANIMALS_2 = array('Chien', 'Chat', 'Oiseaux');
echo ANIMALS_2[1]; // affiche "Chat"