<?php
/* Smarty version 3.1.33, created on 2019-09-09 14:31:40
  from 'C:\laragon\www\Smarty\database.class.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d76624cbb4422_68591519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88782831566de1c8f5635a8436d1fc694bf34a46' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\database.class.php',
      1 => 1568038821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d76624cbb4422_68591519 (Smarty_Internal_Template $_smarty_tpl) {
?>//
<!-- 


// public static function createCommande($user){

//     $sql = "INSERT INTO `commande`(`userId`, ")
//     VALUES (:userid, :userName, :userLogin)";
// }


// if (extension_loaded('PDO')) {
//    echo 'PDO OK';
// } else {
//    echo 'PDO KO';
// } -->



<?php echo '<?php

';?>// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur 
$login = 'root'; // Login 
$pass = ' '; // Mot de passe 
$base = 'elegance'; // Base de données à utiliser 

// On se connecte à la base de données 
// mysql_connect($hote, $login, $pass);

// // On selectionne la base de données souhaitée 
// mysql_select_db($base);


$connexion = new pdo("mysql:host=" . $hote . ";dbname=" . $base . ";charset=UTF8", $login, $pass);

$sqlUser = "SELECT * FROM user";
$sqlProduits = "SELECT * FROM produits";
var_dump($sqlProduits);
$sql = $connexion->prepare($sqlUser);
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $connexion->prepare($sqlProduits);
$sql2->execute();

$products = $sql2->fetchAll(PDO::FETCH_ASSOC);
var_dump($products);
<?php }
}
