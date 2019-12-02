<?php
require("tpl/Smarty.class.php"); // On inclut la classe Smarty
include 'database.class.php';

$smarty = new Smarty(); //initialisation de Smarty


$smarty->assign("user", $users);
$smarty->display("monCompte.tpl");
