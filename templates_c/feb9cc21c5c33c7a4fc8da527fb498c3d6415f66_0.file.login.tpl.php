<?php
/* Smarty version 4.1.0, created on 2022-03-14 19:47:28
  from 'C:\xampp\htdocs\web2\Templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f8dc0347344_92004365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb9cc21c5c33c7a4fc8da527fb498c3d6415f66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\login.tpl',
      1 => 1647283642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622f8dc0347344_92004365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="/web2">Carrito</a>
<a href="register">Registrarse</a>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<form action="verify" method="post">
    <input placeholder="email" type="text" name="email" id="email" required>
    <input placeholder="password" type="password" name="password" id="password" required>
    <input type="submit" id="submit" value="Login" name="submit">			
</form>

<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
