<?php
require("tpl/Smarty.class.php"); // On inclut la classe Smarty
include "database.class.php";


$smarty = new Smarty(); //initialisation de Smarty


$product = "SELECT * FROM produits WHERE categorieId = ?";
$sql = $connexion->prepare($product);
$sql->execute([$_GET['id']]);
$products = $sql->fetchAll();
//var_dump($products);
$smarty->assign("produits", $products);
$smarty->display("categories.html.tpl");