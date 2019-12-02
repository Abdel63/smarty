<?php
$utilisateur = new user($_POST['email'], $_POST['pass']);

if ($utilisateur->verifAutorisation()) {
    $_SESSION["login"] = $utilisateur->login;
    $_SESSION["id"] = $utilisateur->id;
    $_SESSION["mdp"] = $utilisateur->mdp;
    $_SESSION["name"] = $utilisateur->name;
}
if (empty($_POST['']))
    header("Location");
