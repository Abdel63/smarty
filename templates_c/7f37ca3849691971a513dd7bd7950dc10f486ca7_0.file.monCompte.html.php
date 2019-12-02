<?php
/* Smarty version 3.1.33, created on 2019-09-18 09:08:35
  from 'C:\laragon\www\Smarty\monCompte.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d81f41385a104_42923260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f37ca3849691971a513dd7bd7950dc10f486ca7' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\monCompte.html',
      1 => 1568797711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d81f41385a104_42923260 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="wrapper">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please login</h2>
        <input
          type="text"
          class="form-control"
          name="username"
          placeholder="Email Address"
          required=""
          autofocus=""
        />
        <input
          type="password"
          class="form-control"
          name="password"
          placeholder="Password"
          required=""
        />
        <label class="checkbox">
          <input
            type="checkbox"
            value="remember-me"
            id="rememberMe"
            name="rememberMe"
          />
          Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Login
        </button>
      </form>
    </div>
  </body>
</html>
<?php }
}
