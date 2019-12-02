<?php
require "include/appTop.inc.php";

$search = $_POST['recherche'];
if (empty($search)) {
    header("location: index.php");
    exit;
}

$productsCat = manager::recherche($search);
$smarty->assign();
