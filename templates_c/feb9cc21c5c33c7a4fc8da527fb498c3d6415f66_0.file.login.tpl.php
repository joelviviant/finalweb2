<?php
/* Smarty version 4.1.0, created on 2022-03-16 23:00:19
  from 'C:\xampp\htdocs\web2\Templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62325df331d895_63689478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb9cc21c5c33c7a4fc8da527fb498c3d6415f66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\login.tpl',
      1 => 1647468017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62325df331d895_63689478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="/web2">Carrito</a>
<a href="register">Registrarse</a>
<div class="titulo">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<form class="w-25 m-auto d-flex flex-column" action="verify" method="post">
    <input class="form-control mb-2" placeholder="email" type="text" name="email" id="email" required>
    <input class="form-control mb-2" placeholder="password" type="password" name="password" id="password" required>
    <input class="btn btn-primary mb-2" type="submit" id="submit" value="Login" name="submit">			
</form>

<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
