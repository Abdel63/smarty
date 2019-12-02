<?php
/* Smarty version 3.1.33, created on 2019-07-17 13:01:18
  from 'C:\laragon\www\Smarty\page1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2f1c1e63fbc7_00159783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d29130d56d7711282cb8d3e8306739ea109b3f2' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\page1.html',
      1 => 1563367964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2f1c1e63fbc7_00159783 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SMARTY</title>
  </head>
  <body>
    <h1>Hello world!</h1>
    <h2>Hello wy</h2>

    <?php if (isset($_smarty_tpl->tpl_vars['DATA']->value)) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</div>
    <?php } else { ?>
    <div>toto</div>

    <?php }?>
  </body>
</html>
<?php }
}
