<?php

//Récupération des paramètres du formulaire
$nspot = $_POST['nspot'];
//Affichage des paramètres
echo "Bonjour vous chercher $nspot !";
// Stock la page du site dans une variable
$page1 = file_get_contents("spot.php");
// Cherche une chaine de caractere precis
$res = strstr($page1, $nspot);



// affiche la variable $res
echo $res;

 ?>
