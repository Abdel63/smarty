<?php

// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur
$login = 'root'; // Login 
$pass = ''; // Mot de passe 
$base = 'elegance'; // Base de données à utiliser 

// On se connecte à la base de données 
// mysql_connect($hote, $login, $pass);

// // On selectionne la base de données souhaitée 
// mysql_select_db($base);


$connexion = new pdo("mysql:host=" . $hote . ";dbname=" . $base . ";charset=UTF8", $login, $pass);

$sqlUser = "SELECT * FROM user";
$sqlProduits = "SELECT * FROM produits";
$sqlCat = "SELECT * FROM categories";
//var_dump($sqlProduits);

// connexion des users

$sql = $connexion->prepare($sqlUser);
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);

// connexion des produits

$sql2 = $connexion->prepare($sqlProduits);
$sql2->execute();

$products = $sql2->fetchAll(PDO::FETCH_ASSOC);

//connexion des categories

$sql3 = $connexion->prepare($sqlCat);
$sql3->execute();

$Categories = $sql3->fetchAll(PDO::FETCH_ASSOC);
// var_dump($products);
